<?php defined('BASEPATH') OR exit('No direct script access allowed');

class InsertClass extends CI_Model {



public function UpdateProfileInfo($post)
	{
		$intUserID = stripslashes(filter_var($post['profile_id'], FILTER_SANITIZE_STRING));
		$strEmail = stripslashes(filter_var($post['strEmail'], FILTER_SANITIZE_STRING));
		$strFirstName = stripslashes(filter_var($post['strFirstName'], FILTER_SANITIZE_STRING));
		$strLastName = stripslashes(filter_var($post['strLastName'], FILTER_SANITIZE_STRING));
		$strBirthDate = stripslashes(filter_var($post['strBirthDate'], FILTER_SANITIZE_STRING));
		$strGender = stripslashes(filter_var($post['strGender'], FILTER_SANITIZE_STRING));
		$strContactNumber = stripslashes(filter_var($post['strContactNumber'], FILTER_SANITIZE_STRING));

		$data = array(
				'strEmail'			=>	$strEmail,
				'strFirstName'		=>	$strFirstName,
				'strLastName'		=>	$strLastName,
				'dateBirthDate'		=>	$strBirthDate,
				'strGender'			=>	$strGender,
				'strContactNumber'	=>	$strContactNumber,
		);

		$this->db->where('intUserID', $intUserID);
		$qry = $this->db->update('users', $data);
		if($qry){
			$msg = 'success';
		} else {
			$msg = 'error';
		}
		return $msg;
	}
	

}