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
			<p>Civilstatus: <?php echo label($userInformation['civil_status'],$this);?></p>
		</div>
		
		<div id="profileDescription">
			<p><?php echo $user['description']?></p>
		</div>
	</div>
		<?php 
		
		?>
	
	<div id="profileTraitsInformation">
		<table>
			  <tr>
			    <td><?php echo label('ancestry',$this);?> </td>
			    <td><?php echo label($userInformation['ancestry'],$this);?></td>
			    <td><?php echo label('appearance',$this);?> </td>
			    <td><?php echo label($userInformation['appearance'],$this);?></td>
			    <td><?php echo label('bodytype',$this);?> </td>
			    <td><?php echo label($userInformation['bodytype'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('clothing',$this);?> </td>
			    <td><?php echo label($userInformation['clothing'],$this);?></td>
			    <td><?php echo label('drinking_habits',$this);?> </td>
			    <td><?php echo label($userInformation['drinking_habits'],$this);?></td>
			    <td><?php echo label('education',$this);?> </td>
			    <td><?php echo label($userInformation['education'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('exercising_habits',$this);?> </td>
			    <td><?php echo label($userInformation['exercising_habits'],$this);?></td>
			    <td><?php echo label('eye_color',$this);?> </td>
			    <td><?php echo label($userInformation['eye_color'],$this);?></td>
			    <td><?php echo label('favorite_music_genre',$this);?> </td>
			    <td><?php echo label($userInformation['favorite_music_genre'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('friday_night_activity',$this);?> </td>
			    <td><?php echo label($userInformation['friday_night_activity'],$this);?></td>
			    <td><?php echo label('hair_color',$this);?> </td>
			    <td><?php echo label($userInformation['hair_color'],$this);?></td>
			    <td><?php echo label('hobby',$this);?> </td>
			    <td><?php echo label($userInformation['hobby'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('housing_type',$this);?> </td>
			    <td><?php echo label($userInformation['housing_type'],$this);?></td>
			    <td><?php echo label('length',$this);?> </td>
			    <td><?php echo label($userInformation['length'],$this);?></td>
			    <td><?php echo label('num_childs',$this);?> </td>
			    <td><?php echo label($userInformation['num_childs'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('occupation',$this);?> </td>
			    <td><?php echo label($userInformation['occupation'],$this);?></td>
			    <td><?php echo label('personality_type',$this);?> </td>
			    <td><?php echo label($userInformation['personality_type'],$this);?></td>
			    <td><?php echo label('pets',$this);?> </td>
			    <td><?php echo label($userInformation['pets'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('religion',$this);?> </td>
			    <td><?php echo label($userInformation['religion'],$this);?></td>
			    <td><?php echo label('romance',$this);?> </td>
			    <td><?php echo label($userInformation['romance'],$this);?></td>
			    <td><?php echo label('spoken_languages',$this);?> </td>
			    <td><?php echo label($userInformation['spoken_languages'],$this);?></td>
			  </tr>
			  <tr>
			    <td><?php echo label('tobacco_habits',$this);?> </td>
			    <td><?php echo label($userInformation['tobacco_habits'],$this);?></td>
			    <td><?php echo label('wanted_num_childs',$this);?> </td>
			    <td><?php echo label($userInformation['wanted_num_childs'],$this);?></td>
			    <td><?php echo label('weight',$this);?> </td>
			    <td><?php echo label($userInformation['weight'],$this);?></td>
			  </tr>
		</table>
	</div>
	
	
</div>
