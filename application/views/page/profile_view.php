<?php 
	if($this->uri->segment(3)){
		$profile = $this->uri->segment(4);
	}else{
		$profile = $this->session->userdata('username');
	}
	$user = $this->user_model->getProfile($profile);
	$traits = $this->getFromDB_model->getTraits();
	
	
	$year = date('Y');
	$age = $year - $user['year_of_birth'];
	
	$userId = $this->user_model->getUserId($profile);
	
	foreach($traits as $trait){
		$userTraitValue = $this->user_model->getUserTraitValues($userId,$trait['traitId']);
		$traitOptions = $this->getFromDB_model->getTraitOptions($trait['traitName']);
		
		
// 		var_dump($userTraitValue);
// 		var_dump($traitOptions);
		
// 		$options = array();
// 		foreach($traitOptions as $option){
// 			if($option['value'] != 666){
// 				$options[] = label($option['value'],$this);
// 			}else{
// 				$options[] = label('no_answer',$this);
// 			}
// 		}
	}
	
	
	
	
?>
<div id="profileWrapper">
	<div id="profileImage">Det här är en profilbild.. Bara så du vet..</div>
	
	<div id="profileShortInfo">
		<div class="column">
			<h3><?php echo $user['firstName'] . " " . $user['surName'];?></h3>
			<p>Land: <?php echo label(strtolower($user['country']),$this);?></p>
			<p>Ålder: <?php echo $age;?></p>
			<p>Söker: <?php ?></p>
		</div>
		
		<div class="wideColumn">
			<p><?php echo $user['description']?></p>
		</div>
	</div>
	
	<div id="profileTraitsInformation">
		
	
	</div>
	
	
</div>
