<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller{

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
		$this->load->helper('email');
	}



	/*public function send_sms_email($last_call){
		$this->load->library('email');
		
		$this->event_model->insert_sms_sent_event($last_call);
		
		$this->email->from('darren@powerrod.com', 'Powerrod Office');
		$this->email->to('447738338493');
		$this->email->cc('kingstaggo.com');
		
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');
		
		$this->email->send();
		
		echo $this->email->print_debugger();
		
		redirect('call/edit/' . $_SESSION['call_id']);
		
	}*/
	
	
	public function send_sms_email($last_call){
		// The message
		$message = "Line 1\r\nLine 2\r\nLine 3";
		// In case any of our lines are larger than 70 characters, we should use wordwrap()
		$message = wordwrap($message, 70, "\r\n");
		
		// Send
		//send_email('kingstaggo@yahoo.com', 'Test message', $message);
		$to = 'sendsms@messaging.intellisoftware.co.uk';
		$subject = 'Username:darren_hepburn Password:thierry To:447738338493';
		
		send_email($to, $subject, $message);
		//mail('caffeinated@example.com', 'My Subject', $message);
		$this->event_model->insert_sms_sent_event($last_call);
		redirect('call/edit/' . $_SESSION['call_id']);
	}
}