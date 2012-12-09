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
		
		if($this->post('content')){
			$sender = $this->session->userdata('userId');
			$receiver = $this->post('receiver');
			$title = $this->post('title');
			$content = $this->post('content');
			
			$content = str_replace("------------------------------------------", "\n------------------------------------------",$content);
			
		 	$result = $this->mailAndMessages_model->sendMessage($sender,$receiver,$title,$content);
		 	
	        if($result === FALSE){  
	            $this->response(array('status' => 'failed'));
	        }else{  
	            $this->response(array('status' => 'success'));  
	        }
		}elseif($this->post('messageRead')){
			$read = $this->post('messageRead');
				
			$result = $this->mailAndMessages_model->markMessageAsRead($read);
			
			if($result === FALSE){
				$this->response(array('status' => 'failed'));
			}else{
				$this->response(array('status' => 'success'));
			}
		}
		
		
	}

	function event_post(){
		if($this->post('createEvent')){
			$eventName = $this->post('createEvent');
			$startDate = $this->post('startDate');
			$endDate = $this->post('endDate');
			$maxParticipants = $this->post('maxParticipants');
			$description = $this->post('description');
			$eventCoords = $this->post('marker');
			$notifyRadius = $this->post('circle');
		}
	}




}
?>