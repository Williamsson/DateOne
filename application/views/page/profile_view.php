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
	
	$traits = $this->getFromDB_model->getTraits();
	
	$userInformation = array();
	
	foreach($traits as $trait){
		$traitName = $trait['traitName'];
		$traitId = $trait['traitId'];
		
		$traitOptions = $this->getFromDB_model->getTraitOptions($traitName);
		$options = array();
		foreach($traitOptions as $option){
			if($option['value'] != 666){
				$options[] = label($option['value'],$this);
			}else{
				$options[] = label('no_answer',$this);
			}
		}
		
		//everything i need to display the forms are done. Now to get the user information
		$userTraitValues = $this->user_model->getUserTraitValues($userId, $traitId);
		$val = array();
		foreach($userTraitValues as $userTrait){
			$val[] = $userTrait;
		}
		
		if(!is_array($val)){
			$userInformation[$traitName] = $val;
		}else{
			$tempString = "";
			foreach($val as $value){
				$tempString .= $options[$value] . ", ";
			}
			
			$tempString = substr_replace($tempString ,"",-2);
			$userInformation[$traitName] = $tempString;
		}
		
	}
	
// 	var_dump($userInformation);
?>
<div id="profileWrapper">
	<div id="profileImage">Det här är en profilbild.. Bara så du vet..</div>
	
	<div id="profileShortInfo">
		<div class="column">
			<h3><?php echo $user['firstName'] . " " . $user['surName'];?></h3>
			<p>Land: <?php echo label(strtolower($user['country']),$this);?></p>
			<p>Ålder: <?php echo $age;?></p>
			<p>Söker: <?php echo label($userInformation['searching_for'],$this);?></p>
		</div>
		
		<div id="profileDescription">
			<p><?php echo $user['description']?></p>
		</div>
	</div>
		<?php 
// 			echo label($userInformation['hobby'],$this);
		
		?>
	
	<div id="profileTraitsInformation">
		<table>
			  <tr>
			    <td>January</td>
			    <td>$100</td>
			  </tr>
		</table>
	</div>
	
	
</div>
