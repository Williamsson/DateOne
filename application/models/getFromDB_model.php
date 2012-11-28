<?php

/*
 * This model is responsible for all advanced querys that fetches stuff from the database
 */

class GetFromDB_model extends CI_Model{
	
/*
 * This function gets a column from a specified table, and returns it as an array
 */
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
	
	/*
	 * Finds the trait ID for a specified trait name (which is the table name of the desired trait) from the traits table, and returns it.
	 * If it cannot find the id, which should only happen if it gets the wrong trait name, it returns false.
	 */
	
	function getTraitID($trait){
		$query = $this->db->query("SELECT id FROM traits WHERE name = '$trait'");
		
		if($query->num_rows() > 0){
			$row = $query->row();
			return $row->id;
		}else{
			return false;
		}
	}
	
	function getTraitName($id){
		$query = $this->db->query("SELECT value FROM traits WHERE id = '$id'");
		
		if($query->num_rows() > 0){
			$row = $query->row();
			return $row->value;
		}else{
			return false;
		}
	}
	
	function countSumTraits(){
		return $this->db->count_all('traits');
	}
	
	function getTraitsAndNames(){
		
		$this->db->select('value');
		$query = $this->db->get('traits');
		$return = array();
		
		
		foreach ($query->result_array() as $row){
			
			$this->db->select('value');
			$query = $this->db->get($row['value']);
			$table = $row['value'];
			
			$this->db->select('value');
			$currentValues = array();
			$query2 = $this->db->get($table);
			
			foreach($query2->result() as $row){
				$currentValues[] = $row->value;
			}
			
		   $return[] = array(
		   		'table' => $table,
				'arrayholder' => array(
					'values' => $currentValues
				),
				
		   );
		}
		
		
		
		return $return;
	}
	
	
	
	
	
	
}



?>