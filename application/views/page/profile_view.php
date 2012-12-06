<?php 
	if($this->uri->segment(3)){
		$profile = $this->uri->segment(3);
		//Attempt to select that profile
	}else{
		$profile = $this->session->userdata('username');
	}
	$user = $this->user_model->getProfile($profile);
	$userTraits = 
	
	$traits = $this->getFromDB_model->getTraits();
	
	
	$year = date('Y');
	$age = $year - $user['year_of_birth']; 
?>
<div id="profileWrapper">
	<div id="profileImage">Det här är en profilbild</div>
	
	<div id="profileShortInfo">
		<div class="column">
			<h3><?php echo $user['firstName'] . " " . $user['surName'];?></h3>
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
