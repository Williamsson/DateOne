<?php 
/*
 * Creates all form fields and assigns them to three different variables, and then places the input fields in the responding column
 */
	
	//Counter is used when giving columns input fields
	$counter = 1;
	$firstColumn = "";
	$secondColumn = "";
	$thirdColumn = "";
	
	$traits = $this->getFromDB_model->getTraitsAndOptions();
	$userTraits = $this->user_model->getUserTraits($this->session->userdata('userId'));
	
	$oneTrait = array();
	for($i=0;$i<count($userTraits);$i++){
		$tableName = $userTraits[$i][0]['tablename'];
		$traitId = $userTraits[$i][0]['traitId'];
		$traitValues = $userTraits[$i][0]['values'];
		
		$values = array();
		foreach($traitValues as $traitValue){
			$values[] = $traitValue;
		}
		
		$oneTrait[] = array(
					'tableName' => $tableName,
					'id' => $traitId,
					'values' => $values
		);
		
		$counter++;
	}

	var_dump($oneTrait);
		
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