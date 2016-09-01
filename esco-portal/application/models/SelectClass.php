<?php defined('BASEPATH') OR exit('No direct script access allowed');

class SelectClass extends CI_Model {

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
	public function GetServiceProvider($intUserID)
	{
		$this->db->select('*');
		$this->db->from('th_ServiceProvider');
		$this->db->where(array('intServiceProviderID'=>$intUserID));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['intServiceProviderID']==""){
			return 0;
		} else {
			return $query;
		}
	}
		public function ServiceProviders()
	{
		$this->db->select('*');
		$this->db->from('th_ServiceProvider');
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function LaundryFormBids()
	{
		$this->db->select('*,th_question_form.transaction_code AS transcode');
		$this->db->select('th_users.intUserID, th_users.transaction_code AS trans_code', FALSE);

		$this->db->from('th_question_form');
		$this->db->join('th_users', 'th_question_form.intUserID = th_users.intUserID');
		$this->db->order_by("laundry_form_id","desc");
		$query = $this->db->get();

		if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}

	public function CountLaundryFormBids($service_type)
	{
		$this->db->select('*');
		$this->db->where(array('service_type'=>$service_type));

		$this->db->from('th_question_form');

		$query = $this->db->get();

		$count_bid = $query->num_rows();
		return $count_bid;
	}
	public function GetDefaultServices($limit,$start)
	{

		$this->db->select('*');
		if($limit == '' && $start == '');
		 $this->db->limit($limit, $start);
		$this->db->from('th_ServiceProvider_services');
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function DefaultServices()
	{

		$this->db->select('*');
		$this->db->from('th_ServiceProvider_services');
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
		public function DefaultServicesID($strName)
	{
		$this->db->select('*');
		$this->db->from('th_ServiceProvider_services');
		$this->db->where(array('strName'=>$strName));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['strName']==""){
			return 0;
		} else {
			return $query;
		}
	}
	public function getServiceName($intServiceProvider_ServicesID)
	{
		$this->db->select('*');
		$this->db->from('th_ServiceProvider_services');
		$this->db->where(array('intServiceProvider_ServicesID'=>$intServiceProvider_ServicesID));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['strName']==""){
			return 0;
		} else {
			return $query;
		}
	}
		public function ViewForms($transcode)
		{
			$this->db->select('*,th_question_form.transaction_code AS transcode');
			$this->db->from('th_question_form');
			$this->db->join('th_users', 'th_question_form.intUserID = th_users.intUserID');
			$this->db->where(array('th_question_form.transaction_code'=>$transcode));

			$query = $this->db->get()->result_array();
			$query = current($query);

			if($query['transcode']==""){
				return 0;
			} else {
				return $query;
			}
		}
		public function ShowAds($sp_userid)
		{
			$this->db->select('*');
			$this->db->from('th_sp_ads');
			$this->db->where(array('intServiceProviderID'=>$sp_userid,'intDeleted'=>0));
			$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
			}else{
				return 0;
			}
		}
		public function CountBids($userid,$id){
			$this->db->select('*');
		$this->db->from('th_bids_accepts');
		$this->db->where(array('intQuestionFormID'=>$id,'intUserID'=>$userid));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['intQuestionFormID']==""){
			return 0;
		} else {
			return $query;
		}
		}
		public function AcceptedBids($intQuestionFormID)
	{
		$this->db->select('*');
		$this->db->from('th_bids_accepts');
		$this->db->where(array('th_bids_accepts.intQuestionFormID'=>$intQuestionFormID));

		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
		public function ShowAcceptBids($intServiceProviderID)
	{

		$this->db->select('*,th_question_form.intUserID AS question_userid');
		$this->db->from('th_bids_accepts');
		$this->db->where(array('th_bids_accepts.intUserID'=>$intServiceProviderID));

		$this->db->join('th_question_form', 'th_bids_accepts.intQuestionFormID = th_question_form.laundry_form_id');
		$this->db->join('th_users', 'th_question_form.intUserID = th_users.intUserID');
		$this->db->order_by('intBidsAcceptsID','desc');

		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function ShowJobOrder($intServiceProviderID)
	{

		$this->db->select('*, th_jobs.transaction_code as transcode');
		$this->db->from('th_jobs');
		$this->db->where(array('th_jobs.serviceprovider_id'=>$intServiceProviderID));

		$this->db->join('th_bids_accepts', 'th_jobs.intBidsAcceptsID = th_bids_accepts.intBidsAcceptsID');
		$this->db->join('th_users', 'th_jobs.user_id = th_users.intUserID');
		$this->db->order_by('jobs_id','desc');
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function JobByTransactionCode($transaction_code)
	{
		$this->db->select('*');
		$this->db->from('th_jobs');
		$this->db->where(array('th_jobs.transaction_code'=>$transaction_code));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['transaction_code']==""){
			return 0;
		} else {
			return $query;
		}
	}
	public function JO_accepts($intBidsAcceptsID)
	{

		$this->db->select('*');
		$this->db->from('th_jobs');
		$this->db->where(array('th_jobs.intBidsAcceptsID'=>$intBidsAcceptsID));

		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	public function declineBids($intUserID)
	{

		$this->db->select('*,th_decline_bids.transaction_code as transcode');
		$this->db->from('th_decline_bids');
		$this->db->where(array('th_decline_bids.sp_user'=>$intUserID));
		$this->db->join('th_users', 'th_decline_bids.intUserID = th_users.intUserID');


		$query = $this->db->get();

	if ($query->num_rows() > 0){
		return $query->result_array();
		}else{
			return 0;
		}
	}
	public function showRatings($sp_userid)
		{
			$this->db->select('*');
			$this->db->from('th_ratings');
			$this->db->where(array('serviceprovider_id'=>$sp_userid));
			$this->db->join('th_users', 'th_ratings.user_id = th_users.intUserID');
			$query = $this->db->get();

		if ($query->num_rows() > 0){
				return $query->result_array();
			}else{
				return 0;
			}
		}

		public function getData($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function getPayments()
	{
		$this->db->select('*,th_payment.user_id as userID');
		$this->db->from('th_payment');
				$this->db->join('th_users', 'th_payment.user_id = th_users.intUserID');
		$query = $this->db->get();


		if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function countEmpDetails($idnum){
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->where(array('employee_id'=>$idnum));
		$query = $this->db->get();

		return $query->num_rows();
	}
	public function checkEmpDetails($idnum){
		$this->db->select('*');
		$this->db->from('employee');
		$this->db->where(array('employee_id'=>$idnum));
		$query = $this->db->get()->result_array();
		return $query = current($query);
	}
}
