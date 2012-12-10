<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo base_url() . "img/favicon.ico"?>" type="image/x-icon"> 
	
	<title><?php echo $title?></title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/template.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/skeleton.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/pages.css" type="text/css" media="screen"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>jquery/jquery-1.8.1.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>jquery/floating-1.12.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/menu.js"></script>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="<?php echo $description;?>"/>
	<meta name="keywords" content="<?php echo $keyword;?>"/>
</head>
<body>
	<?php require_once(__DIR__."/../analyticstracking.php");?>
	
	<div id="maincontainer">

		<div id="topsection">
			<div class="innertube">
				<img src="<?php echo base_url();?>img/logo2.png"/>
				
				
				<div id="topBar">
					
					<div id="languageBar">
						<form>
							<button><?php echo label('language',$this)?></button>
						</form>
					</div>
					
					<div id="loginArea">
						<?php
							if(!$this->user_model->isLoggedIn()){ ?>
								<?php echo form_open('user/login');?>
									<input type="text" id="user" placeholder="<?php echo label('username',$this);?>" name="loginusername" class="required requiredField" />
									<input type="password" placeholder="<?php echo label('password',$this);?>" name="loginpassword" id="password" value="" class="required requiredField" />
									<button type="submit"><?php echo label('login',$this)?></button>
								<?php echo form_close();?>
							<?php }else{
									echo form_open('user/logout');?>
									<button type="submit"><?php echo label('logout',$this)?></button>
							<?php	echo form_close();
								 }?>
						
						<div id="loginErrors">
							<?php echo form_error('loginusername');?>
							<?php echo form_error('loginpassword');?>
						</div>
					</div>
					
					<div class="errorMessage">
						<?php 
							if($this->session->flashdata('faulty_login')){
								echo $this->session->flashdata('faulty_login');
							}
						?>
					</div>
					
				</div>
				
				
				<div class="nav">
					<ul>
						<li><a href="<?php echo base_url() . $this->language_model->getLanguage();?>"><?php echo label('home',$this)?></a></li>
						<li><a href="<?php echo base_url() . $this->language_model->getLanguage() . "/page/getstarted";?>"><?php echo label('get_started',$this)?></a></li>
						<li><a href="<?php echo base_url() . $this->language_model->getLanguage() . "/page/upgrade";?>"><?php echo label('upgrade',$this)?></a></li>
						<li><a href="<?php echo base_url() . $this->language_model->getLanguage() . "/page/about";?>"><?php echo label('about',$this)?></a></li>
						<li><a href="<?php echo base_url() . $this->language_model->getLanguage() . "/page/contact";?>"><?php echo label('contact',$this)?></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		
		<div id="contentwrapper">
			<div id="contentcolumn">
				<?php $this->load->view($main_content);?>
			</div>
		</div>
		
		<?php 
			if($this->user_model->isLoggedIn()){
				$this->load->view('includes/template/mainMenu');
			}
		?>
		
	<div id="footer">
		<p>&copy; Simon Williamsson | Sasa Ristic | 2012 </p>
		<p>Simon@wilsim.se</p><p>sasa@lychee.se</p>
	</div>

	</div>
		
</body>
</html>