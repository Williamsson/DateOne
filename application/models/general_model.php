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
	
	/*
	 * Recieves a postal number, eg 12345 and adds the user's country to it as a url friendly variable, so it could be 12345+sweden
	 * And then makes use of Google's API to find the longitude and latitude of that postal number's region
	 */
	
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
	
	/*
	 * Simply changes the current view, also takes Title as a parameter, which should be DateOne since it does not
	 * translate it to the correct language.
	 */
	
	function changeView($title, $view){
		$this->language_model->loadLanguage();
		$data = $this->general_model->getDataContent($title, $view);
		$this->load->view('/includes/template/template', $data);
	}
	
	
	
}