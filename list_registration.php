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
                <h5>Device Registered</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
		<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
							<?php
								$pending_reg_qry = mysql_query("SELECT * FROM tbl_firstregister WHERE company_id = '".$_SESSION['company']."' AND approved = '0'");
								$count_reg = mysql_num_rows($pending_reg_qry);
								if($count_reg >= 1){
							?>
									<li onclick = "document.location.href='dev_registration.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span><font style = "color:red;">NEW</font> Pending Device Registration</span></a></li>
							<?php
									}else{
							?>
									<li onclick = "document.location.href='dev_registration.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Pending Device Registration</span></a></li>
							<?php
									}
							?>
									<li onclick = "document.location.href='dev_deactivated.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Deactivated devices</span></a></li>
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
			<label><b>Search Emplyee ID:</b></label>
			<div class="formRight"><input onkeyup="search_emp(this.value)" id = "emp_name"  style = "width:200px;padding:5px;" type = "text" name = "emp_name" value = "" /></div>
			<div class="clear"></div>
		</div>
	   <div id = "emp_tablemain" class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6 style = "color:white;">Device Registered</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
				<tr>
					<th style = "background:#4c4c4c">Device Type</th>
					<th style = "background:#4c4c4c">Employee ID</th>
					<th style = "background:#4c4c4c">Fullname</th>
					<th style = "background:#4c4c4c"></th>
					<th style = "background:#4c4c4c"></th>
				</tr>
            </thead>
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_firstregister WHERE company_id = '".$_SESSION['company']."' AND approved = '1' AND deactivate = '0'");
				while($row_emp = mysql_fetch_array($emp_qry)){
				$emp_id = $row_emp['emp_id'];
				$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
				$row_emp2 = mysql_fetch_array($qry_emp);
			?>
					<tr>
						<td><center><?php echo $row_emp['dev_type']; ?></center> </td>
						<td><center><?php echo $row_emp['emp_id']; ?></center> </td>
						<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to remove?');" href = "deactivate_device.php?id=<?php echo $row_emp['firstregister_id']; ?>">Deactivate Device</a></center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to remove?');" href = "remove_device.php?id=<?php echo $row_emp['firstregister_id']; ?>">Remove Device</a></center> </td>
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

	function search_emp(emp_name){
		dataSent = {'emp_name':emp_name};
		$.ajax({
				type: "POST",
				cache: true,       
				url: 'ajax/search_empid_devregistration.php',
				data: dataSent,
				success: function(html) {
					$("#emp_tablemain").html(html);
				}
			});
	}
 </script>
</body>
</html>