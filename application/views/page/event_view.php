<?php
	$eventId = $this->uri->segment(4);
	
	$eventData = $this->event_model->getEvent($eventId);
	
	if(!$eventData){
		echo "<h2>" . label('something_went_wrong_try_later',$this);
	}else{?>
		<div id="event">
			<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBBvHkHD2fiDut44IhwhFZHhJhUDclYO4I&sensor=false"></script>
			<script type = "text/javascript" src="<?php echo base_url();?>scripts/showEventMap.js"></script>
			
			<div id="eventHeader">
				<h2><?php echo $eventData['title']?></h2>

				<div id="eventDescription">
					<?php echo $eventData['description'];?>
				</div>
				
			</div>
			
			<div id="eventSidebar">
				<h3><?php if($eventData['max_participants'] != 0){ echo label('max_participants',$this) . ": " . $eventData['max_participants'];}?></h3>
				<h3><?php echo label('start_date',$this) . ":</h3> <p>" . $eventData['start_date']?></p>
				<h3><?php echo label('end_date',$this) . ":</h3> <p>" . $eventData['end_date']?></p>
				<h4><?php echo label('participants',$this);?>: </h4>
				<ul>
					<?php
						if(isset($eventData['participants'])){
							foreach($eventData['participants'] as $participant){
								$username = $this->user_model->getUsername($participant);
								echo "<li><a href='". base_url() . $this->language_model->getLanguage() .  "/user/profile/$username'>" . $username . "</a></li>";
							}
						}
					?>
				</ul>
			</div>
			
			<div id="googleMap"></div>
		
		</div>
		
		
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
<?php }
?>