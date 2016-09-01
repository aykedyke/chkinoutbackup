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
                <h5>Leave Forms</h5>
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
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Pending Leave Forms</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
				<tr>
					<th style = "background:#4c4c4c">Date Filed</th>
					<th style = "background:#4c4c4c">Employee ID</th>
					<th style = "background:#4c4c4c">Fullname</th>
					<th style = "background:#4c4c4c">From</th>
					<th style = "background:#4c4c4c">To</th>
					<th style = "background:#4c4c4c">Days</th>
					<th style = "background:#4c4c4c">View Leave Form</th>
				</tr>
            </thead>
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_leave WHERE company_id = '".$_SESSION['company']."' AND approve = '0'");
				while($row_emp = mysql_fetch_array($emp_qry)){
				$emp_id = $row_emp['emp_id'];
				$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
				$row_emp2 = mysql_fetch_array($qry_emp);
				$date_filed = date("Y-m-d", strtotime($row_emp['date_filed']));
			?>
					<tr>
						<td><center><?php echo $date_filed; ?></center> </td>
						<td><center><?php echo $row_emp['emp_id']; ?></center> </td>
						<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
						<td><center><?php echo $row_emp['from_date']; ?></center> </td>
						<td><center><?php echo $row_emp['to_date']; ?></center> </td>
						<td><center><?php echo $row_emp['no_days']; ?></center> </td>
						<td><center><a href = "view_leave_form.php?id=<?php echo $row_emp['leave_id']; ?>">VIEW</a></center> </td>
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