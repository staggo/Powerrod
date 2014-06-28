<?php

class Engineer_Model extends CI_Model{
	
	function index(){
		//gets all users
		$query = $this->db->get('engineers');
		$result = $query->result_array();
		return $result;
	
	}
	
	function get_engineer_details($id){
		//gets single engineeer by id
		$this->db->where('id', $id);
		$query = $this->db->get('engineers');
		$result = $query->result_array();
		return $result;
	}
	
	function insert_engineer(){
		//insert new call into DB
		$data = array(
			'name' 		=>	$this->input->post('name'),
			'type' 		=> 	$this->input->post('type'),
			'tel_no' 	=> 	$this->input->post('tel_no'),
			'vehicle' => 	$this->input->post('vehicle'),
			'active' => 	$this->input->post('logged_by'),
		);

		$this->db->insert('engineers', $data);
	}	
	
	function update_engineer($id){
		//insert new call into DB
		
		$this->db->where('id', $id);
		
		$data = array(
			'name' 		=>	$this->input->post('name'),
			'type' 		=> 	$this->input->post('type'),
			'tel_no' 	=> 	$this->input->post('tel_no'),
			'vehicle' => 	$this->input->post('vehicle'),
			'active' => 	$this->input->post('logged_by'),
		);

		$this->db->update('engineers', $data);
	}	
	
	function get_engineers_select(){
		
		$this->db->select('id, name');		
		$dbres = $this->db->get('engineers');
		$ddmenu = array(0 => '');
		foreach ($dbres->result_array() as $tablerow) {
			$ddmenu[$tablerow['id']] = $tablerow['name'];
		}
		return $ddmenu;	
	}
	
	function get_assigned_engineer($call = null){
		$this->db->select('engineer');
		$this->db->where('id', $call);
		$query = $this->db->get('calls');
		
		$result = $query->result_array();
		return $result[0];
	}
}