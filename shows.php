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
                <h5>Shows</h5>
                
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    
    
   
    
    <!-- Main content wrapper -->
    <div class="wrapper">
       
        
		<br>
			<div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Shows List</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			
			<th>Order By</th>
			<th>Image</th>
			<th>Show Title</th>
			<th>Time</th>
			<th>DJ</th>
			
			<th>Edit</th>
			<th>Delete</th>
			
			
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_shows");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
					<tr>
					<td><center><?php echo $row_users['ordered']; ?></center> </td>
					<td><center><a href = "<?php echo $row_users['image']; ?>"><img src = "<?php echo $row_users['image']; ?>" height = "150px" width = "150px" /></a></center> </td>
					<td><center><?php echo $row_users['shows_title']; ?></center> </td>
					<td><center><?php echo $row_users['shows_time']; ?></center> </td>
					<td><center><?php echo $row_users['dj']; ?></center> </td>
					
					<td> <center><a href = "update_shows.php?id=<?php echo $row_users['shows_id']; ?>">EDIT </a> </center> </td>
					<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_shows.php?id=<?php echo $row_users['shows_id']; ?>">DELETE </a> </center></td>
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