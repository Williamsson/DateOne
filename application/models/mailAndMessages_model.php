<?php
class MailAndMessages_model extends CI_Model{
	
	public function messages_count($userId) {
		$this->db->where('id',$userId);
        return $this->db->count_all("user_messages");
    }
	 
    public function fetch_messages($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('id,sender,reciever,title,date_sent');
        $query = $this->db->get("user_messages");
 		
        if($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
   
   public function getMessage($messageId){
   		$this->db->select('sender,title,content,date_sent');
   		$this->db->where('id',$messageId);
   		$query = $this->db->get('user_messages');
   		
   		$result = array();
   		if($query->num_rows() > 0){
   			$result['title'] = $query->row()->title;
   			$result['sender'] = $query->row()->sender;
   			$result['content'] = $query->row()->content;
   			$result['date_sent'] = $query->row()->date_sent;
   			return $result;
   		}else{
   			return false;
   		}
   }
	
}