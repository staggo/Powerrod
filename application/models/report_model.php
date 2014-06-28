<?php

class Report_Model extends CI_Model{

	function index(){
		//Return a list of all calls
		$query = $this->db->get('reports');
		$this->db->order_by('id', 'desc');

		$result = $query->result_array();
		return $result;
	}
}//end class