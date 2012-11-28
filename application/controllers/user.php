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
			$this->load->database();
			$config = array(
						array(
		                     'field'   => 'postal_number', 
		                     'label'   => 'lang:postal_number', 
		                     'rules'   => 'required|numeric|xss_clean|exact_length[5]'
						),
						array(
		                     'field'   => 'username', 
		                     'label'   => 'lang:username',  
		                     'rules'   => 'required|is_unique[users.username]|xss_clean'
						),
						array(
		                     'field'   => 'email', 
		                     'label'   => 'lang:email',  
		                     'rules'   => 'required|valid_email|is_unique[users.email]|xss_clean'
						),
						array(
		                     'field'   => 'remail', 
		                     'label'   => 'lang:repeat_email', 
		                     'rules'   => 'required|matches[email]|xss_clean'
						),
						array(
		                     'field'   => 'password', 
		                     'label'   => 'lang:password', 
		                     'rules'   => 'required|min_length[8]|xss_clean'
						),
						array(
		                     'field'   => 'rpassword', 
		                     'label'   => 'lang:repeat_password', 
		                     'rules'   => 'required|matches[password]|xss_clean'
						),
						array(
		                     'field'   => 'relationshiptype', 
		                     'label'   => 'lang:searching_for', 
		                     'rules'   => 'xss_clean'
						)
			);
				
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
	
	public function registerdone(){
		
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		$this->general_model->changeView('DateOne', 'page/registration_done_view');
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
		
		if(!$this->input->post()){
			$this->general_model->changeView('DateOne', 'page/controlpanel_view');
		}else{
			$this->language_model->loadLanguage();
			$config = array(
				array(
	                     'field'   => 'postal_number', 
	                     'label'   => 'lang:postal_number', 
	                     'rules'   => 'required|numeric|xss_clean|exact_length[5]'
				),
				array(
	                     'field'   => 'email', 
	                     'label'   => 'lang:email',  
	                     'rules'   => 'required|valid_email|is_unique[users.email]|xss_clean'
				),
				array(
	                     'field'   => 'remail', 
	                     'label'   => 'lang:repeat_email', 
	                     'rules'   => 'required|matches[email]|xss_clean'
				),
				array(
	                     'field'   => 'first_name', 
	                     'label'   => 'lang:first_name', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'sur_name', 
	                     'label'   => 'lang:sur_name', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'description', 
	                     'label'   => 'lang:description', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'ancestry', 
	                     'label'   => 'lang:ancestry', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'appearance', 
	                     'label'   => 'lang:appearance', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'bodytype', 
	                     'label'   => 'lang:bodytype', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'civil_status', 
	                     'label'   => 'lang:civil_status', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'clothing', 
	                     'label'   => 'lang:clothing', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'drinking_habits', 
	                     'label'   => 'lang:drinking_habits', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'education', 
	                     'label'   => 'lang:education', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'eye_color', 
	                     'label'   => 'lang:eye_color', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'hobby', 
	                     'label'   => 'lang:hobby', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'housing_type', 
	                     'label'   => 'lang:housing_type', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'length', 
	                     'label'   => 'lang:length', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'num_childs', 
	                     'label'   => 'lang:num_childs', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'occupation', 
	                     'label'   => 'lang:occupation', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'personality_type', 
	                     'label'   => 'lang:personality_type', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'pets', 
	                     'label'   => 'lang:pets', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'religion', 
	                     'label'   => 'lang:religion', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'romance', 
	                     'label'   => 'lang:romance', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'searching_for', 
	                     'label'   => 'lang:searching_for', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'spoken_languages', 
	                     'label'   => 'lang:spoken_languages', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'tobacco_habits', 
	                     'label'   => 'lang:tobacco_habits', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'wanted_num_childs', 
	                     'label'   => 'lang:wanted_num_childs', 
	                     'rules'   => 'xss_clean'
				),
				array(
	                     'field'   => 'weight', 
	                     'label'   => 'lang:weight', 
	                     'rules'   => 'xss_clean'
				),
			);
			
			$this->form_validation->set_rules($config);
			$this->form_validation->set_message('required', '%s ' . label('required_field',$this));
			$this->form_validation->set_message('exact_length', '%s ' . label('postal_number_length',$this));
			$this->form_validation->set_message('valid_email', label('not_valid_email',$this));
			$this->form_validation->set_message('matches', '%s' . label('repeat_field_not_match',$this) . '%s');
			$this->form_validation->set_message('is_unique', '%s' . label('field_exists',$this));
				
			if($this->form_validation->run() == FALSE){
				$data = $this->general_model->getDataContent('DateOne', 'page/controlpanel_view');
				$this->load->view('/includes/template/template', $data);
			}else{
				$this->user_model->updateProfile($this->input->post());
			}
		}
		
	}
	
	
	
	
	
	

}


?>