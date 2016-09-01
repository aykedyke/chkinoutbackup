<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{$title}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/css/login.css">
    </head>
    
    <body>
		<div class="msg-alert">
			<div id="alert-msg-content"></div>
		</div>
		<div class="container">
			<div class="row loginWrap">
				<div class="login-wall">
					<div class="headerLogin">
						<h4 class="header"> <i class="fa fa-coffee green"></i> Please Enter Your Information </h4>
					</div>
					<form class="form-signin" action="javascript:;" method="POST">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon user-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="strUser" type="text" class="form-control" placeholder="Email Address" required autofocus />
							</div>
							<div class="input-group">
								<span class="input-group-addon pass-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="strLogInPassword" type="password" class="form-control" placeholder="Password" required />
							</div>
							<br />
							<label class="inline">
                            	<input type="checkbox">
                            	<span class="lbl"> Remember Me</span>
                        	</label>
							<button type="submit" id="doLogin" class="btn btn-lg btn-default btn-block">Sign In <i class="fa fa-sign-in"></i></button>
							<div class="clearfix"></div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!--BASE URL-->
		<script>var base_url = '{$base_url}';</script>
		<!--JQUERY-->
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-migrate-1.0.0.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"></script>
		
		<!--BOOTSTRAP-->
		<script type="text/javascript" src="{$base_url}assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
	
		<!--CUSTOM JS-->
		<script type="text/javascript" src="{$base_url}assets/js/login.js"></script>
    </body>
</html>