<?php

//Gets and returns the correct language if possible, otherwise returns what was given
function label($label, $obj){
	
	$return = $obj->lang->line($label);
	if($return){
		return $return;
	}
	else{
		return $label;
	}
}
?>