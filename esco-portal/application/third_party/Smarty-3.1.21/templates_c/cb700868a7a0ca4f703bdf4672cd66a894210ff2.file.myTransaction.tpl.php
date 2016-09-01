<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-19 03:38:47
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/myTransaction.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120521710357317463b89ff8-86477614%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb700868a7a0ca4f703bdf4672cd66a894210ff2' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/myTransaction.tpl',
      1 => 1462861473,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120521710357317463b89ff8-86477614',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57317463bf1be2_72885506',
  'variables' => 
  array (
    'transaction' => 0,
    'row' => 0,
    'userID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57317463bf1be2_72885506')) {function content_57317463bf1be2_72885506($_smarty_tpl) {?>

<div style="min-width:100%;min-height:100%;background:rgba(0,0,0,0.20);position:fixed;top:0;left:0;z-index:5000;" id="closethis">


<div style="width:50%;min-height:50%;background:#fff;box-shadow:3px 3px 5px #888888;margin:100px auto;padding:10px;">
<div style="width:100%;" >
<a class="close" onClick="closethis()">
x
</a>
</div>

<style>
#thisTable {
    border-collapse: collapse;
    width: 100%;
}

#thisTable th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

</style>
<h3>My Transaction</h3>
<table id="thisTable">

	<tr>
		<td><b>Transaction code</b></td>
		<td><b>Date Transaction</b></td>
		<td><b>Status</b></td>
		<td><b>Action</b></td>
	</tr>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['transaction']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['intUserID']==$_smarty_tpl->tpl_vars['userID']->value) {?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['date_inserted'];?>
</td>
		<td></td>
		<td><a href="">VIEW</a></td>
	</tr>
<?php }?>
<?php } ?>
</table>
</div>
</div><?php }} ?>
