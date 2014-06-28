<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  
    class Login_model extends CI_Model 
    {
      
        /**
         * @name        functionName
         * 
         * @desc        functionDescription
        */
          
        function verify_user($email, $password) 
        {
			$q = $this
				->db
				->where('email', $email)
				->where('password', sha1($password))
				->limit(1)
				->get('users');
		
			if($q->num_rows() >0)
			{
				return $q->row();
			}else{
				return false;
    		}
	    } //end function

		function get_user_name($email){
			$q = $this
				->db
				->where('email', $email)
				->limit(1)
				->get('users');
		
			if($q->num_rows() >0)
			{
				return $q->row('firstname') . ' ' . $q->row('lastname');
			}else{
				return false;
    		}
		}
		
		function get_user_id($email){
			$q = $this
				->db
				->where('email', $email)
				->limit(1)
				->get('users');
		
			if($q->num_rows() >0)
			{
				return $q->row('id');
			}else{
				return false;
    		}
		}


	}//end class
	
    /* End of file login_model.php */
    /* Location: ./application/models/login_model.php */