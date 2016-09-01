<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-25 21:57:48
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_webview/water_refilling.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49544747357144a6570cd65-26004740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f684ad1c4bf385d3a6b44ffe675415c410a41c56' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_webview/water_refilling.tpl',
      1 => 1464230145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49544747357144a6570cd65-26004740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57144a65816503_73713585',
  'variables' => 
  array (
    'base_url' => 0,
    'service_type' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57144a65816503_73713585')) {function content_57144a65816503_73713585($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/headerstyle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.10.2.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <?php echo '<script'; ?>
>
  $(function() {
    $( "#accordion" ).accordion();
  });
  <?php echo '</script'; ?>
>
    <div class="container">
   <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services_webview/SucessSent">
   <div class="qf-1">
     <div class="row">


          <div class="col-md-12">
          <h4>How much is your budget?</h4>
        <div class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
          <input type="text" class="form-control form_gray" name="budget" placeholder="P">
          </div>
          </div>

        </div>
      </div>
     </div>
	  <div class="row">
<div id="accordion">

  <h3>QUESTION 1</h3>
  <div>
    <div class="col-md-12">

			<h4>What type of drinking water do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Purified"><span>&nbsp;</span>Purified</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Mineral"><span>&nbsp;</span>Mineral</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Distilled" ><span>&nbsp;</span>Distilled</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Alkaline"><span>&nbsp;</span>Alkaline</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]"  value="Other(Specify)"><span>&nbsp;</span>Other (Specify)</label>
					</div>
				</div>
	 	 </div>
  </div>
  <h3>QUESTION 2</h3>
  <div>
<div class="col-md-12">

			<h4>What type of water container do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_2[]" onClick="questioner_1()" value="Bottle" class="qf_1-1" ><span>&nbsp;</span>Bottle</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_2[]" onClick="questioner_1()" value="Refillable" class="qf_1-2"><span>&nbsp;</span>Refillable</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_2[]" onClick="questioner_1()" value="Other"  class="qf_1-3"><span>&nbsp;</span>Other (specify)</label>

					</div>
				</div>
	 	 </div>
  </div>
  <h3>QUESTION 3</h3>
  <div>
<div class="col-md-12">
		 	 	<h5>Delivery address:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_5"></textarea>
					</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Additional instruction:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_6"></textarea>
					</div>
		 	 	</div>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="btn-group" style="float:right;">
				<input type="hidden" name="service_type" value="<?php echo $_smarty_tpl->tpl_vars['service_type']->value;?>
">
				<input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">
					<button name="save" class="btn btn-primary">CONTINUE</button>
				</div>
				</div>
				</div>

			</form>
	  </div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/footer_webview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
