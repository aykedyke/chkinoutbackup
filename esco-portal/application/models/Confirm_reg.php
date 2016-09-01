<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Confirm_reg extends CI_Model {

	public function UserActivated($email){
		$strEmail = stripslashes(filter_var($email, FILTER_SANITIZE_STRING));
		$this->db->where('strEmail',$email);
		$this->db->update('th_users', array('isActivated' => 1));


	}
}