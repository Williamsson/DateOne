<div id="loggedInArea">
	<h1><?php echo label('welcome',$this) . " " . $this->session->userdata('username')?>!</h1>
	<p>Här är några användare som potentiellt matchar dina preferenser. Just nu är de slumpade dock, men det ska vara potentiella matchningar.</p>
	
	<div id="randomUsers">
		<?php 
			$query = $this->db->query("SELECT username, first_name,sur_name FROM `users` WHERE id >= (SELECT FLOOR( MAX(id) * RAND()) FROM `users` ) ORDER BY id LIMIT 5;");
			foreach($query->result() as $row){
				if($row->username != $this->session->userdata('username')):
				?>
				
				<a href="<?php echo base_url() . $this->language_model->getLanguage() . '/user/profile/' . $row->username;?>"><?php 
							$userId = $row->username;
							$email = $this->user_model->getUserEmail($userId);
							$hash = md5(strtolower(trim($email)));
						?>
						<img src="http://www.gravatar.com/avatar/<?php echo $hash;?>?s=160&d=mm"/></a>
			<?php endif; }?>
	</div>
	
	<div id="randomEvents">
		<p>Här är några slumpade evenemang som i framtiden kommer vara evenemang i ditt område istället för slumpade.</p>
		<?php 
			$query = $this->db->query("SELECT id, title FROM `events` WHERE id >= (SELECT FLOOR( MAX(id) * RAND()) FROM `events` ) ORDER BY id LIMIT 5;");
			foreach($query->result() as $row){?>
				<a href="<?php echo base_url() . $this->language_model->getLanguage() . '/events/event/' . $row->id;?>"><?php echo $row->title;?></a>
			<?php }?>
	</div>

</div>

