<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
$x = 0;

if(isset($_POST['view_attendance'])){
	$from = $_POST['from'];
	$to = $_POST['to'];
	
	if(($from != "") && ($to != "")){
		$strfrom = strtotime($from);
		$strto = strtotime($to);
		
		if($strto >= $strfrom){
			$x = 1;
		}else{
			echo "<script>alert('Error, please check your dates!');</script>";
		}
	}
}
?>


<?php include('header.php'); ?>

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
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
			<form id="validate" name="frmAdd" method = "post" action = "overtime-log.php" class = "form">
			<fieldset>
					<div class="formRow">
                        <label><b>From : </b></label>
                        <div class="formRight">
							<select style = "width:300px;height:23px;" name = "from">
							  <option value="">Please Select Date</option>
							  <?php
								$date_qry = mysql_query("SELECT DISTINCT date FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' ORDER BY date DESC");
								while($row_date = mysql_fetch_array($date_qry)){
							  ?>
							  <option value="<?php echo $row_date['date']; ?>"><?php echo date("F d, Y", strtotime($row_date['date'])); ?></option>
							  <?php
							  }
							  ?>
							</select>
						</div>
                        <div class="clear"></div>
                    </div>
					<div class="formRow">
                        <label><b>To : </b></label>
                        <div class="formRight">
							<select style = "width:300px;height:23px;" name = "to">
							  <option value="">Please Select Date</option>
							  <?php
								$date_qry = mysql_query("SELECT DISTINCT date FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' ORDER BY date DESC");
								while($row_date = mysql_fetch_array($date_qry)){
							  ?>
							  <option value="<?php echo $row_date['date']; ?>"><?php echo date("F d, Y", strtotime($row_date['date'])); ?></option>
							  <?php
							  }
							  ?>
							</select>
							<input class="blueB" type = "submit" name = "view_attendance" value = "View Attendance" />
						</div>
                        <div class="clear"></div>
                    </div>
			</fieldset>
			</form>
		<br>
		<?php
			if($x == 1){
			$main_date = $_POST['from'];
			$no_days = mysql_query("SELECT DISTINCT date FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date BETWEEN '$from' and '$to'");
			$count_days = mysql_num_rows($no_days);
	   ?>
			<!--<h3><?php echo date("F d, Y", strtotime($main_date)); ?></h3>-->
		<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Time Logs</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
				<th style = "background:#4c4c4c">Date</th>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Attendance In</th>
				<th style = "background:#4c4c4c">Out for Lunch</th>
				<th style = "background:#4c4c4c">In from Lunch</th>
				<th style = "background:#4c4c4c">Out for meeting</th>
				<th style = "background:#4c4c4c">In from meeting</th>
				<th style = "background:#4c4c4c">Attendance Out</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_log = mysql_query("SELECT DISTINCT 
										tbl_overtime_logs.emp_id,
										tbl_overtime_logs.date,
										tbl_employee.inactive
										FROM 
										tbl_overtime_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_overtime_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_overtime_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_overtime_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_overtime_logs.date");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
				$date = $row_log['date'];
					$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND employee_id = '$employee_id'");
					$row_fn = mysql_fetch_array($qry_fn);
				$fullname = $row_fn['fullname'];
					$qry_timein = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND action = 'In' ORDER BY time ASC");
					$row_timein = mysql_fetch_array($qry_timein);
				$attendance_in = $row_timein['time'];
				$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
						$row_startime = mysql_fetch_array($startime_qry);
						if($employee_id == 'SIN003' || $employee_id == 'SIN040'){
							$start_time = "02:00 pm";
						}else{
							$start_time = $row_startime['start_time'];
						}
							$startin = strtotime($start_time); 
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $startin) / 60;
						}
						else{
							$min_late = 0;
						}
					$qry_lunchout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Lunch' AND action = 'Out' ORDER BY overtime_log_id ASC");
					$row_lunchout = mysql_fetch_array($qry_lunchout);
				$lunch_out = $row_lunchout['time'];
					$qry_lunchin = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Lunch' AND action = 'In' ORDER BY overtime_log_id DESC");
					$row_lunchin = mysql_fetch_array($qry_lunchin);
				$lunch_in = $row_lunchin['time'];
					$qry_meetingout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Meeting' AND action = 'Out' ORDER BY overtime_log_id ASC");
					$row_meetingout = mysql_fetch_array($qry_meetingout);
				$meeting_out = $row_meetingout['time']." - ".$row_meetingout['company'];
					$qry_meetingin = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Meeting' AND action = 'In' ORDER BY overtime_log_id DESC");
					$row_meetingin = mysql_fetch_array($qry_meetingout);
				$meeting_in = $row_meetingin['time'];
					$qry_timeout = mysql_query("SELECT * FROM tbl_overtime_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' ORDER BY overtime_log_id DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
				if($min_late == 0){
			?>
					<tr>
						<td><center><?php echo $date; ?></center> </td>
						<td><center><?php echo $employee_id; ?></center> </td>
						<td><center><?php echo $fullname; ?></center> </td>
						<td><center><?php echo $attendance_in; ?></center> </td>
						<td><center><?php echo $lunch_out; ?></center> </td>
						<td><center><?php echo $lunch_in; ?></center> </td>
						<td><center><?php echo $meeting_out; ?></center> </td>
						<td><center><?php echo $meeting_in; ?></center> </td>
						<td><center><?php echo $attendance_out; ?></center> </td>
					</tr>
			<?php
				}else{
				?>
					<tr style = "color:red;">
						<td><center><?php echo $date; ?></center> </td>
						<td><center><?php echo $employee_id; ?></center> </td>
						<td><center><?php echo $fullname; ?></center> </td>
						<td><center><?php echo $attendance_in; ?></center> </td>
						<td><center><?php echo $lunch_out; ?></center> </td>
						<td><center><?php echo $lunch_in; ?></center> </td>
						<td><center><?php echo $meeting_out; ?></center> </td>
						<td><center><?php echo $meeting_in; ?></center> </td>
						<td><center><?php echo $attendance_out; ?></center> </td>
					</tr>
				<?php
				}
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>
		<a href = "overtime_logsxls.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS" /></a>
		<?php
			}
		?>
		<br>
		
		<div>
			<!--<button id="btnExport">Export to excel</button>-->
        </div>
		
		
    <br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>