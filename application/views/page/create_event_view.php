<script type="text/javascript">  
	$(function(){
		$('#startTime').datetimepicker({dateFormat: "yy/mm/dd" });;
	});  
	$(function(){
		$('#endTime').datetimepicker({dateFormat: "yy/mm/dd" });;
	});

	$(function(){
		$( "#slider" ).slider({ values: [1], max: 21});
	});
	
</script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBvHkHD2fiDut44IhwhFZHhJhUDclYO4I&sensor=false"></script>
<script type = "text/javascript" src="<?php echo base_url();?>scripts/createEventMap.js"></script>
<script type = "text/javascript" src="<?php echo base_url();?>scripts/notifyRange.js"></script>
<script type = "text/javascript" src="<?php echo base_url();?>scripts/createEvent.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/timepicker.js"></script>


<div id="createEvent">
	
	<div class="infoColumn">
		<label for="eventname"><?php echo label('event_name',$this)?></label>
		<input type="text" id="eventName" name="eventname">

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
	<textarea name="description" id="description"></textarea>

	<div id="googleMap"></div>
	
	<div class="smallContainer">
		<p><?php echo label('event_notification_range',$this);?></p>
		<input type="text" style="width:20px; margin-top:10px;" id="notifyRange" value="1"/>
	</div>
	<div id="slider"></div> <input type="button" id="createEventButton" value="<?php echo label('create_event',$this)?>">
</div>













