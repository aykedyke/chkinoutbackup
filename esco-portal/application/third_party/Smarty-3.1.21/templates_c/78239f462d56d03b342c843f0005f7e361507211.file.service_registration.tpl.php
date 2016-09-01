<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-31 02:28:09
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5618590975715d0dadfff91-23011637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78239f462d56d03b342c843f0005f7e361507211' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_registration.tpl',
      1 => 1464073216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5618590975715d0dadfff91-23011637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5715d0db05c898_59412478',
  'variables' => 
  array (
    'base_url' => 0,
    'msg' => 0,
    'Service_type' => 0,
    'row' => 0,
    'strEmail' => 0,
    'strServiceName' => 0,
    'strAddress' => 0,
    'strContacts' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5715d0db05c898_59412478')) {function content_5715d0db05c898_59412478($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   <div class="dj_register_header">	
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/list_of_services.png" class="dj_header_logo">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>LIST OF SERVICES</h1>
        <p>Lorem ipsu dolor sit amet</p>
       </div>
       </div>
       </div>
      </div>
    </div>
<form action="ServiceRegistration" method="POST" id="spForm">
<?php if ($_smarty_tpl->tpl_vars['msg']->value['status']=='pw_mismatch') {?>
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Your password did not match</div>
<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['status']=='email_not_valid') {?>
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Your email is not valid</div>
<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['status']=='success') {?>
		<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please check your email to activate your account!</div>
<?php echo '<script'; ?>
>
	setTimeout(function () {
   window.location.href= '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
'; // the redirect goes here

},3000);
	<?php echo '</script'; ?>
>
<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['status']=='email_exist') {?>
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email is already Exist</div>
<?php }?>
    <div class="container">
  <div class="row">
  <div class="col-md-12">
         <h3 style="text-align:center">SERVICE PROVIDER REGISTRATION</h3>

  	<h4>Choose your Service</h4>
  	<input type="hidden" name="intServiceProvider_servicesID" value="0">
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Service_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
            <div class="col-md-3">

      <label class="col-md-12"><input type="radio" name="intServiceProvider_servicesID" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['intServiceProvider_servicesID'];?>
"><span>&nbsp;</span><?php echo $_smarty_tpl->tpl_vars['row']->value['strName'];?>
</label>
      </div>
      <?php } ?>
	    </div>
	    </div>
    </div>
   <div class="container">

	  <div class="row">
	    <div class="col-md-12">
	    	    <div class="col-md-3 brd-div noppading">
		    	    <div class="col-xs-6 nopadding">
		    	    	<a href="" style="font-size:0.9em">Already A Member?</a>
		    	    </div>
		    	    <div class="col-xs-6">
		    	    	<a href="" class="btn btn-primary btn-block btn-sm">CONFIRM</a>
		    	    </div>

				</div>
				<div class="col-md-9 brd-div-left">
					<div class="col-md-6">
						<h4>LOGIN DETAILS</h4>
						
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="E-mail" name="strEmail" value="<?php echo $_smarty_tpl->tpl_vars['strEmail']->value;?>
">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form_gray" placeholder="Password" name="strPassword" id="strPassword">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form_gray" placeholder="Confirm Password" name="strConfirmPassword">
						</div>
					</div>
					<div class="col-md-6">
						<h4>SERVICE PROVIDER</h4>
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Service Name" name="strServiceName" value="<?php echo $_smarty_tpl->tpl_vars['strServiceName']->value;?>
">
						</div>
						
						
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Address" name="strAddress" value="<?php echo $_smarty_tpl->tpl_vars['strAddress']->value;?>
">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Contact Number" name="strContacts" value="<?php echo $_smarty_tpl->tpl_vars['strContacts']->value;?>
" id="Contacts">
							<div class="errmsg"></div>
						</div>
						<div class="col-md-6 col-md-offset-6 nopadding">
							<input type="submit" value="SUBMIT" class="btn btn-primary btn-sm btn-block" name="save">
						</div>
					</div>
				</div>
	    </div>
	  </div> 
  </div>
  </form>

<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
