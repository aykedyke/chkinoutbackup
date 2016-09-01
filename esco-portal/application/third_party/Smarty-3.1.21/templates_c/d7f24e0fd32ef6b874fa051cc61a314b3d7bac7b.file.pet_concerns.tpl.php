<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-09 21:54:41
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/pet_concerns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26098876057314d71a7be59-76813836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7f24e0fd32ef6b874fa051cc61a314b3d7bac7b' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/pet_concerns.tpl',
      1 => 1457982155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26098876057314d71a7be59-76813836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57314d71c71710_53810545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57314d71c71710_53810545')) {function content_57314d71c71710_53810545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   <div class="dj_payment_header">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/petConcerns.png" class="dj_header_logo">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>PET CONCERNS</h1>
        </div>
       </div>
       </div>
      </div>
    </div>

   <div class="container">
   	<h4>PET CONCERNS</h4>
   	<div class="row">
   	<div class="col-md-6">
	   	<div class="col-md-10">
		   	<h5 class="col-md-6" style="border-bottom:2px solid red;text-align:center;padding:10px">OVERVIEW</h5>
		   	<h5 class="col-md-6" style="text-align:center;padding:10px">REVIEWS</h5>
	  	</div>
  	</div>
  	<div class="row">
		<div class="col-md-12">
			<h5>Brief Description</h5>
			<p class="col-md-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>

		</div>
		<div class="col-md-12">
			<h5>Service Offered</h5>
			<p class="col-md-6">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
			
		</div>
		<div class="col-md-12">
			<h5>Operating Schedule</h5>
			<div class="col-md-6">
			<p>Monday Thru Fridays</p>
			<p>10:00 AM	- 7:00 PM</p>
			 </div>
			
		</div>
  	</div>
  	</div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
