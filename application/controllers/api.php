<?php 
require(APPPATH . '/libraries/REST_Controller.php');
class Api extends REST_Controller{
	
	function message_get(){
		if(!$this->get('id')){
	            $this->response(NULL, 400);  
		 }
		 
	     $message = $this->mailAndMessages_model->getMessage($this->get('id'));
	     
	     if($message){
	     	if($message['receiver'] == $this->session->userdata('userId')){
		         $this->response($message, 200); // 200 being the HTTP response code  
	     	}else{
	     		$this->response(NULL, 403);
	     	}
	     	
	     }else{
	     	$this->response(NULL, 404);  
	     }  
	}
}
?>