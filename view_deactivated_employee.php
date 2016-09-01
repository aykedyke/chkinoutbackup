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
                <h5>Employee List</h5>
				<?php //echo $_SESSION['company']; ?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
	<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "document.location.href='view_employee.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>View Active Employees</span></a></li>
                    <li onclick = "document.location.href='view_deactivated_employee.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>View Deactivated Employees</span></a></li>
				</ul>
                <div class="clear"></div>
            </div>
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
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Employees</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
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
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '1'");
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
						<td><center><a href = "view_info_employee.php?id=<?php echo $row_emp['id']; ?>">VIEW</a></center></td>
						<td><center><a href = "view_logs_employee.php?id=<?php echo $row_emp['id']; ?>">VIEW ATTENDANCE LOGS</a></center></td>
						<?php
						/* } */
						?>
						<td><center><a onclick="return confirm('Are you sure you want to activate this employee again?');" href = "activate_employee.php?id=<?php echo $row_emp['id']; ?>">ACTIVATE</a></center></td>
						<!--<td><center><a style = "cursor:pointer;" onclick="deactivate_emp('<?php echo $row_emp['employee_id']; ?>')">DEACTIVATE</a></center></td>-->
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