<?php

//Gets and echoes the correct language if possible, otherwise echoes what was given
function label($label, $obj){
	
	$return = $obj->lang->line($label);
	if($return){
		echo $return;
	}
	else{
		echo $label;
	}
}
?>