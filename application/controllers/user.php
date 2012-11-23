<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index(){
		
		if(!$this->uri->segment(3)){
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
}

?>