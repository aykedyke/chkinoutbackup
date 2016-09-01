<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-25 21:14:40
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/forgotpassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69402305571ecf108fbb15-06919196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a64b999b6c4b4dd76525402ef0f9dde64784690a' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/forgotpassword.tpl',
      1 => 1458099340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69402305571ecf108fbb15-06919196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stats' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571ecf10a0cf28_54911053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571ecf10a0cf28_54911053')) {function content_571ecf10a0cf28_54911053($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	   <div class="DjLaundryService">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>FORGOT PASSWORD</h1>
        </div>
       </div>
       </div>
      </div>
    </div>

   <div class="container">
   <?php if ($_smarty_tpl->tpl_vars['stats']->value=='success') {?>
   	<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Password sent to your Email</div>
   	<?php }?>

	<div class="col-md-10 col-sm-offset-4">
		<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
home/forgotPassword" class="form-inline">
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control form_gray" id="exampleInputEmail2" placeholder="jane.doe@example.com" name="strEmail">
  </div>
  <button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>
	</div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
