<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller{

	public function __construct(){
		parent::__construct();
		
		session_start();
		if(!isset($_SESSION['username']))
		{
			redirect('login');
		}

		$this->load->model('report_model');
	}

		public function index(){
		//lists all calls in HTML table with links to each call		
		$data['reports'] = $this->report_model->index();
		$data['page_title'] = 'Report List';
	
		$this->load->view('template/page_header', $data);
		$this->load->view('template/navbar', $data);
		$this->load->view('report/list', $data);
		$this->load->view('template/page_footer', $data);
	}
}