<?php

class Event_Model extends CI_Model{


	function index(){
		//Return a list of all calls
		$query = $this->db->get('events');
		$result = $query->first_row();
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
				//'logged_date' 	=> 		date('Y-m-d H:i:s', strtotime($this->input->post('logged_date'))),
				'logged_date' 	=> 		date('Y-m-d H:i:s', $this->input->post('logged_date')),
				'logged_by' 	=> 		$_SESSION['user_id'],
				'description' 	=> 		$this->input->post('description'),
				'event_type'	=> 		$this->input->post('event_type')
			);

			$this->db->insert('events', $data);
		}
		
		function get_call_events($call_id){
			
			$this->db->select('events.id, events.call_id, events.logged_date, events.logged_by, events.description, events.event_type, event_types.icon');
			$this->db->from('events');
			$this->db->where('call_id', $call_id);
			$this->db->join('event_types', 'event_types.id = events.event_type');
			
			$this->db->where('call_id', $call_id);
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		
		/*
		function get_call_events($call_id){
			$this->db->where('call_id', $call_id);
			$query = $this->db->get('events');
			$result = $query->result_array();
			return $result;
		}
		*/
		
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
		
		function update_event($id){
		//update call in DB

		$this->db->where('id', $id);
		
		$data = array(
			'id' 				=>	$this->input->post('event_id'),
			'logged_date' 		=> 	$this->input->post('logged_date'),
			'customer_telno' 	=> 	$this->input->post('customer_telno'),
			'logged_by' 		=>	$_SESSION['user_id'],
			'description' 		=>	$this->input->post('description'),
		);

		$this->db->update('calls', $data);
	}
	
}//end class