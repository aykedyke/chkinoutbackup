<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-21 02:04:25
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/bidding.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12873869595710e723eea9d8-13354164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '334cdaf3b8e5645ff263ea0fc65163d93b6d93fc' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/bidding.tpl',
      1 => 1466492663,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12873869595710e723eea9d8-13354164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5710e724053947_98045678',
  'variables' => 
  array (
    'base_url' => 0,
    'getServicetype' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710e724053947_98045678')) {function content_5710e724053947_98045678($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="col-md-12"><div id="spacing"></div></div>

   <div class="container">
	  <div class="row">
	  <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services">
	      <div class="col-md-6 col-md-offset-3">
	    <div class="col-md-12">
	    	<input type = "hidden" name = "service_type" value = "laundry" />
			<h4>Pick a service</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['getServicetype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
						<ul class="nav">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services?service_type=<?php echo $_smarty_tpl->tpl_vars['row']->value['intServiceProvider_servicesID'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['strName'];?>
</a></li>
						</ul>
						<?php } ?>
					</div>
				</div>
	 	 </div>
	 	 <div style="clear:both"></div>
	 	 	 	 	<div class="buttongroup">


	 	 </div>
	 	 </div>
	 	 </form>
	  </div>
		<div class="col-md-12"><div id="spacing"></div></div>

  </div>

<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
