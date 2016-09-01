<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	$x = 1;
	
	$emp_id = $_GET['id'];
	$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE id = '$emp_id'");
	$row_emp = mysql_fetch_array($emp_qry);
?>
<?php include('header.php'); ?>
<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>The last 40 attendance logs of <?php echo $row_emp['fullname']; ?></h5>
				<?php //echo $_SESSION['company']; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
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
				<th style = "background:#4c4c4c">Location</th>
				<th style = "background:#4c4c4c">Phone Time & Date</th>
				<th style = "background:#4c4c4c">Original Time & Date</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										tbl_employee.inactive,
										tbl_employee.company_id
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id AND
										tbl_employee.id = '$emp_id'
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										ORDER BY tbl_logs.date DESC LIMIT 40");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
				$date = $row_log['date'];
					$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND employee_id = '$employee_id'");
					$row_fn = mysql_fetch_array($qry_fn);
				$fullname = $row_fn['fullname'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND action = 'In' ORDER BY time ASC");
					$row_timein = mysql_fetch_array($qry_timein);
					$attendance_in = $row_timein['time'];
					$attendance_location_in = $row_timein['location'];
					
				$qry_locationin = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND location != '' ORDER BY time ASC");
				$row_locationin = mysql_fetch_array($qry_locationin);
				
				if($attendance_location_in == ""){
					$attendance_location_in = $row_locationin['location'];
				}
				
				
				$attendance_in_fake = $row_timein['phone_time'];
				$attendance_in_orig = $row_timein['original_time'];
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
					$qry_lunchout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Lunch' AND action = 'Out' ORDER BY log_id ASC");
					$row_lunchout = mysql_fetch_array($qry_lunchout);
				$lunch_out = $row_lunchout['time'];
					$qry_lunchin = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Lunch' AND action = 'In' ORDER BY log_id DESC");
					$row_lunchin = mysql_fetch_array($qry_lunchin);
				$lunch_in = $row_lunchin['time'];
					$qry_meetingout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Meeting' AND action = 'Out' ORDER BY log_id ASC");
					$row_meetingout = mysql_fetch_array($qry_meetingout);
				$meeting_out = $row_meetingout['time']." - ".$row_meetingout['company'];
					$qry_meetingin = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND status = 'Meeting' AND action = 'In' ORDER BY log_id DESC");
					$row_meetingin = mysql_fetch_array($qry_meetingout);
				$meeting_in = $row_meetingin['time'];
					$qry_timeout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' ORDER BY time DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
				$attendance_location_out = $row_timeout['location'];
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
						<td><center><?php
										if($attendance_location_in == "" ){
											echo $attendance_location_in;
										}else{
											echo $attendance_location_in;
										}										
									?></center> </td>
						<td><center><?php echo $attendance_in_fake; ?></center> </td>
						<td><center><?php echo $attendance_in_orig; ?></center> </td>
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
						<td><center><?php
										if($attendance_location_in == "" ){
											echo $attendance_location_in;
										}else{
											echo $attendance_location_in;
										}										
									?></center> </td>
						<td><center><?php echo $attendance_in_fake; ?></center> </td>
						<td><center><?php echo $attendance_in_orig; ?></center> </td>
					</tr>
				<?php
				}
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>
<script>
	function deactivate_emp(id){
		var r = confirm("Do you want to deactivate this employee?");
		if (r == true) {
			
		} else {
		}
		
	}
</script>

</body>
</html>