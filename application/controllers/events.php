<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {
	
	function index(){
		$this->general_model->changeView('DateOne', 'page/events_view');
	}
	
	function create(){
		$this->general_model->changeView('DateOne', 'page/create_event_view');
	}
	
	function search(){
		
		
	}
	
	function myEvents(){
		
	}
	
	
	
}


?>