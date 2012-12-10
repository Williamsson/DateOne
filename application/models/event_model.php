<?php 
class Event_model extends CI_Model{
	
	function createEvent($creator, $eventName, $startDate, $endDate, $maxParticipants, $description, $eventLong, $eventLat,$notifySE1, $notifySE2, $notifyOE1, $notifyOE2){
		
		$query = $this->db->query("INSERT INTO events (owner, start_date, end_date, title, description, max_participants, longitude, latitude, notify_se1, notify_se2, notify_oe1, notify_oe2) 
					VALUES('$creator', '$startDate', '$endDate', '$eventName', '$description', '$maxParticipants', '$eventLong', '$eventLat', '$notifySE1', '$notifySE2', '$notifyOE1', '$notifyOE2')");
		
		if($this->db->affected_rows() > 0){
// 			$this->findNearbyUsers($notifySE1, $notifyOE1, $notifySE2, $notifyOE2);
			return true;
		}else{
			return false;
		}
	}
	
	function findNearbyUsers($eventId){
		$query = $this->db->query("SELECT notify_se1, notify_se2, notify_oe1, notify_oe2 FROM events WHERE id='$eventId'");
		
		if($query->num_rows() > 0){
			foreach($query->result() as $row){
				$long1 = $row->notify_se1;
				$long2 = $row->notify_se2;
				$lat1 = $row->notify_oe1;
				$lat2 = $row->notify_oe2;
			}
			
			$query = $this->db->query("SELECT id FROM users WHERE (longitude > '$long1' AND longitude < '$long2') AND (latitude > '$lat2' AND latitude < '$lat1')");
			
			if($query->num_rows() > 0){
				$users = array();
				foreach($query->result() as $row){
					$users[] = $row->id;
				}
				return $users;
			}else{
				return false;
			}
			
		}else{
			return false;
		}
	}
	
	public function fetchEvents($limit, $start,$userId){
		$this->db->limit($limit, $start);
		$this->db->select('id,title,start_date,end_date');
		$this->db->order_by('end_date','DESC');
		$this->db->where('owner',$userId);
		$query = $this->db->get("events");
			
		if($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		return false;
	}
	
	public function getUserSumEvents($userId){
		$this->db->where('owner',$userId);
		return $this->db->count_all("events");
	}
	
	public function getEvent($eventId){
		$query = $this->db->query("SELECT owner, start_date, end_date, title, description, max_participants, longitude, latitude FROM events WHERE id ='$eventId'");
		
		if($query->num_rows() > 0){
			$result = array();
			foreach($query->result() as $row){
				$result = array(
							'owner' => $row->owner,
							'start_date' => $row->start_date,
							'end_date' => $row->end_date,
							'title' => $row->title,
							'description' => $row->description,
							'max_participants' => $row->max_participants,
							'longitude' => $row->longitude,
							'latitude' => $row->latitude,
							'participants' => array(),
				);
			}
			
			$query = $this->db->query("SELECT user_id FROM event_participants WHERE id = '$eventId'");
			if($query->num_rows() > 0){
				$participants = array();
				foreach($query->result() as $row){
					$participants[] = $row->user_id;
				}
			$result['participants'] = $participants;
			}
			return $result;
		}
		
	}
}
?>