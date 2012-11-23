<?php

class Safety_model extends CI_Model{



	function generateRandomString($length){
		//Empty string to start with
		$string = "";
	
		//The possible characters to use in the string
		$possible = "012346789abcdfghjkmnpqrtvwxyzABCDFGHJKLMNPQRTVWXYZ@!#-_*^?=)(//&%";
		
		$maxLength = strlen($possible);
		
		// set up a counter for how many characters are in the string so far
		$i = 0;
		
		//add random characters to $string until length is reached
		while($i <= $length){
			
			// pick a random character from the possible ones
			$stringPiece = substr($possible, mt_rand(0, $maxLength-1), 1);
	
			//Add the character to the string
			$string .= $stringPiece;
	
			//and increase the counter by one
			$i++;
		}
	
		return $string;
	}


	function getUserSalt($userId){
		$this->db->select('salt');
		$this->db->where('id', $userId);
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0){
			$userId = $query->row()->salt;
			return $userId;
		}else{
			return false;
		}
	}
	
	/*
	 * Takes the password and adds the salt, then hashes it with sha1 
	 */
	
	function protectPassword($password, $salt){
		$password = $password . $salt;
		$password = sha1($password);
		return $password;
	}
	
	function getUserPassword($userId, $userPassword){
		$this->db->select('hashed_password');
		$this->db->where('id', $userId);
		$query = $this->db->get('users');
		
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}



}









?>