<?php

class General_model extends CI_Model{
	

//Returns an array with all the basic information that a page on the site should have in common, such as keywords
function getDataContent(){
	$data = array();
	$data['keyword'] = "";
	$data['description'] = "";
	
	
	return $data;
}

	
	
	
	
	
	
	
	
	
	
}