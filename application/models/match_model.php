<?php

class Match_model extends CI_Model{
	
	function matchUsers($user1Id, $user2Id){
		$user1Traits = $this->user_model->getUserTraits($user1Id);
		$user1SearchingFor = $this->user_model->getUserLookingForValues($user1Id);
		
		$user2Traits = $this->user_model->getUserTraits($user2Id);
		$user2SearchingFor = $this->user_model->getUserLookingForValues($user2Id);
		
		$result = array('user1Traits' => $user1Traits, 'user1SearchingFor' => $user1SearchingFor, 'user2Traits' => $user2Traits, 'user2SearchingFor' => $user2SearchingFor);
		
		$sumTraits = $this->getFromDB_model->countSumTraits();
		
		$user1MatchesUser2Value = 0;
		$user2MatchesUser1Value = 0;
		
		for($i=0;$i<=$sumTraits;$i++){
			//Loop through what user1 looks for, then see if user2 has that trait
			
			if(key_exists($i,$user1SearchingFor)){
				if(is_array($user1SearchingFor[$i])){
					
					foreach($user1SearchingFor[$i] as $a){
						if(key_exists($i, $user2Traits)){
							
							if(is_array($user2Traits[$i])){
								foreach($user2Traits[$i] as $b){
									if($b == $a){
										$user1MatchesUser2Value++;
									}
								}
							}else{
								if($a == $user2Traits[$i]){
									$user1MatchesUser2Value++;
								}
							}
						}
					}
				}else{
					if(key_exists($i,$user2Traits)){
						if(is_array($user2Traits[$i])){
							foreach($user2Traits as $a){
								if($user1SearchingFor[$i] == $a){
									$user1MatchesUser2Value++;
								}
							}
						}else{
							if($user1SearchingFor[$i] == $user2Traits[$i]){
								$user1MatchesUser2Value++;
							}
						}
					}
				}
			}
			
			//Loop through what user2 looks for, then see if user1 has that trait
			if(key_exists($i,$user2SearchingFor)){
				if(is_array($user2SearchingFor[$i])){
						
					foreach($user2SearchingFor[$i] as $a){
						if(key_exists($i, $user1Traits)){
								
							if(is_array($user1Traits[$i])){
								foreach($user1Traits[$i] as $b){
									if($b == $a){
										$user2MatchesUser1Value++;
									}
								}
							}else{
								if($a == $user1Traits[$i]){
									$user2MatchesUser1Value++;
								}
							}
						}
					}
						
				}else{
					if(key_exists($i,$user1Traits)){
						if(is_array($user1Traits[$i])){
							foreach($user1Traits as $a){
								if($user1SearchingFor[$i] == $a){
									$user2MatchesUser1Value++;
								}
							}
						}else{
							if($user2SearchingFor[$i] == $user1Traits[$i]){
								$user2MatchesUser1Value++;
							}
						}
					}
				}
			}
			
		}//End for
		
		//Take the number of matches and divide by the number of total traits avalible
		$user1MatchesUser2Value = ($user1MatchesUser2Value/count($user1SearchingFor));
		$user2MatchesUser1Value = ($user2MatchesUser1Value/count($user2SearchingFor));
		
		//Round to nearest percentage
		$user1MatchesUser2Value = floor($user1MatchesUser2Value*100); 
		$user2MatchesUser1Value = floor($user2MatchesUser1Value*100);
		
		$result = array(
			'user1-2Match' => $user1MatchesUser2Value,
			'user2-1Match' => $user2MatchesUser1Value,
			'match' => ($user1MatchesUser2Value + $user2MatchesUser1Value)/2,
		);
		return $result;
	}
	
	
	
	
	
}

?>