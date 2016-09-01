<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

$id = $_GET['id'];

if(isset($_POST['update']))
{
			$title = $_POST['title'];
			$time = $_POST['time'];
			$dj = $_POST['dj'];
			$ordered = $_POST['ordered'];
			
			if(!empty($_FILES['image']['tmp_name']))
			{
				$path = "shows_image/";
				$show_avatar = $path.basename($_FILES['image']['name']);
						
						
						if (move_uploaded_file($_FILES['image']['tmp_name'], $show_avatar))
							{
										$sth = mysql_query("UPDATE tbl_shows SET 
															shows_title = '$title',
															shows_time = '$time',
															dj = '$dj',
															image = '$show_avatar'
															WHERE
															shows_id = '$id'
															");
													
										if($sth)
											{
												echo "<script> alert('Successfully updated!');</script>";
											}
										else
											{
												echo "<script>alert('failed');</script>";
											}										
										
										
										
							}
			}
			else
			{
				$sth = mysql_query("UPDATE tbl_shows SET 
															shows_title = '$title',
															shows_time = '$time',
															dj = '$dj'
															
															WHERE
															shows_id = '$id'
															");
													
										if($sth)
											{
												echo "<script> alert('Successfully updated!');</script>";
											}
										else
											{
												echo "<script>alert('failed');</script>";
											}
			}
	
}

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
		<div class="container">
            
            	<?php 
              //the statistics bar
              include("top_stats.php");
              ?>
			  
			  <?php
					$qry_ad = mysql_query("SELECT * FROM tbl_shows WHERE shows_id = '$id'");
					$row_ad = mysql_fetch_array($qry_ad);
			  ?>
                
               <form enctype="multipart/form-data" name="frmAdd" method="post" action="" class = "frm_container">
              <div>
              <div class="formRow">
                        <label>Image Preview:</label>
                        <div class="formRight"><img style = "height:150px;width:200px;" id="preview_image" alt="" src="<?php echo $row_ad['image']; ?>" /></div>
                        <div class="clear"></div>
                    </div>
			<div class="formRow">
                        <label>Embed Image (optional):</label>
                        <div class="formRight"><input type="file" name="image" id="image_path" onchange="preview(this);"/></div>
                        <div class="clear"></div>
            </div>
              
		   <div class="formRow">
	      
                        <label>Show Title</label>
                        <div class="formRight"><input style = "height:30px;font-size:15px;width:400px;" value = "<?php echo $row_ad['shows_title']; ?>" type="text" name="title" /></div>
                        <div class="clear"></div>
           </div>
              <div class="formRow">
	      
                        <label>Schedule</label>
                        <div class="formRight"><input style = "height:30px;font-size:15px;width:400px;" value = "<?php echo $row_ad['shows_time']; ?>" type="text" name="time" /></div>
                        <div class="clear"></div>
              </div>
			  
			   <div class="formRow">
	      
                        <label>DJ</label>
                        <div class="formRight"><input style = "height:30px;font-size:15px;width:400px;" value = "<?php echo $row_ad['dj']; ?>" type="text" name="dj" /></div>
                        <div class="clear"></div>
              </div>
			  
			  <div class="formRow">
	      
                        <label>Order By</label>
                        <div class="formRight"><input value = "<?php echo $row_ad['ordered']; ?>" style = "height:30px;font-size:15px;width:400px;" class="validate[required,custom[onlyNumberSp]]" type="text" name="ordered" id="numsValid" /></div>
                        <div class="clear"></div>
              </div>
			  
			 
             
				
              </div>
                
			  <div>
              <input type="submit" name="update" value="Update">
              </div>
              
              <?php
                //unset($_SESSION['STATUS']);
              ?>
                  
              </form>
    

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

<script type = "text/javascript">
					function s_(){
						
						$.post("s.php",function(data)
						{
							$("#show_pic").html(data);
						})
					}
					
					function preview(input) 
					{
						if (input.files && input.files[0]) 
						{
							var reader = new FileReader();
							
							reader.onload = function (e) {
								$('#preview_image')
									.attr('src', e.target.result)
									.width(200)
									.height(150);
							};

							reader.readAsDataURL(input.files[0]);
							
							var path = $("#image_path").val();
							if ($.browser.mozilla) {
							$("#paste_code").val("<img src='images/slides/"+path+"' class='content_img_style'/>");
							}
							else{
							var path = path.replace(/\\/g, "~");
							var path = path.split("~");

							$("#paste_code").val("<img src='images/slides/"+path[2]+"' class='content_img_style'/>");
							}
						}
					}
					
					
				  </script>

</body>
</html>