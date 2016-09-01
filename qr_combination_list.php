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
	
     <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
        
                    <li><a href="qr_combination.php" title=""><img src="images/icons/control/32/database.png" alt="" /><span>Add QR Combinations</span></a></li>
					
                    
                </ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
     <div class="line"></div>
    
   
    
    <!-- Main content wrapper -->
    <div class="wrapper">
       
        
		<br>
			
			<h2>Registered QR Codes with their corresponding partners</h2>
		<br>
		<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Registered QR List</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			<th>1st QR</th>
			<th>2nd QR</th>
			<th>Reward</th>
			<th>Reward Image</th>
			
			
            </tr>
            </thead>
            <tbody>
           
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_qr_combination");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
				 <tr>
					<td>
						<?php
							$qry_initial = mysql_query("SELECT * FROM tbl_qr_details WHERE qr_details_id = '".$row_users['initial_qr_id']."'");
							$row_initial = mysql_fetch_array($qry_initial);
							
							echo $row_initial['result_qr'];
						?> 
					</td>
					<td>
						<?php
							$qry_final = mysql_query("SELECT * FROM tbl_qr_details WHERE qr_details_id = '".$row_users['final_qr_id']."'");
							$row_final = mysql_fetch_array($qry_final);
							
							echo $row_final['result_qr'];
						?> 
					</td>
					<td>
						<?php
							$qry_promo = mysql_query("SELECT * FROM tbl_promocode WHERE promocode_id = '".$row_users['promocode_id']."'");
							$row_promo = mysql_fetch_array($qry_promo);
							
							echo $row_promo['promocode_name'];
						?> 
					</td>
					<td>
						<?php
							$qry_promo = mysql_query("SELECT * FROM tbl_promocode WHERE promocode_id = '".$row_users['promocode_id']."'");
							$row_promo = mysql_fetch_array($qry_promo);
						?>
							<img width = "125px" height = "75px" src = "<?php echo $row_promo['image_path']; ?>"></img>
					</td>
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