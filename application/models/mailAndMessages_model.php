<?php
class MailAndMessages_model extends CI_Model{
	
	public function messages_count($userId) {
		$this->db->where('id',$userId);
        return $this->db->count_all("user_messages");
    }
	 
	    public function fetch_countries($limit, $start) {
	        $this->db->limit($limit, $start);
	        $query = $this->db->get("user_messages");
	 		
	        if($query->num_rows() > 0) {
	            foreach ($query->result() as $row) {
	                $data[] = $row;
	            }
	            return $data;
	        }
	        return false;
	   }
	
}