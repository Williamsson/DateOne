<?php 


/*
 * Creates all form fields and assigns them to three different variables, and then places the input fields in the responding column
 */
	//Counter is used when giving columns input fields
	$counter = 1;
	$firstColumn = "";
	$secondColumn = "";
	$thirdColumn = "";
	
	$userId = $this->session->userdata('userId');
	$traits = $this->getFromDB_model->getTraits();
	
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
		
		if(count($val) === 1) {
			$val = $val[0];
		}
		
		if($counter <= 3){
			$firstColumn .= form_label(label($traitName,$this), $traitName);
		
			if($traitName == "searching_for" || $traitName == "spoken_languages" || $traitName == "favorite_music_genre" || $traitName == "friday_night_activity" || $traitName == "hobby"){
				$firstColumn .= form_multiselect($traitName . "[]",$options, $val);
			}else{
				$firstColumn .= form_dropdown($traitName,$options, $val, 'class="dropDown"');
			}
		}elseif($counter > 3 && $counter <= 14){
		
			$secondColumn .= form_label(label($traitName,$this), $traitName);
		
			if($traitName == "searching_for" || $traitName == "spoken_languages" || $traitName == "favorite_music_genre" || $traitName == "friday_night_activity" || $traitName == "hobby"){
				$secondColumn .= form_multiselect($traitName . "[]",$options, $val);
			}else{
				$secondColumn .= form_dropdown($traitName,$options, $val,'class="dropDown"');
			}
		}else{
			$thirdColumn .= form_label(label($traitName,$this), $traitName);
		
			if($traitName == "searching_for" || $traitName == "spoken_languages" || $traitName == "favorite_music_genre" || $traitName == "friday_night_activity" || $traitName == "hobby"){
				$thirdColumn .= form_multiselect($traitName . "[]",$options, $val);
			}else{
				$thirdColumn .= form_dropdown($traitName,$options, $val,'class="dropDown"');
			}
		}
		
		$counter++;
	}
	
	?>


<div class="messageBox">
	
	<h3><?php echo label('enter_your_traits',$this)?></h3>
	
	<?php 
	if($this->session->flashdata('email_exists')){
		echo $this->session->flashdata('email_exists');
	}
	
	if($this->session->flashdata('new_member')){
		echo $this->session->flashdata('new_member');
	}
	?>
</div>

<div class="infoColumn controlpanel">
	

	<?php 
		
		$userData = $this->user_model->getUserInformation($this->session->userdata('userId'));
	
		echo form_open('settings/updateProfile');
		
			echo form_error('email');
			echo form_label(label('email',$this, 'email'));
			$data = array(
			              'name'        => 'email',
			              'id'          => 'email',
			              'value'       =>  $userData['email'],
			);
			echo form_input($data);
			
			echo form_error('remail');
			echo form_label(label('repeat_email',$this, 'remail'));
			$data = array(
					              'name'        => 'remail',
					              'id'          => 'remail',
					              'value'       =>  $userData['email'],
			);
			echo form_input($data);
			
			echo form_error('first_name');
			echo form_label(label('first_name',$this, 'first_name'));
			$data = array(
					              'name'        => 'first_name',
					              'id'          => 'first_name',
					              'value'       => $userData['first_name'],
			);
			echo form_input($data);
			
			echo form_error('sur_name');
			echo form_label(label('sur_name',$this, 'sur_name'));
			$data = array(
					              'name'        => 'sur_name',
					              'id'          => 'sur_name',
					              'value'       =>  $userData['sur_name'],
			);
			echo form_input($data);
			
			echo form_error('postal_number');
			echo form_label(label('postal_number',$this, 'postal_number'));
			$data = array(
							              'name'        => 'postal_number',
							              'id'          => 'postal_number',
							              'value'       =>  $userData['postal_number'],
			);
			echo form_input($data);
			
			echo form_error('description');
			echo form_label(label('description',$this, 'description'));
			$data = array(
					              'name'        => 'description',
					              'id'          => 'description',
					              'value'       =>  $userData['description'],
			);
			echo form_textarea($data);
			
			echo $firstColumn;
			echo form_submit('submit',label('update',$this));
 	?>
</div>

<div class="infoColumn">
 	<?php 
 		echo $secondColumn;
 	?>
</div>

<div class="infoColumn">
	<?php 
		
		echo $thirdColumn;
		echo form_close();
	?>
</div>

<div class="controlpanelBreak"></div>

<div class="messageBox">
	
	<h3><?php echo label('user_searching_for_traits',$this)?></h3>
	
</div>

<?php 
$counter = 1;
$firstColumn = "";
$secondColumn = "";
$thirdColumn = "";

$userId = $this->session->userdata('userId');
$traits = $this->getFromDB_model->getTraits();

foreach($traits as $trait){
	$traitName = $trait['traitName'];
	$traitId = $trait['traitId'];

	$traitOptions = $this->getFromDB_model->getTraitOptions($traitName);
	$options = array();
	foreach($traitOptions as $option){
		if($option['value'] != 666){
				$options[] = label($option['value'],$this);
			}else{
				$options[] = label('dosent_matter',$this);
			}
	}

	//everything i need to display the forms are done. Now to get the user information
	$userTraitValues = $this->user_model->getUserLookingForTraitValues($userId, $traitId);
	$val = array();
	foreach($userTraitValues as $userTrait){
		$val[] = $userTrait;
	}
	
	if(count($val) === 1) {
		$val = $val[0];
	}
	
	if($counter <= 8){
		$firstColumn .= form_label(label('searchingfor_' . $traitName,$this), $traitName);

		$firstColumn .= form_multiselect('searchingfor_' . $traitName . "[]",$options, $val);
	}elseif($counter > 8 && $counter <= 17){
		
		$secondColumn .= form_label(label('searchingfor_' . $traitName,$this), $traitName);

		$secondColumn .= form_multiselect('searchingfor_' . $traitName . "[]",$options, $val);
	}else{
		$thirdColumn .= form_label(label('searchingfor_' . $traitName,$this), $traitName);

		$thirdColumn .= form_multiselect('searchingfor_' . $traitName . "[]",$options, $val);
	}

	$counter++;
}
?>


<div class="infoColumn">
	<?php 
		echo form_open('settings/updateLookingFor');
		echo $firstColumn;
		echo form_submit('submit',label('update',$this));
	?>
</div>

<div class="infoColumn">
	<?php 
		echo $secondColumn;
	?>
</div>

<div class="infoColumn">
	<?php 
		echo $thirdColumn;
		echo form_close();
	?>
</div>

