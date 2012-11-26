<?php

class User_model extends CI_Model{
	
	public function register($postData){
		
		
		$username = $this->input->post('username');
		$postalNumber = $this->input->post('postal_number');
		$email = $this->input->post('email');
		$searchingFor = $this->input->post('relationshiptype');
		
		$salt = $this->safety_model->generateRandomString(30);
		$password = $this->safety_model->protectPassword($this->input->post('password'),$salt);
		
		$country = $this->session->userdata('user_country');
		$searchingForTraitID = $this->getFromDB_model->getTraitID('searching_for');
		
		$coords = $this->general_model->makePostalNumberCoords($postalNumber . " " . $country);
		$longitude = $coords['longitude'];
		$latitude = $coords['latitude'];
		
		$userData = array(
			'username' => $username,
			'longitude' => $longitude,
			'latitude' => $latitude,
			'hashed_password' => $password,
			'email' => $email,
			'salt' => $salt,
			'country' => $country,
		);
		
		$query = $this->db->insert('users', $userData);
		
		$userId = $this->db->insert_id();
		
		$traitData = array(
			'user_id' => $userId,
			'trait_id' => $searchingForTraitID,
			'value' => $searchingFor,
		);
		
		$query = $this->db->insert('user_traits', $traitData);
		
		$stateData = array(
			'user_id' => $userId,
			'date_joined' => "now()",
			'active' => 1,
			'is_premium' => '0',
			'role' => 1,
		);
		
		
		$query = $this->db->query("INSERT INTO user_state (user_id, date_joined, active, is_premium, role)
								VALUES ('$userId', now(), '1', '0', '1')");
		
		$settingsData = array(
			'user_id' => $userId,
			'email_new_event' => 0,
			'email_new_message' => 0,
			'email_new_friend_request' => 0,
		);
		
		$query = $this->db->insert('user_settings', $settingsData);
		
		$this->setLoginData($username, $userId);
		
		$this->redirect_model->redirect('newlyregistered');
		
	}
	
	
	/*
	 * Handles the login calls
	 */
	public function login($postData){
		$username = $_POST['loginusername'];
		$password = $_POST['loginpassword'];
		$userId = $this->getUserId($username);
		
		/*
		 * Check if the username exists
		 */
		if($userId){
			
			$salt = $this->safety_model->getUserSalt($userId);
			$password = $this->safety_model->protectPassword($password, $salt);
			
			$passwordCorrect = $this->safety_model->getUserPassword($userId, $password);
			
			if($passwordCorrect){
				
				$this->setLoginData($username, $userId);
				
				$this->redirect_model->redirect("gotohomepage");
				
				
			}else{
				
			}
		}else{
			$this->redirect_model->redirect("gotohomepage");
		}
	}
	
	public function logout($username){
		$userId = $this->user_model->getUserId($username);
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('userId');
		
		$query = $this->db->query("UPDATE user_state SET last_login = now(), logged_in = '0' WHERE user_id = '$userId'");
		$this->redirect_model->redirect('gotohomepage');
	}
	
	function setLoginData($username, $userId){
		$this->session->set_userdata('logged_in', true);
		$this->session->set_userdata('username', $username);
		$this->session->set_userdata('userId', $userId);
		
		$query = $this->db->query("UPDATE user_state SET last_login = now(), logged_in = '1' WHERE user_id = '$userId'");
	}
	
	public function getUserId($username){
		
		$this->db->select('id');
		$this->db->where('username', $username);
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0){
			$userId = $query->row()->id;
			return $userId;
		}else{
			return false;
		}
		
	}

	public function isLoggedIn(){
		$userId = $this->session->userdata('userId');
		
		if($userId){
			$this->db->select('logged_in');
			$this->db->where('user_id', $userId);
			$query = $this->db->get('user_state');
			
			if($query->num_rows() > 0){
			    $row = $query->row(); 
			    
			    if($row->logged_in == 1){
					return true;
			    }else{
			    	return false;
			    }
			    
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	















}

?>