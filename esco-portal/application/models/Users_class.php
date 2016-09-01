<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users_class extends CI_Model {

	/* Get User Info */
	public function GetUserData()
	{
		$userdata = $this->encrypt->decode($this->session->userdata('userid'));
		$cookie = $this->encrypt->decode(get_cookie('intUserID'));

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('strUserdata'=>$userdata));
		$this->db->or_where(array('strCookie'=>$cookie));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['intUserID']==""){
			return 0;
		} else {
			return $query;
		}
	}
	public function GetProfileInfo($intUserID)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('intUserID'=>$intUserID));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['intUserID']==""){
			return 0;
		} else {
			return $query;
		}
	}
	public function ListUsers()
	{
		$this->db->select('*');
		$this->db->order_by("intUserID", "DESC");
		$this->db->where(array('strAccountType'=>'user','isDeleted'=>'0'));
		$this->db->from('users');
		$query = $this->db->get();

		if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
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
	public function UpdatePassword($post)
	{
		$intUserID = stripslashes(filter_var($post['profile_id'], FILTER_SANITIZE_STRING));
		$strpassword1 = stripslashes(filter_var($post['strOldPassword'], FILTER_SANITIZE_STRING));
		$strpassword2 = stripslashes(filter_var($post['strNewPassword'], FILTER_SANITIZE_STRING));
		$strpassword3 = stripslashes(filter_var($post['strConfirmNewPassword'], FILTER_SANITIZE_STRING));

		$data = array(
				'strPassword'	=>	encrypt_decrypt('encrypt', $strpassword2)
		);

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('intUserID'=>$intUserID));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if(encrypt_decrypt('decrypt', $query['strPassword'])==$strpassword1){
			$this->db->where('intUserID', $intUserID);
			$qry = $this->db->update('users', $data);
			if($qry){
				$msg = 'success';
			} else {
				$msg = 'error';
			}
		} else {
			$msg = 'old_pass_err';
		}
		return $msg;
	}
	public function UpdatePermission($post)
	{
		$intUserID = stripslashes(filter_var($post['profile_id'], FILTER_SANITIZE_STRING));
		$strPerm = stripslashes(filter_var($post['strPerm'], FILTER_SANITIZE_STRING));

		$data = array('strAccountType'=>$strPerm);
		if($strPerm !== '0'){
			$this->db->where('intUserID', $intUserID);
			$qry = $this->db->update('users', $data);
			if($qry){
				$msg = 'success';
			} else {
				$msg = 'error';
			}
		} else {
			$msg = 'acc_type_err';
		}
		return $msg;
	}
	public function UpdateAvatar($post)
	{
		$intUserID = stripslashes(filter_var($post['user_id'], FILTER_SANITIZE_STRING));

		$img = $post['img'];

		$res = $this->SaveAvatar($img);

		if($res['status'] == 1){
			$data = array('strAvatar'=>'http://tapdashheuristics.com/projects/hopplers/'.$res['file']);

			$this->db->where('intUserID', $intUserID);
			$qry = $this->db->update('users', $data);
			if($qry){
				$msg['status'] = 'success';
			} else {
				$msg['status'] = 'error';
			}
		} else {
			$msg['status'] = 'error';
		}
		return $msg;
	}
	public function SaveAvatar($img)
	{
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data_file = base64_decode($img);
		$file = 'users/uploads/'.uniqid().'.png';
		$success = file_put_contents($file, $data_file, FILE_APPEND | LOCK_EX);
		if($success){
			return array('status' => 1, 'file' => $file);
		} else {
			return array('status' => 0);
		}
	}

	//Register Service Provider
	public function reg_service_provider($post,$randomKey)
	{
		$strEmail = stripslashes(filter_var($post['strEmail'], FILTER_SANITIZE_STRING));
		$strAddress = stripslashes(filter_var($post['strAddress'], FILTER_SANITIZE_STRING));
		$strPassword = stripslashes(filter_var($post['strPassword'], FILTER_SANITIZE_STRING));
		$strConfirmPassword = stripslashes(filter_var($post['strConfirmPassword'], FILTER_SANITIZE_STRING));
		$intServiceProvider_servicesID = stripslashes(filter_var($post['intServiceProvider_servicesID'], FILTER_SANITIZE_STRING));
	$data = array(
				'strEmail' => $strEmail,
				'strAddress' => $strAddress,
				'strPassword' => encrypt_decrypt('encrypt',$strPassword),
				'dateJoined' => date('Y-m-d H:i:s'),
				'strActivationKey' => $randomKey,
				'intServiceProvider_servicesID' => $intServiceProvider_servicesID
		);

		if(trim($strPassword) != trim($strConfirmPassword))
		{
			$msg['status'] = 'pw_mismatch';
		}
		else if( !valid_email($strEmail) )
		{
			$msg['status'] = 'email_not_valid';
		}
		else if($CheckEmail === TRUE){
			$msg['status'] = 'email_exist';
		}else
		{
			$query = $this->db->insert('th_ServiceProvider', $data);
			if($query){
				$msg['status'] = 'success';
			}
			else
			{
				$msg['status'] = 'error';
			}
		}
		return $msg;

	}


	public function reg_users($post,$randomKey){
		$strFirstName = stripslashes(filter_var($post['strFirstName'], FILTER_SANITIZE_STRING));
		$strLastName = stripslashes(filter_var($post['strLastName'], FILTER_SANITIZE_STRING));
		$strEmail = stripslashes(filter_var($post['strEmail'], FILTER_SANITIZE_STRING));
		$strAddress = stripslashes(filter_var($post['strAddress'], FILTER_SANITIZE_STRING));
		$strPassword = stripslashes(filter_var($post['strPassword'], FILTER_SANITIZE_STRING));
		$strConfirmPassword = stripslashes(filter_var($post['strConfirmPassword'], FILTER_SANITIZE_STRING));
		$strMstatus = stripslashes(filter_var($post['strMstatus'], FILTER_SANITIZE_STRING));
		$strGender = stripslashes(filter_var($post['strGender'], FILTER_SANITIZE_STRING));
		$strSecQuestion = stripslashes(filter_var($post['strSecQuestion'], FILTER_SANITIZE_STRING));
		$strSecAnswer = stripslashes(filter_var($post['strSecAnswer'], FILTER_SANITIZE_STRING));
		$strContactNumber = stripslashes(filter_var($post['strContactNumber'], FILTER_SANITIZE_STRING));
		if(isset($post['strService'])){
			$strService = json_encode($post['strService']);
		}else{
			$strService = '';
		}
				$data = array(
				'strFirstName' => $strFirstName,
				'strLastName' => $strLastName,
				'strEmail' => $strEmail,
				'strAddress' => $strAddress,
				'strContactNumber' => $strContactNumber,
				'strPassword' => encrypt_decrypt('encrypt',$strPassword),
				'strGender' => $strGender,
				'strSecQuestion' => $strSecQuestion,
				'strSecAnswer' => $strSecAnswer,
				'strActivationKey' => $randomKey,
				'strServices' => $strService,

				'dateRegisteredDate' => date('Y-m-d H:i:s'),

				'strMstatus' => $this->encrypt->encode($strMstatus)
		);
				$CheckEmail = $this->CheckEmail($strEmail);
		if($strEmail ==''){
			$msg['status'] = 'empty_field';
		}else if($post['strFirstName'] == ''){
				$msg['status'] = 'empty_field';
		}

		else if(trim($strPassword) != trim($strConfirmPassword))
		{
			$msg['status'] = 'pw_mismatch';
		}
		else if( !valid_email($strEmail) )
		{
			$msg['status'] = 'email_not_valid';
		}
		else if($CheckEmail === TRUE){
			$msg['status'] = 'email_exist';
		}
		else
		{
			$query = $this->db->insert('th_users', $data);
			if($query){
				$msg['status'] = 'success';
			}
			else
			{
				$msg['status'] = 'error';
			}
		}
		return $msg;



	}
	public function CheckEmail($post){
		$strUser = stripslashes(filter_var($post, FILTER_SANITIZE_STRING));

		$this->db->where('strEmail',$strUser);
		$query = $this->db->get('th_users');
		$result = $query->num_rows() > 0 ? TRUE : FALSE;

		return $result;
	}
	public function CheckEmailServiceProvicer($post){
		$strUser = stripslashes(filter_var($post, FILTER_SANITIZE_STRING));

		$this->db->where('strEmail',$strUser);
		$query = $this->db->get('th_ServiceProvider');
		$result = $query->num_rows() > 0 ? TRUE : FALSE;

		return $result;
	}
	public function forgotPassword($post)
	{
		$strEmail = stripslashes(filter_var($post['strEmail'], FILTER_SANITIZE_STRING));

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where(array('strEmail'=>$strEmail));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['intUserID']==""){
			return 0;
		} else {
			$msgData = array('email'=>$strEmail,'newPassword'=>encrypt_decrypt("decrypt", $query['strPassword']));
			$message = $this->load->view('email/forgot_password', $msgData, true);

			$this->load->library('email', array('mailtype' => 'html'));
			$this->email->from('marklorenzo23@gmail.com', 'DirtyJobs');
			$this->email->to($strEmail);

			$this->email->subject('Reset Password Request');
			$this->email->message($message);

			$this->email->send();

			return $query;
		}
	}
	public function GetUsers()
	{

		$this->db->select('*');
		$this->db->from('th_users');
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function UserActivated($email,$key){
		$this->db->where(array('strEmail'=>$email , 'strActivationKey' => $key));
		$this->db->update('th_users', array('isActivated' => '1'));


	}
	public function ServiceProviderActivated($email,$key){
		$this->db->where(array('strEmail'=>$email , 'strActivationKey' => $key));
		$this->db->update('th_ServiceProvider', array('isActivated' => '1'));


	}

}
