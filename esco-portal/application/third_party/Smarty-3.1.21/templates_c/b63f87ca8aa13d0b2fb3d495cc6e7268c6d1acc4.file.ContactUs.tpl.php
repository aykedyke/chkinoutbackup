<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-20 21:10:41
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ContactUs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12186963645710f9b6b81929-31101391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b63f87ca8aa13d0b2fb3d495cc6e7268c6d1acc4' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ContactUs.tpl',
      1 => 1464777005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12186963645710f9b6b81929-31101391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5710f9b6bf07a3_78682952',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710f9b6bf07a3_78682952')) {function content_5710f9b6bf07a3_78682952($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   <div class="dj_contactus_header">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/contact.png" class="dj_header_logo">
      </div>
      <div class="col-md-7">
            <div class="dj_header_title">

        <h1>CONTACT US</h1>
       </div>
       </div>
       </div>
      </div>
    </div>

   <div class="container">
	  <div class="row">
	    <div class="col-md-12">
		    <div class="col-md-6 brd-div-right">
		   		<h4>Feel Free to drop us a message!</h4>
		   		<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Name">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="E-mail">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Subject:">
						</div>
						<div class="form-group">
							<textarea class="form-control form_gray" placeholder="Message:" rows="10"></textarea>
						</div>
						<div class="text-right">
							<button class="btn btn-getstarted btn-sm">SUBMIT</button>
						</div>
		    </div>
		    <div class="col-md-6">
		    	    <h4>Address</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123495.56500714444!2d120.94477242970265!3d14.699218692821653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7a97fef0a15%3A0x66095dfe333d9fef!2sC%26E+Publishing%2C+Inc.!5e0!3m2!1sen!2sph!4v1464233058915" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		    </div>
	    </div>
	  </div>
  </div>
 <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSFgNUtwBshWTCxko-h869uGKpVYcxjYw&callback=initMap"
    async defer><?php echo '</script'; ?>
><?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/map.js" ><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
