{include file='../global_tpl/headerstyle.tpl'}

	   <div class="DjLaundryService">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>House Cleaning</h1>
        </div>
       </div>
       </div>
      </div>
    </div>

   <div class="container">
   <form method="POST" action="{$base_url}Services_webview/SucessSent">

   <div class="qf-1">
	  <div class="row">
	  <div class="col-md-8 col-md-offset-2">
	    <div class="col-md-12">

			<h4>What type of cleaning service do you need? (Please tick one.)</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_1[]" onClick="ShowHide('qf1')" class="qf1" value="House cleaning"><span>&nbsp;</span>House cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_1[]" onClick="ShowHide('qf2')"  class="qf2"  value="Upholstery cleaning"><span>&nbsp;</span>Upholstery cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_1[]" onClick="ShowHide('qf3')" class="qf3"  value="Carpet cleaning" ><span>&nbsp;</span>Carpet cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_1[]" onClick="ShowHide('qf4')" class="qf4" value="Swimming pool"><span>&nbsp;</span>Swimming pool cleaning / maintenance</label>
						 <label class="col-xs-12"><input type="radio" name="qf_1[]" onClick="ShowHide('qf5')" class="qf5"   value="High-rise building cleaning"><span>&nbsp;</span>High-rise building cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_1[]" onClick="ShowHide('qf6')" class="qf6" value="Event party clean-up"><span>&nbsp;</span>Event party clean-up</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf1">
			<h4>1. For house cleaning: how often do you need cleaning?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_2[]" value="One-time cleaning "><span>&nbsp;</span>One-time cleaning </label>
						 <label class="col-xs-12"><input type="radio" name="qf_2[]"  class="qf1"  value="Everyday"><span>&nbsp;</span>Everyday</label>
						 <label class="col-xs-12"><input type="radio" name="qf_2[]"  class="qf2"  value="Twice a week " ><span>&nbsp;</span>Twice a week </label>
						 <label class="col-xs-12"><input type="radio" name="qf_2[]"  class="qf3" value="Three times a week"><span>&nbsp;</span>Three times a week</label>
						 <label class="col-xs-12"><input type="radio" name="qf_2[]"  class="qf3" value="Once every 2 weeks"><span>&nbsp;</span>Once every 2 weeks</label>
						 <label class="col-xs-12"><input type="radio" name="qf_2[]"  class="qf3" value="Once a month"><span>&nbsp;</span>Once a month</label>
						 <label class="col-xs-3"><input type="radio" name="qf_2[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 <div class="col-md-12 hide hdshw_qf1">
			<h4>2. For house cleaning: what type of property is it?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_3[]" value="Bungalow"><span>&nbsp;</span>Bungalow </label>
						 <label class="col-xs-12"><input type="radio" name="qf_3[]"  class="qf1"  value="Two-storey / multilevel"><span>&nbsp;</span>Two-storey / multilevel</label>
						 <label class="col-xs-12"><input type="radio" name="qf_3[]"  class="qf2"  value="Townhouse" ><span>&nbsp;</span>Townhouse </label>
						 <label class="col-xs-12"><input type="radio" name="qf_3[]"  class="qf3" value="Apartment / condo"><span>&nbsp;</span>Apartment / condo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_3[]"  class="qf3" value="Factory / industrial"><span>&nbsp;</span>Factory / industrial</label>
						 <label class="col-xs-12"><input type="radio" name="qf_3[]"  class="qf3" value="Once a month"><span>&nbsp;</span>Once a month</label>
						 <label class="col-xs-3"><input type="radio" name="qf_3[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_3[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf1">
		 	 	<h5>3. Please provide your complete address:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_13[]"></textarea>
					</div>
		 	 	</div>
<!--- For Upholstery-->
 <div class="col-md-12 hide hdshw_qf2">
			<h4>1. For upholstery cleaning: what items need cleaning?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_4[]" value="Sofa "><span>&nbsp;</span>Sofa </label>
						 <label class="col-xs-12"><input type="radio" name="qf_4[]"  class="qf1"  value="Curtain"><span>&nbsp;</span>Curtain</label>
						 <label class="col-xs-12"><input type="radio" name="qf_4[]"  class="qf2"  value="Mattress" ><span>&nbsp;</span>Mattress </label>
						 <label class="col-xs-12"><input type="radio" name="qf_4[]"  class="qf3" value="Cushion covers"><span>&nbsp;</span>Cushion covers</label>
						 <label class="col-xs-12"><input type="radio" name="qf_4[]"  class="qf3" value="Chairs / stairs"><span>&nbsp;</span>Chairs / stairs</label>
						 <label class="col-xs-3"><input type="radio" name="qf_4[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf2">
			<h4>2. For upholstery cleaning: what type of service do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_5[]" value="Shampoo"><span>&nbsp;</span>Shampoo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_5[]"  class="qf1"  value="Dry cleaning"><span>&nbsp;</span>Dry cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_5[]"  class="qf2"  value="Sanitizing / deodorizing" ><span>&nbsp;</span>Sanitizing / deodorizing</label>
						 <label class="col-xs-3"><input type="radio" name="qf_5[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf2">
			<h4>3. For upholstery cleaning: what type of service do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_6[]" value="Shampoo"><span>&nbsp;</span>Shampoo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_6[]"  class="qf1"  value="Dry cleaning"><span>&nbsp;</span>Dry cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_6[]"  class="qf2"  value="Sanitizing / deodorizing" ><span>&nbsp;</span>Sanitizing / deodorizing</label>
						 <label class="col-xs-3"><input type="radio" name="qf_6[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
<!--- end of For Upholstery-->

<!--- For Carpet-->
 <div class="col-md-12 hide hdshw_qf3">
			<h4>1. For carpet cleaning: what type of service do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_7[]" value="Shampoo"><span>&nbsp;</span>Shampoo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_7[]"  class="qf1"  value="Dry cleaning"><span>&nbsp;</span>Dry cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_7[]"  class="qf2"  value="Sanitizing / deodorizing" ><span>&nbsp;</span>Sanitizing / deodorizing</label>
						 <label class="col-xs-3"><input type="radio" name="qf_7[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12 hide hdshw_qf3">
			<h4>2. For carpet cleaning: in which type of property is the carpet installed?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_8[]" value="Terrace"><span>&nbsp;</span>Terrace</label>
						 <label class="col-xs-12"><input type="radio" name="qf_8[]"  class="qf1"  value="Semi-detached"><span>&nbsp;</span>Semi-detached</label>
						 <label class="col-xs-12"><input type="radio" name="qf_8[]"  class="qf2"  value="Bungalow" ><span>&nbsp;</span>Bungalow</label>
						 <label class="col-xs-12"><input type="radio" name="qf_8[]"  class="qf2"  value="Apartment / condo" ><span>&nbsp;</span>Apartment / condo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_8[]"  class="qf2"  value="Commercial lot / office building" ><span>&nbsp;</span>Commercial lot / office building</label>
						 <label class="col-xs-12"><input type="radio" name="qf_8[]"  class="qf2"  value="Factory / industrial lot" ><span>&nbsp;</span>Factory / industrial lot</label>
						 <label class="col-xs-3"><input type="radio" name="qf_8[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12 hide hdshw_qf3">
			<h4>3. For carpet cleaning: what type of carpet do you have?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_9[]" value="Rug / movable carpet"><span>&nbsp;</span>Rug / movable carpet</label>
						 <label class="col-xs-12"><input type="radio" name="qf_9[]"  class="qf1"  value="Floor carpet"><span>&nbsp;</span>Floor carpet</label>
						 <label class="col-xs-12"><input type="radio" name="qf_9[]"  class="qf2"  value="Carpet on stairs" ><span>&nbsp;</span>Carpet on stairs</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf3">
		 	 	<h5>4. For carpet cleaning: what is the estimated size of the carpet (in square feet)?</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_10[]"></textarea>
					</div>
		 	 	</div>
		 	 	 <div class="col-md-12 hide hdshw_qf3">
			<h4>5. Does the upholstery and / or carpet have stains that need cleaning?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_11[]" value="None"><span>&nbsp;</span>None</label>
						 <label class="col-xs-12"><input type="radio" name="qf_11[]"  class="qf1"  value="Food stains"><span>&nbsp;</span>Food stains</label>
						 <label class="col-xs-12"><input type="radio" name="qf_11[]"  class="qf2"  value="Pet stains" ><span>&nbsp;</span>Pet stains</label>
						 <label class="col-xs-12"><input type="radio" name="qf_11[]"  class="qf2"  value="Grease / oil stains" ><span>&nbsp;</span>Grease / oil stains</label>
						 <label class="col-xs-3"><input type="radio" name="qf_11[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<label class="col-lg-4">Specify</label>
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_11[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
<!--- end For Carpet-->

<!--- For Pool Maintenance-->
 <div class="col-md-12 hide hdshw_qf4">
			<h4>1. For pool maintenance: what type of pool do you have? </h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_12[]" value="Inground"><span>&nbsp;</span>Inground</label>
						 <label class="col-xs-12"><input type="radio" name="qf_12[]"  class="qf1"  value="Above ground"><span>&nbsp;</span>Above ground</label>
						 <label class="col-xs-3"><input type="radio" name="qf_12[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_12[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12 hide hdshw_qf4">
			<h4>2. For pool maintenance: what type of materials are used for the pool? </h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_13[]" value="Concrete"><span>&nbsp;</span>Concrete</label>
						 <label class="col-xs-12"><input type="radio" name="qf_13[]"  class="qf1"  value="Tile"><span>&nbsp;</span>Tile</label>
						 <label class="col-xs-12"><input type="radio" name="qf_13[]"  class="qf1"  value="Fiber glass"><span>&nbsp;</span>Fiber glass</label>
						 <label class="col-xs-12"><input type="radio" name="qf_13[]"  class="qf1"  value="Steel"><span>&nbsp;</span>Steel</label>
						 <label class="col-xs-12"><input type="radio" name="qf_13[]"  class="qf1"  value="Vinyl"><span>&nbsp;</span>Vinyl</label>
						 <label class="col-xs-3"><input type="radio" name="qf_13[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_13[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
		<div class="col-md-12 hide hdshw_qf4">
			<h4>3. For pool maintenance: what is the estimated size of the pool (in square feet)?</h4>
			<div class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Width</label>
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_14[]" placeholder="Width">
					</div>
				</div>
				<div class="form-group">
					<label  class="col-sm-2 control-label">Height</label>
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_14[]" placeholder="Height">
					</div>
				</div>
				<div class="form-group">
				<label class="col-sm-2 control-label">Dept</label>
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_14[]" placeholder="Depth">
					</div>
				</div>
			</div>
		</div>
			  <div class="col-md-12 hide hdshw_qf4">
			<h4>4. What type of water is used in the pool?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_15[]" value="Chlorine"><span>&nbsp;</span>Chlorine</label>
						 <label class="col-xs-12"><input type="radio" name="qf_15[]"  class="qf1"  value="Salt water"><span>&nbsp;</span>Salt water</label>
						 <label class="col-xs-3"><input type="radio" name="qf_15[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_15[]">
						</div>
					</div>
					</div>
				</div>
	 	 </div>
	 	   <div class="col-md-12 hide hdshw_qf4">
			<h4>5. Are there pool accessories that need cleaning? (Please tick all that apply.)	</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_16[]" value="Lighting"><span>&nbsp;</span>Lighting</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Wooden deck"><span>&nbsp;</span>Wooden deck</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Pool drain cover"><span>&nbsp;</span>Pool drain cover</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Cleaning system"><span>&nbsp;</span>Cleaning system</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Jacuzzi system"><span>&nbsp;</span>Jacuzzi system</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Spa system"><span>&nbsp;</span>Spa system</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Diving board"><span>&nbsp;</span>Diving board</label>
						 <label class="col-xs-12"><input type="radio" name="qf_16[]"  class="qf1"  value="Slide"><span>&nbsp;</span>Slide</label>
					</div>
				</div>
	 	 </div>
	 	   <div class="col-md-12 hide hdshw_qf4">
			<h4>6. How often do you want the pool cleaned?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_17[]" value="One-time cleaning"><span>&nbsp;</span>One-time cleaning</label>
						 <label class="col-xs-12"><input type="radio" name="qf_17[]"  class="qf1"  value="Once a week"><span>&nbsp;</span>Once a week</label>
						 <label class="col-xs-12"><input type="radio" name="qf_17[]"  class="qf1"  value="Once a month"><span>&nbsp;</span>Once a month</label>
						  <label class="col-xs-3"><input type="radio" name="qf_17[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_17[]">
						</div>
					</div>

					</div>
				</div>
	 	 </div>

<!--- End For Pool Maintenance-->
<!--- For High rise building-->
<div class="col-md-12 hide hdshw_qf5">
			<h4>1. For high-rise cleaning: what type of property is it?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_18[]" value="Bungalow"><span>&nbsp;</span>Bungalow</label>
						 <label class="col-xs-12"><input type="radio" name="qf_18[]"  class="qf1"  value="Two-storey / multilevel"><span>&nbsp;</span>Two-storey / multilevel</label>
						 <label class="col-xs-12"><input type="radio" name="qf_18[]"  class="qf1"  value="Townhouse"><span>&nbsp;</span>Townhouse</label>
						 <label class="col-xs-12"><input type="radio" name="qf_18[]"  class="qf1"  value="Apartment / condo"><span>&nbsp;</span>Apartment / condo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_18[]"  class="qf1"  value="Commercial / office building"><span>&nbsp;</span>Commercial / office building</label>
						 <label class="col-xs-12"><input type="radio" name="qf_18[]"  class="qf1"  value="Factory / industrial"><span>&nbsp;</span>Factory / industrial</label>
						  <label class="col-xs-3"><input type="radio" name="qf_18[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_18[]">
						</div>
					</div>

					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12 hide hdshw_qf5">
			<h4>2. Please indicate the floor(s) of the property that need cleaning?</h4>
			<div class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_2[]">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 hide hdshw_qf5">
			<h4>3. Which parts need cleaning?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_19[]" value="External facade"><span>&nbsp;</span>External facade</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_19[]"  class="qf1"  value="External glass"><span>&nbsp;</span>External glass</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_19[]"  class="qf1"  value="Windows"><span>&nbsp;</span>Windows</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_19[]"  class="qf1"  value="Signboard"><span>&nbsp;</span>Signboard</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_19[]"  class="qf1"  value="Roof / dome"><span>&nbsp;</span>Roof / dome</label>
						  <label class="col-xs-3"><input type="checkbox" name="qf_19[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_19[]">
						</div>
					</div>

					</div>
				</div>
	 	 </div>


<!--- end High rise building-->

<!---  Event party-->
		<div class="col-md-12 hide hdshw_qf6">
			<h4>1. For event cleanup, what type of property is the venue?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_20[]" value="Terrace"><span>&nbsp;</span>Terrace</label>
						 <label class="col-xs-12"><input type="radio" name="qf_20[]"  class="qf1"  value="Semi-detached"><span>&nbsp;</span>Semi-detached</label>
						 <label class="col-xs-12"><input type="radio" name="qf_20[]"  class="qf1"  value="Bungalow"><span>&nbsp;</span>Bungalow</label>
						 <label class="col-xs-12"><input type="radio" name="qf_20[]"  class="qf1"  value="Apartment / condo"><span>&nbsp;</span>Apartment / condo</label>
						 <label class="col-xs-12"><input type="radio" name="qf_20[]"  class="qf1"  value="Commercial lot / office building"><span>&nbsp;</span>Commercial lot / office building</label>
						 <label class="col-xs-12"><input type="radio" name="qf_20[]"  class="qf1"  value="Factory / industrial lot"><span>&nbsp;</span>Factory / industrial lot</label>
						  <label class="col-xs-3"><input type="radio" name="qf_20[]"  class="qf3" value="Other (specify)"><span>&nbsp;</span>Other</label>
					<div class="col-lg-6 choose_bid2">
						<div class="col-lg-8">
							<input type="text" class="form-control form_gray"  name="qf_20[]">
						</div>
					</div>

					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12 hide hdshw_qf6">
			<h4>2. What is the estimated size of the property (in square feet)?</h4>
			<div class="form-horizontal">
				<div class="form-group">
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_21[]">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12 hide hdshw_qf4">
			<h4>3. Estimate number of people who will attend the event:</h4>
			<div class="form-horizontal">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">FROM:</label>
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_22[]" placeholder="e.g. 100">
					</div>
				</div>
				<div class="form-group">
					<label  class="col-sm-2 control-label">TO:</label>
					<div class="col-sm-8">
					<input type="text" class="form-control form_gray" name="qf_22[]" placeholder="e.g. 150">
					</div>
				</div>
			</div>
		</div>

<!---  end Event party-->






	 	 <div class="col-md-12">

			<h4>How many hours do you need cleaners?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_23[]" value="House cleaning"><span>&nbsp;</span>2 hours</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_23[]" onClick="ShowHide('qf1')" class="qf1"  value="Upholstery cleaning"><span>&nbsp;</span>4 hours</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_23[]" onClick="ShowHide('qf2')" class="qf2"  value="Carpet cleaning" ><span>&nbsp;</span>6 hours</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_23[]" onClick="ShowHide('qf3')" class="qf3" value="Swimming pool"><span>&nbsp;</span>8 hours</label>

					</div>
				</div>
	 	 </div>
	 	  <div class="col-md-12">
			<h4>How may cleaners do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_24[]" value="House cleaning"><span>&nbsp;</span>1</label>
						 <label class="col-xs-12"><input type="radio" name="qf_24[]" onClick="ShowHide('qf1')" class="qf1"  value="1"><span>&nbsp;</span>2</label>
						 <label class="col-xs-12"><input type="radio" name="qf_24[]" onClick="ShowHide('qf2')" class="qf2"  value="2" ><span>&nbsp;</span>3</label>
						 <label class="col-xs-12"><input type="radio" name="qf_24[]" onClick="ShowHide('qf3')" class="qf3" value="3"><span>&nbsp;</span>4</label>
						 <label class="col-xs-12"><input type="radio" name="qf_24[]" onClick="ShowHide('qf3')" class="qf3" value="4"><span>&nbsp;</span>5</label>
					</div>
				</div>
	 	 </div>
	 	 <div class="col-md-12">

			<h4>Do you need cleaning supplies and materials?</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						 <label class="col-xs-12"><input type="radio" name="qf_25[]" onClick="ShowHide('qf1')" class="qf1"  value="1"><span>&nbsp;</span>YES</label>
						 <label class="col-xs-12"><input type="radio" name="qf_25[]" onClick="ShowHide('qf1')" class="qf1"  value="1"><span>&nbsp;</span>NO</label>


					</div>
				</div>
	 	 </div>


		 	 	<div class="col-md-12">
		 	 	<h5>Please provide your complete address:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_26[]"></textarea>
					</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Additional instructions:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_27[]"></textarea>
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
	 	 	 	 	<div class="buttongroup">

			<div class="btn-group" style="float:right;">
			<input type="hidden" name="service_type" value="{$service_type}">
					<button name="save" class="btn btn-primary">CONTINUE</button>
			</div>
			<input type = "hidden" name = "service_type" value = "{$service_type}" />
	    	<input type = "hidden" name = "userid" value = "{$userid}" />
		 		</div>
		 	 	</div>

		 	 </div>
		 	</div>
	 	 </div>

	 	 	  </div> <br/>

			</form>
	  </div>
  </div>

{include file='../global_tpl/footer_webview.tpl'}
