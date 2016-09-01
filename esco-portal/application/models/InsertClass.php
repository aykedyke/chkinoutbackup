<?php defined('BASEPATH') OR exit('No direct script access allowed');

class InsertClass extends CI_Model {


	public function questionform($post,$userlogin){
		date_default_timezone_set('Asia/Manila');
		//$qf_1 = stripslashes(filter_var($post['qf_1'], FILTER_SANITIZE_STRING));
		$qf_2 = stripslashes(filter_var($post['qf_2'], FILTER_SANITIZE_STRING));

		for($i=1;$i<=15;$i++){
			if(!isset($post['qf_'.$i.''])){
				$post['qf_'.$i.''] = '--';
			}

		}
		$service_type = $_POST['service_type'];
		if(isset($_POST['payment_type'])){
			$payment_type = $_POST['payment_type'];
		}else{
			$payment_type = '--';
		}
		$qf_1 = $post['qf_1'];
		$qf_2 = $post['qf_2'];
		$qf_3 = $post['qf_3'];
		$qf_4 = $post['qf_4'];
		$qf_5 = $post['qf_5'];
		$qf_6 = $post['qf_6'];
		$qf_7 = $post['qf_7'];
		$qf_8 = $post['qf_8'];
		$qf_9 = $post['qf_9'];
		$qf_10 = $post['qf_10'];
		$qf_11 = $post['qf_11'];
		$qf_12 = $post['qf_12'];
		$qf_13 = $post['qf_13'];
		$qf_14 = $post['qf_14'];
		$qf_15 = $post['qf_15'];

		$service_type = stripslashes(filter_var($post['service_type'], FILTER_SANITIZE_STRING));
		//$transaction_code = encrypt_decrypt('encrypt',rand(1111,9999));
		$transaction_code = rand(1111111111,9999999999);
		for($i=1;$i==0;$i++){
		$chck_transcode = $this->check_transcode($transaction_code);
		if($chck_transcode === TRUE){
			$transaction_code = rand(1111111111,9999999999);
		}else{
			$i = 0;
		}
	}

		$data = array(
				'q1_answer' => json_encode($qf_1),
				'q2_answer' => json_encode($qf_2),
				'q3_answer' => json_encode($qf_3),
				'q4_answer' => json_encode($qf_4),
				'q5_answer' => json_encode($qf_5),
				'q6_answer' => json_encode($qf_6),
				'q7_answer' => json_encode($qf_7),
				'q8_answer' => json_encode($qf_8),
				'q9_answer' => json_encode($qf_9),
				'q10_answer' => json_encode($qf_10),
				'q11_answer' => json_encode($qf_11),
				'q12_answer' => json_encode($qf_12),
				'q13_answer' => json_encode($qf_13),
				'q14_answer' => json_encode($qf_14),
				'q15_answer' => json_encode($qf_15),
				'intUserID' => $userlogin,
				'payment_type' => $payment_type,
				'transaction_code' => $transaction_code,
				'service_type' => $service_type,
				'date_inserted' => date('Y-m-d H:i:s')
		);

		if($userlogin == 'not_login'){
				$strEmail = stripslashes(filter_var($post['strEmail'], FILTER_SANITIZE_STRING));
		$strFirstName = stripslashes(filter_var($post['strFirstName'], FILTER_SANITIZE_STRING));
		$strLastName = stripslashes(filter_var($post['strLastName'], FILTER_SANITIZE_STRING));
		$strAddress = stripslashes(filter_var($post['strAddress'], FILTER_SANITIZE_STRING));
		$strContactNumber = stripslashes(filter_var($post['strContactNumber'], FILTER_SANITIZE_STRING));
$data2 = array(

				'strEmail' => $strEmail,
				'strFirstName' => $strFirstName,
				'strLastName' => $strLastName,
				'strContactNumber' => $strContactNumber,
				'transaction_code' => $transaction_code,
				'strAddress' => $strAddress

		);
		$CheckEmail = $this->CheckEmailExist($_POST['strEmail']);

			if($CheckEmail === TRUE){
			$query = $this->db->insert('th_question_form', $data);
			if($query){
				$msg['status'] = 'success';
				$this->transaction_code($transaction_code,'open_bid');
				$this->select_tc_user($_POST['strEmail'],$transaction_code);
				header('location:'.base_url().'?biddingSent');
			}
			else
			{
				$msg['status'] = 'error';
			}

			}else{
				$msg['status'] = 'success';
				header('location:'.base_url().'?biddingSent');
			$query = $this->db->insert('th_users', $data2);

			if($query){
			$query = $this->db->insert('th_question_form', $data);
			$this->GetUserID($transaction_code);
			$this->UpdateLastTransactionID($userlogin,$transaction_code);
			}

			}
		}else{
			header('location:'.base_url().'?biddingSent');
			$query = $this->db->insert('th_question_form', $data);
			$this->UpdateLastTransactionID($userlogin,$transaction_code);

		}

	}
	public function mb_questionform($post,$userlogin){
		date_default_timezone_set('Asia/Manila');
		//$qf_1 = stripslashes(filter_var($post['qf_1'], FILTER_SANITIZE_STRING));
		$qf_2 = stripslashes(filter_var($post['qf_2'], FILTER_SANITIZE_STRING));

		for($i=1;$i<=15;$i++){
			if(!isset($post['qf_'.$i.''])){
				$post['qf_'.$i.''] = '--';
			}

		}
		$service_type = $_POST['service_type'];
		$qf_1 = $post['qf_1'];
		$qf_2 = $post['qf_2'];
		$qf_3 = $post['qf_3'];
		$qf_4 = $post['qf_4'];
		$qf_5 = $post['qf_5'];
		$qf_6 = $post['qf_6'];
		$qf_7 = $post['qf_7'];
		$qf_8 = $post['qf_8'];
		$qf_9 = $post['qf_9'];
		$qf_10 = $post['qf_10'];
		$qf_11 = $post['qf_11'];
		$qf_12 = $post['qf_12'];
		$qf_13 = $post['qf_13'];
		$qf_14 = $post['qf_14'];
		$qf_15 = $post['qf_15'];

		$service_type = stripslashes(filter_var($post['service_type'], FILTER_SANITIZE_STRING));
		//$transaction_code = encrypt_decrypt('encrypt',rand(1111,9999));
		$transaction_code = rand(1111111111,9999999999);

		//$q1_array = array('1st_item' => $qf_1[1]);

		$json_q1 = json_encode($qf_1);
		$json_q2 = json_encode($qf_2);
		$json_q3 = json_encode($qf_3);
		$json_q4 = json_encode($qf_4);
		$json_q5 = json_encode($qf_5);
		$json_q6 = json_encode($qf_6);
		$json_q7 = json_encode($qf_7);
		$json_q8 = json_encode($qf_8);
		$json_q9 = json_encode($qf_9);
		$json_q10 = json_encode($qf_10);
		$json_q11 = json_encode($qf_11);
		$json_q12 = json_encode($qf_12);
		$json_q13 = json_encode($qf_13);
		$json_q14 = json_encode($qf_14);
		$json_q15 = json_encode($qf_15);

		$data = array(
				'q1_answer' => $json_q1,
				'q2_answer' => $json_q2,
				'q3_answer' => $json_q3,
				'q4_answer' => $json_q4,
				'q5_answer' => $json_q5,
				'q6_answer' => $json_q6,
				'q7_answer' => $json_q7,
				'q8_answer' => $json_q8,
				'q9_answer' => $json_q9,
				'q10_answer' => $json_q10,
				'q11_answer' => $json_q11,
				'q12_answer' => $json_q12,
				'q13_answer' => $json_q13,
				'q14_answer' => $json_q14,
				'q15_answer' => $json_q15,
				'intUserID' => $_POST['userid'],
				'transaction_code' => $transaction_code,
				'service_type' => $service_type,
				'budget' => $_POST['budget'],
				'deadline' => $_POST['deadline'],
				'payment_type' => $_POST['payment_type'],
				'date_inserted' => date('Y-m-d h:i:s A')
		);


			$query = $this->db->insert('th_question_form', $data);
			$this->UpdateLastTransactionID($_POST['userid'],$transaction_code);

			if($query){
				$msg['status'] = 'success';
				$msg['transaction_code'] = $transaction_code;

				return $msg;
			}

	}
	public function ServiceProviderAds($post){
		$userdata = encrypt_decrypt('decrypt',$this->session->userdata('userid'));
		$strTitle = stripslashes(filter_var($post['strTitle'], FILTER_SANITIZE_STRING));
		$strDescription = stripslashes(filter_var($post['strDescription'], FILTER_SANITIZE_STRING));
		$strImage = $_FILES["image"]["name"];


				$data = array(
				'strTitle' => $strTitle,
				'strDescription' => $strDescription,
				'strImage' => $strImage,
				'intServiceProviderID' => $userdata,
				'ads_type' => $post['ads_type']

		);

			$query = $this->db->insert('th_services', $data);
			if($query){
				$msg['status'] = 'success';

			}
			else
			{
				$msg['status'] = 'error';
			}

		return $msg;

	}
	public function transaction_code($transaction_code,$transtype){

				$data = array(
				'transaction_code' => $transaction_code,
				'transaction_type' => $transtype
				);

			$query = $this->db->insert('th_transaction', $data);
			if($query){
				$msg['status'] = 'success';
			}
			else
			{
				$msg['status'] = 'error';
			}

		return $msg;

	}

	public function select_tc_user($strEmail,$transaction_code){

		$this->db->select('*');
		$this->db->from('th_users');
		$this->db->where(array('strEmail'=>$strEmail));
		$query = $this->db->get()->result_array();
		$query = current($query);

		$result_userid = $query['intUserID'];

		$data = array(
				'intUserID' => $result_userid
				);
			$this->db->where(array('transaction_code'=>$transaction_code));

			$query = $this->db->update('th_question_form', $data);
			$this->UpdateLastTransaction($strEmail,$transaction_code);

			if($query){
				$msg['status'] = 'success';
			}
			else
			{
				$msg['status'] = 'error';
			}

		return $msg;

	}
	public function UpdateLastTransaction($strEmail,$transaction_code){
		$data = array(
				'transaction_code' => $transaction_code
				);
		$this->db->where(array('strEmail'=>$strEmail));
		$query = $this->db->update('th_users', $data);
	}
	public function UpdateLastTransactionID($intUserID,$transaction_code){
		$data = array(
				'transaction_code' => $transaction_code
				);
		$this->db->where(array('intUserID'=>$intUserID));
		$query = $this->db->update('th_users', $data);
	}
	public function GetUserID($transaction_code){

		$this->db->select('*');
		$this->db->from('th_users');
		$this->db->where(array('transaction_code'=>$transaction_code));
		$query = $this->db->get()->result_array();
		$query = current($query);

		$result_userid = $query['intUserID'];

		$data = array(
				'intUserID' => $result_userid
				);
			$this->db->where(array('transaction_code'=>$transaction_code));

			$query = $this->db->update('th_question_form', $data);

	}


	public function CheckEmailExist($email){

		$this->db->where('strEmail',$email);
		$query = $this->db->get('th_users');
		$result = $query->num_rows() > 0 ? TRUE : FALSE;

		return $result;
	}
	public function check_transcode($transaction_code){

		$this->db->where('transaction_code',$transaction_code);
		$query = $this->db->get('th_transaction');
		$result = $query->num_rows() > 0 ? TRUE : FALSE;

		return $result;
	}
		public function AcceptsBids($post){
		$userdata = encrypt_decrypt('decrypt',$this->session->userdata('userid'));
		$strTitle = stripslashes(filter_var($post['strTitle'], FILTER_SANITIZE_STRING));
		$strDescription = stripslashes(filter_var($post['strDescription'], FILTER_SANITIZE_STRING));
		$strImage = $_FILES["image"]["name"];
		$price_accepted = $post['price_accepted'];


				$data = array(
				'strTitle' => $strTitle,
				'strDescription' => $strDescription,
				'strImage' => $strImage,
				'price_accepted' => '100',

				'intServiceProviderID' => $userdata

		);

			$query = $this->db->insert('th_bids_accepts', $data);
			if($query){
				$msg['status'] = 'success';

			}
			else
			{
				$msg['status'] = 'error';
			}

		return $msg;

	}
	
	public function reqleave($post,$no_days,$company_id,$type){
		$idnum = stripslashes(filter_var($post['idnum'], FILTER_SANITIZE_STRING));
		//$type = stripslashes(filter_var($post['type'], FILTER_SANITIZE_STRING));
		$secode = stripslashes(filter_var($post['secode'], FILTER_SANITIZE_STRING));
		$reason = stripslashes(filter_var($post['reason'], FILTER_SANITIZE_STRING));
		$from = $post['date1'];
		$to = $post['date2'];
		
		
		$data = array(
				'emp_id' => $idnum,
				'date_filed' => date('r'),
				'reason' => $reason,
				'no_days' => $no_days,
				'from_date' => $from,
				'to_date' => $to,
				'type_leave' => $type,
				'company_id' => $company_id
		);
			$query = $this->db->insert('leave', $data);
			if($query){
				$msg = 'success';
			}
			else{
				$msg = 'error';
			}
			return $msg;
		
	}


}
