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
			$options[] = $option['value'];
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
				$firstColumn .= form_dropdown($traitName,$options, $val);
			}
		}elseif($counter > 3 && $counter <= 14){
		
			$secondColumn .= form_label(label($traitName,$this), $traitName);
		
			if($traitName == "searching_for" || $traitName == "spoken_languages" || $traitName == "favorite_music_genre" || $traitName == "friday_night_activity" || $traitName == "hobby"){
				$secondColumn .= form_multiselect($traitName . "[]",$options, $val);
			}else{
				$secondColumn .= form_dropdown($traitName,$options, $val);
			}
		}else{
			$thirdColumn .= form_label(label($traitName,$this), $traitName);
		
			if($traitName == "searching_for" || $traitName == "spoken_languages" || $traitName == "favorite_music_genre" || $traitName == "friday_night_activity" || $traitName == "hobby"){
				$thirdColumn .= form_multiselect($traitName . "[]",$options, $val);
			}else{
				$thirdColumn .= form_dropdown($traitName,$options, $val);
			}
		}
		
		$counter++;
	}
	
// 	for($i=0;$i<count($traits);$i++){
// 		$traitName = $traits[$i]['traitName'];
// 		$traitId = $traits[$i]['traitId'];
		
// 		$traitOptions = $this->getFromDB_model->getTraitOptions($traitName);

// 		$userValues = $this->user_model->getUserTraitValues($userId,$traitName);
		
		
// 		var_dump($traitOptions);
		
// 		$counter++;
// 	}

		
	?>


<div class="messageBox">
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
	
		echo form_open('user/controlpanel');
		
		
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