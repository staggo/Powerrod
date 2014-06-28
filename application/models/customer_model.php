<?php

class Customer_Model extends CI_Model{
	
	function index(){
		//gets all users
		$query = $this->db->get('customers');
		$result = $query->result_array();
		return $result;
	
	}
	
	function get_customer_details($id){
		//gets single engineeer by id
		$this->db->where('id', $id);
		$query = $this->db->get('customers');
		$result = $query->result_array();
		return $result;
	}	
	
	function get_customers_select(){
		$this->db->select('id, name');
		$this->db->order_by('name', 'asc');
		$query = $this->db->get('customers');
		$result = $query->result_array();
		$query->free_result();
		return $result;
	}
	
	function insert_customer(){
		//insert new call into DB
		$data = array(
			'account_no' 	=>	$this->input->post('customer_code'),
			'name' 			=>	$this->input->post('customer_name'),
			'address1' 		=> 	$this->input->post('customer_address'),
			'postcode' 		=> 	$this->input->post('customer_postcode'),
			'tel_no' 		=> 	$this->input->post('customer_tel_no'),
			'fax_no' 		=> 	$this->input->post('customer_fax'),
			'email' 		=> 	$this->input->post('customer_email'),
			/*'customer_plumbing_rate'=> 	$this->input->post('customer_plumbing_rate'),
			'customer_cctv_rate' 	=> 	$this->input->post('customer_cctv_rate'),
			'customer_tanker_rate' 	=> 	$this->input->post('customer_tanker_rate'),
			'customer_jetting_rate' => 	$this->input->post('customer_jetting_rate'),
			'customer_vo_limit' 	=> 	$this->input->post('customer_vo_limit'),*/
			'notes' 		=> 	$this->input->post('customer_notes') 
		);

		$this->db->insert('customers', $data);
	}	
	
	function update_customer($id){
		//Updates customer record
		
		$this->db->where('id', $id);
		
		$data = array(
			'account_no' 	=>	$this->input->post('customer_code'),
			'name' 			=>	$this->input->post('customer_name'),
			'address1' 		=> 	$this->input->post('customer_address'),
			'postcode' 		=> 	$this->input->post('customer_postcode'),
			'tel_no' 		=> 	$this->input->post('customer_tel_no'),
			'fax_no' 		=> 	$this->input->post('customer_fax'),
			'email' 		=> 	$this->input->post('customer_email'),
			/*'customer_plumbing_rate'=> 	$this->input->post('customer_plumbing_rate'),
			'customer_cctv_rate' 	=> 	$this->input->post('customer_cctv_rate'),
			'customer_tanker_rate' 	=> 	$this->input->post('customer_tanker_rate'),
			'customer_jetting_rate' => 	$this->input->post('customer_jetting_rate'),
			'customer_vo_limit' 	=> 	$this->input->post('customer_vo_limit'),*/
			'notes' 		=> 	$this->input->post('customer_notes') 
		);

		$this->db->update('customers', $data);
	}	
	
}