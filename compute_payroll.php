<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
$x = 0;
error_reporting(0);
if(isset($_POST['submit'])){
 $attfrom_date = $_POST['attfrom_date'];
 $attto_date = $_POST['attto_date'];
 $payfrom_date = $_POST['payfrom_date'];
 $payto_date = $_POST['payto_date'];
 $rand_identifier = rand(111111111,999999999);
 $url_rand_identifier = md5(rand(11111111111111111111,99999999999999999999));
 
 
 $add_cutoff = mysql_query("INSERT INTO tbl_cutoff (cutoff_from,cutoff_to,payroll_from,payroll_to,rand_identifier,company_id) VALUES 
							('$attfrom_date','$attto_date','$payfrom_date','$payto_date','$rand_identifier','".$_SESSION['company']."')");
  $rand_qry = mysql_query("SELECT * FROM tbl_cutoff WHERE rand_identifier = '$rand_identifier'");
  $row_qry = mysql_fetch_array($rand_qry);
  $cutoff_id = $row_qry['cutoff_id'];
	
	$from = $attfrom_date;
	$to = $attto_date;
	
	$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
	//$count_days = mysql_num_rows($no_days);
	$count_days = 0;
	while($row_no_days = mysql_fetch_array($no_days)){
		$date123 = $row_no_days['date'];
		$date_day = date('l', strtotime($date123));
		if($date_day == "Monday" || $date_day == "Tuesday" || $date_day == "Wednesday" || $date_day == "Thursday" || $date_day == "Friday"){
			$count_days = $count_days + 1;
		}else{
		}
	}

  $qrypay_log = mysql_query("SELECT * FROM tbl_employee WHERE inactive != '1' AND company_id = '".$_SESSION['company']."' ORDER BY fullname ASC");
  while($row_log = mysql_fetch_array($qrypay_log)){
	include("class_payroll.php");
	
	$semi_monthly_total = ($initial1_basic_pay / 2) + $basic_allowance;
	//$rate_per_day = ($initial1_basic_pay * 12) / 261;
	$ut_hours = $count_absent * 8;
	$ut_ammount = $late_deduction + $absent_deduction;
	$gross = round($gross, 2);
	$tax = round($tax, 2);
	$total_deductions = $tax + 50 + $philhealth + $sss;
	$net_pay = $gross - $total_deductions + $basic_allowance;
	$total_deductions = round($total_deductions, 2);
	$net_pay = round($net_pay, 2);
	
	if($gross <= 0){
		$gross = 0;
		$tax = 0;
		$sss_er = 0;
		$sss = 0;
		$total_deductions = 0;
		$net_pay = 0;
	}
	
	
	$add_payroll = mysql_query("INSERT INTO tbl_payroll 
								(cutoff_id,
								 company_id,
								 employee_id,
								 employee_name,
								 monthly_rate,
								 semi_monthly_basic,
								 semi_monthly_allowance,
								 semi_monthly_total,
								 no_of_days,
								 days_present,
								 rate_per_day,
								 ot_hours,
								 ot_ammount,
								 ut_hours,
								 ut_ammount,
								 salary_adjustment,
								 gross_pay,
								 tax,
								 sss_er,
								 sss_ee,
								 sss_ec,
								 sss_loan,
								 phic_er,
								 phic_ee,
								 phic_loan,
								 hdmf_er,
								 hdmf_ee,
								 hdmf_loan,
								 staff_loan,
								 total_deductions,
								 net_pay,
								 late_deduction,
								 late_mins
								 ) 
								 VALUES 
								 ('$cutoff_id',
								  '".$_SESSION['company']."',
								  '$employee_id',
								  '$fullname',
								  '$initial1_basic_pay',
								  '$basic_rate',
								  '$basic_allowance',
								  '$semi_monthly_total',
								  '$count_days',
								  '$count_present',
								  '$perday_pay',
								  '$total_hour_overtime',
								  '$overtime_ammount',
								  '$ut_hours',
								  '$ut_ammount',
								  '$salary_adjustment',
								  '$gross',
								  '$tax',
								  '$sss_er',
								  '$sss',
								  '$sss_ec',
								  '$sss_loan',
								  '$philhealth',
								  '$philhealth',
								  '$phic_loan',
								  '50',
								  '50',
								  '$hdmf_loan',
								  '$staff_loan',
								  '$total_deductions',
								  '$net_pay',
								  '$late_deduction',
								  '$total_time_late'
								  )");
  }
  
  echo "<script>location.href='payroll.php?$url_rand_identifier=$rand_identifier&id=$cutoff_id';</script>";
  
}


?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Payroll</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
		<form enctype="multipart/form-data" id = "validate" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Payroll Computation</h6></div>
					<div class="formRow">
								<label><b>Attendance Cutoff FROM Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "" type = "text" name = "attfrom_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b>Attendance Cutoff TO Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "" type = "text" name = "attto_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b>FROM Payroll Period Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "" type = "text" name = "payfrom_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b>TO Payroll Period Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "" type = "text" name = "payto_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formSubmit"><input type="submit" onclick="return confirm('Are you sure you want to compute this cutoff?')" name = "submit" value="Compute" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		</form>
		<br>
		<!--<div>
			<button id="btnExport">Export to excel</button>
        </div>-->
		
		
    <br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>