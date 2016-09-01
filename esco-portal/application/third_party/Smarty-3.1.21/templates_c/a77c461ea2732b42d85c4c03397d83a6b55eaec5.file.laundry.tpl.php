<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-02 04:21:25
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_webview/laundry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5621909375710f9a670f320-62304223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a77c461ea2732b42d85c4c03397d83a6b55eaec5' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_webview/laundry.tpl',
      1 => 1464859259,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5621909375710f9a670f320-62304223',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5710f9a68a1312_64739399',
  'variables' => 
  array (
    'base_url' => 0,
    'service_type' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710f9a68a1312_64739399')) {function content_5710f9a68a1312_64739399($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/headerstyle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



   <div class="container">
   <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services_webview/SucessSent" onSubmit="return formSubmit()">
   <div class="qf-1">

	  <div class="row">
	  <div class="col-md-6 col-md-offset-3">
	     		<h3 class="hide" id="rev-form" style="color:#f79429;">Review your form</h3>

	  <div class="col-md-12">
		 	 	<h4 >How much is your budget?</h4>
			<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control form_gray" name="budget" placeholder="P">
				</div>
				</div>

			</div>
		</div>
	    <div class="col-md-12">
			<h4>What type of wash/cleaning? (Please Tick all applicable)</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="questioner_1()" value="Regular Wash & Fold" class="qf_1-1" ><span>&nbsp;</span>Regular Wash & Fold</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="questioner_1()" value="Regular Wash & Press" class="qf_1-2"><span>&nbsp;</span>Regular Wash & Press</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="questioner_1()" value="Special Wash (For Delicates, Comforters, Bulky items, heavy soil)"  class="qf_1-3"><span>&nbsp;</span>Special Wash (For Delicates, Comforters, Bulky items, heavy soil) </label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]"  onClick="questioner_1()" value="Dry Cleaning" class="qf_1-4"><span>&nbsp;</span>Dry Cleaning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]"  onClick="questioner_1()" value="Special Care (For signature items, Individually packed)" class="qf_1-5"><span>&nbsp;</span>Special Care (For signature items, Individually packed)</label>
					</div>
				</div>
	 	 </div>
	 	 <div style="clear:both"></div>
	 	 	 	 	<div class="buttongroup">

			<div class="btn-group" style="float:right;">
				<a href="#" onClick="questioner('qf-1','qf-2')" class="btn btn-primary" id="btn-continue">CONTINUE</a>
			</div>

	 	 </div>
	 	 </div>
<br/><br/>


	 	 	  </div>
	 	 	  </div> <br/>
		<div class="questioner qf-2">
	 	 <div class="col-md-8 col-md-offset-3">
	 	  <div class="col-md-12 qf-1_a ">
	 	 	<h4>For Regular Wash & Fold: (indicate number of items)</h4>
	 	 	<div class="col-md-10">
	 	 	<table class="TableService">
	 	 		<thead>
					<tr>
						<th></th>
						<th>White</th>
						<th>Colored</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th>T-Shirt</th>
					<input type="hidden" value="T-Shirt" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Polo Shirt</th>
					<input type="hidden" value="Polo Shirt" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Polo</th>
					<input type="hidden" value="Polo" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Longsleves</th>
					<input type="hidden" value="Longsleves" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Pants</th>
					<input type="hidden" value="Pants" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Shorts</th>
					<input type="hidden" value="Shorts" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Blouse</th>
					<input type="hidden" value="Blouse" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Dress</th>
					<input type="hidden" value="Dress" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Socks</th>
					<input type="hidden" value="Socks" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Towels</th>
					<input type="hidden" value="Towels" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0" ></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Blankets</th>
					<input type="hidden" value="Blankets" name="qf_2[]">
					<td><input type="text" name="qf_2[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_2[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				</tbody>
	 	 	</table>
	 	 	</div>
	 	 	</div>
	 	 <div class="col-md-12 qf-1_b">

	 	 <h4>For Regular Wash & Press: (indicate number of items)</h4>
	 	 	<div class="col-md-10">
	 	 	<table class="TableService">
	 	 		<thead>
					<tr>
						<th></th>
						<th>White</th>
						<th>Colored</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th>T-Shirt</th>
					<input type="hidden" value="T-Shirts" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Polo Shirt</th>
					<input type="hidden" value="Polo Shirt" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Polo</th>
					<input type="hidden" value="Polo" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Longsleves</th>
					<input type="hidden" value="Longsleves" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Pants</th>
					<input type="hidden" value="Pants" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Shorts</th>
					<input type="hidden" value="Shorts" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Blouse</th>
					<input type="hidden" value="Blouse" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Dress</th>
					<input type="hidden" value="Dress" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control" value="0" readonly></td>
				</tr>
				<tr>
					<th>Socks</th>
					<input type="hidden" value="Socks" name="qf_3[]">
					<td><input type="text" name="qf_3[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_3[]" class="form-control theTotal" value="0" readonly></td>
				</tr>

				</tbody>
	 	 	</table>
	 	 	</div>
	 	 	<div class="col-lg-10">
	 	 	<div class="pull-right">
	 	 	<div class="qf">
				<label class="col-lg-4">Extra Hanger?</label><label class="col-lg-4"><input type="radio" name="qf_3-a" value="yes"><span>&nbsp;</span>Yes</label>
				<label class="col-lg-4"><input type="radio" value="no" name="qf_3-a"><span>&nbsp;</span>No</label>
				</div>
				</div>
	 	 	</div>
	 	 	</div>


	 	 <div class="col-md-12 qf-1_c">
	 	 	<h4>For Special Wash: (indicate number of items)</h4>
	 	 	<div class="col-md-10">
	 	 	<table class="TableService">
	 	 		<thead>
					<tr>
						<th></th>
						<th>White</th>
						<th>Colored</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th>Delicates</th>
					<input type="hidden" value="Delicates" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Curtains</th>
					<input type="hidden" value="Curtains" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Seat covers</th>
					<input type="hidden" value="Seat Covers" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Table cloths</th>
					<input type="hidden" value="Table cloths" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Draperies</th>
					<input type="hidden" value="Draperies" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Heavy soil</th>
					<input type="hidden" value="Heavy soil" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Items</th>
					<input type="hidden" value="Items" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Comforters</th>
					<input type="hidden" value="Comforters" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Carpet</th>
					<input type="hidden" value="Carpet" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Pillow</th>
					<input type="hidden" value="Pillow" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Stuff Toys</th>
					<input type="hidden" value="Stuff Toys" name="qf_4[]">
					<td><input type="text" name="qf_4[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_4[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				</tbody>
	 	 	</table>
	 	 	</div>
	 	 	</div>


	 	 <div class="col-md-12 qf-1_d br">
	 	 <h4>For Dry Cleaning: (indicate number of items)</h4>
	 	 	<div class="col-md-10">
	 	 	<table class="TableService">
	 	 		<thead>
					<tr>
						<th></th>
						<th>White</th>
						<th>Colored</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th>Barong Jusi</th>
					<input type="hidden" value="Barong Jusi" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Barong Pina</th>
					<input type="hidden" value="Barong Pina" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Barong Ramie</th>
					<input type="hidden" value="Barong Ramie" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Suit (Top)</th>
					<input type="hidden" value="Suit (Top)" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Suit (Trousers)</th>
					<input type="hidden" value="Suit (Trousers)" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Wedding Gown</th>
					<input type="hidden" value="Suit (Wedding Gown)" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Gown</th>
					<input type="hidden" value="Suit (Gown)" name="qf_5[]">
					<td><input type="text" name="qf_5[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_5[]" class="form-control theTotal" value="0" readonly></td>
				</tr>


				</tbody>
	 	 	</table>
	 	 	</div>
	 	 	</div>
	 	 	<div class="col-md-12 qf-1_e" >
 <h4>For Special Care: (indicate number of items)</h4>
	 	 	<div class="col-md-10">
	 	 	<table class="TableService">
	 	 		<thead>
					<tr>
						<th></th>
						<th>White</th>
						<th>Colored</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<th>T-Shirt</th>
					<input type="hidden" value="T-Shirts" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Polo Shirt</th>
					<input type="hidden" value="Polo Shirt" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Polo Longsleeves</th>
					<input type="hidden" value="Polo Longsleeves" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Pants</th>
					<input type="hidden" value="Pants" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Shorts</th>
					<input type="hidden" value="Shorts" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Blouse</th>
					<input type="hidden" value="Blouse" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>
				<tr>
					<th>Dress</th>
					<input type="hidden" value="Dress" name="qf_6[]">
					<td><input type="text" name="qf_6[]" class="form-control fCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control sCount" value="0"></td>
					<td><input type="text" name="qf_6[]" class="form-control theTotal" value="0" readonly></td>
				</tr>


				</tbody>
	 	 	</table>
	 	 	</div>
	 	 	</div>


	 	 	<div class="col-md-12">
		 	 	<h5>Rush Items? (Double the price for Rush Items)</h5>
		 	 	<div class="col-md-10">
		 	 		<div class="qf">
					<label class="col-lg-4"><input type="radio" value="yes" name="qf_7[]" required><span>&nbsp;</span>Yes</label>
					<label class="col-lg-4"><input type="radio" value="no" name="qf_7[]" required><span>&nbsp;</span>No</label>
					</div>
		 	 	</div>
	 	 	</div>
	 	 	 <div class="col-md-12">
		 	 	<h5>Have it picked up & delivered to you? (via DJ Express)</h5>
		 	 	<div class="col-md-10">
		 	 		<div class="qf">
					<label class="col-lg-4"><input type="radio" value="yes" name="qf_8[]" required><span>&nbsp;</span>Yes</label>
					<label class="col-lg-4"><input type="radio" value="no" name="qf_8[]" required><span>&nbsp;</span>No</label>
					</div>
		 	 	</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Have it picked up & delivered to you?</h5>
		 	 	<div class="col-md-10">
					<label class="col-lg-3">Address</label>
					<div class="col-lg-9">
						<textarea class="form-control form_gray"  name="qf_9[]"></textarea>
					</div>
		 	 	</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Where is the exact location to have it pick up?</h5>
		 	 	<div class="col-md-10">
					<label class="col-lg-3">Address</label>
					<div class="col-lg-9">
						<textarea class="form-control form_gray"  name="qf_10[]"></textarea>
					</div>
		 	 	</div>
		 	 	</div>

	 	 <div class="col-md-12">
		 	 	<h5>Specific notes and instructions for the transaction.</h5>
		 	 	<div class="col-md-10">
					<label class="col-lg-3">Address</label>
					<div class="col-lg-9">
						<textarea name="qf_11[]" class="form-control form_gray"></textarea>
					</div>
		 	 	</div>
		 	 	</div>
		 	 	 	 <div class="col-md-12">
		 	 	<h5>Attach picture of items. (optional)</h5>
		 	 	<div class="col-md-10">
					<input type="file" name="">
		 	 	</div>
		 	 	</div>


		 	 	<div style="clear:both"></div>
	 	 	<div class="col-md-10">
				<div class="btn-group" style="float:right;">
	    	<input type = "hidden" name = "service_type" value = "<?php echo $_smarty_tpl->tpl_vars['service_type']->value;?>
" />
	    	<input type = "hidden" name = "userid" value = "<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />

					<button name="save" class="btn btn-primary btn-submit hide" >CONTINUE</button>
					<a href="#" class="btn btn-primary btn-continue" onClick="ViewSummary()" >CONTINUE</a>
				</div>
			</div>
	  </div>
	  	 	 </div>
			</form>
	  </div>
  </div>
  <?php echo '<script'; ?>
>
function SumupTotal(){

}
function formSubmit(e){
		if (e && e.preventDefault){
              e.preventDefault();
              return false;
		}

}
	function ViewSummary(){

	  $('.qf-1').show();
	  $('#rev-form').removeClass('hide');
	  $('.btn-submit').removeClass('hide');
	  $(this).hide();
	  $('#btn-continue').hide();
	  $('.btn-continue').hide();
	  $(this).hide();
$('html,body').animate({ scrollTop: 0 }, 'slow');
	}

	  <?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/footer_webview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
