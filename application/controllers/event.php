<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Event extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		session_start();
		if( !isset($_SESSION['username']) )
		{
			redirect('login');
		}

		$this->load->model('event_model');
		$this->load->model('user_model');
		$this->load->model('engineer_model');
	}

	public function index(){
		//lists all events in HTML table with links to each call		
		
		$data['page_title'] = 'Event List';
	
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('event/list', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function addnew($call_id = null){
		$data['call_id'] = $this->uri->segment(3);
		$data['event_type'] = $this->uri->segment(4);
		$data['page_title'] = 'New Event';
		$data['engineers'] = $this->engineer_model->get_engineers_select();
		$data['assigned_engineer'] = $this->engineer_model->get_assigned_engineer($this->uri->segment(3));
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('event/addnew', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	public function insert(){
		$data['call_id'] = $this->uri->segment(3);
		$data['postitems'] = $this->input->post();
		
		$this->event_model->insert_event($this->uri->segment(3));

		redirect('/call/edit/' . $_SESSION['call_id']);
	}
	
	public function insert_sms_sent(){
		$data['call_id'] = $this->uri->segment(3);
		
		$this->event_model->insert_sms_sent_event($this->uri->segment(3));

		redirect('/call/edit/' . $_SESSION['call_id']);
	}
	
	public function edit(){
		//page where events are edited (called by event id); 
		
		$data['id'] = $this->uri->segment(3);
		$data['page_title'] = 'Edit Event ' . $data['id'];
		$data['event'] = $this->event_model->get_event_details($data['id']);
		
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('event/edit', $data);
		$this->load->view('template/page_footer', $data);
	}
	
	
	
}