<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Engineer extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		session_start();
		if(!isset($_SESSION['username']))
		{
			redirect('login');
		}

		$this->load->model('engineer_model');
	}

		public function index(){
		//lists all calls in HTML table with links to each call		
		$data['engineers'] = $this->engineer_model->index();
		$data['page_title'] = 'Engineer List';
	
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('engineer/list', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function addnew(){
		//page where new calls are entered
		
		$data['page_title'] = 'Add New Engineer';
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('engineer/addnew', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function edit(){
		//page where calls are edited (called by id); 
		
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Engineer ' . $data['id'];
		$data['user'] = $this->engineer_model->get_engineer_details($data['id']);
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('engineer/edit', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function update(){
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Call ' . $data['id'];
		
		$data['res'] = $this->engineer_model->update_engineer($data['id']);
	
		redirect('engineer');
	}
	
	public function insert(){
		
		$this->engineer_model->insert_engineer();
	
		redirect('engineer');	
	
	}

}//end class
