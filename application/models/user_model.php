<?php

class User_Model extends CI_Model{
	
	function index(){
		//gets all users
		$query = $this->db->get('users');
		$result = $query->result_array();
		return $result;
	
	}
	
	function get_user_details($id){
		//gets single user by id
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		$result = $query->result_array();
		return $result;
	}
	
	
	function insert_user(){
		//insert new call into DB
		$data = array(
			'firstname' => 	$this->input->post('firstname'),
			'lastname'  => 	$this->input->post('lastname'),
			'password'  => 	sha1($this->input->post('password')),
			'email'     =>	$this->input->post('email'),
			'active'    => 	$this->input->post('active'),
		);

		$this->db->insert('users', $data);
	}	
	
	function update_user($id){
		//insert new call into DB
		
		$this->db->where('id', $id);
		
		$data = array(
			'username'  =>	$this->input->post('username'),
			'firstname' => 	$this->input->post('firstname'),
			'lastname'  => 	$this->input->post('lastname'),
			'password'  => 	sha1($this->input->post('password')),
			'email'     =>	$this->input->post('email'),
			'active'    => 	$this->input->post('active'),
		);

		$this->db->update('users', $data);
	}	
	
	function get_users_select(){
		
		$this->db->select('id, firstname, lastname');		
		$dbres = $this->db->get('users');
		$ddmenu = array();
		foreach ($dbres->result_array() as $tablerow) {
			$ddmenu[$tablerow['id']] = $tablerow['firstname'] . ' ' . $tablerow['lastname'];
		}
		return $ddmenu;	
	}
	
	function get_call_logged_by($call = null){
		$this->db->select('logged_by');
		$this->db->where('id', $call);
		$query = $this->db->get('calls');
		
		$result = $query->result_array();
		return $result[0];
	}
	
	
}