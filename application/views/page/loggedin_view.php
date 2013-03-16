<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBvHkHD2fiDut44IhwhFZHhJhUDclYO4I&sensor=false"></script>
<script type = "text/javascript" src="<?php echo base_url();?>scripts/allEventsMap.js"></script>

<div id="loggedInArea">
	<h1><?php echo label('welcome',$this) . " " . $this->session->userdata('username')?>!</h1>
	
	<div id="allEventsMap">
		<h3><?php echo label('event_map',$this)?>: </h3>
		<div id="googleMap"></div>
	</div>
	
	<div id="searchBar">
		<p>Här är tanken att man ska söka efter användare</p>
		
	</div>

</div>


