<?php

ob_start();
session_start();

require_once("../mod_lib/connection.php");
include("../mod_lib/ConnectionMgr.php");

$emp_id = $_POST['emp_name'];

//$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE fullname LIKE '%$emp_name%'");
?>
<head>
<link href="../css/datatable.css" rel="stylesheet" type="text/css" />
</head>

	   <div id = "emp_tablemain" style = "margin-top: 0px;" class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6 style = "color:white;">Device Registered</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
				<tr>
					<th style = "background:#4c4c4c">Device Type</th>
					<th style = "background:#4c4c4c">Employee ID</th>
					<th style = "background:#4c4c4c"></th>
				</tr>
            </thead>
            <tbody style = "background:#2d2d2d">
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_firstregister WHERE company_id = '".$_SESSION['company']."' AND approved = '1' AND emp_id LIKE '%$emp_id%'");
				while($row_emp = mysql_fetch_array($emp_qry)){
			?>
					<tr>
						<td><center><?php echo $row_emp['dev_type']; ?></center> </td>
						<td><center><?php echo $row_emp['emp_id']; ?></center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to remove?');" href = "remove_device.php?id=<?php echo $row_emp['firstregister_id']; ?>">Remove Device</a></center> </td>
					</tr>
			<?php
				}
			?>
            </tbody>
    </table>
</div>