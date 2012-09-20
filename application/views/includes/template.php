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
		<?php 
		//HOW TO: Get text. Username references to the $lang['username'] in /language/english/en_lang, although it goes through the /helpers/lang_translate_helper/ function
		//label('username', $this); 
		?>
	</div>
	
	<div id="pageWrapper">
		
		<div id="header">

			<div id="languageBar">
				
			</div>
			
			<div id="login">
			
			</div>
			
			<div id="logo"></div>
		
			
		</div>

			<div id="vertMenuWrapper">

				<div id="vertMenu">
					<ul>
						<li><a href="http://google.se">Test</a></li>
						<li><a href="http://google.se">Test</a></li>
						<li><a href="http://google.se">Test</a></li>
						<li><a href="http://google.se">Test</a></li>
						<li><a href="http://google.se">Test</a></li>
					</ul>
				</div>
			
			</div>
		
		
		<div id="content">
			
		</div>
		
		<div id="footer">
			
		</div>
		
	</div>
	
	
</body>

</html>