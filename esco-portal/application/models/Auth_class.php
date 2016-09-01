<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_class extends CI_Model {
	public function is_loggedin()
	{
		 $session = $this->session->userdata('employee_id');
		return $session == '' ? 0 : 1; 
		//return 0;
	}
}