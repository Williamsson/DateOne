<!DOCTYPE html>
<html>
<head>
	<title>DateOne</title>
	<link rel="stylesheet" href="<?php echo base_url();?>css/template.css" type="text/css" media="screen"/>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
	<meta name="description" content="<?php echo $description;?>"/>
	<meta name="keywords" content="<?php echo $keyword;?>"/>
	
	
</head>
<body>
	<?php require_once("analyticstracking.php");?>
	
	<div id="mainMenu">
		<ul>
			<li><a href="http://www.google.se">Profil</a>
				<ul>
					<li><a href="http://www.google.se">Mitt galleri</a></li>
					<li><a href="http://www.google.se">Vänner</a></li>
				</ul>
			</li>
			<li><a href="http://www.google.se">Träffar</a></li>
			<li><a href="http://www.google.se">Flörtar</a></li>
			<li><a href="http://www.google.se">Meddelanden</a></li>
			<li><a href="http://www.google.se">Chat</a></li>
			<li><a href="http://www.google.se">Logga ut</a></li>
		</ul>
	</div>
	
	<div id="pageWrapper">
		
		<div id="header" class="roundCorners">

			<div id="languageBar">
				<?php echo label('language',$this) . ": (språkval här)" ;?>
			</div>
			
			<div id="login">
				<?php echo label('username', $this) . " & " . label('password', $this) . " (Login-knapp)";?>
			</div>
			
			<div id="logo"></div>
		
			
		</div>

			<div id="vertMenuWrapper" class="roundCorners">

				<div id="vertMenu">
					<ul>
						<li><a href="http://google.se">Start</a></li>
						<li><a href="http://google.se">Kom igång</a></li>
						<li><a href="http://google.se">Uppgradera</a></li>
						<li><a href="http://google.se">Om oss</a></li>
						<li><a href="http://google.se">Kontakt</a></li>
					</ul>
				</div>
			
			</div>
		
		
		<div id="content" class="roundCorners">
			<?php //$this->load->view($main_content);?>
		</div>
		
		<div id="footer">
			<p>&copy; Simon Williamsson 2012</p>
			<p>Sim.Williamsson@gmail.com</p>
		</div>
		
	</div>
	
	
</body>

</html>