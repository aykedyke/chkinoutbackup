<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-21 22:54:11
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/searchservice.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126481144857107c081cf168-33597866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05a977be99130e50bb6d145e34bf1a77d68fb559' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/searchservice.tpl',
      1 => 1461297243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126481144857107c081cf168-33597866',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57107c08380908_66058402',
  'variables' => 
  array (
    'ServiceName' => 0,
    'ServiceProviders' => 0,
    'row' => 0,
    'DsID' => 0,
    'testarrays' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57107c08380908_66058402')) {function content_57107c08380908_66058402($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   <div class="DjLaundryService">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1><?php echo $_smarty_tpl->tpl_vars['ServiceName']->value;?>
</h1>
        </div>
       </div>
       </div>
      </div>
    </div>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ServiceProviders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['row']->value['intServiceProvider_servicesID']==$_smarty_tpl->tpl_vars['DsID']->value['intServiceProvider_servicesID']) {?>
	<div class="col-md-12">
		<?php echo $_smarty_tpl->tpl_vars['row']->value['strServiceName'];?>

	</div>
	<?php }?>

    <?php } ?>  
    <div class="col-md-12">
        <?php echo $_smarty_tpl->tpl_vars['testarrays']->value;?>


    </div>


  

<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
