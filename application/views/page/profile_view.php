<?php 
	if($this->uri->segment(4)){
		$profile = $this->uri->segment(4);
	}else{
		$profile = $this->session->userdata('username');
	}
	
	if(!$this->user_model->userExists($profile)){
		echo "<h3>" . label('no_such_user',$this) . "</h3>";
	}else{
		
	
	$user = $this->user_model->getProfile($profile);
	$traits = $this->getFromDB_model->getTraits();
	
	
	$year = date('Y');
	$age = $year - $user['year_of_birth'];
	
	$userId = intval($this->user_model->getUserId($profile));
	
	$traits = $this->getFromDB_model->getTraits();
	
	$userInformation = array();
	
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
		
		if(!is_array($val)){
			$userInformation[$traitName] = $val;
		}else{
			$tempString = "";
			foreach($val as $value){
				$tempString .= $options[$value] . ", ";
			}
			
			$tempString = substr_replace($tempString ,"",-2);
			$userInformation[$traitName] = $tempString;
		}
		
	}
	
?>
<div id="profileWrapper">
	<div id="profileImage">
		<?php 
			$email = $this->user_model->getUserEmail($userId);
			$hash = md5(strtolower(trim($email)));
		?>
		<img src="http://www.gravatar.com/avatar/<?php echo $hash;?>?s=160&d=mm" />
	</div>
	
	<div id="profileShortInfo">
		<div class="column">
			<h3><?php echo $user['username'];?></h3>
			<p>Land: <?php echo label(strtolower($user['country']),$this);?></p>
			<p>Ålder: <?php echo $age;?></p>
			<?php 
			if($this->uri->segment(4) && $this->uri->segment(4) != $this->session->userdata('username')):?>
				<a href=""><img src="<?php echo base_url()?>img/flirt.png"/></a><a href=""><img src="<?php echo base_url()?>img/message.png" id="sendMessage"/></a><a href=""><img src="<?php echo base_url()?>img/friend.png"/></a><a href=""><img src="<?php echo base_url()?>img/block.png"/></a>
				<p><?php echo label('user_match',$this); $a = $this->match_model->matchUsers($this->session->userdata('userId'), $this->user_model->getUserId($this->uri->segment(4))); echo": " . $a['match'] . "%" ?></p>
				<?php endif;?>
		</div>
		
		<div id="profileDescription">
			<p><?php echo $user['description']?></p>
		</div>
	</div>
	
	<div id="profileTraitsInformation">
		<table>
			 <?php
			 	foreach($traits as $trait){?>
			 		<tr>
				 		<td>
				 			<?php echo  label($trait['traitName'],$this);?>
				 		</td>
				 		<td>
				 			<?php echo label($userInformation[$trait['traitName']],$this);?>
				 		</td>
			 		</tr>
			 		
			 	<?php 
			 	}
			 ?>
		</table>
	</div>
</div>

<div id="popup_box">
<a id="popupBoxClose"><?php echo label('close',$this)?></a>
    	<label for="title"><?php echo label('title',$this)?></label>
    	<input name="title" id="title">
    	
    	<label for="message"><?php echo label('message',$this)?></label>
    	<textarea name="content" id="content"></textarea>
    	
    	<input type="hidden" id="receiver" name="reciever" value="<?php echo $this->user_model->getUserId($this->uri->segment(4));?>"/>
    	<input type="button" id="sendMessage" value="<?php echo label('send',$this)?>"/>
	
</div>
<script type="text/javascript" src="<?php echo base_url();?>scripts/readMessage.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/sendMessage.js"></script>
<?php 
}
?>