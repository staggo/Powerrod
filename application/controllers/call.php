<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Call extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		session_start();
		if( !isset($_SESSION['username']) )
		{
			redirect('login');
		}

		$this->load->model('call_model');
		$this->load->model('customer_model');
		$this->load->model('user_model');
		$this->load->model('engineer_model');
		$this->load->model('event_model');
		//$this->load->model('customer_model');
	}

	/*
	Call creation and management functions
	
	index
	addnew
	edit
	update
	*/

	public function index(){
		//lists all calls in HTML table with links to each call		
		$data['calls'] = $this->call_model->index();
		$data['page_title'] = 'Call List';
	
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('call/list', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function addnew(){
		//page where new calls are entered
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('customer_call_id', 'Customer ID', 'required');
		
		
		$data['page_title'] = 'Add New Call';
		$data['logged_by_list'] = $this->user_model->get_users_select();
		$data['engineers'] = $this->engineer_model->get_engineers_select();
		$data['customers'] = $this->customer_model->get_customers_select();
 		//$data['customers'] = $this->customer_model->get_customers_select();
	
		if ($this->form_validation->run() == FALSE){
			$this->load->view('template/page_header', $data);
			$this->load->view('template/navbar', $data);
			$this->load->view('call/addnew', $data);
			$this->load->view('template/page_footer', $data);
		}else{
			redirect();
		}
	}
	
	public function edit(){
		//page where calls are edited (called by id); 
		
		$_SESSION['call_id'] = $this->uri->segment(3);
		
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Call ' . $data['id'];
		$data['call'] = $this->call_model->get_call_details($data['id']);
		$data['engineers'] = $this->engineer_model->get_engineers_select();
		$data['logged_by_list'] = $this->user_model->get_users_select();
		$data['logged_by'] = $this->user_model->get_call_logged_by($this->uri->segment(3));
		$data['assigned_engineer'] = $this->engineer_model->get_assigned_engineer($this->uri->segment(3));
		$data['events'] = $this->event_model->get_call_events($data['id']);
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('call/edit', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	/*public function update(){
		
		$data['id'] = $this->uri->segment(3);
		$this->call_model->update_call($data['id']);
		
		redirect('call');
		
	}*/
	
	public function update(){
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Call ' . $data['id'];
		
		$data['res'] = $this->call_model->update_call($data['id']);
	
		redirect('call/edit/' . $_SESSION['call_id']);
	}
	
	public function insert(){
		
		$data['postitems'] = $this->input->post();
		$this->call_model->insert_call();
		$last_call = $this->db->insert_id();
		$this->event_model->insert_call_open_event($last_call);		
		
		redirect('call/edit/' . $last_call);
	}
	
	

/*
Call query and selection functions

list_uninvoiced_calls
report
*/
	public function list_uninvoiced_calls(){
		
	}

	public function report(){
		$this->load->library('export');
		
		$query = $this->call_model->report();
		$this->export->to_excel($query, 'report'); 
	}
	
	public function map(){
			
		$this->load->library('googlemaps');
		
		$site_details = $this->call_model->get_call_site_details($_SESSION['call_id']);
		$postcode = $site_details[0]['site_postcode'];
			
		$config['center'] = $postcode;
		$config['zoom'] = '16';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = $postcode;
		
		$marker['infowindow_content'] = 'test';
		
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();	
		$data['location'] = $postcode;
		$data['page_title'] = 'Map for call ' . $_SESSION['call_id'];
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('call/map', $data);
		$this->load->view('template/page_footer', $data);
	}
}


