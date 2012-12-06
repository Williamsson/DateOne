<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {


	function updateProfile(){
		
		if(!$this->input->post()){
			$this->general_model->changeView('DateOne', 'page/controlpanel_view');
		}
		
		
		$this->language_model->loadLanguage();
			
		$config = $this->user_model->getControlpanelConfig();
			
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
			$email = $this->input->post('email');
			$username = $this->session->userdata('username');
			$query = $this->db->query("SELECT username,email FROM users WHERE email='$email'");
		
			//Check if the email already exists, and if it does, if it's already this users email
		
			if($query->num_rows() > 0){
				foreach($query->result() as $row){
					$dbUsername = $row->username;
					$dbEmail = $row->email;
				}
					
				if($email == $dbEmail){
					if($username != $dbUsername){
						$this->session->set_flashdata('email_exists', label('email_exists',$this));
						$this->redirect_model->redirect('gotocontrolpanel');
					}
				}
			}
		
		
			$this->user_model->updateProfile($this->input->post(), $username);
		
		
		}
	}
	
	function updateLookingFor(){
		$this->language_model->loadLanguage();
		
		$config = $this->user_model->getLookingForConfig();
			
		$this->form_validation->set_rules($config);
		
		if($this->form_validation->run() == FALSE){
			$data = $this->general_model->getDataContent('DateOne', 'page/controlpanel_view');
			$this->load->view('/includes/template/template', $data);

		}else{
			$this->user_model->updateLookingFor($this->input->post(), $this->session->userdata('userId'));
		}
	
	}
	
	
	
	
}