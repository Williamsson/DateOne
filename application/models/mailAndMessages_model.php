<?php
class MailAndMessages_model extends CI_Model{
	
	public function messages_count($userId) {
		$this->db->where('id',$userId);
        return $this->db->count_all("user_messages");
    }
	 
    public function fetch_messages($limit, $start,$userId) {
        $this->db->limit($limit, $start);
        $this->db->select('id,sender,receiver,title,date_sent');
        $this->db->order_by('date_sent','DESC');
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
   			$result['senderUsername'] = $this->user_model->getUsername($query->row()->sender);
   			$result['senderId'] = $query->row()->sender;
   			$result['content'] = $query->row()->content;
   			$result['date_sent'] = $query->row()->date_sent;
   			$result['is_read'] = $query->row()->is_read;
   			$result['receiver'] = $query->row()->receiver;
   			
   			return $result;
   		}else{
   			return false;
   		}
   }
   
   public function sendMessage($sender, $receiver, $title, $content){
   		$receiver = intval($receiver);
   		$query = $this->db->query("INSERT INTO user_messages (sender, receiver, title, content, date_sent, is_read) VALUES('$sender', '$receiver', '$title', '$content', now(), 0)");
   		
   		if($this->db->affected_rows() > 0){
   			return true;
   		}else{
   			return false;
   		}
   }
	
   public function countUnreadMessages($userId){
   		$where = array('receiver' => $userId, 'is_read' => 0);
		$this->db->where($where);
		$this->db->from('user_messages');
		$cnt = $this->db->count_all_results();
		return $cnt;
   }
   
   function markMessageAsRead($message){
   		$data = array('is_read' => 1);
   		$this->db->where('id',$message);
   		$query = $this->db->update('user_messages',$data);
   		if($query->affected_rows() == 1){
   			return true;
   		}else{
   			return false;
   		}
   }
   
   
   
   
   
   
   
   
   
   
   
   
}