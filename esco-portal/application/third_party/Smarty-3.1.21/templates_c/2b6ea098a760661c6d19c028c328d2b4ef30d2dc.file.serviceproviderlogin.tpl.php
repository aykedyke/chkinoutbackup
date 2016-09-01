<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-15 04:10:42
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/serviceproviderlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3816930965710b012751c54-69284153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b6ea098a760661c6d19c028c328d2b4ef30d2dc' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/serviceproviderlogin.tpl',
      1 => 1458720788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3816930965710b012751c54-69284153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'StatusAlert' => 0,
    'AlertType' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5710b01281a955_25288793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710b01281a955_25288793')) {function content_5710b01281a955_25288793($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dirty Jobs</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/ionicons.min.css">
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/jumbotron.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/sp_login.css" rel="stylesheet" type="text/css" />
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
    </head>

        <body>
          <div class="container">
          <?php if ($_smarty_tpl->tpl_vars['StatusAlert']->value!='') {?>
    <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['AlertType']->value;?>
"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><?php echo $_smarty_tpl->tpl_vars['StatusAlert']->value;?>
</div>
    <?php }?>
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" style="width:80%;margin:0 auto;"src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/dj_logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/login">
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
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-migrate-1.0.0.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/fractionslider/jquery.fractionslider.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/fractionslider/main.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/te.js"><?php echo '</script'; ?>
>
        
        <!--BOOTSTRAP-->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <!-- SYSTEM JS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/app.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/dashboard.js"><?php echo '</script'; ?>
>
    </html>
<?php }} ?>
