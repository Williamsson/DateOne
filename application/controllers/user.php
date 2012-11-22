<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index(){
		parent::__construct();
		$data = $this->general_model->getDataContent('DateOne', 'page/index');
		$this->load->view('/includes/template/template', $data);
	}
	
	
	/*
	 * Handles the initial registration process. If we're not getting any values, redirect to startpage
	 */
	public function register(){
		if($_POST){
			
			$a = label('postal_number',$this);
			$config = array(
						array(
		                     'field'   => 'postal_number', 
		                     'label'   => $a, 
		                     'rules'   => 'required|numeric|xss_clean'
						),
						array(
		                     'field'   => 'username', 
		                     'label'   => label('username',$this),  
		                     'rules'   => 'required|xss_clean'
						),
						array(
		                     'field'   => 'email', 
		                     'label'   => label('email',$this),  
		                     'rules'   => 'required|valid_email|is_uniqe[users.email]|xss_clean'
						),
						array(
		                     'field'   => 'remail', 
		                     'label'   => label('repeat_email',$this), 
		                     'rules'   => 'required|matches[email]|xss_clean'
						),
						array(
		                     'field'   => 'password', 
		                     'label'   => label('password',$this), 
		                     'rules'   => 'required|min_length[8]|xss_clean'
						),
						array(
		                     'field'   => 'rpassword', 
		                     'label'   => label('repeat_password',$this), 
		                     'rules'   => 'required|matches[password]|xss_clean'
						)
			);
				
			$this->form_validation->set_rules($config);
			
			if($this->form_validation->run() == FALSE){
				$this->language_model->loadLanguage();
				$data = $this->general_model->getDataContent('DateOne', 'page/index');
				$this->load->view('/includes/template/template', $data);
			}else{
				
			}
			
			
			
			
			
			
			
			
		}else{
			redirect('', 'refresh');
		}
	}
	
	
}

?>