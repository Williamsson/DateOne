<div class="container">
	<div class="eleven columns aplha">
		<div class="row">
			<img src="<?php echo base_url()?>img/couple.jpg" alt="couple" width="570" height="280">
 		</div>
 	</div>
	
	<div class="five columns omega">
			<form action="#" id="registerMember" method="post">
				<select id="selectList">
					<option value="Option 1">Simon som söker kvinna</option>
					<option value="Option 2">Simon som söker djur</option>
					<option value="Option 3">Simon som söker barn</option>
				</select>
				<input type="text" id="user" placeholder="Användarnamn" name="user" class="required requiredField" />
				<input type="text" id="email"  placeholder="email" name="email" class="required requiredField" value="" />
				<input type="text" id="remail" placeholder="Upprepa email" name="remail" class="required requiredField" value="" />
				<input type="password" placeholder="Lösenord" name="password" id="password" value="" class="required requiredField" />
				<input type="password" placeholder="Upprepa Lösenord" name="rpassword" id="password" value="" class="required requiredField" />
				<button type="submit">Registrera</button>
			</form>
	</div>		
</div>

<div class="container">

	<div class="infoColumn">
		<h2><?php echo label('what_is_dateone_header',$this)?></h2>
		<p><?php echo label('what_is_dateone',$this)?></p>
 	</div>
 	
	<div class="infoColumn">
		<h2><?php echo label('who_uses_dateone_header',$this)?></h2>
		<p><?php echo label('who_uses_dateone',$this)?></p>
	</div>
	
		<img src="<?php echo base_url()?>img/armani.jpg" alt="armani" width="280" height="240"/>
</div>


