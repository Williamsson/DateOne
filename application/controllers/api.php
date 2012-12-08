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
	
	function message_post(){
		$receiver = $this->post('receiver');
		$sender = $this->session->userdata('userId');
		$title = $this->post('title');
		$content = $this->post('content');
		
	 	$result = $this->mailAndMessages_model->sendMessage($sender,$receiver,$title,$content);
	 	
        if($result === FALSE){  
            $this->response(array('status' => 'failed'));
        }else{  
            $this->response(array('status' => 'success'));  
        }
		
		
	}
}
?>