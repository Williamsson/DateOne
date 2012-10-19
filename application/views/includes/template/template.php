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
				
			</div>
			
			
		</div>

		
		<div id="content" class="roundCorners">
			<?php $this->load->view($main_content);?>
		</div>
		
		<div id="footer">
			<p>&copy; Simon Williamsson | Sasa Ristic |2012</p>
			<p>Sim.Williamsson@gmail.com</p><p>sasa@lychee.se</p>
		</div>
		
	</div>
	
	
</body>

</html>