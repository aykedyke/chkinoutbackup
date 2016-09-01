<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

$id = $_GET['id'];
$cutoff_id = $_GET['cutoff_id'];

$employee_query = mysql_query("SELECT * FROM tbl_payroll WHERE payroll_id = '$id'");
$row_employee = mysql_fetch_array($employee_query);

$employee_name = $row_employee['employee_name'];
$monthly_rate = $row_employee['monthly_rate'];
$semi_monthly_basic = $row_employee['semi_monthly_basic'];
$semi_monthly_allowance = $row_employee['semi_monthly_allowance'];
$semi_monthly_total = $row_employee['semi_monthly_total'];
$no_of_days = $row_employee['no_of_days'];
$days_present = $row_employee['days_present'];
$rate_per_day = $row_employee['rate_per_day'];
$ot_hours = $row_employee['ot_hours'];
$ot_ammount = $row_employee['ot_ammount'];
$ut_hours = $row_employee['ut_hours'];
$ut_ammount = $row_employee['ut_ammount'];
$salary_adjustment = $row_employee['salary_adjustment'];
$gross_pay = $row_employee['gross_pay'];
$tax = $row_employee['tax'];
$sss_er = $row_employee['sss_er'];
$sss_ee = $row_employee['sss_ee'];
$sss_ec = $row_employee['sss_ec'];
$sss_loan = $row_employee['sss_loan'];
$phic_er = $row_employee['phic_er'];
$phic_ee = $row_employee['phic_ee'];
$phic_loan = $row_employee['phic_loan'];
$hdmf_er = $row_employee['hdmf_er'];
$hdmf_ee = $row_employee['hdmf_ee'];
$hdmf_loan = $row_employee['hdmf_loan'];
$staff_loan = $row_employee['staff_loan'];
$total_deductions = $row_employee['total_deductions'];
$net_pay = $row_employee['net_pay'];

$random = md5(rand(11111111111111111111,99999999999999999999));


if(isset($_POST['update'])){
	
	$rate_per_day = $_POST['rate_per_day'];
	$ot_hours = $_POST['ot_hours'];
	$ot_ammount = $_POST['ot_ammount'];
	$ut_hours = $_POST['ut_hours'];
	$ut_ammount = $_POST['ut_ammount'];
	$salary_adjustment = $_POST['salary_adjustment'];
	$gross_pay = $_POST['gross_pay'];
	$tax = $_POST['tax'];
	$sss_er = $_POST['sss_er'];
	$sss_ee = $_POST['sss_ee'];
	$sss_ec = $_POST['sss_ec'];
	$sss_loan = $_POST['sss_loan'];
	$phic_er = $_POST['phic_er'];
	$phic_ee = $_POST['phic_ee'];
	$phic_loan = $_POST['phic_loan'];
	$hdmf_er = $_POST['hdmf_er'];
	$hdmf_ee = $_POST['hdmf_ee'];
	$hdmf_loan = $_POST['hdmf_loan'];
	$staff_loan = $_POST['staff_loan'];
	$total_deductions = $_POST['total_deductions'];
	$net_pay = $_POST['net_pay'];
	
	
	mysql_query("UPDATE tbl_payroll SET 
				rate_per_day = '$rate_per_day',
				ot_hours = '$ot_hours',
				ot_ammount = '$ot_ammount',
				ut_hours = '$ut_hours',
				ut_ammount = '$ut_ammount',
				salary_adjustment = '$salary_adjustment',
				gross_pay = '$gross_pay',
				tax = '$tax',
				sss_er = '$sss_er',
				sss_ee = '$sss_ee',
				sss_ec = '$sss_ec',
				sss_loan = '$sss_loan',
				phic_er = '$phic_er',
				phic_ee = '$phic_ee',
				phic_loan = '$phic_loan',
				hdmf_er = '$hdmf_er',
				hdmf_ee = '$hdmf_ee',
				hdmf_loan = '$hdmf_loan',
				staff_loan = '$staff_loan',
				total_deductions = '$total_deductions',
				net_pay = '$net_pay'
				WHERE payroll_id = '$id'
				");
	
	
	echo "<script>document.location.href='payroll.php?$random=$random&id=$cutoff_id'</script>";
    echo "<script>'Content-type: application/octet-stream'</script>"; 
}

?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5><?php echo $row_employee['employee_name']; ?></h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>			
			<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
					<fieldset>
					 <div class="widget">
					  <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Update Payroll</h6></div>
							<div class="formRow">
								<label><b>Fullname:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "employee_name" value = "<?php echo $row_employee['employee_name']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Monthly Rate:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "monthly_rate" value = "<?php echo $row_employee['monthly_rate']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Semi Monthly Basic:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "semi_monthly_basic" value = "<?php echo $row_employee['semi_monthly_basic']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Semi Monthly Allowance:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "semi_monthly_allowance" value = "<?php echo $row_employee['semi_monthly_allowance']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Semi Monthly Total:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "semi_monthly_total" value = "<?php echo $row_employee['semi_monthly_total']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>No. of working days:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "no_of_days" value = "<?php echo $row_employee['no_of_days']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Days present:</b></label>
								<div class="formRight"><input style = "width:200px;" readonly type = "text" name = "days_present" value = "<?php echo $row_employee['days_present']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Rate per day:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "rate_per_day" value = "<?php echo round($row_employee['rate_per_day'],2); ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Overtime hours:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "ot_hours" value = "<?php echo $row_employee['ot_hours']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Overtime ammount:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "ot_ammount" value = "<?php echo $row_employee['ot_ammount']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Absent hours:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "ut_hours" value = "<?php echo $row_employee['ut_hours']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Absent Ammount:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "ut_ammount" value = "<?php echo $row_employee['ut_ammount']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Salary Adjustment:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "salary_adjustment" value = "<?php echo $row_employee['salary_adjustment']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Gross pay:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "gross_pay" value = "<?php echo $row_employee['gross_pay']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Tax:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "tax" value = "<?php echo $row_employee['tax']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS ER:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sss_er" value = "<?php echo $row_employee['sss_er']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS EE:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sss_ee" value = "<?php echo $row_employee['sss_ee']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS EC:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sss_ec" value = "<?php echo $row_employee['sss_ec']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>SSS Loan:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "sss_loan" value = "<?php echo $row_employee['sss_loan']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Phic ER:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "phic_er" value = "<?php echo $row_employee['phic_er']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>PHIC EE:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "phic_ee" value = "<?php echo $row_employee['phic_ee']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>PHIC Loan:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "phic_loan" value = "<?php echo $row_employee['phic_loan']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>HDMF ER:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "hdmf_er" value = "<?php echo $row_employee['hdmf_er']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>HDMF EE:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "hdmf_ee" value = "<?php echo $row_employee['hdmf_ee']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>HDMF Loan:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "hdmf_loan" value = "<?php echo $row_employee['hdmf_loan']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Staff Loan:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "staff_loan" value = "<?php echo $row_employee['staff_loan']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>Total Deduction:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "total_deductions" value = "<?php echo $row_employee['total_deductions']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formRow">
								<label><b>NET Pay:</b></label>
								<div class="formRight"><input style = "width:200px;" type = "text" name = "net_pay" value = "<?php echo $row_employee['net_pay']; ?>" /></div>
								<div class="clear"></div>
							</div>
							<div class="formSubmit" id = "update_id"><input onclick="return confirm('Are you sure you want to update this employee's payroll?');" type="submit" name = "update" value="UPDATE" class="blueB" /></div>
							<div class="clear"></div>
					</div>
					</fieldset> 
            </form>
		
		
		
		<br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>
<script>
	function add_other(){
		$('#add_deduct').fadeIn();
		$('#gray_button').hide();
		$('#update_id').hide();
	}
	function add_otherallow(){
		$('#add_allow').fadeIn();
		$('#gray_button_allow').hide();
	}
	function cancel_deduct(){
		$('#add_deduct').hide();
		$('#gray_button').fadeIn();
		$('#update_id').fadeIn();
	}
	function cancel_allow(){
		$('#add_allow').hide();
		$('#gray_button_allow').fadeIn();
	}
</script>
</body>
</html>