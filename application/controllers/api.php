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
			$content = $this->post('content', FALSE);
			
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
			$creator = $this->session->userdata('userId');
			
			$startDate = $this->post('startDate');
			$endDate = $this->post('endDate');
			
			$maxParticipants = $this->post('maxParticipants');
			$description = $this->post('description');
			
			$eventLong = $this->post('markerLong');
			$eventLat = $this->post('markerLat');
			
			$notifySE1 = $this->post('notifySEb');
			$notifySE2 = $this->post('notifySEd');
			
			$notifyOE1 = $this->post('notifyOEd');
			$notifyOE2 = $this->post('notifyOEb');
			
			$result = $this->event_model->createEvent($creator, $eventName, $startDate, $endDate, $maxParticipants, $description, $eventLong, $eventLat, $notifySE1, $notifySE2, $notifyOE1, $notifyOE2);
			
			if($result === FALSE){
				$this->response(NULL,500);
			}else{
				$this->response(NULL,201);
			}
			
		}
	}

	function event_get(){
		if($this->get('getEventLoc')){
			$event = $this->get('getEventLoc');
			
			$eventLoc = $this->event_model->getEventLocation($event);
			
			if($eventLoc === FALSE){
				$this->response(NULL,404);
			}else{
				$this->response($eventLoc, 200);
			}
			
		}
	}


}
?>