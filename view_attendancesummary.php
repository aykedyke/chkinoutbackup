<?php 

set_time_limit(600);

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
$x = 0;

$from = $_GET['from_date'];
$to = $_GET['to_date'];

if(isset($_POST['view_attendance'])){
	$from = $_POST['from'];
	$to = $_POST['to'];
	
	/* if(($from != "") && ($to != "")){
		$strfrom = strtotime($from);
		$strto = strtotime($to);
		
		if($strto >= $strfrom){
			$x = 1;
		}else{
			echo "<script>alert('Error, please check your dates!');</script>";
		}
	} */
	
	echo "<script>document.location.href='logsxls.php?from=".$from."&to=".$to."'</script>";
}
?>


<?php include('header.php'); ?>
<script>
	$(document).ready(function () {
            $('#Grid_Id').dataTable({
                "bPaginate": false
            });
        });
</script>
<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Attendance</h5>
				<!--<?php echo $_SESSION['company']; ?>-->
            </div>
            <div class="clear"></div>
        </div>
    </div>
	<div class="line"></div>
	<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "document.location.href='index.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Complete Attendance Logs</span></a></li>
                    <li onclick = "document.location.href='view_attendancesummary.php"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Attendance Summary of Absents and Late</span></a></li>
				</ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
			 <form enctype="multipart/form-data" id = "validate" class="form">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Search Filter</h6></div>
						<!--<input style = "width:200px" type="text" class="validate[required]" name="department_name" id="department_name"/>-->
					<div class="formRow">
								<label><b> FROM Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "<?php echo $from = $_GET['from_date']; ?>" type = "text" name = "from_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b> TO Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "<?php echo $to = $_GET['to_date'];  ?>" type = "text" name = "to_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formSubmit"><input type="submit" name = "submit" value="submit" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		 </form>
		 <?php
			$main_date = $_POST['from'];
			$no_days = mysql_query("SELECT DISTINCT date FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
			$count_days = mysql_num_rows($no_days);
		 ?>
			<br>
			<!--<h3><?php echo date("F d, Y", strtotime($main_date)); ?></h3>-->
			<h3>Number of Working days : <?php echo $count_days ?></h3>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Lates and Absences</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
            <tr>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Days Present</th>
				<th style = "background:#4c4c4c">Total Minutes of Late</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_log = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0'");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['employee_id'];
				$fullname = $row_log['fullname'];
				$qry_absent = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$count_present = mysql_num_rows($qry_absent);
				$no_days = mysql_query("SELECT DISTINCT date,emp_id FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to' AND emp_id = '$employee_id'");
				$total_min_late = 0;
				while($row_days = mysql_fetch_array($no_days)){
					$days_date = $row_days['date'];
					$days_emp_id = $row_days['emp_id'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$days_date' AND emp_id = '$days_emp_id' AND status = 'Attendance' AND action = 'In' ORDER BY log_id ASC");
					$row_timein = mysql_fetch_array($qry_timein);
						$attendance_in = $row_timein['time'];
						$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
						$row_startime = mysql_fetch_array($startime_qry);
						$start_time = $row_startime['start_time'];
							$startin = strtotime($start_time); 
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $startin) / 60;
						}
						else{
							$min_late = 0;
						}
						$total_min_late = $total_min_late + $min_late;
						$total_min_late = round($total_min_late);
				}
				
			?>
					<tr>
						<td><center><?php echo $employee_id; ?></center> </td>
						<td><center><?php echo $fullname; ?></center> </td>
						<td><center><?php echo $count_present; ?></center> </td>
						<td><center><?php echo round($total_min_late); ?></center> </td>
					</tr>
			<?php
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>
<br>
<br>
	<a href = "attendancexls.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS" /></a>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>