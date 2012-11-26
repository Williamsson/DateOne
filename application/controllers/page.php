<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function index(){
		
		if(!$this->uri->segment(1)){
			$this->redirect_model->redirect('nolanguage');
		}else{
			
			if(!$this->user_model->isLoggedIn()){
				$this->general_model->changeView('DateOne', 'page/index_view');
			}else{
				$this->general_model->changeView('DateOne', 'page/loggedin_view');
			}
			
		}
		
		
	}
	
	public function getstarted(){
		$this->general_model->changeView('DateOne', 'page/staticMenu/get_started_view');
	}
	
	public function upgrade(){
		$this->general_model->changeView('DateOne', 'page/staticMenu/upgrade_view');
	}
	
	public function about(){
		$this->general_model->changeView('DateOne', 'page/staticMenu/about_view');
	}
	
	public function contact(){
		$this->general_model->changeView('DateOne', 'page/staticMenu/contact_view');
	}
	
	public function loggedin(){
		
		if($this->user_model->isLoggedIn()){
			$this->general_model->changeView('DateOne', 'page/loggedin');
		}else{
// 			$this->redirect_model->redirect('gotohomepage');
		}
		
	}
	
	
	
	
	
}
