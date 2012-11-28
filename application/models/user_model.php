<?php

class User_model extends CI_Model{
	
	public function register($postData){
		
		
		$username = $this->input->post('username');
		$postalNumber = $this->input->post('postal_number');
		$email = $this->input->post('email');
		$searchingFor = $this->input->post('relationshiptype');
		$yearOfBirth = $this->input->post('yearofbirth');
		$monthOfBirth = $this->input->post('monthofbirth');
		$dayOfBirth = $this->input->post('dayofbirth');
		
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
			'year_of_birth' => $yearOfBirth,
			'month_of_birth' => $monthOfBirth,
			'day_of_birth' => $dayOfBirth,
		);
		
		$query = $this->db->insert('users', $userData);
		
		$userId = $this->db->insert_id();
		
		$sumTraits = $this->getFromDB_model->countSumTraits();
	
		$query = "INSERT INTO user_traits (user_id, trait_id, value) VALUES ";
		
		for($i = 1; $i <= $sumTraits; $i++){
			$query .= "('$userId', '$i', 0),";
		}
		
		$query = substr_replace($query ,"",-1);
		
		$this->db->query($query);
		
		$this->db->query("UPDATE user_traits SET value = '$searchingFor' WHERE user_id = '$userId' AND trait_id = '$searchingForTraitID'");
		
		$this->db->query("UPDATE user_state SET last_login = now(), logged_in = '1' WHERE user_id = '$userId'");
		
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
	
	public function fetchUserData($userId){
		
		$userInfo = $this->getUserInformation($userId);
		
		$userSettings = $this->getUserSettings($userId);
	}
	
	private function getUserInformation($userId){
		$this->db->select('email, first_name, sur_name, description, year_of_birth');
		$this->db->where('id', $userId);
		$userQuery = $this->db->get('users');
		
		if($userQuery->num_rows() > 0){
			$result = array();
			foreach ($userQuery->result() as $row){
				$result['email'] = $row->email;
				$result['first_name'] = $row->first_name;
				$result['sur_name'] = $row->sur_name;
				$result['description'] = $row->description;
				$result['age'] = $row->year_of_birth;
			}
			
			return $result;
		}
	}
	
	private function getUserSettings($userId){
		$this->db->select('email_new_event, email_new_message, email_new_friend_request');
		$this->db->where('id', $userId);
		$userQuery = $this->db->get('users');
		
		if($userQuery->num_rows() > 0){
			$result = array();
			foreach ($userQuery->result() as $row){
				$result['emailOnNewEvent'] = $row->email_new_event;
				$result['emailOnNewEvent'] = $row->email_new_message;
				$result['emailOnNewFriendRequest'] = $row->email_new_friend_request;
			}
		
			return $result;
		}
	}
	
	/*
	 * Gets all the traits a user has filled out
	 */
	function getUserTraits($userId){
		
		$query = $this->db->get_where('user_traits', array('user_id' => $userId));
		
		if($query->num_rows() > 0){
			
			$result = array();
			
			foreach($query->result() as $row){
				$traitId = intval($row->trait_id);
				$traitValue = intval($row->value);
				$traitName = $this->getFromDB_model->getTraitName($traitId);
				
				if($traitName){
					$results[$traitName] = array(
						"id" => $traitId,
						"value" => $traitValue
					);
				}
				
			}
			
			return $results;
			
		}
	}
	
	function updateProfile($postData){
		
	}







}

?>