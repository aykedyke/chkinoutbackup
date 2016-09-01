<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-27 04:49:29
         compiled from "/home/tapdash/public_html/projects/icebox/application/views/tpl/global_tpl/header_front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7444952005770f6a9795679-12624673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9002b5b84e48f3370fd8017750897d25e168b610' => 
    array (
      0 => '/home/tapdash/public_html/projects/icebox/application/views/tpl/global_tpl/header_front.tpl',
      1 => 1467009862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7444952005770f6a9795679-12624673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
    'is_loggedin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5770f6a980d380_14390435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5770f6a980d380_14390435')) {function content_5770f6a980d380_14390435($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/ionicons.min.css">
            <link rel='stylesheet' id='camera-css'  href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/cameraslide/css/camera.css' type='text/css' media='all'>
            <link rel='stylesheet' id='camera-css'  href='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/liquid_carousel/css/style.css' type='text/css' media='all'>
            <link href='https://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/jumbotron.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/star_ratings/css/star-rating.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/questionaire.css" rel="stylesheet" type="text/css" />

        <?php echo '<script'; ?>
> var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'; <?php echo '</script'; ?>
>
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
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
          <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/dj_logo.png" class="logo"></a>
        </div>
         <!--/.nav-collapse -->
         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
              	<a href="#" >DJ ELITE</b></a>
             </li>
            <li >
              <?php if ($_smarty_tpl->tpl_vars['is_loggedin']->value=='') {?>
              <button href="#" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-sm" style="margin-top:12px;"><i class="fa fa-user"></i> SIGN IN</b></button>
              <?php } else { ?>
              <a href="" class="show-prof-menu" data-toggle="dropdown"><img src="<?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strAvatar'];?>
" class="img-responsive img-circle" style="float:left;margin-right:10px;" width="20" height="20"> | &nbsp; <span><?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strEmail'];?>
</span></a>

              <?php }?>
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
            <img src="<?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strAvatar'];?>
" class="img-responsive img-circle" style="float:left;margin-top:-50px;" width="80" height="80">
            <div id="spacing"></div>
              <button onclick="location.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
?logout';" class="btn btn-primary">LOG OUT</button>
      </div>
      <div class="col-xs-9">
        <ul class="nav nav-pills" style="margin-top:-50px;">
        <li class="active"><a href="">Profile</a></li>
        <li><a href="#" onClick="viewTransactions('<?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['intUserID'];?>
')">Transactions</a></li>

        </ul>
        <h4><?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strLastName'];?>
</h4>
        <p><?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strEmail'];?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['is_loggedin']->value['strAddress'];?>
</p>
      </div>
      </div>
    </div>
<?php }} ?>
