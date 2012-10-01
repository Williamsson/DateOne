<?php

class General_model extends CI_Model{
	

	//Returns an array with all the basic information that a page on the site should have in common, such as keywords
	function getDataContent($title, $mainContent){
		$data = array();
		$data['keyword'] = "";
		$data['description'] = "";
		$data['title'] = $title;
		$data['main_content'] = $mainContent;
		
		
		return $data;
	}

	function loadLanguage(){
			
		$lang = $this->uri->segment(1);
		
		if(!empty($lang)){

			switch($lang){
				case "se":
					$this->lang->load('se', 'swedish');
				break;
				
				case "en":
					$this->lang->load('en', 'english');
				break;
				
				default:
					$this->lang->load('eb', 'english');
				break;
			}
			
		}else{
			header("location:" . base_url() . "en");
		}
		
	
	}
		
		
	
	
	
	
	
	
	
	
}