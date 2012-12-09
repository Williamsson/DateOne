<div id="loggedInArea">
	<h1><?php echo label('welcome_back',$this) . " " . $this->session->userdata('username')?>!</h1>
	<p>Här är några slumpade användare som troligen inte har någon som helst koppling eller matchning till dig tills vidare. Det fixar jag när jag får tid</p>
	<div id="randomUsers">
		<?php 
			$query = $this->db->query("SELECT username, first_name,sur_name FROM `users` WHERE id >= (SELECT FLOOR( MAX(id) * RAND()) FROM `users` ) ORDER BY id LIMIT 5;");
			foreach($query->result() as $row){
				if($row->username != $this->session->userdata('username')):
				?>
				
				<a href="<?php echo base_url() . $this->language_model->getLanguage() . '/user/profile/' . $row->username;?>"><div id="profileImage" style="margin-right: 10px;"><?php echo "Det här låtsas vara " . $row->username . "'s profilbild"?></div></a>
				
			<?php endif; }?>
	</div>
	
	<div id="randomEvents">
		<p>Här är några slumpade evenemang</p>
	</div>

</div>