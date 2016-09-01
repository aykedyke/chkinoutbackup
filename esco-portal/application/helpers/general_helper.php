<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_ci')) {

	function load_ci() {
		return get_instance();
	}

}
if (!function_exists('pw_hash')) {

	function pw_hash($string) {
		$ci = load_ci();
		$ci->load->library("salting");

		$key = date('YmdHis');
		$key.= $ci->config->item("encryption_key");

		$ci->salting->set_hash(md5($key));
		$ci->salting->set_string($string);
		return $ci->salting->hash_string();
	}
}
if (!function_exists('pw_unhash')) {

	function pw_unhash($string) {
		$ci = load_ci();
		$ci->load->library("salting");

		$ci->salting->set_string($string);
		return $ci->salting->unhash_string();;
	}
}
if (!function_exists('month')) {
	function month() {
		$ci = load_ci();

		for($x=1;$x<=12;$x++)
		{
			$month[$x]=date('F', mktime(0,0,0,$x,1));
		}
		return $month;
	}
}
if (!function_exists('day')) {
	function day() {
		$ci = load_ci();

		for($x=1;$x<=31;$x++)
		{
			$day[$x]=$x;
		}
		return $day;
	}
}
if (!function_exists('year')) {
	function year() {
		$ci = load_ci();

		$yr_s = date("Y");
		$yr_e = date("Y")*1-90;
		for($x=$yr_s;$x>$yr_e;$x--)
		{
			$year[$x]=$x;
		}
		return $year;
	}
}
if (!function_exists('cut_string')) {
	function cut_string($string, $max_length) {
		$ci = load_ci();
		if (strlen($string) > $max_length){
			$string = substr($string, 0, $max_length);
			$pos = strrpos($string, " ");
			if($pos === false) {
					return substr($string, 0, $max_length)."...";
			}
				return substr($string, 0, $pos)."...";
		}else{
			return $string;
		}
	}
}
if (!function_exists('cut_name')) {
	function cut_name($string, $max_length) {
		$ci = load_ci();
		if (strlen($string) > $max_length){
			$string = substr($string, 0, $max_length);
			$pos = strrpos($string, " ");
			if($pos === false) {
					return substr($string, 0, $max_length);
			}
				return substr($string, 0, $pos);
		}else{
			return $string;
		}
	}
}
if (!function_exists('encrypt_decrypt')) {
	function encrypt_decrypt($action, $string) {
	    $output = false;

	    $encrypt_method = "AES-256-CBC";
	    $secret_key = '%^Kr4m04$';
	    $secret_iv = '$40m4rK^%';

	    // hash
	    $key = hash('sha256', $secret_key);
	    $num = '0';
	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_iv), $num, 16);

	    if( $action == 'encrypt' ) {
	        $output = openssl_encrypt($string, $encrypt_method, $key, $num, $iv);
	        $output = base64_encode($output);
	    }
	    else if( $action == 'decrypt' ){
	        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, $num, $iv);
	    }

	    return $output;
	}
}
if (!function_exists('check_email_address')) {
	function check_email_address($email) {
		// First, we check that there's one @ symbol, and that the lengths are right
		if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
			// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
			return 0;
		}
		// Split it into sections to make life easier
		$email_array = explode("@", $email);
		$local_array = explode(".", $email_array[0]);
		for ($i = 0; $i < sizeof($local_array); $i++) {
			if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
				return 0;
			}
		}
		if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) { // Check if domain is IP. If not, it should be valid domain name
			$domain_array = explode(".", $email_array[1]);
			if (sizeof($domain_array) < 2) {
				return 0; // Not enough parts to domain
			}
			for ($i = 0; $i < sizeof($domain_array); $i++) {
				if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
					return 0;
				}
			}
		}

		return 1;
	}
}
if (!function_exists('timeAgo')) {
	function timeAgo($time){
		if ($time !== intval($time)) { $time = strtotime($time); }
		$d = time() - $time;
		if ($time < strtotime(date('Y-m-d 00:00:00')) - 60*60*24*3) {
		$format = 'F j, Y, g:ia';
		return date($format, $time);
		}
		if ($d >= 60*60*24) {
		$day = 'Yesterday';
		if (date('l', time() - 60*60*24) !== date('l', $time)) { $day = date('l', $time); }
		return $day . " at " . date('g:ia', $time);
		}
		if ($d >= 60*60*2) { return intval($d / (60*60)) . " hours ago"; }
		if ($d >= 60*60) { return "about an hour ago"; }
		if ($d >= 60*2) { return intval($d / 60) . " minutes ago"; }
		if ($d >= 60) { return "about a minute ago"; }
		if ($d >= 2) { return intval($d) . " seconds ago"; }
		return "a few seconds ago";
	}
}
if (!function_exists('stringexploder')) {
	function stringexploder($sep, $value, $arr)
	{
		$result = explode($sep, $value);
		return $result[$arr];
	}
}
if (!function_exists('deserialize_data')) {
	function deserialize_data($value)
	{
		$result = unserialize($value);
		return $result;
	}
}
if (!function_exists('capital_first')) {
	function capital_first($value)
	{
		$result = ucwords($value);
		return $result;
	}
}
// Function to get the client IP address
if (!function_exists('get_client_ip')) {
	function get_client_ip() {
	    $ipaddress = '';
	    if (getenv('HTTP_CLIENT_IP'))
	        $ipaddress = getenv('HTTP_CLIENT_IP');
	    else if(getenv('HTTP_X_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	    else if(getenv('HTTP_X_FORWARDED'))
	        $ipaddress = getenv('HTTP_X_FORWARDED');
	    else if(getenv('HTTP_FORWARDED_FOR'))
	        $ipaddress = getenv('HTTP_FORWARDED_FOR');
	    else if(getenv('HTTP_FORWARDED'))
	       $ipaddress = getenv('HTTP_FORWARDED');
	    else if(getenv('REMOTE_ADDR'))
	        $ipaddress = getenv('REMOTE_ADDR');
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}
}
if (!function_exists('msg_status')) {
	function msg_status($type, $msg) {
		switch ($type) {
			case 'danger':
				$msg = '<div class="alert alert-danger alert-dismissable" style="margin-bottom:10px"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><b>Error! </b>'.$msg.'</div>';
				break;
			case 'warning':
				$msg = '<div class="alert alert-warning alert-dismissable" style="margin-bottom:10px"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><b>Warning! </b>'.$msg.'</div>';
				break;
			case 'info':
				$msg = '<div class="alert alert-info alert-dismissable" style="margin-bottom:10px"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><b>Info! </b>'.$msg.'</div>';
				break;
			case 'success':
				$msg = '<div class="alert alert-success alert-dismissable" style="margin-bottom:10px"><button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button><b>Success! </b>'.$msg.'</div>';
				break;

			default:
				$msg = '';
				break;
		}
		return $msg;
	}
}
if (!function_exists('incrementalHash')) {
	function incrementalHash($len = 5){
	  $charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	  $base = strlen($charset);
	  $result = '';

	  $now = explode(' ', microtime())[1];
	  while ($now >= $base){
	    $i = $now % $base;
	    $result = $charset[$i] . $result;
	    $now /= $base;
	  }
	  return substr($result, -5);
	}
}

if (!function_exists('jsondecoding')) {
	function jsondecoding_table($json){
		$html = '';
		$r = json_decode($json, JSON_FORCE_OBJECT);
		$arrlength = count($r);

		$html .= "<th></th>";
		$html .= "<th>White</th>";
		$html .= "<th>Colored</th>";
		$html .= "<th>Total</th>";
		$html .= "<tr>";
			for($x = 0; $x < $arrlength; $x++) {
				$html .= "<td>";
				$html .= $r[$x];
				$html .= "</td>";
				 if ($x % 4 == 3){
					$html .= '</tr>';
					$html .= "<tr class='tb-ans'>";
				}
			}
		$html .= "</tr>";
		return $html;
	}
}
if (!function_exists('jsondecoding_table2')) {
	function jsondecoding_table2($json){
		$html = '';
		$r = json_decode($json, JSON_FORCE_OBJECT);
		$arrlength = count($r);

		$html .= "<th>Item</th>";
		$html .= "<th>Quantity</th>";
		$html .= "<tr>";
			for($x = 0; $x < $arrlength; $x++) {
				$html .= "<td>";
				$html .= $r[$x];
				$html .= "</td>";
				 if ($x % 2 == 1){
					$html .= '</tr>';
					$html .= "<tr class='tb-ans'>";
				}
			}
		$html .= "</tr>";
		return $html;
	}
}
if (!function_exists('jsondecoding_array')) {
	function jsondecoding_array($json){
		$html = '';
		$r = json_decode($json, JSON_FORCE_OBJECT);
		$arrlength = count($r);

		for($x = 0; $x < $arrlength; $x++) {

				$html .= $r[$x];
				$html .= "</br>";

			};
		return $html;
	}
}
if (!function_exists('json_array')) {
	function json_array($json){
		$html = '';
		$r = json_decode($json, JSON_FORCE_OBJECT);
		$arrlength = count($r);

		for($x = 0; $x < $arrlength; $x++) {

				$html .= $r[$x];
				$html .= "<style>.question-form".$x."{display:block";
				$html .="}</style>";
				$html .= "</br>";

			};
		return $html;
	}
}
if (!function_exists('chck_accept_bid')) {
	function chck_accept_bid($id,$userid){
				$ci = load_ci();
				$ci->load->database();
			$ci->db->select('*');
		$ci->db->from('th_bids_accepts');
		$ci->db->where(array('intQuestionFormID'=>$id,'intUserID'=>$userid));
		$query = $ci->db->get()->result_array();
		$query = current($query);

		if($query['intQuestionFormID']==""){
			return 0;
		} else {
			return $query;
		}
	}
}
if (!function_exists('count_this')) {
	function count_this($thisvalue){

				$result = count($thisvalue);
				return $result;

	}
}
if (!function_exists('box_services')) {
	function box_services($thisvalue){

				$result = count($thisvalue);
				return $result;

	}
	if (!function_exists('acceptedbids')) {
		function acceptedbids($thisvalue){
			$ci = load_ci();
			$ci->load->database();
			$ci->db->select('*');
			$ci->db->from('th_bids_accepts');
			$ci->db->where(array('th_bids_accepts.intQuestionFormID'=>$thisvalue));

			$query = $ci->db->get();
		if ($query->num_rows() > 0){
			return $query->num_rows();
			}else{
				return 0;
			}

		}
		}
		if (!function_exists('JO_accepts')) {
			function JO_accepts($thisvalue){
				$ci = load_ci();
				$ci->load->database();
				$ci->db->select('*');
				$ci->db->from('th_jobs');
				$ci->db->where(array('th_jobs.intBidsAcceptsID'=>$thisvalue));
				$query = $ci->db->get();
			if ($query->num_rows() > 0){
				return $query->num_rows();
				}else{
					return 0;
				}

			}
			}
			if (!function_exists('bidsDecline')) {
				function bidsDecline($questionFormID,$sp_user){
					$ci = load_ci();
					$ci->load->database();
					$ci->db->select('*');
					$ci->db->from('th_decline_bids');
					$ci->db->where(array('th_decline_bids.questionFormID' =>$questionFormID,'sp_user'=>$sp_user));
					$query = $ci->db->get();
				if ($query->num_rows() > 0){
					return $query->num_rows();
					}else{
						return 0;
					}

				}
				}
}
