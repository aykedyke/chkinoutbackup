<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{$title}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{$base_url}assets/themes/css/ionicons.min.css">
            <link rel='stylesheet' id='camera-css'  href='{$base_url}assets/plugins/cameraslide/css/camera.css' type='text/css' media='all'>
            <link rel='stylesheet' id='camera-css'  href='{$base_url}assets/plugins/liquid_carousel/css/style.css' type='text/css' media='all'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="{$base_url}assets/css/jumbotron.css" rel="stylesheet" type="text/css" />
        <link href="{$base_url}assets/plugins/star_ratings/css/star-rating.css" rel="stylesheet" type="text/css" />
        <link href="{$base_url}assets/css/questionaire.css" rel="stylesheet" type="text/css" />

        <script> var base_url = '{$base_url}'; </script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
          <style>
    .fluid_container {
      margin: 0 auto;
      width: 100%;
      padding:0;
      background:#000;
      margin-bottom:0;
    }
    .camera_wrap{
      background:#000;
      margin:0;
      margin-bottom:0;
    }
  </style>

    </head>
    <body>
      <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container2">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{$base_url}"><img src="{$base_url}assets/images/dj_logo.png" class="logo"></a>
        </div>
         <!--/.nav-collapse -->
         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
              	<a href="#" >DJ ELITE</b></a>
             </li>
            <li >
              {if $is_loggedin == ''}
              <button href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm" style="margin-top:12px;"><i class="fa fa-user"></i> SIGN IN</b></button>
              {else}
              <a href="" class="show-prof-menu" data-toggle="dropdown"><img src="{$is_loggedin.strAvatar}" class="img-responsive img-circle" style="float:left;margin-right:10px;" width="20" height="20"> | &nbsp; <span>{$is_loggedin.strEmail}</span></a>

              {/if}
            </li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="prof-menu">
      <div id="spacing" style="min-height:50px;" ></div>
      <div style="width:100%;background:#fff;padding:15px;float:left;">
        <div class="col-xs-3">
            <img src="{$is_loggedin.strAvatar}" class="img-responsive img-circle" style="float:left;margin-top:-50px;" width="80" height="80">
            <div id="spacing"></div>
              <button onclick="location.href = '{$base_url}?logout';" class="btn btn-primary">LOG OUT</button>
      </div>
      <div class="col-xs-9">
        <ul class="nav nav-pills" style="margin-top:-50px;">
        <li class="active"><a href="">Profile</a></li>
        <li><a href="#" onClick="viewTransactions('{$is_loggedin.intUserID}')">Transactions</a></li>

        </ul>
        <h4>{$is_loggedin.strFirstName} {$is_loggedin.strLastName}</h4>
        <p>{$is_loggedin.strEmail}</p>
        <p>{$is_loggedin.strAddress}</p>
      </div>
      </div>
    </div>
