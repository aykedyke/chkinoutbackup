<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
if(isset($_POST['date'])){
	$x = 1;
}else{
	$x = 0;
}
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Attendance</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
			<form id="validate" name="frmAdd" method = "post" action = "view_logs.php" class = "form">
			<fieldset>
				<div class="formRow">
					<label>Date</label>
					<div class="formRight">
						<select style = "width:300px;height:23px;" name = "date">
						  <option value="">Please Select Date</option>
						  <?php
							$date_qry = mysql_query("SELECT DISTINCT date FROM tbl_logs ORDER BY date DESC");
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
			$main_date = $_POST['date'];
	   ?>
			<h3><?php echo date("F d, Y", strtotime($main_date)); ?></h3>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Time Logs</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
            <tr>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Attendance In</th>
				<th style = "background:#4c4c4c">Out for Lunch</th>
				<th style = "background:#4c4c4c">In from Lunch</th>
				<th style = "background:#4c4c4c">Out for meeting</th>
				<th style = "background:#4c4c4c">In from meeting</th>
				<th style = "background:#4c4c4c">Attendance Out</th>
				<th style = "background:#4c4c4c">Total Minutes of late</th>
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_log = mysql_query("SELECT DISTINCT emp_id,date from tbl_logs WHERE date = '$main_date'");
				while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
					$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$employee_id'");
					$row_fn = mysql_fetch_array($qry_fn);
				$fullname = $row_fn['fullname'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE date = '$main_date' AND emp_id = '$employee_id' AND status = 'Attendance' AND action = 'In' ORDER BY log_id ASC");
					$row_timein = mysql_fetch_array($qry_timein);
				$attendance_in = $row_timein['time'];
					$qry_lunchout = mysql_query("SELECT * FROM tbl_logs WHERE date = '$main_date' AND emp_id = '$employee_id' AND status = 'Lunch' AND action = 'Out' ORDER BY log_id ASC");
					$row_lunchout = mysql_fetch_array($qry_lunchout);
				$lunch_out = $row_lunchout['time'];
					$qry_lunchin = mysql_query("SELECT * FROM tbl_logs WHERE date = '$main_date' AND emp_id = '$employee_id' AND status = 'Lunch' AND action = 'In' ORDER BY log_id DESC");
					$row_lunchin = mysql_fetch_array($qry_lunchin);
				$lunch_in = $row_lunchin['time'];
					$qry_meetingout = mysql_query("SELECT * FROM tbl_logs WHERE date = '$main_date' AND emp_id = '$employee_id' AND status = 'Meeting' AND action = 'Out' ORDER BY log_id ASC");
					$row_meetingout = mysql_fetch_array($qry_meetingout);
				$meeting_out = $row_meetingout['time']." - ".$row_meetingout['company'];
					$qry_meetingin = mysql_query("SELECT * FROM tbl_logs WHERE date = '$main_date' AND emp_id = '$employee_id' AND status = 'Meeting' AND action = 'In' ORDER BY log_id DESC");
					$row_meetingin = mysql_fetch_array($qry_meetingout);
				$meeting_in = $row_meetingin['time'];
					$qry_timeout = mysql_query("SELECT * FROM tbl_logs WHERE date = '$main_date' AND emp_id = '$employee_id' ORDER BY log_id DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
			?>
					<tr>
						<td><center><?php echo $employee_id; ?></center> </td>
						<td><center><?php echo $fullname; ?></center> </td>
						<td><center><?php echo $attendance_in; ?></center> </td>
						<td><center><?php echo $lunch_out; ?></center> </td>
						<td><center><?php echo $lunch_in; ?></center> </td>
						<td><center><?php echo $meeting_out; ?></center> </td>
						<td><center><?php echo $meeting_in; ?></center> </td>
						<td><center><?php echo $attendance_out; ?></center> </td>
						<td>
						<center>
						<?php 
							$startin = strtotime('11:00 am'); 
							$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							echo ($strattendancetime - $startin) / 60;
						}
						else{
							echo 0;
						}
						?>
						</center> 
						</td>
					</tr>
			<?php
				}
			}
			?>
			
           
            </tbody>
            </table>
			
        </div>
		<br>
		
		
		
		
    <br>
    </div>
    
    <!-- Footer line -->
    <div id="footer">
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>

</div>

<div class="clear"></div>

</body>
</html>