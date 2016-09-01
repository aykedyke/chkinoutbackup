<?php

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}
	
$album_id = $_GET['id'];
$album_qry = mysql_query("SELECT * FROM tbl_album WHERE album_id = '$album_id'");
$row_album = mysql_fetch_array($album_qry);

?>

<?php include('header.php'); ?>
<script> 
/* Script written by Adam Khoury @ DevelopPHP.com */ /* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */ 
function _(el){ return document.getElementById(el); }
 
function uploadFile(){
	$('#formrow_progress').fadeIn();
	var song_name = $('#song_name').val();
	var duration = $('#song_duration').val();
	var album_id = $('#album_id').val();
	var file = _("file1").files[0]; 
	//alert(file.name+" | "+file.size+" | "+file.type); 
	var formdata = new FormData(); 
	formdata.append("file1", file);
	formdata.append('song_name', song_name);
	formdata.append('duration', duration);
	formdata.append('album_id', album_id);
	var ajax = new XMLHttpRequest(); 
	ajax.upload.addEventListener("progress", progressHandler, false); 
	ajax.addEventListener("load", completeHandler, false); 
	ajax.addEventListener("error", errorHandler, false); 
	ajax.addEventListener("abort", abortHandler, false); 
	ajax.open("POST", "file_upload_parser.php"); 
	ajax.send(formdata); 
} 
function progressHandler(event){ _("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total; var percent = (event.loaded / event.total) * 100; _("progressBar").value = Math.round(percent); _("status").innerHTML = Math.round(percent)+"% uploaded... please wait"; } 
function completeHandler(event){
 _("status").innerHTML = event.target.responseText; _("progressBar").value = 0;
	var album_id2 = $('#album_id').val();
	alert("Song Uploaded Successfully");
	document.location.href="view_song.php?id="+album_id2;	
 } 
function errorHandler(event){ _("status").innerHTML = "Upload Failed"; } 
function abortHandler(event){ _("status").innerHTML = "Upload Aborted"; } 
</script> 
<body>
  
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Album Name : <?php echo $row_album['album_name']; ?></h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>
	
     <div class="statsRow">
        <div class="wrapper">
        	<div class="controlB">
            	<ul>
                    <li onclick = "add_student()"><a href="javascript:void" title=""><img src="images/icons/control/32/hire-me.png" alt="" /><span>Upload New Songs</span></a></li>
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
			<form id="upload_form" enctype="multipart/form-data" method="post" class = "form">
				<fieldset>
				<div class="formRow">
                        <label>Song Name</label>
                        <div class="formRight"><input type="text" name="song_name" id="song_name" /></div>
                        <div class="clear"></div>
				</div>
				  <div class="formRow">
							<label>Duration</label>
							<div class="formRight"><input type="text" name="duration" id = "song_duration" /></div>
							<div class="clear"></div>
				  </div>
				   <div class="formRow">
								<label>Upload Song</label>
								<div class="formRight"><input type="file" name="file1" id="file1" /></div>
								<div class="clear"></div>
					</div>
					<div id = "formrow_progress" style = "display:none;" class="formRow">
								<label id="status"></label>
								<div class="formRight"><progress id="progressBar" value="0" max="100" style="width:700px;height:45px;"></progress></div>
								<div class="clear"></div>
					</div>
					<div class="formSubmit"><input onclick="uploadFile()" type="button" value="Upload Song" class="redB" /><input onclick="cancel_add()" type="button" value="Cancel" class="redB" /></div>
					<div class="clear"></div>
				<input type="hidden" name="album_id" id = "album_id" value = "<?php echo $album_id ?>" />  
				<p id="loaded_n_total"></p> 
				</fieldset> 
			</form> 
		</div>
	   <br>
	   <div class="widget">
            <div class="title"><img src="images/icons/dark/full2.png" alt="" class="titleIcon" /><h6>Songs List for <?php echo $row_album['album_name']; ?></h6></div>
		
            <table cellpadding="0" cellspacing="0" border="0" class="display dTable">
            <thead>
            <tr>
			
			<th style = "background:#4c4c4c">Song Name</th>
			<th style = "background:#4c4c4c">Duration</th>
			<th style = "background:#4c4c4c">Ratings</th>
			<th style = "background:#4c4c4c">Downloads</th>
			<th style = "background:#4c4c4c">Likes</th>
			<th style = "background:#4c4c4c">Shares</th>
			<th style = "background:#4c4c4c">Edit</th>
			<th style = "background:#4c4c4c">Delete</th>
			
			
            </tr>
            </thead>
            <tbody>
          
			<?php
				$qry_users = mysql_query("SELECT * FROM tbl_song WHERE album_id = '$album_id'");
				while($row_users = mysql_fetch_array($qry_users))
				{
			?>
					<tr>
						<td><center><?php echo $row_users['song_name']; ?></center> </td>
						<td><center><?php echo $row_users['duration']; ?></center> </td>
						<td><center><?php echo $row_users['ratings']; ?></center> </td>
						<td><center><?php echo $row_users['downloads']; ?></center> </td>
						<td><center><?php echo $row_users['song_name']; ?></center> </td>
						<td><center><?php echo $row_users['share']; ?></center> </td>
						<td><center><a href = "update_event.php?id=<?php echo $row_users['artist_id']; ?>"><img height = "30px" src = "images/edit_button.png" /> </a> </center> </td>
						<td><center><a onclick="return confirm('Are you sure you want to delete?');" href = "delete_event.php?id=<?php echo $row_users['artist_id']; ?>"><img src = "images/del_button.png" height = "30px" /> </a> </center></td>
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