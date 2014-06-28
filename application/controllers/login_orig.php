<?php

class Login extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		session_start();
	}
	
	public function index(){
		
		$data = array();
		$this->load->view('template/page_header', $data);
		$this->load->view('login_view');
	}
	
	function validate($username = null, $password = null){
		$data['username'] = $username;
		$data['password'] = SHA($password);
	}

	function login(){
	}
	
	function logout(){
	}
	
}//end class