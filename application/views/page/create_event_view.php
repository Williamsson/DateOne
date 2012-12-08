<script type="text/javascript">  
	$(function() {  
		$('#startTime').datetimepicker({dateFormat: "yy/mm/dd" });;
	});  
	$(function() {  
		$('#endTime').datetimepicker({dateFormat: "yy/mm/dd" });;
	});

	
</script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBvHkHD2fiDut44IhwhFZHhJhUDclYO4I&sensor=false"></script>

<script>
	var myCenter=new google.maps.LatLng(60.508742,15.6649446);
	
	function initialize(){
		var mapProp = {
		  center:myCenter,
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
	  	};
		
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		var marker=new google.maps.Marker({
		  position:myCenter,
		  draggable:true,
	 	});
		
		marker.setMap(map);
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);

</script>


<div id="createEvent">
	
	<div class="infoColumn">
		<label for="eventname"><?php echo label('event_name',$this)?></label>
		<input type="text" name="eventname">

		<label for="maxParticipants"><?php echo label('max_participants',$this)?></label>
		<input type="text" name="maxParticipants" id="maxParticipants">
	</div>
	
	<div class="infoColumn">
		<label for="eventStart"><?php echo label('start_date',$this)?></label>
		<input type="text" name="eventStart" id="startTime">
			
		<label for="eventend"><?php echo label('end_date',$this)?></label>
		<input type="text" name="eventend" id="endTime" />
	</div>
	
	<label for="description"><?php echo label('event_description',$this)?></label>
	<textarea name="description"></textarea>

	<div id="googleMap"></div>
</div>













