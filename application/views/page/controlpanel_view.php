<div class="infoColumn">
<?php 
	echo form_open('user/updatesettings');
		
		echo form_label(label('email',$this, 'email'));
		$data = array(
              'name'        => 'email',
              'id'          => 'email',
              'value'       => 'johndoe@live.se',
            );
		echo form_input($data);
		
		echo form_label(label('first_name',$this, 'first_name'));
		$data = array(
		              'name'        => 'first_name',
		              'id'          => 'first_name',
		              'value'       => 'John',
		);
		echo form_input($data);
		
		echo form_label(label('sur_name',$this, 'sur_name'));
		$data = array(
		              'name'        => 'sur_name',
		              'id'          => 'sur_name',
		              'value'       => 'Doe',
		);
		echo form_input($data);
		
		echo form_label(label('description',$this, 'description'));
		$data = array(
		              'name'        => 'description',
		              'id'          => 'description',
		              'value'       => 'En beskrivning om John Doe',
		);
		echo form_textarea($data);
		
		
	
?>
</div>

<div class="infoColumn">
	
</div>

<div class="infoColumn">
<?php 
	
	echo form_submit('submit',label('update',$this));
	echo form_close();
	

?>
</div>