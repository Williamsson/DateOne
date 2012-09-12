<?php

class Safety_model extends CI_Model{



	function GenerateRandomString($length){
		//Empty password to start with
		$string = "";
	
		//The possible characters to use in the password
		$possible = "012346789abcdfghjkmnpqrtvwxyzABCDFGHJKLMNPQRTVWXYZ@!#¤-_*^?=)(//&%¤";
	
		$maxLength = strlen($possible);
	
		// set up a counter for how many characters are in the password so far
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







}









?>