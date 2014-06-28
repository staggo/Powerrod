<?php

class Event_Model extends CI_Model{


	function index(){
		//Return a list of all calls
		$query = $this->db->get('events');
		$result = $query->result_array();
		return $result;
	}
	
	function get_event_details($id){
	//Return call details including customer details
		
		$this->db->where('id', $id);
		//$this->db->join('id', 'events.id = calls.powerrod_call_id');
		
		$query = $this->db->get('events');
		$result = $query->result_array();
		return $result;
	}
	
		function get_call($id){
		//Return call table
		$this->db->where('id', $id);
		$query = $this->db->get('events');
		$result = $query->result_array();
		return $result;
	}

		function insert_event($call_id){
			$data = array(
		   		'call_id' 		=>		$this->input->post('call_id'),
				'logged_date' 	=> 		date('Y-m-d H:i:s', strtotime($this->input->post('logged_date'))),
				'logged_by' 	=> 		$_SESSION['user_id'],
				'description' 	=> 		$this->input->post('description'),
				'event_type'	=> 		3
			);

			$this->db->insert('events', $data);
		}
		
		function get_call_events($call_id){
			$this->db->where('call_id', $call_id);
			$query = $this->db->get('events');
			$result = $query->result_array();
			return $result;
		}
		
		function insert_call_open_event($last_call){
			$data = array(
		   		'call_id' 		=>		$last_call,
				'logged_date' 	=> 		date('Y-m-d H:i:s', strtotime($this->input->post('logged_date'))),
				'logged_by' 	=> 		$_SESSION['user_id'],
				'description' 	=> 		'Call Opened',
				'event_type'	=> 		1
			);
			$this->db->insert('events', $data);
		}
		
		function insert_sms_sent_event($last_call){
			$data = array(
		   		'call_id' 		=>		$last_call,
				'logged_date' 	=> 		date('Y-m-d H:i:s'),
				'logged_by' 	=> 		$_SESSION['user_id'],
				'description' 	=> 		'SMS Sent',
				'event_type'	=> 		2
			);
			$this->db->insert('events', $data);
		}
	
}//end class