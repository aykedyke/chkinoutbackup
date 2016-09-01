<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Login_class extends CI_Model {

	/* LOGIN */
	public function LoginAuth($post)
	{
		$strUser = stripslashes(filter_var($post['strUser'], FILTER_SANITIZE_STRING));
		$strPassword = stripslashes(filter_var($post['strLogInPassword'], FILTER_SANITIZE_STRING));
		$strRememberMe = stripslashes(filter_var($post['strRememberMe'], FILTER_SANITIZE_STRING));
		
		$chk_strEmail = $this->GetUserExist($strUser);
		
		if( $chk_strEmail === FALSE )
		{
			$msg['status'] = 3 ; //'email_not_exist';
		}
		else
		{
			$this->db->where('strEmail',$strUser);
			$query = $this->db->get('users')->result_array();
			$query = current($query);
			
			if($query['isDeleted'] === 1)
			{
				$msg['status'] = 5; //'user_deleted'; // User Deleted
			}
			else if($query['strAccountType'] != 'admin')
			{
				$msg['status'] = 6; //User is not admin
			}
			else
			{
				if(encrypt_decrypt('decrypt',$query['strPassword']) === $strPassword)
				{
					if($strRememberMe == 1){
						$rand = rand(1111,9999);
						$cookie = array(
						    'name'   	=> 'rememberme',
						    'value'  	=> encrypt_decrypt('encrypt',$rand),
						    'expire' 	=> '1209600',  // Two weeks
						    'domain' 	=> '.tapdashheuristics.com',
						    'path'   	=> '/',
						    'secure' 	=> FALSE,
						    'httponly'	=> FALSE
						);
						set_cookie($cookie['name'], $cookie['value'], $cookie['expire'], $cookie['domain'], $cookie['path'], $cookie['secure'], $cookie['httponly']);

						//UPDATE COOKIE SESSION
						$this->db->where('intUserID',$query['intUserID']);
						$this->db->update('users', array('strCookie' => $cookie['value'], 'strLastIPUsed'=>get_client_ip()));
					}
					$this->session->set_userdata('userid',encrypt_decrypt('encrypt',$query['intUserID']));
					//UPDATE USERDATA SESSION
					//$this->db->where('intUserID',$query['intUserID']);
					//$this->db->update('users', array('strUserdata' => $this->session->userdata('userid'), 'strLastIPUsed'=>get_client_ip()));

					$msg['status'] = 1; // Logged-in success
				}
				else
				{
					$msg['status'] = 2; // Password Mis-matched
				}
			}
		}
		return $msg;
	}
	public function LoginAuthUser($post)
	{
		$strUser = stripslashes(filter_var($post['strUser'], FILTER_SANITIZE_STRING));
		$strPassword = stripslashes(filter_var($post['strLogInPassword'], FILTER_SANITIZE_STRING));
		$strRememberMe = stripslashes(filter_var($post['strRememberMe'], FILTER_SANITIZE_STRING));
		
		$chk_strEmail = $this->GetUserExist($strUser);
		
		if( $chk_strEmail === FALSE )
		{
			$msg['status'] = 3 ; //'email_not_exist';
		}
		else
		{
			$this->db->where('strEmail',$strUser);
			$query = $this->db->get('users')->result_array();
			$query = current($query);
			
			if($query['isDeleted'] === 1)
			{
				$msg['status'] = 5; //'user_deleted'; // User Deleted
			}else if($query['isActivated'] == 0){
				$msg['status'] = 7; //User is not activated

			}
			else
			{
				if(encrypt_decrypt('decrypt',$query['strPassword']) === $strPassword)
				{
					if($strRememberMe == 1){
						$rand = rand(1111,9999);
						$cookie = array(
						    'name'   	=> 'rememberme',
						    'value'  	=> encrypt_decrypt('encrypt',$rand),
						    'expire' 	=> '1209600',  // Two weeks
						    'domain' 	=> '.tapdashheuristics.com',
						    'path'   	=> '/',
						    'secure' 	=> FALSE,
						    'httponly'	=> FALSE
						);
						set_cookie($cookie['name'], $cookie['value'], $cookie['expire'], $cookie['domain'], $cookie['path'], $cookie['secure'], $cookie['httponly']);

						//UPDATE COOKIE SESSION
						$this->db->where('intUserID',$query['intUserID']);
						$this->db->update('users', array('strCookie' => $cookie['value'], 'strLastIPUsed'=>get_client_ip()));
					}
					$this->session->set_userdata('userid',encrypt_decrypt('encrypt',$query['intUserID']));
					//UPDATE USERDATA SESSION
					//$this->db->where('intUserID',$query['intUserID']);
					//$this->db->update('users', array('strUserdata' => $this->session->userdata('userid'), 'strLastIPUsed'=>get_client_ip()));

					$msg['status'] = 1; // Logged-in success
				}
				else
				{
					$msg['status'] = 2; // Password Mis-matched
				}
			}
		}
		return $msg;
	}
		public function LoginServiceProvider($post)
	{
		$strUser = stripslashes(filter_var($post['strUser'], FILTER_SANITIZE_STRING));
		$strPassword = stripslashes(filter_var($post['strLogInPassword'], FILTER_SANITIZE_STRING));
		$strRememberMe = stripslashes(filter_var($post['strRememberMe'], FILTER_SANITIZE_STRING));
		
		$chk_strEmail = $this->GetServiceProviderExist($strUser);
		
		if( $chk_strEmail === FALSE )
		{
			$msg['status'] = 3 ; //'email_not_exist';
		}
		else
		{
			$this->db->where('strEmail',$strUser);
			$query = $this->db->get('th_ServiceProvider')->result_array();
			$query = current($query);
			
			if($query['isDeleted'] === 1)
			{
				$msg['status'] = 5; //'user_deleted'; // User Deleted
			}else if($query['isActivated'] == 0){
				$msg['status'] = 7; //User is not activated

			}
			else
			{
				if(encrypt_decrypt('decrypt',$query['strPassword']) === $strPassword)
				{
					if($strRememberMe == 1){
						$rand = rand(1111,9999);
						$cookie = array(
						    'name'   	=> 'rememberme',
						    'value'  	=> encrypt_decrypt('encrypt',$rand),
						    'expire' 	=> '1209600',  // Two weeks
						    'domain' 	=> '.tapdashheuristics.com',
						    'path'   	=> '/',
						    'secure' 	=> FALSE,
						    'httponly'	=> FALSE
						);
						set_cookie($cookie['name'], $cookie['value'], $cookie['expire'], $cookie['domain'], $cookie['path'], $cookie['secure'], $cookie['httponly']);

						//UPDATE COOKIE SESSION
						$this->db->where('intServiceProviderID',$query['intServiceProviderID']);
						$this->db->update('th_ServiceProvider', array('strCookie' => $cookie['value'], 'strLastIPUsed'=>get_client_ip()));
					}
					$this->session->set_userdata('userid',encrypt_decrypt('encrypt',$query['intServiceProviderID']));
					//UPDATE USERDATA SESSION
					//$this->db->where('intUserID',$query['intUserID']);
					//$this->db->update('users', array('strUserdata' => $this->session->userdata('userid'), 'strLastIPUsed'=>get_client_ip()));

					$msg['status'] = 1; // Logged-in success
				}
				else
				{
					$msg['status'] = 2; // Password Mis-matched
				}
			}
		}
		return $msg;
	}
	public function LoginEmployee($post){
		$employee_id = stripslashes(filter_var($post['employee_id'], FILTER_SANITIZE_STRING));
		$employee_password = md5($post['employee_password']);
		
		$chk_employee_id = $this->GetEmployeeExist($employee_id);
		
		if( $chk_employee_id === FALSE ){
			$msg['status'] = 3 ; //'emp id not exist';
		}else{
			$this->db->where('employee_id',$employee_id);
			$query = $this->db->get('employee')->result_array();
			$query = current($query);
			
			if($employee_password == $query['employee_password']){
				
				$this->session->set_userdata('employee_id',$employee_id);
				$msg['status'] = 1;
				
			}else{
				$msg['status'] = 2;
			}
		}
		return $msg['status'];
	}
	
	/* CHECK USER IF EXIST */
	public function GetEmployeeExist($post){
		$employee_id = stripslashes(filter_var($post, FILTER_SANITIZE_STRING));
		
		$this->db->where('employee_id',$employee_id);
		$query = $this->db->get('employee');
		$result = $query->num_rows() > 0 ? TRUE : FALSE;
		
		return $result;
	}
}