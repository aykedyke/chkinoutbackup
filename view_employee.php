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
 <script>

	function search_emp(emp_name){
		dataSent = {'emp_name':emp_name};
		$.ajax({
				type: "POST",
				cache: true,       
				url: 'ajax/search_employee.php',
				data: dataSent,
				success: function(html) {
					$("#emp_tablemain").html(html);
				}
			});
	}
 </script>
<body onload = "boom()">
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
                    <li onclick = "document.location.href='add_employee.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add new Employee</span></a></li>
                    <li onclick = "document.location.href='assign_supervisor.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>View Supervisor</span></a></li>
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
	   <div class="formRow">
			<label><b>Search Employee Name:</b></label>
			<div class="formRight"><input onkeyup="search_emp(this.value)" id = "emp_name"  style = "width:200px;padding:5px;" type = "text" name = "emp_name" value = "" /></div>
			<div class="clear"></div>
		</div>
	   <div id = "emp_tablemain" class="widget">
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
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0'");
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
						<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_employee.php?id=<?php echo $row_emp['id']; ?>&eid=<?php echo $row_emp['employee_id']; ?>">DEACTIVATE</a></center></td>
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
		<?php
			if($_SESSION['company'] == 3){
		?>
			<a href = "employeexls2.php"><input class="blueB" type = "button" name = "" value = "Export to XLS" /></a>
		<?php
			}else{
		?>
				<a href = "employeexls.php"><input class="blueB" type = "button" name = "" value = "Export to XLS" /></a>
		<?php
			}
		?>
    <br>
    </div>
	
    
    <!-- Footer line -->
    <div id="footer">
    </div>

</div>

<div class="clear"></div>
<script>
	//function deactivate_emp(id){
		//var r = confirm("Do you want to deactivate this employee?");
		//if (r == true) {
			
		//} else {
		//}
		
	//}

	
	
</script>
</body>
</html>