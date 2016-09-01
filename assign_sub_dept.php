<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];
$dept_qry = mysql_query("SELECT * FROM tbl_department WHERE department_id = '$id'");
$row_dept = mysql_fetch_array($dept_qry);

if(isset($_POST['update'])){
	$department_name = $_POST['edit_deptname'];
	$department_id = $_POST['edit_deptid'];
	
	$add_dept_qry = mysql_query("UPDATE tbl_sub_department SET department_name='$department_name' WHERE sub_department_id = '$department_id'");
	if($add_dept_qry){
		echo "<script>alert('Department Successfully Updated!');</script>";
		echo "<script>location.href='assign_sub_dept.php?id=$id';</script>";
	}
}

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Sub Department List for <?php echo $row_dept['department_name']; ?></h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
	<div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "add_department()"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add sub department for <?php echo $row_dept['department_name']; ?></span></a></li>
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
			$main_date = $_POST['date'];
	   ?>
	   <div id = "add_department" style = "display:none;">
		 <form enctype="multipart/form-data" id = "validate" action="controllers/add_sub_department.php" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Add Sub Department</h6></div>
					<div class="formRow">
                        <label>Sub Department Name<span class="req">*</span></label>
                        <div class="formRight"><input style = "width:200px" type="text" class="validate[required]" name="department_name" id="department_name"/>
						</div>
						<input style = "width:200px" type="hidden" class="validate[required]" name="id" value="<?php echo $id; ?>"/>
						<div class="clear"></div>
                    </div>
					<div class="formSubmit"><input type="submit" name = "submit" value="submit" class="blueB" /><input onclick="cancel_add()" type="button" value="Cancel" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		 </form>
		</div>
		<div id = "update_department" style = "display:none;">
		 <form enctype="multipart/form-data" id = "validate" action="" class="form" method = "post">
			<fieldset>
                <div class="widget">
                    <div class="title"><img src="images/icons/dark/list.png" alt="" class="titleIcon" /><h6>Update Department</h6></div>
					<div class="formRow">
                        <label>Department Name<span class="req">*</span></label>
                        <div class="formRight"><input style = "width:200px" type="text" class="validate[required]" name="edit_deptname" id="edit_deptname"/>
						</div>
						<div class="clear"></div>
						<input style = "width:200px" type="hidden" class="validate[required]" name="edit_deptid" id="edit_deptid"/>
                    </div>
					<div class="formSubmit"><input type="submit" name = "update" value="Update" class="blueB" /><input onclick="cancel_edit()" type="button" value="Cancel" class="blueB" /></div>
                    <div class="clear"></div>
                </div>
            </fieldset>
		 </form>
		</div>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Sub Departments</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
				<!--<th style = "background:#4c4c4c">Department ID</th>-->
				<th style = "background:#4c4c4c">Department Name</th>
				<th style = "background:#4c4c4c">Edit</th>
				<!--<th style = "background:#4c4c4c">Delete</th>-->
            </tr>
            </thead>
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_sub_department WHERE department_id = '".$_GET['id']."'");
				while($row_emp = mysql_fetch_array($emp_qry)){
			?>
					<tr>
						<!--<td><center><?php echo $row_emp['sub_department_id']; ?></center> </td>-->
						<td><center><?php echo $row_emp['department_name']; ?></center> </td>
						<td><center><a style="cursor:pointer;" onclick = "update_department('<?php echo $row_emp['sub_department_id']; ?>','<?php echo $row_emp['department_name']; ?>')">EDIT </a> </center> </td>
						<!--<td><center>DELETE</center></td>-->
					</tr>
			<?php
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
	function add_department(){
		$('#add_department').fadeIn();
	}
	function cancel_add(){
		$('#add_department').fadeOut();
	}
	function cancel_edit(){
		$('#update_department').fadeOut();
	}
	function update_department(id,name){
		$('#update_department').fadeIn();
		$('#edit_deptname').val(name);
		$('#edit_deptid').val(id);
		
	}
</script>
</body>
</html>