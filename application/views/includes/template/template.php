<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo base_url() . "img/favicon.ico"?>" type="image/x-icon"> 
	
	<title><?php echo $title?></title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/template.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/index.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/skeleton.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/layout.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/base.css" type="text/css" media="screen"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>jquery/jquery-1.8.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>jquery/floating-1.12.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/menu.js"></script>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="<?php echo $description;?>"/>
	<meta name="keywords" content="<?php echo $keyword;?>"/>
	
	
</head>
<body>
	<?php require_once("/../analyticstracking.php");?>
	
	<?php //if(logged_in){$this->load->view('includes/template/mainMenu');};?>
	
	<div id="pageWrapper">
		
		<div id="header" class="roundCorners">
			
			<div id="headerTop">
				
				<div id="languageBar" class="roundCorners">
					<div id="languagePicker">
						<p><?php echo label('language',$this) . ": ";?></p>
						<img src="<?php echo base_url();?>img/lang/se.png"/>
					</div>
				</div>
				
				<div id="login">
					<?php echo form_open('user/login');?>
					<ul>
						<li>
						<?php 
							$data = array(
							'name' => 'username',
							'id' => 'username',
							'value' => label('username', $this),
							);
							echo form_input($data);?>
						</li>
						
						<li>
						<?php 
							$data = array(
								'name' => 'username',
								'id' => 'username',
								'value' => 'password',
							);
							echo form_password($data);
						?>
						</li>
						
						<li>
						<?php 
							echo form_submit('login', label('login', $this));
							echo form_close();
						?>
						</li>
					</ul>
				</div>
				
				<div id="logo"></div>
			
			</div>
			
			<div id="headerBottom">
				<div id="vertMenuWrapper" class="roundCorners">

				<div id="vertMenu">
					<ul>
						<li><a href="http://google.se"><?php echo label('home',$this)?></a></li>
						<li><a href="http://google.se"><?php echo label('get_started',$this)?></a></li>
						<li><a href="http://google.se"><?php echo label('upgrade',$this)?></a></li>
						<li><a href="http://google.se"><?php echo label('about',$this)?></a></li>
						<li><a href="http://google.se"><?php echo label('contact',$this)?></a></li>
					</ul>
				</div>
			
			</div>
			</div>
			
		</div>

		
		<div id="content" class="roundCorners">
			<?php $this->load->view($main_content);?>
		</div>
		
		<div id="footer">
			<p>&copy; Simon Williamsson 2012</p>
			<p>Sim.Williamsson@gmail.com</p>
		</div>
		
	</div>
	
	
</body>

</html>