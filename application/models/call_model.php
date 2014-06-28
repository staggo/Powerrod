<?php

class Call_Model extends CI_Model{

	function index(){
		//Return a list of all calls
		$this->db->select('calls.id, calls.customer_call_id, calls.customer_id, calls.logged_date, calls.site_address , calls.site_postcode, calls.site_telno, calls.invoice_no, calls.description, customers.account_no, customers.name');
		$this->db->from('calls');
		$this->db->join('customers', 'customers.id = calls.customer_id');
		$this->db->order_by('id', 'desc');
		$query = $this->db->get();
		
		$result = $query->result_array();
		return $result;
	}
	
	function get_call_details($id){
	//Return call details including customer details
		$this->db->select('*');
		$this->db->from('calls');
		$this->db->where('calls.id', $id);
		$this->db->join('customers', 'customers.id = calls.customer_id');
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	
	function get_call($id){
		//Return call table
		$this->db->where('id', $id);
		
		$query = $this->db->get('calls');
		
		$result = $query->result_array();
		return $result;
	}

	function insert_call(){
		//insert new call into DB
		$data = array(
			'customer_call_id' =>	$this->input->post('customer_call_id'),
			'customer_id' 		=>	$this->input->post('customer_name'),
			'customer_contact' => 	$this->input->post('12345'),
			'customer_telno' => 	$this->input->post('customer_telno'),
			'logged_date' 		=> 	date('Y-m-d H:i:s', strtotime($this->input->post('logged_date'))),
			'logged_by' => 			$this->input->post('logged_by'),
			'site_contact' => 		ucwords($this->input->post('site_contact')),
			'site_address' => 		ucwords($this->input->post('site_address')),
			'site_telno' => 		$this->input->post('site_telno'),
			'site_postcode' => 		strtoupper($this->input->post('site_postcode')),
			'engineer' => 			$this->input->post('engineer'),
			'description' =>		$this->input->post('description'),
			'invoice_no' =>			$this->input->post('invoice_no'),
			'last_updated_user' => 	$_SESSION['user_id'],
		);

		$this->db->insert('calls', $data);
	}
	
	function update_call($id){
		//update call in DB

		$this->db->where('id', $id);
		
		$data = array(
			'customer_call_id' =>	$this->input->post('customer_call_id'),
			//'customer_id' 		=>	'3',
			'customer_contact' => 	$this->input->post('12345'),
			'customer_telno' => 	$this->input->post('customer_telno'),
			//'logged_date' => 		date('Y-m-d H:i:s', strtotime($this->input->post('logged_date'))),
			'logged_by' => 			$this->input->post('logged_by'),
			'site_contact' => 		$this->input->post('site_contact'),
			'site_address' => 		$this->input->post('site_address'),
			'site_postcode' => 		$this->input->post('site_postcode'),
			'site_telno' => 		$this->input->post('site_telno'),
			'engineer' => 			$this->input->post('engineer'),
			'description' =>		$this->input->post('description'),
			'invoice_no' =>			$this->input->post('invoice_no'),
			'last_updated_user' => 	$_SESSION['user_id'],
		);

		$this->db->update('calls', $data);
	}
	
	function get_call_logged_by($user_id = null){
		$this->db->select('firstname');
		$this->db->where('id', $user_id);
		$query = $this->db->get('users');
		
		$result = $query->result_array();
		return $result;
	}
	
	function get_call_site_details($call_id){
		$this->db->select('site_contact, site_address, site_postcode, site_telno');
		$this->db->where('id', $call_id);
		$query = $this->db->get('calls');
		
		$result = $query->result_array();
		return $result;
	}
	
	
	
	function report(){

		//$query = $this->db->get('calls');
		//$query = 'SELECT * FROM calls';
		$query = "SELECT * FROM calls";
		return $query;
	}
	
}//end class