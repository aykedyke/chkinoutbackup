<?php

ob_start();
session_start();

require_once("../mod_lib/connection.php");
include("../mod_lib/ConnectionMgr.php");

$emp_name = $_POST['emp_name'];

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
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">Birthday</th>
				<th style = "background:#4c4c4c">Position</th>
				<th style = "background:#4c4c4c">Sick Leave</th>
				<th style = "background:#4c4c4c">Vacation Leave</th>
				<th style = "background:#4c4c4c">QR</th>
			
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
            <tbody style = "background:#2d2d2d">
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0' AND fullname LIKE '%$emp_name%'");
				while($row_emp = mysql_fetch_array($emp_qry)){
			?>
					<tr>
						<td><center><?php echo $row_emp['employee_id']; ?></center> </td>
						<td><center><?php echo $row_emp['fullname']; ?></center> </td>
						<td><center><?php echo $row_emp['birthday']; ?></center> </td>
						<td><center><?php echo $row_emp['position']; ?></center> </td>
						<td><center><?php echo $row_emp['sick_leave']; ?></center> </td>
						<td><center><?php echo $row_emp['vacation_leave']; ?></center> </td>
						<td><center><img width = "50px" src = "<?php echo $row_emp['qr_image']; ?>" /></center> </td>
						<?php
						/* 	if($_SESSION['company'] == 2 && $_SESSION['admin'] == "admin"){
						}else{ */
						?>
						<?php
						 	if($_SESSION['company'] == 3){
						?>
							<td><center><a href = "view_info_employee2.php?id=<?php echo $row_emp['id']; ?>">VIEW</a></center></td>
						<?php						
						}else{
						?>
							<td><center><a href = "view_info_employee.php?id=<?php echo $row_emp['id']; ?>">VIEW</a></center></td>
						<?php
						}
						?>
						<td><center><a href = "view_logs_employee.php?id=<?php echo $row_emp['id']; ?>">VIEW ATTENDANCE LOGS</a></center></td>
						<?php
						/* } */
						?>
						<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_employee.php?id=<?php echo $row_emp['id']; ?>">DEACTIVATE</a></center></td>
						<!--<td><center><a style = "cursor:pointer;" onclick="deactivate_emp('<?php echo $row_emp['employee_id']; ?>')">DEACTIVATE</a></center></td>-->
					</tr>
			<?php
				}
			?>
			
           
            </tbody>
            </table>
			
        </div>