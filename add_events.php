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
                <h5>Events</h5>
                
            </div>
            
            <div class="clear"></div>
        </div>
    </div>
    
    <div class="line"></div>
    
    
    
   
    
    <!-- Main content wrapper -->
    <div class="wrapper">
       
        
		<br>
			
			<form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="upload_events.php" class = "form">
              
              <fieldset>  

    

              

       
        
                  <!--/ADDITIONALS-->
                  
             
			  <div>
              
		<div class="formRow">
                        <label>Image</label>
                        <div class="formRight"><input type="file" name="image" id="image_path" onchange="preview(this);"/></div>
                        <div class="clear"></div>
                    </div>
					<div class="formRow">
                        <label></label>
                        <div class="formRight"><img  id="preview_image" alt="" src="<?php echo $row_ad['event_image']; ?>" /></div>
                        <div class="clear"></div>
                    </div>
              
		   <div class="formRow">
	      
                        <label>Event Title</label>
                        <div class="formRight"><input   type="text" name="title" /></div>
                        <div class="clear"></div>
                    </div>
              <div class="formRow">
	      
                        <label>Subtitle</label>
                        <div class="formRight"><input   type="text" name="subtitle" /></div>
                        <div class="clear"></div>
              </div>
			  
			  <div class="formRow">
	      
                        <label>Description</label>
                        <div class="formRight"><textarea id="txtArea" name = "description" rows="10" cols="70"></textarea></div>
                        <div class="clear"></div>
              </div>
			   <div class="formRow">
	      
                        <label>When</label>
                        <div class="formRight"><input  type="text" name="when" /></div>
                        <div class="clear"></div>
              </div>
			   <div class="formRow">
	      
                        <label>Where</label>
                        <div class="formRight"><input   type="text" name="where" /></div>
                        <div class="clear"></div>
              </div>
             
				
              </div>
                
			  <div>
              <input onclick="return confirm('Are you sure you want to add this event?');" type="submit" name="upload" value="Upload">
              </div>
              
              <?php
                //unset($_SESSION['STATUS']);
              ?>
                 </fieldset> 
              </form>
        	
		
        
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
						
						$.post("s.php",function(data){
							$("#show_pic").html(data);
						})
					}
					
					function preview(input) 
					{
						if (input.files && input.files[0]) {
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