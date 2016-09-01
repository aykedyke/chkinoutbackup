<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
error_reporting(0);
	$cutoff_id = $_GET['id'];
	
	$cutoff_qry = mysql_query("SELECT * FROM tbl_cutoff WHERE cutoff_id='$cutoff_id'");
	$row_cutoff = mysql_fetch_array($cutoff_qry);
	
	$payroll_from = $row_cutoff['payroll_from'];
	$payroll_from = strtotime($payroll_from);
	$payroll_from = date('F j, Y', $payroll_from);
	
	$payroll_to = $row_cutoff['payroll_to'];
	$payroll_to = strtotime($payroll_to);
	$payroll_to = date('F j, Y', $payroll_to);
	
	$payroll_qry = mysql_query("SELECT * FROM tbl_payroll WHERE cutoff_id='$cutoff_id' ORDER BY employee_name ASC");
	$payroll_qrynew = mysql_query("SELECT * FROM tbl_payroll WHERE cutoff_id='$cutoff_id' ORDER BY employee_name ASC");
	$payroll_qry1 = mysql_query("SELECT * FROM tbl_payroll WHERE cutoff_id='$cutoff_id' ORDER BY employee_name ASC");
	$row_payroll1 = mysql_fetch_array($payroll_qry1);
	
?>


<?php include('header.php'); ?>
 <style>
	.table_det ul li{
		display:inline-block;
		border: 1px solid black;
		width:150px;
		height:35px;
	}
	.headul li{
		background:gray;
		color:white;
	}
 </style>
 <script>

	function search_emp(emp_name){
		dataSent = {'emp_name':emp_name};
		$.ajax({
				type: "POST",
				cache: true,       
				url: 'ajax/search_employee_payroll.php',
				data: dataSent,
				success: function(html) {
					$("#emp_tablemain").html(html);
				}
			});
	}
 </script>
<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h3>Payroll date: <br>
				<?php echo $payroll_from;?> to <?php echo $payroll_to;?></h3>
				<h3>Number of working days: <?php echo $row_payroll1['no_of_days'];?></h3>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
	<br>
    <div class="wrapper">
		 <div class="formRow" style = "display:none;">
			<label><b>Search Employee Name:</b></label>
			<div class="formRight"><input onkeyup="search_emp(this.value)" id = "emp_name"  style = "width:200px;padding:5px;" type = "text" name = "emp_name" value = "" /></div>
			<div class="clear"></div>
		</div>
		<a href = "payslipxls.php?id=<?php echo $cutoff_id;?>"> <input type="button" name = "publish" value="View via XLS" class="blueB" /></a>
		<a target="_blank" href = "tcpdf/payslip/pdf_payslip_all.php?id=<?php echo $cutoff_id;?>"> <input type="button" name = "publish" value="View via PDF" class="blueB" /></a>
		 <br>
		 <br>
		<div class="table_container" style = "width:100%;overflow-x:scroll;">
		<div class="table_wrapper" 	 style = "width:4260px;">
		<div class="table_det">
			<ul class = "headul">
							<li style = "width:200px;">Fullname</li>
							<li>Employee ID</li>
							<li>Monthly Rate</li>
							<li>Semi Monthly Basic</li>
							<li>Semi Monthly Allowance</li>
							<li>Semi Monthly Total</li>
							<li class="head">Working Days</li>
							<li class="head">Days Present</li>
							<li class="head">Rate Per Day</li>
							<li class="head">Hours OT</li>
							<li class="head">Amount OT</li>
							<li class="head">Absent Hours</li>
							<li class="head">Late/Absent Amount</li>
							<li class="head">Total Late</li>
							<li class="head">Late Deduction</li>
							<li class="head">Salary Adjustment</li>
							<li class="head">Gross Pay</li>
							<li class="head">Tax</li>
							<li class="head">SSS ER</li>
							<li class="head">SSS EE</li>
							<li class="head">SSS EC</li>
							<li class="head">PHIC ER</li>
							<li class="head">PHIC EE</li>
							<li class="head">HDMF ER</li>
							<li class="head">HDMF EE</li>
							<li class="head">Total deductions</li>
							<li class="head">Net PAY</li>
			</ul>
			<div style = "height:200px;overflow-y:scroll;">
			<?php
					while($row_payroll = mysql_fetch_array($payroll_qrynew)){
					if($row_payroll['salary_adjustment'] == ""){
						$row_payroll['salary_adjustment'] = 0;
					}
				?>
				 <ul>
					<li style = "width:200px;"><a href = "update_pay.php?<?php echo md5(rand(111111111111111,999999999999999));?>=<?php echo md5(rand(111111111111111,999999999999999))?>&id=<?php echo $row_payroll['payroll_id'];?>&cutoff_id=<?php echo $cutoff_id;?>"><?php echo $row_payroll['employee_name'];?></a></li>
					<li><?php echo $row_payroll['employee_id'];?></li>
					<li><?php echo ($row_payroll['monthly_rate']);?></li>
					<li><?php echo ($row_payroll['semi_monthly_basic']);?></li>
					<li><?php echo ($row_payroll['semi_monthly_allowance']);?></li>
					<li><?php echo ($row_payroll['semi_monthly_total']);?></li>
					<li><?php echo $row_payroll['no_of_days'];?></li>
					<li><?php echo $row_payroll['days_present'];?></li>
					<li><?php echo round($row_payroll['rate_per_day'],2);?></li>
					<li><?php echo $row_payroll['ot_hours'];?></li>
					<li><?php echo ($row_payroll['ot_ammount']);?></li>
					<li><?php echo $row_payroll['ut_hours'];?></li>
					<li><?php echo round($row_payroll['ut_ammount'],2);?></li>
					<li><?php echo ($row_payroll['late_mins']);?></li>
					<li><?php echo round($row_payroll['late_deduction'],2);?></li>
					<li><?php echo ($row_payroll['salary_adjustment']);?></li>
					<li><?php echo ($row_payroll['gross_pay']);?></li>
					<li><?php echo ($row_payroll['tax']);?></li>
					<li><?php echo ($row_payroll['sss_er']);?></li>
					<li><?php echo ($row_payroll['sss_ee']);?></li>
					<li><?php echo ($row_payroll['sss_ec']);?></li>
					<li><?php echo ($row_payroll['phic_er']);?></li>
					<li><?php echo ($row_payroll['phic_ee']);?></li>
					<li><?php echo ($row_payroll['hdmf_er']);?></li>
					<li><?php echo ($row_payroll['hdmf_ee']);?></li>
					<li><?php echo ($row_payroll['total_deductions']);?></li>
					<li><?php echo ($row_payroll['net_pay']);?></li>
				</ul>
				<?php
					}
				?>
			</div>
		</div>
		</div>
		</div>
		<br>
		<a href = "payslipxls.php?id=<?php echo $cutoff_id;?>"> <input type="button" name = "publish" value="View via XLS" class="blueB" /></a>
		<a href = "tcpdf/payslip/pdf_payslip_all.php?id=<?php echo $cutoff_id;?>"> <input type="button" name = "publish" value="View via PDF" class="blueB" /></a>
    </div>
   
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>