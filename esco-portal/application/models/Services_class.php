<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services_class extends CI_Model {

	/* Get User Info */
	public function alertMesg($msg){
		if($msg == 'Thank you for joining DirtyJobs please check your email to confirm!'){
			$modal = 'myModal';
		}else{
			$modal = 'registerModal';
		}
		echo '<div class="layerbg">';
			echo '<div class="panel panel-default" style="border:0;width:50%;margin:0 auto;">';
				echo '<div class="panel-body" style="padding:2em;text-align:center;">';
				echo $msg;
				echo '</div>';
				echo '<a href="#" onClick="closeAlert()" class="btn btn-getstarted btn-block" data-toggle="modal" data-target="#'.$modal.'" >Close</a>';
				echo '</div>';
			echo '</div>';
		echo '<script>function closeAlert(){ $(".layerbg").remove(); } </script>';
	}
	public function GetServices()
	{

		$this->db->select('*');
		$this->db->from('th_services');
		$this->db->where(array('intDeleted'=>''));
		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function GetServicesByProvider()
	{
				$userdata = encrypt_decrypt('decrypt',$this->session->userdata('userid'));

		$this->db->select('*');
		$this->db->from('th_services');
		$this->db->where(array('intDeleted'=>''));
		$this->db->where(array('intServiceProviderID'=>$userdata));

		$query = $this->db->get();

	if ($query->num_rows() > 0){
			return $query->result_array();
		}else{
			return 0;
		}
	}
	public function GetDefaultServices()
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
	public function GetServiceID($post)
	{
		$intServiceID = $post['id'];

		$this->db->select('*');
		$this->db->from('th_services');
		$this->db->where(array('intServiceID'=>$intServiceID));
		$query = $this->db->get()->result_array();
		$query = current($query);

		if($query['intServiceID']==""){
			return 0;
		} else {
			return $query;
		}
	}
	public function AddService($post){
		$userdata = encrypt_decrypt('decrypt',$this->session->userdata('userid'));
		$strTitle = stripslashes(filter_var($post['strTitle'], FILTER_SANITIZE_STRING));
		$strDescription = stripslashes(filter_var($post['strDescription'], FILTER_SANITIZE_STRING));
		$strPrice = stripslashes(filter_var($post['strPrice'], FILTER_SANITIZE_STRING));
		$strImage = $_FILES["image"]["name"];


				$data = array(
				'strTitle' => $strTitle,
				'strDescription' => $strDescription,
				'strImage' => $strImage,
				'prices' => $strPrice,
				'intServiceProviderID' => $userdata

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
		public function EditService($post){
		$strTitle = stripslashes(filter_var($post['strTitle'], FILTER_SANITIZE_STRING));
		$strDescription = stripslashes(filter_var($post['strDescription'], FILTER_SANITIZE_STRING));
		$intServiceID = stripslashes(filter_var($post['intServiceID'], FILTER_SANITIZE_STRING));
		$this->db->where('intServiceID',$intServiceID);
		$this->db->update('th_services', array('strTitle' => $strTitle, 'strDescription' => $strDescription));


	}
	public function DeleteService($post){

		$intServiceID = stripslashes(filter_var($post['del'], FILTER_SANITIZE_STRING));


		$this->db->where('intServiceID',$intServiceID);
		$this->db->update('th_services', array('intDeleted' => 1));


	}
	public function DeleteAds($post){

		$intAdsID = stripslashes(filter_var($post['del'], FILTER_SANITIZE_STRING));


		$this->db->where('intAdsID',$intAdsID);
		$this->db->update('th_sp_ads', array('intDeleted' => 1));


	}
	public function CreateAds($post){
		$userdata = encrypt_decrypt('decrypt',$this->session->userdata('userid'));

		$strImage = $_FILES["image"]["name"];
date_default_timezone_set('Asia/Manila');

				$data = array(
				'imgSrc' => $strImage,
				'ads_type' => $post['ads_type'],
				'dateInserted' => date('Y-m-d H:i:s'),
				'intServiceProviderID' => $userdata

		);

			$query = $this->db->insert('th_sp_ads', $data);
			if($query){
				$msg['status'] = 'success';
			}
			else
			{
				$msg['status'] = 'error';
			}

		return $msg;

	}
	public function DeclineBid($post){
		$sp_user = encrypt_decrypt('decrypt',$this->session->userdata('userid'));
		$intQuestionFormID = stripslashes(filter_var($post['formiD'], FILTER_SANITIZE_STRING));
		$transaction_code = $post['accept'];
		$data = array(
			'questionFormID' => $intQuestionFormID,
			'sp_user' => $sp_user,
			'intUserID' => $post['UserID'],
			'transaction_code' => $transaction_code
		);
		$query = $this->db->insert('th_decline_bids', $data);
		if($query){
			$msg['status'] = 'success';
		}
		else
		{
			$msg['status'] = 'error';
		}

	return $msg;

	}
	public function AcceptBid($post){
		$intUserID = encrypt_decrypt('decrypt',$this->session->userdata('userid'));
		$intQuestionFormID = stripslashes(filter_var($post['formiD'], FILTER_SANITIZE_STRING));
		$transaction_code = $post['accept'];

		///////////////////////////////////////////////////////////////////
			$this->db->select('*');
			$this->db->from('th_question_form');
			$this->db->where(array('laundry_form_id'=>$intQuestionFormID));


			$query = $this->db->get()->result_array();
			$query = current($query);

			$user_id_thuser = $query['intUserID'];
			$service_type_id = $query['service_type'];

		/////////////////////////////////////////////////////////////////

			$this->db->select('*');
			$this->db->from('th_ServiceProvider_services');
			$this->db->where(array('intServiceProvider_servicesID'=>$service_type_id));


			$query = $this->db->get()->result_array();
			$query = current($query);

			$service_type_name = $query['strName'];
		////////////////////////////////////////////////////////////////

			$this->db->select('*');
			$this->db->from('th_ServiceProvider');
			$this->db->where(array('intServiceProviderID'=>$intUserID));


			$query = $this->db->get()->result_array();
			$query = current($query);

			$serviceprovider_name = $query['strServiceName'];

		//////////////////////////////////////////////////////////////////

			$this->db->select('*');
			$this->db->from('th_users');
			$this->db->where(array('intUserID'=>$user_id_thuser));


			$query = $this->db->get()->result_array();
			$query = current($query);

			$dev_token = $query['dev_token'];
			$dev_type = $query['dev_type'];
			$strEmail = $query['strEmail'];

						$time = date('r');
						$transaction_code = $transaction_code;
						$notification_type = "Accepted Bid";
						$service_provider = $serviceprovider_name;
						$type_service = $service_type_name;

						$not_arr[] = array("Date Time" => $time,
														"Transaction Code" => $transaction_code,
														"Notification Type" => $notification_type,
														"Service Provider Name" => $service_provider,
														"Type of Service" => $type_service
												   );

			$message = $not_arr;
			$data = array(
				'intUserID' => $intUserID,
				'intQuestionFormID' => $intQuestionFormID,
				'date_accept' => date('Y-m-d H:i:s'),
				'transaction_code' => $transaction_code,
				'price_accepted' => $post['price_accepted'],
				'intTokenID' => $dev_token
				);
		///////////////////////////////////////////////////////////////////
			$query = $this->db->insert('th_bids_accepts', $data);
			if($query){
				$msg['status'] = 'success';
				if($dev_type == "ios"){
					$this->IosMobileNotification($dev_token,$message);
				}else{
					$this->AndroidMobileNotification($dev_token,$message);
				}

			}
			else
			{
				$msg['status'] = 'error';
			}
			$msg['dev_type'] = $dev_type;
			$msg['strEmail'] = $strEmail;
		return $msg;

	}

	public function AndroidMobileNotification($dev_token,$message){
		$data_not = array( 'message' => $message);

		$ids_not = array( $dev_token,
						  'abc'); // device token upon registration to google

			  $apiKey = 'AIzaSyAiFSNnKoyPtAPXvI7oN5m3rTT6xfa0oY8';//'AIzaSyAiFSNnKoyPtAPXvI7oN5m3rTT6xfa0oY8'; // google account app key (server key)

			$url_not = 'https://android.googleapis.com/gcm/send'; // link to send notif

			$post_arr = array(
							'registration_ids'  => $ids_not,
							'data'              => $data_not,
						 );

			$headers_arr = array(
								'Authorization: key=' . $apiKey,
								'Content-Type: application/json'
							);
			$ch = curl_init();
			curl_setopt( $ch, CURLOPT_URL, $url_not );
			curl_setopt( $ch, CURLOPT_POST, true );
			curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers_arr );
			curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode( $post_arr ) );
			$result = curl_exec( $ch );
			if ( curl_errno( $ch ) )
			{
			   echo 'GCM error: ' . curl_error( $ch );
			}

			curl_close( $ch );

		}
		public function IosMobileNotification($dev_token,$message){
			// Put your device token here (without spaces):
					$deviceToken = $dev_token;

					// Put your private key's passphrase here:
					$passphrase = 'djpush';

					$ctx = stream_context_create();
					stream_context_set_option($ctx, 'ssl', 'local_cert', './application/third_party/ios_notif/djck.pem');
					stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

					// Open a connection to the APNS server
					$fp = stream_socket_client(
						'ssl://gateway.sandbox.push.apple.com:2195', $err,
						$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

					if (!$fp)
						exit("Failed to connect: $err $errstr" . PHP_EOL);

					//echo 'Connected to APNS' . PHP_EOL;

					// Create the payload body
					$body['aps'] = array(
						'alert' => $message,
						'sound' => 'default'
						);

					// Encode the payload as JSON
					$payload = json_encode($body);

					// Build the binary notification
					$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

					// Send it to the server
					$result = fwrite($fp, $msg, strlen($msg));

					//if ($result){
					//	echo 1;
					//}

					// Close the connection to the server
					fclose($fp);

		}
		public function CancelBid($transaction_code){

		$this->db->where('transaction_code',$transaction_code);
		$this->db->update('th_question_form', array('cancel' => 1));


	}
	public function edit_amount($id,$amount){
		$decrypted_id = $this->decryptIt($id);


		$this->db->where('intBidsAcceptsID',$decrypted_id);
		$this->db->update('th_bids_accepts', array('price_accepted' => $amount));


	}
	public function decryptIt( $q ) {
      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
      $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
      return( $qDecoded );
  }
	public function ConfirmService($id,$status){
	$this->db->where('jobs_id',$id);
	$this->db->update('th_jobs', array('status' => $status));
}

}
