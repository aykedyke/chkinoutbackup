<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	$x = 1;
	
	$s_date = $_GET['s_date'];
	$e_date = $_GET['e_date'];
	
	 $s_date = strtotime($s_date);
	 $e_date = strtotime($e_date);
	
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
	<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
							<?php
								$pending_leave_qry = mysql_query("SELECT * FROM tbl_leave WHERE company_id = '".$_SESSION['company']."' AND approve = '0'");
								$count_pending = mysql_num_rows($pending_leave_qry);
								if($count_pending >= 1){
							?>
									<li onclick = "document.location.href='leave_form.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span><font style = "color:red;">NEW</font> Pending Leave Forms</span></a></li>
							<?php
									}else{
							?>
									<li onclick = "document.location.href='leave_form.php'"><a href="javascript:void" title=""><img src="images/icons/control/32/order-149.png" alt="" /><span>Pending Leave Forms</span></a></li>
							<?php
									}
							?>
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
								<label><b> From Date:</b></label>
								<div class="formRight"><input class="date-picker" style = "width:200px;" value = "" type = "text" name = "s_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
								<label><b> To Date:</b></label>
								<div class="formRight"><input class="date-picker" style = "width:200px;" value = "" type = "text" name = "e_date" /></div>
								<div class="clear"></div>
					</div>
					<div class="formRow">
                        <label>Employee Name<span class="req">*</span></label>
                        <div class="formRight">
						 <select style = "padding:10px;width:200px" name="employee_id" id="employee_id">
						  <option value=""></option>
						  <?php
							$employee_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' ORDER BY fullname ASC");
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
					<div class="formSubmit"><input type="submit" name = "search" value="submit" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		</form>
       <br>
		<?php
			if($x == 1){
			$main_date = $_POST['date'];
	   ?>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Approved Leave Forms</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
				<th style = "background:#4c4c4c">Date Filed</th>
				<th style = "background:#4c4c4c">Employee ID</th>
				<th style = "background:#4c4c4c">Fullname</th>
				<th style = "background:#4c4c4c">From</th>
				<th style = "background:#4c4c4c">To</th>
				<th style = "background:#4c4c4c">Days</th>
				<th style = "background:#4c4c4c">Type of Leave</th>
				<th style = "background:#4c4c4c">View Leave Form</th>
            </tr>
            </thead>
            <tbody>
			<?php
				if(($_GET['employee_id'] != "") && ($_GET['s_date'] == "")){
					$emp_qry = mysql_query("SELECT * FROM tbl_leave WHERE emp_id = '".$_GET['employee_id']."' AND company_id = '".$_SESSION['company']."' AND approve = '1'");
				while($row_emp = mysql_fetch_array($emp_qry)){
				$emp_id = $row_emp['emp_id'];
				$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
				$row_emp2 = mysql_fetch_array($qry_emp);
				$date_filed = date("Y-m-d", strtotime($row_emp['date_filed']));
				$sum_date = strtotime($row_emp['from_date']); 
				$sum_date = date("Y",$sum_date);
				$year_now = date("Y");
				if($sum_date == $year_now){
				?>
					<tr>
						<td><center><?php echo $date_filed; ?></center> </td>
						<td><center><?php echo $emp_id; ?></center> </td>
						<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
						<td><center><?php echo $row_emp['from_date']; ?></center> </td>
						<td><center><?php echo $row_emp['to_date']; ?></center> </td>
						<td><center><?php echo $row_emp['no_days']; ?></center> </td>
						<td><center><?php echo $row_emp['type_leave']; ?></center> </td>
						<td><center><a href = "view_leave_form.php?id=<?php echo $row_emp['leave_id']; ?>">VIEW</a></center> </td>
				</tr>
				<?php
				}else{
				}
			?>
			<?php
				}
				}else{
					if($_GET['employee_id'] != ""){
						$emp_qry = mysql_query("SELECT * FROM tbl_leave WHERE emp_id = '".$_GET['employee_id']."' AND company_id = '".$_SESSION['company']."' AND approve = '1'");
					}else{
						$emp_qry = mysql_query("SELECT * FROM tbl_leave WHERE company_id = '".$_SESSION['company']."' AND approve = '1'");
					}
					while($row_emp = mysql_fetch_array($emp_qry)){
					$emp_id = $row_emp['emp_id'];
					$qry_emp = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '$emp_id'");
					$row_emp2 = mysql_fetch_array($qry_emp);
					$date_filed = date("Y-m-d", strtotime($row_emp['date_filed']));
					$sum_date = strtotime($row_emp['from_date']); 
					//$sum_date = date("F Y",$sum_date);
					//if($sum_date == $_GET['s_date']){
					if(($sum_date >= $s_date) && ($sum_date <= $e_date)){
				?>
					<tr>
							<td><center><?php echo $date_filed; ?></center> </td>
							<td><center><?php echo $emp_id; ?></center> </td>
							<td><center><?php echo $row_emp2['fullname']; ?></center> </td>
							<td><center><?php echo $row_emp['from_date']; ?></center> </td>
							<td><center><?php echo $row_emp['to_date']; ?></center> </td>
							<td><center><?php echo $row_emp['no_days']; ?></center> </td>
							<td><center><?php echo $row_emp['type_leave']; ?></center> </td>
							<td><center><a href = "view_leave_form.php?id=<?php echo $row_emp['leave_id']; ?>">VIEW</a></center> </td>
					</tr>
				<?php
					}else{
						
					}
					}
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