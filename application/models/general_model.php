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
	
	function redirect($location){
		if($location == 'nolanguage'){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/");
		}elseif($location == 'gotohomepage'){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/");
		}elseif($location == "newlyregistered"){
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/user/registerdone");
		}
		else{
			header("Location: " . base_url() . $this->language_model->getLanguage() . "/" . $location);
		}
	}
	
	function makePostalNumberCoords($postalNumber){
		$postalNumber = str_replace (" ", "+", urlencode($postalNumber));
		$postalNumber = json_encode($postalNumber);
		$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$postalNumber."&sensor=false";
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $details_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = json_decode(curl_exec($ch), true);
		
		// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
		if ($response['status'] != 'OK') {
			return null;
		}
		
		$geometry = $response['results'][0]['geometry'];
		
		$longitude = $geometry['location']['lat'];
		$latitude = $geometry['location']['lng'];
		
		$array = array(
		        'latitude' => $geometry['location']['lng'],
		        'longitude' => $geometry['location']['lat'],
		        'location_type' => $geometry['location_type'],
		);
		
		return $array;
		
	}
	
	function changeView($title, $view){
		$this->language_model->loadLanguage();
		$data = $this->general_model->getDataContent($title, $view);
		$this->load->view('/includes/template/template', $data);
	}
	
	
	
}