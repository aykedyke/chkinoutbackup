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
			
			<h2>Tawid Record List</h2>
		<br>
		<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Record List</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			<th>Image</th>
			<th>Name</th>
			<th>Valid until</th>
			
            </tr>
            </thead>
            <tbody>
			<?php
			$qry_reward = mysql_query("SELECT * FROM tbl_promocode");
			while($row_reward = mysql_fetch_array($qry_reward))
			{
			?>
           <tr>
		   <td><center><img width = "150px" height = "125px" src = "<?php echo $row_reward['image_path']; ?>"></img></center></td>
		   <td><?php echo $row_reward['promocode_name']; ?></td>
		   <td><?php echo $row_reward['expiration_date']; ?></td>
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