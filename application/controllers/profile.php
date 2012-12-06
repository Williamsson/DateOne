<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index(){
		
		if(!$this->user_model->isLoggedIn()){
			$this->redirect_model->redirect('gotohomepage');
		}
		
		$this->general_model->changeView('DateOne', 'page/profile_view');
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}