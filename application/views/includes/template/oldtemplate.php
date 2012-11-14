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
	
	<div class="container">
		<div id="languageBar">
			<div id="languagePicker">
				<p><?php echo label('language',$this) . ": ";?></p>
				<img src="<?php echo base_url();?>img/lang/se.png"/>
			</div>
		</div>
		<div class="sixteen columns">
		<!-- Start Header -->
		
		<div class="eight columns alpha">
			<img src="<?php echo base_url();?>img/logo2.png"/>
		</div>
		
		<div class="row">
			<div class="six columns clearfix">
				<form action="#" id="loginForm" method="post">
					<div class="three columns alpha">
						<input type="text" id="user" placeholder="Användarnamn" name="user" class="required requiredField" />
					</div>
					<div class="three columns omega">
						<input type="password" placeholder="Lösenord" name="password" id="password" value="" class="required requiredField" />
					</div>
				</form>
			</div>
			<div class="row">
				<div class="two columns omega">
					<button type="submit"><?php echo label('login',$this)?></button>
				</div>
			</div>
		</div>
		
		<!-- End Header -->
	</div>
	<!-- Start Nav  -->
				<div class="sixteen columns">
						<div id="nav">
							<ul>
								<li class="first"><a href="#"><?php echo label('home',$this)?></a></li>
								<li class=""><a href="#"><?php echo label('get_started',$this)?></a></li>
								<li class=""><a href="#"><?php echo label('upgrade',$this)?></a></li>
								<li class=""><a href="#"><?php echo label('about',$this)?></a></li>
								<li class="last"><a href="#"><?php echo label('contact',$this)?></a></li>
							</ul>
						</div>
					<hr/>
				</div>
	<!-- End Nav -->
</div>
		

		
		<div id="content" class="roundCorners">
			<?php $this->load->view($main_content);?>
		</div>
		
		<div id="footer">
			<p>&copy; Simon Williamsson | Sasa Ristic | 2012 </p>
			<p>Simon@wilsim.se</p><p>sasa@lychee.se</p>
		</div>
		
	</div>
	
	
</body>

</html>