<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-18 21:54:07
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94523360957159dcfc5d7f4-92296322%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb696b6fdff9d30a2c841d3fce9ada0442c048ad' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/login.tpl',
      1 => 1454986280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94523360957159dcfc5d7f4-92296322',
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
  'unifunc' => 'content_57159dcfcdabf7_93866610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57159dcfcdabf7_93866610')) {function content_57159dcfcdabf7_93866610($_smarty_tpl) {?><!doctype html>
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
