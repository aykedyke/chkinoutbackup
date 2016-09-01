<?php
	ob_start();
session_start();
require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");
$from = "2016-05-01";
$to = "2016-05-31";
?>

<html>

<head>
<title>Paginate</title>
</head>
<body>

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
	<table border = "1">
			<th>DATE</th>
			<th>EMPLOYEE ID</th>
			<th>NAME</th>
			<th>IN</th>
			<th>OUT</th>
<?php
$qry_log = mysql_query("SELECT DISTINCT 
										tbl_logs.emp_id,
										tbl_logs.date,
										tbl_employee.inactive
										FROM 
										tbl_logs,
										tbl_employee
										WHERE 
										tbl_employee.employee_id = tbl_logs.emp_id
										AND
										tbl_employee.inactive = '0'
										AND
										tbl_logs.company_id = '2'
										AND
										tbl_logs.date BETWEEN '$from' and '$to'
										ORDER BY tbl_logs.date LIMIT $startrow, 50");
			while($row_log = mysql_fetch_array($qry_log)){
				$employee_id = $row_log['emp_id'];
				$date = $row_log['date'];
					$qry_fn = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '2' AND employee_id = '$employee_id'");
					$row_fn = mysql_fetch_array($qry_fn);
				$fullname = $row_fn['fullname'];
					$qry_timein = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '2' AND date = '$date' AND emp_id = '$employee_id' AND action = 'In' ORDER BY time ASC");
					$row_timein = mysql_fetch_array($qry_timein);
				$attendance_in = $row_timein['time'];
				$startime_qry = mysql_query("SELECT * FROM tbl_timein WHERE company_id = '2'");
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
					$qry_timeout = mysql_query("SELECT * FROM tbl_logs WHERE company_id = '2' AND date = '$date' AND emp_id = '$employee_id' ORDER BY log_id DESC");
					$row_timeout = mysql_fetch_array($qry_timeout);
				$attendance_out = $row_timeout['time'];
			?>
				<tr>
				<td><?php echo $date; ?></td>				
				<td><?php echo $employee_id; ?></td>				
				<td><?php echo $fullname; ?></td>				
				<td><?php echo $attendance_in; ?></td>				
				<td><?php echo $attendance_out; ?></td>	
				</tr>	
			<?php
			}
			?>
</table>
<?php
//now this is the link..
echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.($startrow+50).'">Next</a>';

$prev = $startrow - 50;

//only print a "Previous" link if a "Next" was clicked
if ($prev >= 0)
    echo '<a href="'.$_SERVER['PHP_SELF'].'?startrow='.$prev.'">Previous</a>';
?>

</body>
</html>