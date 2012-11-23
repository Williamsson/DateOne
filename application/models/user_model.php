<?php

class User_model extends CI_Model{
	
	public function register($postData){
		
		
		$username = $this->input->post('username');
		$postalNumber = $this->input->post('postal_number');
		$email = $this->input->post('email');
		$searchingFor = $this->input->post('relationshiptype');
		
		$salt = $this->safety_model->generateRandomString(30);
		$password = sha1($salt.$this->input->post('password'));
		
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
			'date_joined' => now(),
			'active' => 1,
			'is_premium' => '0',
			'role' => 1,
		);
		
		$query = $this->db->insert('user_state', $stateData);
		
		$settingsData = array(
			'user_id' => $userId,
			'email_new_event' => 0,
			'email_new_message' => 0,
			'email_new_friend_request' => 0,
		);
		
		$query = $this->db->insert('user_settings', $settingsData);
		
	}
	
	
}

?>