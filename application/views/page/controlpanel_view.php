<?php 
	
/*
 * Creates all form fields and assigns them to three different variables, and then places the variables in the responding column
 */

	$counter = 1;
	$firstColumn = "";
	$secondColumn = "";
	$thirdColumn = "";
	
	$traits = $this->getFromDB_model->getTraitsAndNames();
	$userTraits = $this->user_model->getUserTraits($this->session->userdata('userId'));
	
	for($i=0;$i<count($traits);$i++){
		
		$test = $traits[$i];
		$tableName = $test['table'];
		$tableValues = $test['arrayholder']['values'];
		
		$options = array();
		$options[] = label('no_answer',$this);
		
		foreach($tableValues as $value){
			$options[] = label($value,$this);
		}
		
		$val = $userTraits[$tableName]['value'];
		
		if($counter <= 3){
			
			$firstColumn .= form_label(label($tableName,$this), $tableName);
			
			if($tableName == "searching_for" || $tableName == "spoken_languages" || $tableName == "favorite_music_genre" || $tableName == "friday_night_activity" || $tableName == "hobby"){
				$firstColumn .= form_multiselect($tableName . "[]",$options, $val);
			}else{
				$firstColumn .= form_dropdown($tableName,$options, $val);
			}
			
		}elseif($counter > 3 && $counter <= 14){
			
			$secondColumn .= form_label(label($tableName,$this), $tableName);
			
			if($tableName == "searching_for" || $tableName == "spoken_languages" || $tableName == "favorite_music_genre" || $tableName == "friday_night_activity" || $tableName == "hobby"){
				$secondColumn .= form_multiselect($tableName . "[]",$options, $val);
			}else{
				$secondColumn .= form_dropdown($tableName,$options, $val);
			}
			
		}else{
			
			$thirdColumn .= form_label(label($tableName,$this), $tableName);
			
			if($tableName == "searching_for" || $tableName == "spoken_languages" || $tableName == "favorite_music_genre" || $tableName == "friday_night_activity" || $tableName == "hobby"){
				$thirdColumn .= form_multiselect($tableName . "[]",$options, $val);
			}else{
				$thirdColumn .= form_dropdown($tableName,$options, $val);
			}
			
		}
						
		
		
		
		$counter++;
	}
		
	?>



<div class="infoColumn controlpanel">
	<?php 
		if($this->session->flashdata('email_exists')){
			echo $this->session->flashdata('email_exists');
		}
		
		if($this->session->flashdata('new_member')){
			echo $this->session->flashdata('new_member');
		}
	
		echo form_open('user/controlpanel');
		
		
			echo form_error('email');
			echo form_label(label('email',$this, 'email'));
			$data = array(
			              'name'        => 'email',
			              'id'          => 'email',
			              'value'       => '',
			);
			echo form_input($data);
			
			echo form_error('remail');
			echo form_label(label('repeat_email',$this, 'remail'));
			$data = array(
					              'name'        => 'remail',
					              'id'          => 'remail',
					              'value'       => '',
			);
			echo form_input($data);
			
			echo form_error('first_name');
			echo form_label(label('first_name',$this, 'first_name'));
			$data = array(
					              'name'        => 'first_name',
					              'id'          => 'first_name',
					              'value'       => '',
			);
			echo form_input($data);
			
			echo form_error('sur_name');
			echo form_label(label('sur_name',$this, 'sur_name'));
			$data = array(
					              'name'        => 'sur_name',
					              'id'          => 'sur_name',
					              'value'       => '',
			);
			echo form_input($data);
			
			echo form_error('postal_number');
			echo form_label(label('postal_number',$this, 'postal_number'));
			$data = array(
							              'name'        => 'postal_number',
							              'id'          => 'postal_number',
							              'value'       => '',
			);
			echo form_input($data);
			
			echo form_error('description');
			echo form_label(label('description',$this, 'description'));
			$data = array(
					              'name'        => 'description',
					              'id'          => 'description',
					              'value'       => '',
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