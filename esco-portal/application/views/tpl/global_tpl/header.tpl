<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{$title}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/ionicons.min.css">
        <link href="{$base_url}assets/themes/css/themes.css" rel="stylesheet" type="text/css" />
		<script> var base_url = '{$base_url}'; </script>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <header class="header">
            <a href="{$base_url}dashboard" class="logo">
				HOPPLERS
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>{$userdata['strFirstName']} <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header bg-light-blue">
                                    <p>
                                        Welcome {$userdata['strFirstName']}!
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                    	<a href="{$base_url}settings" class="btn btn-default btn-flat">Settings</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{$base_url}dashboard/logout" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>