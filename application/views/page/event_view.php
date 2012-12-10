<?php
	$eventId = $this->uri->segment(4);
	
	var_dump($this->event_model->getEvent($eventId));

?>