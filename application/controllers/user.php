<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function index(){
		$data = $this->general_model->getDataContent('DateOne', 'page/index');
		$this->load->view('/includes/template/template', $data);
	}
	
}

?>