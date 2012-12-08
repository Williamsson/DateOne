<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index(){
		
		if(!$this->uri->segment(3)){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
	}
	
	/*
	 * Handles the initial registration process. If we're not getting any post data, redirect to startpage
	 */
	public function register(){
		if($_POST){
			$this->language_model->loadLanguage();
			
			$config = $this->user_model->getRegisterConfig();
				
			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', '%s ' . label('required_field',$this));
			$this->form_validation->set_message('min_length', label('min_password_length',$this));
			$this->form_validation->set_message('exact_length', '%s ' . label('postal_number_length',$this));
			$this->form_validation->set_message('valid_email', label('not_valid_email',$this));
			$this->form_validation->set_message('matches', '%s' . label('repeat_field_not_match',$this) . '%s');
			$this->form_validation->set_message('is_unique', '%s' . label('field_exists',$this));
			
			if($this->form_validation->run() == FALSE){
				$data = $this->general_model->getDataContent('DateOne', 'page/index_view');
				$this->load->view('/includes/template/template', $data);
			}else{
				$this->user_model->register($this->input->post());
			}
			
		}else{
			$this->redirect_model->redirect('gotohomepage');
		}
	}
	
	/*
	 * Takes care of the login part, if we're not getting any post data, redirect to start page
	 */
	public function login(){
		if($_POST){
			$this->language_model->loadLanguage();
			$config = array(
				array(
                     'field'   => 'loginpassword', 
                     'label'   => 'lang:password', 
                     'rules'   => 'required|min_length[8]|xss_clean'
					),
				array(
                     'field'   => 'loginusername', 
                     'label'   => 'lang:username',  
                     'rules'   => 'required|xss_clean'
					),
			);
			$this->form_validation->set_message('required', '%s ' . label('required_field',$this));
			$this->form_validation->set_message('min_length', '%s ' . label('min_password_length',$this));
			$this->form_validation->set_rules($config);
			
			if($this->form_validation->run() == FALSE){
				$data = $this->general_model->getDataContent('DateOne', 'page/index_view');
				$this->load->view('/includes/template/template', $data);
			}else{
				$this->user_model->login($_POST);
			}
			
			
		}else{
			$this->redirect_model->redirect('gotohomepage');
		}
	}
	
	public function logout(){
		$username = $this->session->userdata('username');
		$this->user_model->logout($username);
	}
	
	public function controlpanel(){
		
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		$this->general_model->changeView('DateOne', 'page/controlpanel_view');
		
	}
	
	function profile(){
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		$this->general_model->changeView('DateOne', 'page/profile_view');
	}
	
	public function messages(){
		
		$this->language_model->loadLanguage();
		
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		$this->load->library("pagination");
		$config = array();
		$config["total_rows"] = $this->mailAndMessages_model->messages_count(1);
		$config["per_page"] = 8;
		$config['base_url'] = base_url(). $this->language_model->getLanguage() . "/user/messages/";
		$config['uri_segment'] = 4;
		$choice = $config["total_rows"] / $config["per_page"];
		$config["num_links"] = round($choice);
		
		
		$this->pagination->initialize($config);
		$data = $this->general_model->getDataContent('DateOne', 'page/messages_view');
		$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		$data["results"] = $this->mailAndMessages_model->fetch_messages($config["per_page"], $page,$this->session->userdata('userId'));
		$data["links"] = $this->pagination->create_links();
				
		$this->load->view("includes/template/template", $data);
		
	}
	
	

}


?>