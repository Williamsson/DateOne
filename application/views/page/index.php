<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Date One</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<!-- <link rel="stylesheet" href="stylesheets/eleventh.css"> -->

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>
	<!-- Favicons
	================================================== -->
	<!-- <link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<!-- Start Body -->
<div class="container">
	<div class="eleven columns aplha">
		<div class="row">
			<img src="<?php echo base_url();?>img/couple.jpg"/>
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
				<input type="text" id="email"  placeholder="e-mail" name="email" class="required requiredField" value="" />
				<input type="text" id="remail" placeholder="Upprepa e-mail" name="remail" class="required requiredField" value="" />
				<input type="password" placeholder="Lösenord" name="password" id="password" value="" class="required requiredField" />
				<input type="password" placeholder="Upprepa Lösenord" name="rpassword" id="password" value="" class="required requiredField" />
			</form>
			<button type="submit">Registrera</button>
	</div>			
</div>
		<hr class="noborder" />
		<hr class="noborder" />
<div class="container">
	<div class="one-third column">
		<h3><?php echo label('what_is_dateone_header',$this)?></h3>
		<p><?php echo label('what_is_dateone',$this)?></p>
	</div>
	<div class="one-third column">
		<h3><?php echo label('who_uses_dateone_header',$this)?></h3>
		<p><?php echo label('who_uses_dateone',$this)?></p>
	</div>
	<div class="one-third column">
		<img src="<?php echo base_url();?>img/armani.jpg"/>
	</div>
	<hr />
	<hr class="noborder" />
</div>
	<!-- End Body -->
	
	<hr class="noborder" />
	<!-- Start Footer -->
<div class="container">
		<div class="sixteen columns content">

			<div class="clearfix section" id="footer">
				<a href="#top">
					<img src="<?php echo base_url();?>img/up.png" alt="Back To Top"/>
				</a>

			</div>

		</div>
</div>
	<!-- End Footer -->
<!-- </div> --> <!-- container -->
<script type="text/javascript" src="<?php echo base_url();?>scripts/script.js"></script>

<!-- End Document
================================================== -->
</body>
</html>