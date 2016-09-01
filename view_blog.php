<?php

ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

if(!isset($_SESSION['admin'])){
	header('location:login.php');
}

$timezone = "Asia/Manila";
if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	
$blog_id = $_GET['id'];
$blog_qry = mysql_query("SELECT * FROM tbl_blog WHERE blog_id = '$blog_id'");
$row_blog = mysql_fetch_array($blog_qry);


?>

<?php include('header.php'); ?>

<body>



    
    <!-- Title area -->
    <div class="titleArea">
        <div class="wrapper">
            <div class="pageTitle">
                <h5>Article</h5>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="line"></div>	
    <!-- Main content wrapper -->
    <div class="wrapper">
       <div style = "min-height:600px;margin-top:32px;background:#F9F9F9;width:1000px;padding:20px;border:1px solid #CDCDCD;margin-left:auto;margin-right:auto;">
		<img style = "float:left;padding-right:50px;" height = "150px" src = "<?php echo $row_blog['blog_image']; ?>" />
		<h5><?php echo $row_blog['blog_title']; ?></h5>
		<br>
		<?php
			if(date("d F Y") == date("d F Y", $row_blog['date_tracked'])){
			echo "Posted Today ".date("- h:i:s A", $row_blog['date_tracked']);
			}
			else{
			echo "Posted ".date("d F Y - h:i:s A", $row_blog['date_tracked']);
			}
		?>
		<div style = "padding:10px;margin-top:100px;">
			<?php echo ucfirst($row_blog['blog_description']); ?>
		</div>
		</div>
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