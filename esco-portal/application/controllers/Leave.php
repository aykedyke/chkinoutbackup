<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leave extends CI_Controller {

	public function __construct() {
		parent::__construct();
		ini_set('session.cookie_httponly',1);
		ini_set('session.use_only_cookies',1);
		$this->load->model('Auth_class');
		$this->load->model('Login_class');
		$this->load->model('Users_class');
		$this->load->model('SelectClass');
		$this->load->model('Services_class');
		$this->load->model('InsertClass');
	}
	public function auth()
	{
		return $this->Auth_class->is_loggedin();
	}
	public function getDateForSpecificDayBetweenDates($str_initial, $str_final)
	{
		$str_between = $str_initial;
		$dayys = 0;
		while($str_between <= $str_final){
			$date_between = date('Y-m-d',$str_between);
			$particular_day = date('w', $str_between);
			
			if($particular_day == 6 || $particular_day == 0){
				
			}else{
				$dayys = $dayys + 1;
			}
			$str_between = $str_between + 86400;
		}
			return $dayys;
	}
	
	public function index()
	{
		if(isset($_POST['save'])){
				$idnum = $_POST['idnum'];
				$type = $_POST['type'];
				$date1 = strtotime($_POST['date1']);
				$date2 = strtotime($_POST['date2']);
				if($date1 > $date2){
					?>
					 <script type="text/javascript">
						alert("Please check your date!");
					</script>
					<?php
					echo "<script>document.location.href='".base_url()."'</script>";
				}else{
					$no_days = $date2 - $date1;
					if($no_days == 0){
						$dayys = 1;
					}else{
						$no_days = ($no_days / 86400) + 1;
						$dayys = $this->getDateForSpecificDayBetweenDates($date1, $date2);
						//$no_days = $dayys;
					}
					$cntemp = $this->SelectClass->countEmpDetails($idnum);
					$chkemp = $this->SelectClass->checkEmpDetails($idnum);
					
					$company_id = $chkemp['company_id'];
					
					if(($cntemp != 0) && ($_POST['secode'] == "escoleaveaugust")){
						$post = $this->input->post();
						$msg = $this->InsertClass->reqleave($post,$dayys,$company_id,$type);
						if($msg == 'success'){
							?>
							 <script type="text/javascript">
								alert("Form successfully submitted, kindly wait for the approval");
							</script>
							<?php
							echo "<script>document.location.href='".base_url()."'</script>";
						}else{
						}
					}else{
					?>
						 <script type="text/javascript">
							alert("Employee number or security code are incorrect!");
						</script>
					<?php
						echo "<script>document.location.href='".base_url()."'</script>";
					}
				}
			}
	}
}
