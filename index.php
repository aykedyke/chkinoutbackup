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
$get_employeeid = $_GET['employee_id'];
$addstatus = $_GET['addstatus'];

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

$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '".$_SESSION['company']."'");
$row_startime = mysql_fetch_array($startime_qry);
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
	<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "document.location.href='index.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Complete Attendance Logs</span></a></li>
                    <li onclick = "document.location.href='view_attendancesummary.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Attendance Summary of Absents and Late</span></a></li>
					<li onclick = "document.location.href='addlog.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add Manual Logs</span></a></li>
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
					<div class="formRow">
								<label><b> START Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "<?php echo $from = $_GET['from_date']; ?>" type = "text" name = "from_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b> END Date:</b></label>
								<div class="formRight"><input class="datepicker" style = "width:200px;" value = "<?php echo $to = $_GET['to_date'];  ?>" type = "text" name = "to_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
                        <label><b>Search by Employee Name</b></label>
                        <div class="formRight">
						 <select style = "width:200px" name="employee_id" id="employee_id">
						  <option value=""></option>
						  <?php
							$employee_qry = mysql_query("SELECT * FROM tbl_employee WHERE inactive = '0' AND company_id = '".$_SESSION['company']."' ORDER BY fullname ASC");
							while($row_employee = mysql_fetch_array($employee_qry)){
						  ?>
						  <option value="<?php echo $row_employee['employee_id']; ?>"><?php echo $row_employee['fullname']; ?></option>
						  <?php
						  }
						  ?>
						</select> 
						</div>
						<div class="clear"></div>
                    </div>
					<!--<div class="formRow">
                        <label><b>Attendance Status</b></label>
                        <div class="formRight">
						 <select style = "width:200px" name="addstatus" id="addstatus">
						  <option value=""></option>
						  <option value="Late Employees">Late Employees</option>
						</select> 
						</div>
						<div class="clear"></div>
                    </div>-->
					<div class="formSubmit"><input type="submit" name = "submit" value="submit" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		 </form>
	<?php
		if($addstatus == ""){
	?>
					 <div class="widget">
       <?PHP
			//check if the starting row variable was passed in the URL or not
			if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
			  //we give the value of the starting row to 0 because nothing was found in URL
			  $startrow = 0;
			//otherwise we take the value from the URL
			} else {
			  $startrow = (int)$_GET['startrow'];
			}
			//this part goes after the checking of the $_GET var
		?>
	<table id = "Grid_Id" cellpadding="0" cellspacing="0" border="0" class="display dTable">
	 <thead>
	 <tr>
			<th>DATE</th>
			<th>EMPLOYEE ID</th>
			<th>NAME</th>
			<th>IN</th>
			<th>OUT</th>
			<th>STATUS</th>
			<th>LOCATION</th>
			<th>MINUTES OF LATE</th>
	</tr>
	</thead>
	 <tbody>
<?php

if($get_employeeid == ""){
	$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date, tbl_employee.fullname LIMIT $startrow, 20");
	
$qry_total = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date, tbl_employee.fullname");	
										
}else{
	$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_employee.employee_id = '$get_employeeid'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date, tbl_employee.fullname LIMIT $startrow, 20");
										
	$qry_total = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										tbl_employee.inactive,
										tbl_employee.fullname
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_employee.employee_id = '$get_employeeid'
										AND
										tbl_logs.company_id = '".$_SESSION['company']."'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date, tbl_employee.fullname");
}

			while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
				$date = $row_log['date'];
					$qry_fn = mysql_query("SELECT * FROM tbl_employee USE INDEX(employee_id,company_id) WHERE company_id = '".$_SESSION['company']."' AND employee_id = '$employee_id'");
					$row_fn = mysql_fetch_array($qry_fn);
				$fullname = $row_fn['fullname'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND action = 'In' ORDER BY time ASC");
					$row_timein = mysql_fetch_array($qry_timein);
				$attendance_in = $row_timein['time'];
				$status = $row_timein['status'];
				$attendance_location_in = $row_timein['location'];
				
				$qry_locationin = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' AND location != '' ORDER BY time ASC");
				$row_locationin = mysql_fetch_array($qry_locationin);
				
				if($attendance_location_in == ""){
					$attendance_location_in = $row_locationin['location'];
				}
				
						if($employee_id == 'SIN003' || $employee_id == 'SIN040'){
							$start_time = "02:00 pm";
						}else{
							$start_time = $row_startime['start_time'];
							$real_time = $row_startime['real_time'];
						}
							$startin = strtotime($start_time); 
							$real_time = strtotime($real_time); 
						$strattendancetime = strtotime($attendance_in);
						if($strattendancetime > $startin){
							$min_late =  ($strattendancetime - $real_time);
							$min_late = date('i:s', $min_late);
						}
						else{
							$min_late = 0;
						}
					$qry_timeout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '".$_SESSION['company']."' AND date = '$date' AND emp_id = '$employee_id' ORDER BY time DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
				$attendance_location_out = $row_timeout['location'];
				if($min_late == 0){
					?>
						<tr>
							<td><?php echo $date; ?></td>				
							<td><?php echo $employee_id; ?></td>				
							<td><?php echo $fullname; ?></td>				
							<td><?php echo $attendance_in; ?></td>				
							<td><?php echo $attendance_out; ?></td>
							<td><?php echo $status; ?></td>
							<td><center><?php
										if($attendance_location_in == "" ){
											echo $attendance_location_in;
										}else{
											echo $attendance_location_in;
										}										
									?></center> </td>
							<td><?php echo round($min_late); ?></td>	
						</tr>	
					<?php
				}else{
				?>
				<tr style = "color:red;">
					<td><?php echo $date; ?></td>				
					<td><?php echo $employee_id; ?></td>				
					<td><?php echo $fullname; ?></td>				
					<td><?php echo $attendance_in; ?></td>				
					<td><?php echo $attendance_out; ?></td>
					<td><?php echo $status; ?></td>
					<td><center><?php
										if($attendance_location_in == "" ){
											echo $attendance_location_in;
										}else{
											echo $attendance_location_in;
										}										
									?></center> </td>
					<td><?php echo $min_late; ?></td>	
				</tr>
				<?php
				}
			}
			?>
	</tbody>
</table>
	</div>
	<div style = "float:right;">
	<table cellpadding = "5">
		<tr>
			<td>
				<?php
				//now this is the link..
				$prev = $startrow - 20;
				//only print a "Previous" link if a "Next" was clicked
				if ($prev >= 0)
					echo '<a href="'.$_SERVER['PHP_SELF'].'?from_date='.($from).'&to_date='.($to).'&startrow='.$prev.'&employee_id='.($get_employeeid).'">Previous Table</a>';
				?>
			</td>
			<td style = "padding:20px">Showing
						<?php
						echo $firstnum = $startrow + 1;
						?>
						-
						<?php
							$secnum  = $startrow + 20;
							$thirdnum = mysql_num_rows($qry_total);
							if($secnum > $thirdnum){
								echo $thirdnum;
							}else{
								echo $secnum;
							}
						?> 
				of <?php echo $thirdnum; ?></td>
			<td><?php
				if($secnum > $thirdnum){
								
							}else{
								echo '<a href="'.$_SERVER['PHP_SELF'].'?from_date='.($from).'&to_date='.($to).'&startrow='.($startrow+20).'&employee_id='.($get_employeeid).'">Next Table</a>';
							}
				?>
			</td>
		</tr>
	</table>
	</div>
	<?php
		}else{
	?>
		
	<?php
		}
	?>
<br>
<br>
	<?php
		if($_SESSION['company'] == 3){
		?>
			<a href = "logsxlssg.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS" /></a>
			<a href = "escosglogsxls.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS New Format" /></a>
		<?php
		}else{
		?>
		<a href = "logsxls.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS" /></a>
		<a href = "logsxlslate.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS (Late only)" /></a>
		<a href = "escophlogxls.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS New Format" /></a>
		<!--<a href = "escosglogsxls.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to XLS New Format" /></a>-->
	<!--<a href = "tcpdf/payslip/pdfattendance.php?from=<?php echo $from; ?>&to=<?php echo $to; ?>&employee_id=<?php echo $get_employeeid; ?>"><input class="blueB" type = "button" name = "" value = "Export to PDF" /></a>-->
    
		<?php
		}
	?>
	
	</div>
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>

</body>
</html>