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
                <h5>Payroll</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
	 <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
		<?php
			if($x == 1){
			$main_date = $_POST['date'];
	   ?>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Payroll list</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
				<th style = "background:#4c4c4c">Payroll date</th>
				<th style = "background:#4c4c4c">View payroll form</th>
            </tr>
            </thead>
            <tbody>
			<?php
				$emp_qry = mysql_query("SELECT * FROM tbl_cutoff WHERE company_id = '".$_SESSION['company']."' AND publish = '0'");
				while($row_emp = mysql_fetch_array($emp_qry)){
				$payroll_from = date("F j, Y", strtotime($row_emp['payroll_from']));
				$payroll_to = date("F j, Y", strtotime($row_emp['payroll_to']));
			?>
				<tr>
						<td><center><?php echo $payroll_from; ?> to <?php echo $payroll_to; ?></center> </td>
						<td><center><a href = "view_payroll_form.php?id=<?php echo $row_emp['cutoff_id']; ?>">VIEW</a></center> </td>
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