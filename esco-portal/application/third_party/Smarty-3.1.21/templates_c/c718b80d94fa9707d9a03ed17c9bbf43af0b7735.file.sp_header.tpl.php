<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-11 05:19:25
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/sp_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1252112786571064f5c6ab17-80445165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c718b80d94fa9707d9a03ed17c9bbf43af0b7735' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/sp_header.tpl',
      1 => 1462961921,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252112786571064f5c6ab17-80445165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571064f5c85341_41902662',
  'variables' => 
  array (
    'title' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571064f5c85341_41902662')) {function content_571064f5c85341_41902662($_smarty_tpl) {?><!DOCTYPE html>
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
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/css/fullcalendar/fullcalendar.css">
        <link href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/themes/css/themes.css" rel="stylesheet" type="text/css" />
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
    <body class="skin-blue" >
        <div id="wrapper"><?php }} ?>
