<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Email_Class extends CI_Model {


	public function RegisterEmail($email,$msg){

					$this->load->library('email', array('mailtype' => 'html'));
					$this->email->from('admin@tapdashheuristics.com', 'DirtyJobs');
					$this->email->to($email);
					$this->email->subject('Dirty Jobs Notification');
					$this->email->message($msg);
					$this->email->send();
					$data = array('status' => "1");

		}



}
