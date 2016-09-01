<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-26 19:29:13
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/forgot_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326542518572007d9e23790-51454906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f68701d7ec69c87952f6818ce60329a0e7f573f3' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/forgot_password.tpl',
      1 => 1461716663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326542518572007d9e23790-51454906',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572007da05ddb7_93671934',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572007da05ddb7_93671934')) {function content_572007da05ddb7_93671934($_smarty_tpl) {?><!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/login.css">
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
					
					
				</div>
			</div>
		</div>
		<!--BASE URL-->
		<?php echo '<script'; ?>
>var base_url = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
';<?php echo '</script'; ?>
>
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
		
		<!--BOOTSTRAP-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	
		<!--CUSTOM JS-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/login.js"><?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
