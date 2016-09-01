<?php

ob_start();
session_start();

require_once("../mod_lib/connection.php");
include("../mod_lib/ConnectionMgr.php");

$emp_name = $_POST['emp_name'];
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
	$payroll_qry1 = mysql_query("SELECT * FROM tbl_payroll WHERE cutoff_id='$cutoff_id' ORDER BY employee_name ASC");
	$row_payroll1 = mysql_fetch_array($payroll_qry1);

//$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE fullname LIKE '%$emp_name%'");
?>
<head>
<link href="../css/datatable.css" rel="stylesheet" type="text/css" />
</head>

	   <div id = "emp_tablemain" style = "margin-top: 0px;" class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Employees</h6></div>
		
            <table id = "emp_table" cellpadding="0" cellspacing="0" border="0" class = "display dTable" >
            <thead >
            <tr>
				<th>Fullname</th>
					<th>Employee ID</th>
					<th>Monthly Rate</th>
					<th>Semi Monthly Basic</th>
					<th>Semi Monthly Allowance</th>
					<th>Semi Monthly Total</th>
					<th>Working Days</th>
					<th>Days Present</th>
					<th>Rate Per Day</th>
					<th>Hours OT</th>
					<th>Ammount OT</th>
					<th>Late/Absent Hours</th>
					<th>Late/Absent Ammount</th>
					<th>Salary Adjustment</th>
					<th>Gross Pay</th>
					<th>Tax</th>
					<th>SSS ER</th>
					<th>SSS EE</th>
					<th>SSS EC</th>
					<th>PHIC ER</th>
					<th>PHIC EE</th>
					<th>HDMF ER</th>
					<th>HDMF EE</th>
					<th>Total deductions</th>
					<th>Net PAY</th>
			
				<?php
					/* if($_SESSION['company'] == 2 && $_SESSION['admin'] == "admin"){
				}else{ */
				?>
				<th style = "background:#4c4c4c">View</th>
				<th style = "background:#4c4c4c">View Attendance</th>
				<?php
				/* } */
				?>
				<th style = "background:#4c4c4c">Delete</th>
            </tr>
            </thead>
           <tbody>
				<?php
					while($row_payroll = mysql_fetch_array($payroll_qry)){
					if($row_payroll['salary_adjustment'] == ""){
						$row_payroll['salary_adjustment'] = 0;
					}
				?>
				 <tr>
					<td><a href = "update_pay?<?php echo md5(rand(111111111111111,999999999999999));?>=<?php echo md5(rand(111111111111111,999999999999999))?>&id=<?php echo $row_payroll['payroll_id'];?>"><?php echo $row_payroll['employee_name'];?></a></td>
					<td><?php echo $row_payroll['employee_id'];?></td>
					<td><?php echo number_format($row_payroll['monthly_rate']);?></td>
					<td><?php echo number_format($row_payroll['semi_monthly_basic']);?></td>
					<td><?php echo number_format($row_payroll['semi_monthly_allowance']);?></td>
					<td><?php echo number_format($row_payroll['semi_monthly_total']);?></td>
					<td><?php echo $row_payroll['no_of_days'];?></td>
					<td><?php echo $row_payroll['days_present'];?></td>
					<td><?php echo number_format($row_payroll['rate_per_day']);?></td>
					<td><?php echo $row_payroll['ot_hours'];?></td>
					<td><?php echo number_format($row_payroll['ot_ammount']);?></td>
					<td><?php echo $row_payroll['ut_hours'];?></td>
					<td><?php echo number_format($row_payroll['ut_ammount']);?></td>
					<td><?php echo number_format($row_payroll['salary_adjustment']);?></td>
					<td><?php echo number_format($row_payroll['gross_pay']);?></td>
					<td><?php echo number_format($row_payroll['tax']);?></td>
					<td><?php echo number_format($row_payroll['sss_er']);?></td>
					<td><?php echo number_format($row_payroll['sss_ee']);?></td>
					<td><?php echo number_format($row_payroll['sss_ec']);?></td>
					<td><?php echo number_format($row_payroll['phic_er']);?></td>
					<td><?php echo number_format($row_payroll['phic_ee']);?></td>
					<td><?php echo number_format($row_payroll['hdmf_er']);?></td>
					<td><?php echo number_format($row_payroll['hdmf_ee']);?></td>
					<td><?php echo number_format($row_payroll['total_deductions']);?></td>
					<td><?php echo number_format($row_payroll['net_pay']);?></td>
				</tr>
				<?php
					}
				?>
			 </tbody>
            </table>
			
        </div>