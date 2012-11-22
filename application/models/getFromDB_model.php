<?php
/*
 * This model gets a column from a specified table, and returns it as an array
 */

class GetFromDB_model extends CI_Model{
	
	function fetch($table, $col){
		
		$query = $this->db->query("SELECT $col FROM $table");
		
		if ($query->num_rows() > 0){
			
			$result = array();
			
			$numRows = $query->num_rows();
			
			$row = $query->first_row('array');
			$result[] = $row[$col];
			
			for($i=0; $i < ($numRows -1); $i++){
				
				$row = $query->next_row('array');
				$result[] = $row[$col];
			}
			
			return $result;
			
		}else{
			return false;
		}
		
	}
	
	
	
	
	
}



?>