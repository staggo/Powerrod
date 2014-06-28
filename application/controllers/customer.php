<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		session_start();
		if(!isset($_SESSION['username']))
		{
			redirect('login');
		}

		$this->load->model('customer_model');
	}

		public function index(){
		//lists all calls in HTML table with links to each call		
		$data['customers'] = $this->customer_model->index();
		$data['page_title'] = 'Customer List';
	
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('customer/list', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function addnew(){
		//page where new calls are entered
		
		$data['page_title'] = 'Add New Customer';
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('customer/addnew', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function edit(){
		//page where calls are edited (called by id); 
		
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Customer ' . $data['id'];
		$data['customer'] = $this->customer_model->get_customer_details($data['id']);
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('customer/edit', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function update($id){
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Customer ' . $data['id'];
		
		$data['res'] = $this->customer_model->update_customer($data['id']);
	
		redirect('customer');
	}
	
	public function insert(){
		
		$this->customer_model->insert_customer();
	
	redirect('customer');
	
	}

}//end class
