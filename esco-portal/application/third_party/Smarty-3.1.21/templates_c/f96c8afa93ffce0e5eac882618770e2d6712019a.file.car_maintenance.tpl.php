<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-27 05:11:00
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_webview/car_maintenance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7506925415716dc17334031-28834679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f96c8afa93ffce0e5eac882618770e2d6712019a' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_webview/car_maintenance.tpl',
      1 => 1464229426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7506925415716dc17334031-28834679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5716dc17542d52_96732947',
  'variables' => 
  array (
    'base_url' => 0,
    'service_type' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5716dc17542d52_96732947')) {function content_5716dc17542d52_96732947($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/headerstyle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>



   <div class="container">
   <form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services_webview/SucessSent">
   <div class="qf-1">
	  <div class="row">
	  <div class="col-md-8 col-md-offset-2">
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
	    <div class="col-md-12">

			<h4>What type of service do you need for your vehicle? (Please tick all that apply.)</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Premium car wash"><span>&nbsp;</span>Premium car wash</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf1')" class="qf1"  value="Interior detailing"><span>&nbsp;</span>Interior detailing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf2')" class="qf2"  value="Exterior detailing" ><span>&nbsp;</span>Exterior detailing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf3')" class="qf3" value="Exterior glass polishing"><span>&nbsp;</span>Exterior glass polishing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf4')" class="qf4"   value="Preventive maintenance"><span>&nbsp;</span>Preventive maintenance</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf5')" class="qf5" value="Tire service"><span>&nbsp;</span>Tire service</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf6')" class="qf6" value="Repairs"><span>&nbsp;</span>Repairs</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf7')" class="qf7" value="Performance and aftermarket"><span>&nbsp;</span>Performance and aftermarket</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" onClick="ShowHide('qf8')" class="qf9" value="Engine detailing"><span>&nbsp;</span>Engine detailing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]"  value="Other (specify) "><span>&nbsp;</span>Other (specify) </label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12">
		 	 	<h4>What is the car make and year model of your vehicle?</h4>
		<div class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Make</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form_gray" name="qf_2[]" placeholder="e.g. Toyota Vios">
			</div>
			</div>
		<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Model</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form_gray" name="qf_2[]" placeholder="e.g. 2015">
			</div>
		</div>
		</div>
		</div>
		 <div class="col-md-12">
		 	 	<h4>Do you want a mechanic / car maintenance guy / car wash crew to service your vehicle at home?</h4>
		 	 	<div class="col-md-10">
		 	 		<div class="choose_bid2">
					<label class="col-lg-6"><input type="radio" value="yes" name="qf_7[]" onClick="ShowHide('qf9')" class="qf9" ><span>&nbsp;</span>YES</label>
					<label class="col-lg-6"><input type="radio" value="no" name="qf_7[]" ><span>&nbsp;</span>NO</label>
					</div>
		 	 	</div>
	 	 	</div>
	 	 	<div class="col-md-12">
		 	 	<h4>Set an appointment with our PARTNER for a visit at your place.</h4>
		<div class="form-horizontal">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form_gray" name="qf_3[]" >
			</div>
			</div>
		<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label">Time</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form_gray" name="qf_3[]" >
			</div>
		</div>
		</div>
		</div>
		<div class="col-md-12 hide hdshw_qf1">

			<h4>For interior detailing (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Seat cover removal and installation"><span>&nbsp;</span>Seat cover removal and installation</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Interior vacuum cleaning"><span>&nbsp;</span>Interior vacuum cleaning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Leather conditioning"><span>&nbsp;</span>Leather conditioning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Sidings / dash cleaning (4 doors and 1 dashboard)"><span>&nbsp;</span>Sidings / dash cleaning (4 doors and 1 dashboard)</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Leather"><span>&nbsp;</span>Leather cleaning and conditioning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Upholstery seat cleaning"><span>&nbsp;</span>Upholstery seat cleaning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Carpet shampoo"><span>&nbsp;</span>Carpet shampoo</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Headliner cleaning – cloth"><span>&nbsp;</span>Headliner cleaning – cloth</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Headliner cleaning – vinyl"><span>&nbsp;</span>Headliner cleaning – vinyl</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_4[]" value="Complete interior detailing"><span>&nbsp;</span>Complete interior detailing</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf2">

			<h4>For exterior detailing (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Exterior detailing"><span>&nbsp;</span>Exterior detailing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Optiguard new car paint protection"><span>&nbsp;</span>Optiguard new car paint protection</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="New car paint protection"><span>&nbsp;</span>New car paint protection</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Wash and wax"><span>&nbsp;</span>Wash and wax</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Wash and double wax"><span>&nbsp;</span>Wash and double wax</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Wash and seal"><span>&nbsp;</span>Wash and seal</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Asphalt removal with premium car wash"><span>&nbsp;</span>Asphalt removal with premium car wash</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Light paint claying"><span>&nbsp;</span>Light paint claying</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Heavy paint claying"><span>&nbsp;</span>Heavy paint claying</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_5[]" value="Color sanding – per panel"><span>&nbsp;</span>Color sanding – per panel</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf3">

			<h4>For exterior glass polishing (please tick one):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_6[]" value="Complete glass polishing"><span>&nbsp;</span>Complete glass polishing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_6[]" value="Windshield glass polishing"><span>&nbsp;</span>Windshield glass polishing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_6[]" value="Front and rear glass polishing"><span>&nbsp;</span>Front and rear glass polishing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_6[]" value="Glass etching of plate number"><span>&nbsp;</span>Glass etching of plate number</label>


					</div>
				</div>
	 	 </div>

	 	  <div class="col-md-12 hide hdshw_qf4">

			<h4>For preventive maintenance (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Oil changes"><span>&nbsp;</span>Oil changes</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Batteries"><span>&nbsp;</span>Batteries</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Air conditioning"><span>&nbsp;</span>Air conditioning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Filter replacement"><span>&nbsp;</span>Filter replacement</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Spring maintenance"><span>&nbsp;</span>Spring maintenance</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Fluid exchange"><span>&nbsp;</span>Fluid exchange</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Fuel system cleaning"><span>&nbsp;</span>Fuel system cleaning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Starting and charging"><span>&nbsp;</span>Starting and charging</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_7[]" value="Wiper blades and headlights"><span>&nbsp;</span>Wiper blades and headlights</label>

					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12 hide hdshw_qf5">

			<h4>For tire services (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_8[]" value="Alignment"><span>&nbsp;</span>Alignment</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_8[]" value="Tire rotation"><span>&nbsp;</span>Tire rotation</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_8[]" value="Flat tire repair"><span>&nbsp;</span>Flat tire repairhing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_8[]" value="Tire balancing"><span>&nbsp;</span>Tire balancing</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_8[]" value="Tire pressure monitoring"><span>&nbsp;</span>Tire pressure monitoring</label>


					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf6">

			<h4>For service repairs (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_9[]" value="Heating and cooling"><span>&nbsp;</span>Heating and cooling</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_9[]" value="Belts and hoses"><span>&nbsp;</span>Belts and hoses</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_9[]" value="Brakes"><span>&nbsp;</span>Brakes</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_9[]" value="Diagnostics and system evaluation"><span>&nbsp;</span>Diagnostics and system evaluation</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_9[]" value="Steering and suspension"><span>&nbsp;</span>Steering and suspension</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_9[]" value="Clutch installation services"><span>&nbsp;</span>Clutch installation services</label>


					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12 hide hdshw_qf7">

			<h4>For performance and aftermarket – installation only (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_10[]" value="Performance exhaust service"><span>&nbsp;</span>Performance exhaust service</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_10[]" value="Car audio installation"><span>&nbsp;</span>Car audio installation</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_10[]" value="Performance suspension and ride control"><span>&nbsp;</span>Performance suspension and ride control</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_10[]" value="Electronics"><span>&nbsp;</span>Electronics</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_10[]" value="Performance tuning services"><span>&nbsp;</span>Performance tuning services</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf8">

			<h4>For other services (please tick all that apply):</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_11[]" value="Wheel cleaning – regular alloy"><span>&nbsp;</span>Wheel cleaning – regular alloy</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_11[]" value="Wheel cleaning – wire or chrome"><span>&nbsp;</span>Wheel cleaning – wire or chrome</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_11[]" value="Degriming"><span>&nbsp;</span>Degriming</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_11[]" value="Plastic bumper and molding reconditioning"><span>&nbsp;</span>Plastic bumper and molding reconditioning</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_11[]" value="Convertible top cleaning"><span>&nbsp;</span>Convertible top cleaning</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf9">
		 	 	<h5>For home service, please provide your complete address</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_12[]"></textarea>
					</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Landmark</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_13[]"></textarea>
					</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Additional instructions:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_14[]"></textarea>
					</div>
		 	 	</div>

	 	 	 	 <div style="clear:both"></div>
	 	 	 	 	<div class="buttongroup">

			<div class="btn-group" style="float:right;">
			<input type = "hidden" name = "service_type" value = "<?php echo $_smarty_tpl->tpl_vars['service_type']->value;?>
" />
	    	<input type = "hidden" name = "userid" value = "<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
					<button name="save" class="btn btn-primary">CONTINUE</button>
			</div>

		 		</div>
		 	 	</div>

		 	 </div>
		 	</div>
	 	 </div>

	 	 	  </div> <br/>

			</form>
	  </div>
  </div>

<?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/footer_webview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
