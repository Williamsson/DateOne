<?php

class Redirect_model extends CI_Model{
	
	function registrationDone(){
		header("Location: " . base_url() . $this->language_model->getLanguage() . "/user/registrationdone");
	}
	
	function redirect($location){
		if($location == 'nolanguage'){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/");
		}elseif($location == 'gotohomepage'){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/");
		}elseif($location == "newlyregistered"){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/user/registerdone");
		}elseif($location == "gotocontrolpanel"){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/user/controlpanel");
		}
		else{
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/" . $location);
		}
	}
	
	
}


?>