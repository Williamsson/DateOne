<?php

class Match_model extends CI_Model{
	
	function matchUsers($user1Id, $user2Id){
		$user1Traits = $this->user_model->getUserTraits($user1Id);
		$user1SearchingFor = $this->user_model->getUserLookingForValues($user1Id);
		
		$user2Traits = $this->user_model->getUserTraits($user2Id);
		$user2SearchingFor = $this->user_model->getUserLookingForValues($user2Id);
		
		
		$result = array('user1Traits' => $user1Traits, 'user1SearchingFor' => $user1SearchingFor, 'user2Traits' => $user2Traits, 'user2SearchingFor' => $user2SearchingFor);
		
		$sumTraits = $this->getFromDB_model->countSumTraits();
		
		for($i=0;$i<=$sumTraits;$i++){
			
		}
		
		
		
		return $user1SearchingFor;
		
		
	}
	
	
	
	
	
}

?>