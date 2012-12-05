<?php
$test = $traits[$i];
$tableName = $test['table'];
$tableValues = $test['arrayholder']['values'];

$options = array();
$options[] = label('no_answer',$this);

foreach($tableValues as $value){
	$options[] = label($value,$this);
}

if(is_array($userTraits[$tableName]['value'])){
	$val[] = $userTraits[$tableName]['value'];
}else{
	$val = $userTraits[$tableName]['value'];
}

if($counter <= 3){
	$firstColumn .= form_label(label($tableName,$this), $tableName);
		
	if($tableName == "searching_for" || $tableName == "spoken_languages" || $tableName == "favorite_music_genre" || $tableName == "friday_night_activity" || $tableName == "hobby"){
		$firstColumn .= form_multiselect($tableName . "[]",$options, $val);
	}else{
		$firstColumn .= form_dropdown($tableName,$options, $val);
	}
}elseif($counter > 3 && $counter <= 14){
		
	$secondColumn .= form_label(label($tableName,$this), $tableName);
		
	if($tableName == "searching_for" || $tableName == "spoken_languages" || $tableName == "favorite_music_genre" || $tableName == "friday_night_activity" || $tableName == "hobby"){
		$secondColumn .= form_multiselect($tableName . "[]",$options, $val);
	}else{
		$secondColumn .= form_dropdown($tableName,$options, $val);
	}
}else{
	$thirdColumn .= form_label(label($tableName,$this), $tableName);
		
	if($tableName == "searching_for" || $tableName == "spoken_languages" || $tableName == "favorite_music_genre" || $tableName == "friday_night_activity" || $tableName == "hobby"){
		$thirdColumn .= form_multiselect($tableName . "[]",$options, $val);
	}else{
		$thirdColumn .= form_dropdown($tableName,$options, $val);
	}
}
?>
















<?php 
foreach($query->result() as $row){
	$traitId = intval($row->trait_id);
	$traitValue = intval($row->value);
	$traitName = $this->getFromDB_model->getTraitName($traitId);
}
?>