<?php

class Language_model extends CI_Model{
	
	function loadLanguage(){
		/*
		 * Calls the getLanguage function, gets a language, finds what directory
		 * that file is located in and loads the language
		 * @TODO: Cache the result so we don't have to look everything up all the time
		 */
		
		$lang = $this->getLanguage();
		
		if($lang == "se"){
			$dir = "swedish";
		}elseif($lang == "en"){
			$dir = "english";
		}
		
		$this->lang->load($lang, $dir);
	}
	
	function getLanguage(){
		/*
		 * Checks if the user has given a 
		 * language in the URL, if not, locate what country the user is in
		 * and see if that language exists
		 */
		$lang = $this->uri->segment(1);
		
		if($this->uri->segment(1) === "se"){
			$lang = "se";
		}elseif($this->uri->segment(1) === "en"){
			$lang = "en";
		}else{
			$lang = $this->getUserCountry();
			
			$allLangs = $this->getLanguageList();
			
			$languageAvalible = false;
			
			foreach($allLangs as $language){
				if($language == $lang){
					$languageAvalible = true;
					$lang = $language;
				}else{
				}
			}
			
			if(!$languageAvalible){
				$lang = "en";
			}
		}
		
		return $lang;
	}
	
	function getUserCountry(){
		//Find what IP the user has
		$userIP = $_SERVER['REMOTE_ADDR'];
	
		//Connect to the api to find what country that IP is located in
		$response = file('http://api.hostip.info/get_html.php?ip=' . $userIP . '&position=true');
	
		//Do a lot of cleaning to only get the initials of the country, eg "en" or "se"
	
		$array = explode(" ",$response[0]);
		$initials = strtolower($array[2]);
		
		$find = array("(", ")", " ");
		$replace   = array("", "", "");
		$initials = str_replace($find, $replace, $initials);
		
		//Ensure that we ONLY get the two first chars
		$initials = substr($initials, 0, 2);
		
		return $initials;
	}
	
	function getLanguageList(){
		$languages = array('se', 'en');
		return $languages;
	}
	
}
?>