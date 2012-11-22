<div class="container">
	<div class="eleven columns aplha">
		<div class="row">
			<img src="<?php echo base_url()?>img/couple.jpg" alt="couple" width="570" height="280">
 		</div>
 	</div>
 	
	<div class="five columns omega registrationForm">
		<div class="errorMessage">
			<?php echo validation_errors();?>
		</div>
		<?php 
		$lang = $this->language_model->getLanguage();
		echo form_open($lang . '/user/register');?>
			<select id="selectList" name="relationshiptype">
				<?php
					$i = 1;
					$options = $this->getFromDB_model->fetch('searching_for','relationship_type');
					foreach($options as $option){
						echo "<option value='$i'>" . label($option, $this) . "</option>";
						++$i;
					}
				?>
			</select>
			<input type="text" id="postalNumber" value="<?php echo set_value('postal_number'); ?>" placeholder="<?php echo label('postal_number', $this);?>" name="postal_number" class="required requiredField" />
			<input type="text" id="user" value="<?php echo set_value('username'); ?>" placeholder="<?php echo label('username', $this);?>" name="username" class="required requiredField" />
			<input type="text" id="email" value="<?php echo set_value('email'); ?>"  placeholder="<?php echo label('email', $this);?>" name="email" class="required requiredField" value="" />
			<input type="text" id="remail" value="<?php echo set_value('remail'); ?>" placeholder="<?php echo label('repeat_email', $this);?>" name="remail" class="required requiredField" value="" />
			<input type="password" placeholder="<?php echo label('password', $this);?>" name="password" id="password" value="" class="required requiredField" />
			<input type="password" placeholder="<?php echo label('repeat_password', $this);?>" name="rpassword" id="password" value="" class="required requiredField" />
			<button type="submit"><?php echo label('register', $this);?></button>
		<?php echo form_close();?>
	</div>
	
	<div class="infoColumn">
		<h2><?php echo label('what_is_dateone_header',$this)?></h2>
		<p><?php echo label('what_is_dateone',$this)?></p>
 	</div>
 	
	<div class="infoColumn">
		<h2><?php echo label('who_uses_dateone_header',$this)?></h2>
		<p><?php echo label('who_uses_dateone',$this)?></p>
	</div>
	
		<img src="<?php echo base_url()?>img/armani.jpg" alt="armani" width="280" height="240" id="indexBottomImage"/>
	
	
</div>


	


