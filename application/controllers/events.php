<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {
	
	function index(){
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		$this->general_model->changeView('DateOne', 'page/events_view');
	}
	
	function event(){
		
	}
	
	function create(){
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		$this->general_model->changeView('DateOne', 'page/create_event_view');
	}
	
	function search(){
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
	}
	
	function myEvents(){
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		$this->language_model->loadLanguage();
		$userId = $this->session->userdata('userId');
		
		$this->load->library("pagination");
		$config = array();
		$config["total_rows"] = $this->event_model->getUserSumEvents($userId);
		$config["per_page"] = 8;
		$config['base_url'] = base_url(). $this->language_model->getLanguage() . "/events/myEvents/";
		$config['uri_segment'] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = round($choice);
		
		$this->pagination->initialize($config);
		$data = $this->general_model->getDataContent('DateOne', 'page/my_events_view');
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data["results"] = $this->event_model->fetchEvents($config["per_page"], $page,$userId);
		$data["links"] = $this->pagination->create_links();
				
		$this->load->view("includes/template/template", $data);
	}
	
	
	
}


?>