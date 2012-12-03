<?php

class Language_model extends CI_Model{
	
	function loadLanguage(){
		/*
		 * Calls the getLanguage function, gets a language, finds what directory
		 * that file is located in and loads the language
		 * @TODO: Change so that it saves language in cookie instead. NOTE: Remember to inform users of the cookie usage, since the law says so. Which is silly.
		 */
		
		if($this->session->userdata('user_country_initials') && !$this->uri->segment(1)){
			$lang = $this->session->userdata('user_country_initials');
		}else{
			$lang = $this->getLanguage();
		}
		
		
		/*
		 * @TODO:
		 * Skiten kommer inte fungera om en användare skriver in postnummer men inte skriver in rätt land
		 * Dessutom kan det vara så att användaren är i ett annat land än var den bor när den registrerar,
		 * så att skriva in postnummer och hämta land på IP kommer inte fungera.
		 * Måste lägga till en lista med länder i registreringsprocessen helt enkelt. Fult, men nödvändigt.
		 */
		
		if($lang == "se"){
			$dir = "swedish";
			$this->session->userdata('user_country',"sweden");
		}elseif($lang == "en"){
			$dir = "english";
			$this->session->userdata('user_country',"england");
		}else{
			$dir = "english";
			$lang = "en";
			$this->session->userdata('user_country',"england");
		}
		
		$this->lang->load($lang, $dir);
	}
	
	function getLanguage(){
		/*
		 * Checks if the user has given a 
		 * language in the URL, if not, locate what country the user is in
		 * and see if that language exists
		 */
		
		
		if($this->uri->segment(1) == "se"){
			$lang = "se";
			
			$this->session->set_userdata('user_country_initials', $lang);
			
			return $lang;
		}elseif($this->uri->segment(1) == "en"){
			$lang = "en";
			
			$this->session->set_userdata('user_country_initials', $lang);
			
			return $lang;
		}else{
			$lang = $this->getUserBrowserLanguage();
			
			$this->session->set_userdata('user_country_initials', $lang);
			
			$allLangs = $this->getLanguageList();
			
			$languageAvalible = false;
			
			foreach($allLangs as $language){

				if($language != $lang){
					$languageAvalible = false;
				}else{
					$languageAvalible = true;
					break;
				}
			}
			
			if($languageAvalible == false){
				$this->redirect_model->redirect('nolanguage');
			}else{
				return $lang;
			}
		}
		
	}
	
	function getUserBrowserLanguage(){
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 3,2);
		
		return strtolower($lang);
	}
	
	function getLanguageList(){
		/*
		 * This is an array containing all (initals) of the languages that are avalible on the site
		 */
		$languages = array('se', 'en');
		return $languages;
	}
	
}
?>