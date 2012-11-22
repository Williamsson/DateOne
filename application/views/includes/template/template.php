<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo base_url() . "img/favicon.ico"?>" type="image/x-icon"> 
	
	<title><?php echo $title?></title>
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/template.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/skeleton.css" type="text/css" media="screen"/>
	<link rel="stylesheet" href="<?php echo base_url();?>css/pages.css" type="text/css" media="screen"/>
	
	<script type="text/javascript" src="<?php echo base_url();?>jquery/jquery-1.8.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>jquery/floating-1.12.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>scripts/menu.js"></script>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="<?php echo $description;?>"/>
	<meta name="keywords" content="<?php echo $keyword;?>"/>
</head>
<body>
	<?php require_once("/../analyticstracking.php");?>
	
	<div id="maincontainer">

		<div id="topsection">
			<div class="innertube">
				<img src="<?php echo base_url();?>img/logo2.png"/>
				
				<div id="languageBar">
					<div id="languagePicker">
						<p><?php echo label('language',$this) . ": ";?></p>
						<img src="<?php echo base_url();?>img/lang/se.png"/>
					</div>
				</div>
				
				<div id="loginArea">
					<form action="#" id="loginForm" method="post">
						<input type="text" id="user" placeholder="Användarnamn" name="user" class="required requiredField" />
						<input type="password" placeholder="Lösenord" name="password" id="password" value="" class="required requiredField" />
						<button type="submit"><?php echo label('login',$this)?></button>
					</form>
				</div>
				
				
				<div id="nav">
					<ul>
						<li class="first"><a href="#"><?php echo label('home',$this)?></a></li>
						<li class=""><a href="#"><?php echo label('get_started',$this)?></a></li>
						<li class=""><a href="#"><?php echo label('upgrade',$this)?></a></li>
						<li class=""><a href="#"><?php echo label('about',$this)?></a></li>
						<li class="last"><a href="#"><?php echo label('contact',$this)?></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		
		<div id="contentwrapper">
			<div id="contentcolumn">
				<?php $this->load->view($main_content);?>
			</div>
		</div>
		
			<?php $this->load->view('includes/template/mainMenu');?>
		
	<div id="footer">
		<p>&copy; Simon Williamsson | Sasa Ristic | 2012 </p>
		<p>Simon@wilsim.se</p><p>sasa@lychee.se</p>
	</div>

	</div>
		
</body>
</html>