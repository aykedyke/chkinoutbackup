<?php 

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
$arist_id = $_GET['id'];

?>


<?php include('header.php'); ?>

<body>
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Photos</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
     <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "add_student()"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Add New Photos</span></a></li>
				</ul>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    
    <div class="line"></div>
    <!-- Main content wrapper -->
    <div class="wrapper">
       <br>
	   <div id = "add_artist" style = "display:none;">
		 <form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
              <fieldset>               
			  <div>
				<div class="formRow">
								<label>Image</label>
								<div class="formRight"><input type="file" name="image" id="image_path" onchange="preview(this);"/></div>
								<div class="clear"></div>
				</div>
			    <div class="formSubmit"><input type="submit" name = "add_artist" value="submit" class="redB" /><input onclick="cancel_add()" type="button" value="Cancel" class="redB" /></div>
			    <div class="clear"></div> 
             </div>
                 </fieldset> 
              </form>
		</div>
	   <br>
	   <div id = "update_artist" style = "display:none;">
		 <form enctype="multipart/form-data" id="validate" name="frmAdd" method="post" action="" class = "form">
              <fieldset>               
			  <div>
		<div class="formRow">
                        <label>Image</label>
                        <div class="formRight"><input type="file" name="image2" id="image_path_update" onchange="preview_update(this);"/></div>
                        <div class="clear"></div>
        </div>
					<div class="formRow">
                        <label></label>
                        <div class="formRight"><img id="preview_image_update" alt="" src="" height = "150px" /></div>
                        <div class="clear"></div>
                    </div>
              
		   <div class="formRow">
	      
                        <label>Full Name</label>
                        <div class="formRight"><input type="text" name="fullname_update" id = "fullname_update" /></div>
                        <div class="clear"></div>
                    </div>
              <div class="formRow">
                        <label>Screen Name</label>
                        <div class="formRight"><input type="text" name="screenname_update" id = "screenname_update" /></div>
                        <div class="clear"></div>
              </div>
			  <div class="formRow">
	      
                        <label>Description</label>
                        <div class="formRight"><textarea id="txtArea_update" name = "description_update" rows="10" cols="70"></textarea></div>
                        <div class="clear"></div>
              </div>
			  <input type="hidden" name="artist_id" id = "artist_id" />
			  <div class="formSubmit"><input type="submit" name = "update_artist" value="Update" class="redB" /><input onclick="cancel_update()" type="button" value="Cancel" class="redB" /></div>
              <div class="clear"></div>
             </div>
                 </fieldset> 
              </form>
		</div>
		<br>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Artist List</h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead >
            <tr>
				<th style = "background:#4c4c4c">Picture</th>
				<th style = "background:#4c4c4c" width = "100px">Edit</th>
				<th style = "background:#4c4c4c" width = "100px">Delete</th>
            </tr>
            </thead>
            <tbody>
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_artist_photos where artist_id = '$artist_id'");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
					<tr>
						<td><center><a href = "<?php echo $row_users['profile_pic']; ?>"><img src = "<?php echo $row_users['profile_pic']; ?>" height = "50px" width = "50px" /></a></center> </td>
						<td> <center>
						<a onclick = "update_artist
						('<?php echo $row_users['artist_id']; ?>',
						'<?php echo $row_users['fullName']; ?>',
						'<?php echo $row_users['screenName']; ?>',
						'<?php echo $row_users['description']; ?>',
						'<?php echo $row_users['profile_pic']; ?>')" 
						href = "javascript:void(0)"><img height = "30px" src = "images/edit_button.png" /> </a> </center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_artist.php?id=<?php echo $row_users['artist_id']; ?>"><img src = "images/del_button.png" height = "30px" /></a> </center></td>
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

<script>
	function add_student(){
		$('#add_artist').fadeIn();
	}
	function cancel_add(){
		$('#add_artist').fadeOut();
	}
	function cancel_update(){
		$('#update_artist').fadeOut();
	}
	function preview(input) 
					{
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							
							reader.onload = function (e) {
								$('#preview_image')
									.attr('src', e.target.result)
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
	function preview_update(input){
						if (input.files && input.files[0]) {
							var reader = new FileReader();
							
							reader.onload = function (e) {
								$('#preview_image_update')
									.attr('src', e.target.result)
									.height(150);
							};

							reader.readAsDataURL(input.files[0]);
							
							var path = $("#image_path_update").val();
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
	
	function update_artist(id, fullname, screenname, desc, image_path){
		//$('#preview_image_update').src(image_path);
		$('#update_artist').fadeIn();
		
		$('#fullname_update').val(fullname);
		$('#screenname_update').val(screenname);
		$('#txtArea_update').text(desc);
		document.getElementById("preview_image_update").src=image_path;
		$('#artist_id').val(id);
	}
</script>

</body>
</html>