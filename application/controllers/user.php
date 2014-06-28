<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		session_start();
		if(!isset($_SESSION['username']))
		{
			redirect('login');
		}

		$this->load->model('user_model');
	}

		public function index(){
		//lists all calls in HTML table with links to each call		
		$data['users'] = $this->user_model->index();
		$data['page_title'] = 'User List';
	
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('user/list', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function addnew(){
		//page where new calls are entered
		
		$data['page_title'] = 'Add New User';
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('user/addnew', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function edit(){
		//page where calls are edited (called by id); 
		
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit User ' . $data['id'];
		$data['user'] = $this->user_model->get_user_details($data['id']);
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function update(){
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit User ' . $data['id'];
		
		$data['res'] = $this->user_model->update_user($data['id']);
	
		redirect('user');
	}
	
	public function insert(){
		
		$this->user_model->insert_user();
	
	redirect('user');
	
	}

}//end class
