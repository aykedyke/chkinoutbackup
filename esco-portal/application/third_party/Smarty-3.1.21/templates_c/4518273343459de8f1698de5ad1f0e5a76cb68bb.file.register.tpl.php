<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 17:10:24
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4724027795710f9b6c215c3-15287047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4518273343459de8f1698de5ad1f0e5a76cb68bb' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/register.tpl',
      1 => 1464905419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4724027795710f9b6c215c3-15287047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5710f9b6d68290_67382663',
  'variables' => 
  array (
    'base_url' => 0,
    'msg' => 0,
    'Service_type' => 0,
    'row' => 0,
    'strEmail' => 0,
    'strPassword' => 0,
    'strConfirmPassword' => 0,
    'strSecQuestion' => 0,
    'strSecAnswer' => 0,
    'strFirstName' => 0,
    'strLastName' => 0,
    'strGender' => 0,
    'strMstatus' => 0,
    'intAge' => 0,
    'strAddress' => 0,
    'strContactNumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710f9b6d68290_67382663')) {function content_5710f9b6d68290_67382663($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!--	   <div class="dj_register_header">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/list_of_services.png" class="dj_header_logo">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>Registration</h1>
        <p>Lorem ipsu dolor sit amet</p>
       </div>
       </div>
       </div>
      </div>
    </div> -->
    <div class="row">
    <div class="col-md-12">
    <div id="spacing"></div>
    </div>
    </div>
<form action="register" method="POST" id="RegForm">
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

<?php } elseif ($_smarty_tpl->tpl_vars['msg']->value['status']=='empty_field') {?>
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please fill out all the field</div>
	<style>
	.validation{
		border:1px solid red;
	}
	</style>

<?php }?>
    <div class="container">
  <div class="row">
  <div class="col-md-12">
  	<h4>Select All That Apply</h4>
      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Service_type']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
      <div class="col-md-6 col-md-3">
      <label class="col-md-12"><input type="checkbox" name="strService[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['intServiceProvider_servicesID'];?>
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

				</div>
				<div class="col-md-9 brd-div-left">
					<div class="col-md-6">
						<h4>LOGIN DETAILS</h4>

						<div class="form-group">
							<input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strEmail']->value=='') {?>validation<?php }?>" placeholder="E-mail" name="strEmail" value="<?php echo $_smarty_tpl->tpl_vars['strEmail']->value;?>
">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strPassword']->value=='') {?>validation<?php }?>" placeholder="Password" name="strPassword" value="<?php echo $_smarty_tpl->tpl_vars['strPassword']->value;?>
" id="strPassword">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strConfirmPassword']->value=='') {?>validation<?php }?>" placeholder="Confirm Password" name="strConfirmPassword" value="<?php echo $_smarty_tpl->tpl_vars['strConfirmPassword']->value;?>
">
						</div>
						<div class="form-group">
							<select name="strSecQuestion" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=='') {?>validation<?php }?>" placeholder="Choose Security Question">
								<option value="">--Select Security Question--</option>
								<option <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=="What's your favourite pet's name?") {?>selected<?php }?>>What's your favourite pet's name?</option>
								<option <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=="What's your favourite movie?") {?>selected<?php }?> >What's your favourite movie?</option>
								<option <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=="What's your mobile phone number?") {?>selected<?php }?>>What's your mobile phone number?</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strSecAnswer']->value=='') {?>validation<?php }?>" placeholder="Security Answer" name="strSecAnswer" value="<?php echo $_smarty_tpl->tpl_vars['strSecAnswer']->value;?>
">
						</div>
					</div>
					<div class="col-md-6">
						<h4>PERSONAL DETAILS</h4>
						<div class="form-group" >
								<input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strFirstName']->value=='') {?>validation<?php }?>" placeholder="First Name" name="strFirstName" value="<?php echo $_smarty_tpl->tpl_vars['strFirstName']->value;?>
">
						</div>
						<div class="form-group" >

							<input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strLastName']->value=='') {?>validation<?php }?>" placeholder="Last Name" name="strLastName" value="<?php echo $_smarty_tpl->tpl_vars['strLastName']->value;?>
">
						</div>
						<div class="col-md-4 nopadding" style="padding:0;">

							<select class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strGender']->value=='') {?>validation<?php }?>" name="strGender" style="margin:0;">
								<option <?php if ($_smarty_tpl->tpl_vars['strGender']->value=='Male') {?> selected <?php }?>>Male</option>
								<option <?php if ($_smarty_tpl->tpl_vars['strGender']->value=='Female') {?> selected <?php }?>>Female</option>
							</select>
						</div>
						<div class="col-md-4 nopadding" style="padding:0;border-left:2px solid #fff;border-right:2px solid #fff;">
							<div class="form-group">
							<select type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strMstatus']->value=='') {?>validation<?php }?>" name="strMstatus">
								<option <?php if ($_smarty_tpl->tpl_vars['strMstatus']->value=='Single') {?> selected <?php }?>>Single</option>
								<option <?php if ($_smarty_tpl->tpl_vars['strMstatus']->value=='Married') {?> selected <?php }?>>Married</option>
							</select>
							</div>
						</div>
						<div class="col-md-4 nopadding" style="padding:0;">
							<div class="form-group">
							<input type="number" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['intAge']->value=='') {?>validation<?php }?>" placeholder="Age" name="intAge" value="<?php echo $_smarty_tpl->tpl_vars['intAge']->value;?>
">
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strAddress']->value=='') {?>validation<?php }?>" placeholder="Address" name="strAddress" value="<?php echo $_smarty_tpl->tpl_vars['strAddress']->value;?>
">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strContactNumber']->value=='') {?>validation<?php }?>" placeholder="Contact Number" name="strContactNumber" value="<?php echo $_smarty_tpl->tpl_vars['strContactNumber']->value;?>
">
						</div>
						<div class="col-md-12" style="padding:0;">
	    <div class="pull-right">
			<input type="submit" value="SUBMIT" class="btn btn-primary btn-sm btn-block " name="save">
		</div>
		</div>
					</div>

				</div>

	    </div>

	  </div>
  </div>
  </form>
 <div class="row">
 <div class="col-md-12">
<div id="spacing"></div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
