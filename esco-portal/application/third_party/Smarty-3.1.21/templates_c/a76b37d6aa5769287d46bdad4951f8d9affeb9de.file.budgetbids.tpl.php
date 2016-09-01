<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-04-28 22:52:54
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/budgetbids.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15249014265722d1b60416a0-84933845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a76b37d6aa5769287d46bdad4951f8d9affeb9de' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/budgetbids.tpl',
      1 => 1461901972,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15249014265722d1b60416a0-84933845',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5722d1b6196e67_19581561',
  'variables' => 
  array (
    'base_url' => 0,
    'service_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5722d1b6196e67_19581561')) {function content_5722d1b6196e67_19581561($_smarty_tpl) {?>	<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/headerstyle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<style>
#ex1Slider .slider-selection {
	background: #BABABA;
}


	</style>

	<?php echo '<script'; ?>
>
$('#ex1').slider({
	formatter: function(value) {
		return 'Current value: ' + value;
	}
});

// Without JQuery
var slider = new Slider('#ex1', {
	formatter: function(value) {
		return 'Current value: ' + value;
	}
});

	<?php echo '</script'; ?>
>


   <div class="container">
   <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services">
   <div class="qf-1">
	  <div class="row">
	  <div class="col-md-8 col-md-offset-2">
	    <div class="col-md-12">

			<h4>How much is your budget?</h4>
				<div class="col-md-12">
					<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>

				</div>
	 	 </div> 
	 	 <div style="clear:both"></div>
	 	 	 	 	<div class="buttongroup">

			<div class="btn-group" style="float:right;">
				<a href="#" onClick="questioner('qf-1','qf-2')" class="btn btn-primary">CONTINUE</a>
			</div>
			<div class="btn-group" style="float:left;">
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
bidding" class="btn btn-primary">BACK</a>
			</div>
	 	 </div>
	 	 </div>
	 	 </div>
	 	 </div>
			<div class="questioner qf-2">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
					<div class="col-md-12">

			<div class="col-md-12 qf-1_a">

			<h4>For bottled water, which size(s) do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="Bubble Bottle" ><span>&nbsp;</span>Bubble Bottle</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="Refillable" ><span>&nbsp;</span>350 mL</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="500 mL"  ><span>&nbsp;</span>500 mL</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="1 L"  ><span>&nbsp;</span>1 L</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="1.5 L"><span>&nbsp;</span>1.5 L</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="4 L"><span>&nbsp;</span>4 L</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="6 L"><span>&nbsp;</span>6 L</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_3[]" value="10 L"><span>&nbsp;</span>10 L</label>
						 
					</div>
				</div>
			</div>
			<div class="col-md-12 qf-1_b">
				<div class="col-md-10">
			 	 	<table class="TableService">
			 	 		<thead>
							<tr>
								<th></th>
								<th>Quantity</th>

							</tr>
						</thead>
						<tbody>
						<tr>
							<th>5 gallons for water dispenser</th>
							<td><input type="text" name="qf_4[]" class="form-control"></td>

						</tr>
						<tr>
							<th>5 gallons for with faucet</th>
							<td><input type="text" name="qf_4[]" class="form-control"></td>

						</tr>
						<tr>
							<th>Other (specify)</th>
							<td><input type="text" name="qf_4[]" class="form-control"></td>

						</tr>

						</tbody>
			 	 	</table>
		 	 	</div>
	 	 	</div>
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
		 	 	<div class="col-md-12">
			 	 	<h5>Attach picture of items. (optional)</h5>
				 	 	<div class="col-md-10">
						<input type="file" name="">
				 	 	</div>
		 	 	</div>
		 	 	<div class="col-md-10">
						<h4>CONTACT INFORMATION</h4>
						<div class="form-group">
							<div class="col-md-6 nopadding">
								<input type="text" class="form-control form_gray" placeholder="First Name" name="strFirstName" >
							</div>
						<div class="col-md-6 nopadding">
							<input type="text" class="form-control form_gray" placeholder="Last Name" name="strLastName">
						</div>
						<div class="col-md-12 nopadding">
								<input type="text" class="form-control form_gray" placeholder="E-mail Address" name="strEmail" >
						</div>
						<div class="col-md-12 nopadding">
								<input type="text" class="form-control form_gray" placeholder="Address" name="strAddress" >
						</div>
						<div class="col-md-12 nopadding">
							<div class="input-group">
								<div class="input-group-addon">+63</div><input type="text" class="form-control form_gray" placeholder="Contact Number" name="strContactNumber" > 
							</div>
						</div>

						</div>
						
						
						
						
					</div>
			<div style="clear:both"></div>
	 	 	<div class="col-md-10">
				<div class="btn-group" style="float:right;">
				<input type="hidden" name="service_type" value="<?php echo $_smarty_tpl->tpl_vars['service_type']->value;?>
">

					<button name="save" class="btn btn-primary">CONTINUE</button>
				</div>
				<div class="btn-group" style="float:left;">
					<a href="#" onClick="qf_back('qf-2','qf-1')" class="btn btn-primary">BACK</a>
				</div>
			</div>
				</div>
			</div>
			</div>
			<br/><br/>
	 	 

	 	 	  </div>
	 	 	  </div> <br/>

			</form>
	  </div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
