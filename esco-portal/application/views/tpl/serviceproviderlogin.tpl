<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dirty Jobs</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/ionicons.min.css">
        <link href="{$base_url}assets/css/jumbotron.css" rel="stylesheet" type="text/css" />
        <link href="{$base_url}assets/css/sp_login.css" rel="stylesheet" type="text/css" />
		<script> var base_url = '{$base_url}'; </script>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>

        <body>
          <div class="container">
          {if $StatusAlert != ''}
    <div class="alert alert-{$AlertType}"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{$StatusAlert}</div>
    {/if}
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" style="width:80%;margin:0 auto;"src="{$base_url}assets/images/dj_logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="{$base_url}serviceprovider/login">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="strUser">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="strLogInPassword">
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="1" name="strRememberMe"><span>&nbsp;</span>  Remember me
                        <input type="hidden" name="strRememberMe" value="0">
                    </label>
                </div>
                <button class="btn btn-primary btn-block btn-sm" type="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
        </body>
        <!--JQUERY-->
        <script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-migrate-1.0.0.js"></script>
        <script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"></script>
        <script type="text/javascript" src="{$base_url}assets/plugins/fractionslider/jquery.fractionslider.js"></script>
        <script type="text/javascript" src="{$base_url}assets/plugins/fractionslider/main.js"></script>
        <script type="text/javascript" src="{$base_url}assets/te.js"></script>
        
        <!--BOOTSTRAP-->
        <script type="text/javascript" src="{$base_url}assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
        
        <!-- SYSTEM JS -->
        <script src="{$base_url}assets/js/app.js"></script>
        <script src="{$base_url}assets/js/dashboard.js"></script>
    </html>
