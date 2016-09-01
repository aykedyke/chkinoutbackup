<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	$x = 1;
	
if(isset($_POST['submit'])){
	$supervisor_id = $_POST['supervisor_id'];
	$add_dept_qry = mysql_query("INSERT INTO tbl_supervisor (emp_id,company_id) VALUES ('$supervisor_id','".$_SESSION['company']."')");
	if($add_dept_qry){
		echo "<script>alert('Supervisor Successfully Added!');</script>";
		echo "<script>location.href='assign_supervisor.php';</script>";
	}
}	

?>
<?php include('header.php'); ?>
<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Supervisor List</h5>
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
                    <li onclick = "add_supervisor()"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Assign Supervisor</span></a></li>
				</ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
	   <div id = "add_supervisor" style = "display:none;">
		 <form enctype="multipart/form-data" id = "validate" action="" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add Supervisor</h6></div>
					<div class="formRow">
                        <label>Supervisor Name<span class="req">*</span></label>
                        <div class="formRight">
						<select name = "supervisor_id">
						<?php
							$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE company_id = '".$_SESSION['company']."' AND inactive = '0' ORDER BY fullname ASC ");
							while($emp_row = mysql_fetch_array($emp_qry)){
						?>
								  <option value="<?php echo $emp_row['employee_id']; ?>"><?php echo $emp_row['fullname']; ?></option>
						<?php
							}
						?>
						</select> 
						</div>
						<div class="clear"></div>
                    </div>
					<div class="formSubmit"><input type="submit" name = "submit" value="Submit" class="blueB" /><input onclick="cancel_add()" type="button" value="Cancel" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		 </form>
		</div>
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
				<th style = "background:#4c4c4c">QR</th>
				<th style = "background:#4c4c4c">View</th>
				<th style = "background:#4c4c4c">Delete</th>
            </tr>
            </thead>
            <tbody>
			<?php
				$superv_qry = mysql_query("SELECT * FROM tbl_supervisor WHERE company_id = '".$_SESSION['company']."'");
				while($superv_row = mysql_fetch_array($superv_qry)){
				
				$emp_qry = mysql_query("SELECT * FROM tbl_employee WHERE employee_id = '".$superv_row['emp_id']."'");
				$row_emp = mysql_fetch_array($emp_qry);
			?>
					<tr>
						<td><center><?php echo $row_emp['employee_id']; ?></center> </td>
						<td><center><?php echo $row_emp['fullname']; ?></center> </td>
						<td><center><?php echo $row_emp['birthday']; ?></center> </td>
						<td><center><?php echo $row_emp['position']; ?></center> </td>
						<td><center><img width = "50px" src = "<?php echo $row_emp['qr_image']; ?>" /></center> </td>
						<td><center><a href = "view_info_employee.php?id=<?php echo $row_emp['id']; ?>">VIEW</a></center></td>
						<td><center><a onclick="return confirm('Are you sure you want to remove?');" href = "delete_supervisor.php?id=<?php echo $superv_row['supervisor_id']; ?>">REMOVE</a></center></td>
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
	function add_supervisor(){
		$('#add_supervisor').fadeIn();
	}
	function cancel_add(){
		$('#add_supervisor').fadeOut();
	}
</script>
</body>
</html>