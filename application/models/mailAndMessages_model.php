<?php
class MailAndMessages_model extends CI_Model{
	
	public function messages_count($userId) {
		$this->db->where('id',$userId);
        return $this->db->count_all("user_messages");
    }
	 
    public function fetch_messages($limit, $start,$userId) {
        $this->db->limit($limit, $start);
        $this->db->select('id,sender,receiver,title,date_sent');
        $this->db->where('receiver',$userId);
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
   		$this->db->select('sender,title,content,date_sent,is_read,receiver');
   		$this->db->where('id',$messageId);
   		$query = $this->db->get('user_messages');
   		
   		$result = array();
   		if($query->num_rows() > 0){
   			$result['title'] = $query->row()->title;
   			$result['sender'] = $this->user_model->getUsername($query->row()->sender);
   			$result['content'] = $query->row()->content;
   			$result['date_sent'] = $query->row()->date_sent;
   			$result['is_read'] = $query->row()->is_read;
   			$result['receiver'] = $query->row()->receiver;
   			
   			return $result;
   		}else{
   			return false;
   		}
   }
	
}