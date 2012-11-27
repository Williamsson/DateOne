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
		
		echo form_label(label('postal_number',$this, 'postal_number'));
		$data = array(
				              'name'        => 'postal_number',
				              'id'          => 'postal_number',
				              'value'       => '12345',
		);
		echo form_input($data);
		
		echo form_label(label('description',$this, 'description'));
		$data = array(
		              'name'        => 'description',
		              'id'          => 'description',
		              'value'       => 'En beskrivning om John Doe',
		);
		echo form_textarea($data);
		
		
		
		echo form_label(label('ancestry',$this, 'ancestry'));
		
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('ancestry', 'ancestry');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('ancestry', $options, $val);
		
		
		
		
		echo form_label(label('appearance',$this, 'appearance'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('appearance', 'appearance');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('appearance', $options, $val);
		
		
		
		echo form_label(label('bodytype',$this, 'bodytype'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('bodytype', 'bodytype');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('bodytype', $options, $val);
		
		
		
	
	?>
</div>

<div class="infoColumn">
	<?php 
		echo form_label(label('civil_status',$this, 'civil_status'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('civil_status', 'status');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('civil_status', $options, $val);
		
		
		
		echo form_label(label('clothing',$this, 'clothing'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('clothing', 'clothing');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
	
		echo form_dropdown('clothing', $options, $val);
		
		
		echo form_label(label('drinking_habits',$this, 'drinking_habits'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('drinking_habits', 'habit');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('drinking_habits', $options, $val);
		
		
		echo form_label(label('education',$this, 'education'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('education', 'education');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('education', $options, $val);
		
		
		echo form_label(label('exercising_habits',$this, 'exercising_habits'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('exercising_habits', 'habit');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('exercising_habits', $options, $val);
		
		
		echo form_label(label('eye_color',$this, 'eye_color'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('eye_color', 'eye_color');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('eye_color', $options, $val);
		
		
		echo form_label(label('favorite_music_genre',$this, 'favorite_music_genre'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('favorite_music_genre', 'genre');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('favorite_music_genre', $options, $val);
		
		
		echo form_label(label('friday_night_activity',$this, 'friday_night_activity'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('friday_night_activity', 'activity');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('friday_night_activity', $options, $val);
		
		
		echo form_label(label('hair_color',$this, 'hair_color'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('hair_color', 'color');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('hair_color', $options, $val);
		
		
		echo form_label(label('hobby',$this, 'hobby'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('hobby', 'hobby');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('hobby', $options, $val);
		
		
		echo form_label(label('housing_type',$this, 'housing_type'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('housing_type', 'housing');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('housing_type', $options, $val);
		
		
		
		
	?>
</div>

<div class="infoColumn">
	<?php 
		echo form_label(label('length',$this, 'length'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('length', 'length');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('length', $options, $val);
		
		
		echo form_label(label('num_childs',$this, 'num_childs'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('num_childs', 'childs');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('num_childs', $options, $val);
		
		echo form_label(label('occupation',$this, 'occupation'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('occupation', 'occupation');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('occupation', $options, $val);
		
		echo form_label(label('personality_type',$this, 'personality_type'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('personality_type', 'personality');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('personality_type', $options, $val);
		
		echo form_label(label('pets',$this, 'pets'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('pets', 'pet');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('pets', $options, $val);
		
		echo form_label(label('religion',$this, 'religion'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('religion', 'religion');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('religion', $options, $val);
		
		echo form_label(label('romance',$this, 'romance'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('romance', 'romance');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('romance', $options, $val);
		
		echo form_label(label('clothing',$this, 'clothing'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('clothing', 'clothing');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('romance', $options, $val);
		
		echo form_label(label('spoken_languages',$this, 'spoken_languages'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('spoken_languages', 'language');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('spoken_languages', $options, $val);
		
		echo form_label(label('clothing',$this, 'clothing'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('clothing', 'clothing');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('tobacco_habits', $options, $val);
		
		echo form_label(label('tobacco_habits',$this, 'tobacco_habits'));
		$options = array();
		$options[] = label('no_answer',$this);
		$traits = $this->getFromDB_model->fetch('tobacco_habits', 'habit');
		
		foreach($traits as $trait){
			$options[] = label($trait,$this);
		}
		
		$val = 0;
		
		echo form_dropdown('tobacco_habits', $options, $val);
		
		
		echo form_submit('submit',label('update',$this));
		echo form_close();
	
	?>
</div>