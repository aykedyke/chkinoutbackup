<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ESCO Portal</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/themes/css/ionicons.min.css">
        <link href="<?php echo base_url(); ?>assets/css/jumbotron.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/css/spDashboard_login.css" rel="stylesheet" type="text/css" />
		<script> var base_url = '<?php echo base_url(); ?>'; </script>
    </head>

        <body>
		
          <div class="container">
		  <div class="linebreak"></div>
          <?php
          echo $StatusAlert;
           if($StatusAlert != '') { ?>
				<div class="alert alert-<?php echo $AlertType; ?>"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $StatusAlert; ?></div>
		<?php } ?>
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" style="width:100%;margin:0 auto;"src="<?php echo base_url(); ?>assets/images/escologoblue.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="<?php echo base_url(); ?>dashboard/login">
                <span id="reauth-email" class="reauth-email"></span>
					<input type="text" id="inputEmail" class="form-control" placeholder="Employee Number" required autofocus name="employee_id">
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="employee_password">
                <button class="btn btn-primary btn-block btn-sm" type="submit">Log in</button>
            </form><!-- /form -->
           <!-- <a href="#" class="forgot-password">
                Forgot the password?
            </a>-->
        </div><!-- /card-container -->
    </div><!-- /container -->
        </body>
        <!--JQUERY-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-migrate-1.0.0.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/fractionslider/jquery.fractionslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/fractionslider/main.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/te.js"></script>

        <!--BOOTSTRAP-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>

        <!-- SYSTEM JS -->
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/dashboard.js"></script>
    </html>
