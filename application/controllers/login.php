<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
    class Login extends CI_Controller 
    {
	
		function __construct()
		{
			parent::__construct();
			session_start();
		}
	
        function index() 
        {
      		
			$data['page_title'] = 'Log in';
	
			$this->load->view('template/page_header', $data);
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email Address', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');				
			
			if($this->form_validation->run() !=FALSE)
			{
				//validation passed
				$this->load->model('login_model');
				$res = $this->login_model->verify_user(
						$this->input->post('email'),
						$this->input->post('password')
				);
					
				if($res !== false){
					//person has an account
					
					$username = $this->login_model->get_user_name($this->input->post('email'));
					$userid = $this->login_model->get_user_id($this->input->post('email'));
					
					$_SESSION['username'] = $username;
					$_SESSION['user_id'] = $userid;
					
					redirect('call');
				}
			}
			
			$this->load->view('login_view');
        }
		
		function logout()
		{
			session_destroy();
			redirect();
		}
          
    } 
	
    /* End of file login.php */
    /* Location: ./application/controllers/login.php */