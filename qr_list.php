<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

//if(!isset($_SESSION['ulvl'])){
	//header('location:login.php');
//}
?>


<?php include('header.php'); ?>

<body>



    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5></h5>
                
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    
    
   
    
    <!-- Main content wrapper -->
    <div class="wrapper">
       
        
		<br>
			
			<h2>Registered QR Codes</h2>
		<br>
		<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Registered QR List</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			<th>QR Name</th>
			<th>QR Location</th>
			
			
            </tr>
            </thead>
            <tbody>
           
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_qr_details");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
				 <tr>
				<td><?php echo $row_users['result_qr']; ?> </td>
				<td><?php echo $row_users['location_qr']; ?> </td>
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
        <div class="wrapper">As usually all rights reserved. And as usually brought to you by <a href="http://themeforest.net/user/Kopyov?ref=kopyov" title="">Eugene Kopyov</a></div>
    </div>

</div>

<div class="clear"></div>



</body>
</html>