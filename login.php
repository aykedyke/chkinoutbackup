<?php
ob_start();
session_start();

require_once("mod_lib/connection.php");
include("mod_lib/ConnectionMgr.php");

function clean($string) {
	   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.

	   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}
	

if($_POST['signIn']){
	
	$login = clean($_POST['login']);
	$password = md5($_POST['password']);
	
	
	$check_log = mysql_query("SELECT * FROM tbl_admin WHERE username = '$login' AND password = '$password'");
	$count_check = mysql_num_rows($check_log);
	$row_check = mysql_fetch_array($check_log);
	
	if($count_check > 0){
		$_SESSION['admin'] = $_POST['login'];
		$_SESSION['company'] = $row_check['company_id'];
		$_SESSION['id'] = $row_check['admin_id'];
		
		if($_SESSION['id'] == 6){
			header('location: overtime.php');
		}else if($_SESSION['id'] == 7){
			header('location: approved_leave.php');
		}else{
			header('location: index.php');
		}
	}else{
		echo "<script> alert('Username or Password are incorrect!'); </script>";
	}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" />
<title>Tapdash Attendance</title>
<link href="css/main.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript" src="js/plugins/spinner/ui.spinner.js"></script>
<script type="text/javascript" src="js/plugins/spinner/jquery.mousewheel.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/plugins/charts/excanvas.min.js"></script>
<script type="text/javascript" src="js/plugins/charts/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="js/plugins/forms/uniform.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.cleditor.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="js/plugins/forms/chosen.jquery.min.js"></script>

<script type="text/javascript" src="js/plugins/wizard/jquery.form.js"></script>
<script type="text/javascript" src="js/plugins/wizard/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/plugins/wizard/jquery.form.wizard.js"></script>

<script type="text/javascript" src="js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.php5.js"></script>
<script type="text/javascript" src="js/plugins/uploader/plupload.php4.js"></script>
<script type="text/javascript" src="js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="js/plugins/tables/datatable.js"></script>
<script type="text/javascript" src="js/plugins/tables/tablesort.min.js"></script>
<script type="text/javascript" src="js/plugins/tables/resizable.min.js"></script>

<script type="text/javascript" src="js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="js/plugins/ui/jquery.sourcerer.js"></script>

<script type="text/javascript" src="js/plugins/calendar.min.js"></script>
<script type="text/javascript" src="js/plugins/elfinder.min.js"></script>

<script type="text/javascript" src="js/custom.js"></script>

</head>

<body class="nobg loginPage">

<!-- Style switcher 
<div class="switcher">
	<a href="#" title="" class="pat1"><img src="images/switcher/2.png" alt="" /></a>
    <a href="#" title="" class="pat2"><img src="images/switcher/3.png" alt="" /></a>
    <a href="#" title="" class="pat3"><img src="images/switcher/4.png" alt="" /></a>
	<a href="#" title="" class="pat4"><img src="images/switcher/5.png" alt="" /></a>
    <a href="#" title="" class="pat5"><img src="images/switcher/6.png" alt="" /></a>
    <a href="#" title="" class="pat6"><img src="images/switcher/7.png" alt="" /></a>
	<a href="#" title="" class="pat7"><img src="images/switcher/8.png" alt="" /></a>
    <a href="#" title="" class="pat8"><img src="images/switcher/9.png" alt="" /></a>
    <a href="#" title="" class="pat10"><img src="images/switcher/10.png" alt="" /></a>
	<a href="#" title="" class="pat9"><img src="images/switcher/1.png" alt="" /></a>
</div>-->

<!-- Top fixed navigation -->
<!--<div class="topNav">
    <div class="wrapper">
        <div class="userNav">
            <ul>
                <li><a href="#" title=""><img src="images/icons/topnav/mainWebsite.png" alt="" /><span>Main website</span></a></li>
                <li><a href="#" title=""><img src="images/icons/topnav/profile.png" alt="" /><span>Contact admin</span></a></li>
                <li><a href="#" title=""><img src="images/icons/topnav/messages.png" alt="" /><span>Support</span></a></li>
                <li><a href="login.php" title=""><img src="images/icons/topnav/settings.png" alt="" /><span>Settings</span></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>-->


<!-- Main content wrapper -->
<div class="loginWrapper">
    <div class="loginLogo"><img src="images/backgrounds/logohd.png" width="500px" alt="" /></div>
    <div class="widget">
        <div class="title"><img src="images/icons/dark/files.png" alt="" class="titleIcon" /><h6>Login panel</h6></div>
        <form method="post" action="" id="validate" class="form">
            <fieldset>
                <div class="formRow">
                    <label for="login">Username:</label>
                    <div class="loginInput"><input type="text" name="login" class="validate[required]" id="login" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="formRow">
                    <label for="pass">Password:</label>
                    <div class="loginInput"><input type="password" name="password" class="validate[required]" id="pass" /></div>
                    <div class="clear"></div>
                </div>
                
                <div class="loginControl">
                    <input type="submit" value="Log me in" name="signIn" class="dredB logMeIn" />
                    <div class="clear"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>    

<!-- Footer line -->
<div id="footer">
</div>
</body>
</html>