<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	$x = 1;
?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Pending Device Registration</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
		<?php 
			if($x == 1){
			$main_date = $_POST['date'];
	   ?>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6 style = "color:white;">Pending Device Registrations</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
				<tr>
					<th style = "background:#4c4c4c">Device Type</th>
					<th style = "background:#4c4c4c">Employee ID</th>
					<th style = "background:#4c4c4c">Fullname</th>
					<th style = "background:#4c4c4c"></th>
				</tr>
            </thead>
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_firstregister WHERE company_id = '".$_SESSION['company']."' AND approved = '0'");
				while($row_emp = mysql_fetch_array($emp_qry)){
				$emp_id = $row_emp['emp_id'];
				$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
				$row_emp2 = mysql_fetch_array($qry_emp);
			?>
					<tr>
						<td><center><?php echo $row_emp['dev_type']; ?></center> </td>
						<td><center><?php echo $row_emp['emp_id']; ?></center> </td>
						<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
						<td><center><a onclick = "return confirm('Are you sure you want to approve?');" href = "approve_register.php?id=<?php echo $row_emp['firstregister_id']; ?>">Approve</a></center> </td>
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
    </div>

</div>

<div class="clear"></div>

</body>
</html>