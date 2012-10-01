<?php

class Language_model extends CI_Model{
	
	function loadLanguage(){
	
		$lang = $this->getLanguage();
		
		if($lang == "se"){
			$dir = "swedish";
		}elseif($lang == "en"){
			$dir = "english";
		}
		
		$this->lang->load($lang, $dir);
	}
	
	function getLanguage(){
		
		$lang = $this->uri->segment(1);
		
		if($this->uri->segment(1) === "se"){
			$lang = "se";
		}elseif($this->uri->segment(1) === "en"){
			$lang = "en";
		}else{
			$lang = $this->getUserCountry();
		}
		
		return $lang;
	}
	
	function getUserCountry(){
		//Find what IP the user has
		$userIP = $_SERVER['REMOTE_ADDR'];
	
		//Connect to the api to find what country that IP is located in
		$response = file('http://api.hostip.info/get_html.php?ip=' . $userIP . '&position=true');
	
		//Do a lot of cleaning to only get the initials of the country, eg "en" or "se" for english or swedish and the full name
	
		$array = explode(" ",$response[0]);
		$initials = strtolower($array[2]);
		
		$find = array("(", ")", " ");
		$replace   = array("", "", "");
		$initials = str_replace($find, $replace, $initials);
		
		$initials = substr($initials, 0, 2);
		
		return $initials;
	}
	
}
?>