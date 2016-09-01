{include file='./global_tpl/header_front.tpl'}
	   <div class="DjLaundryService">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>Water Refilling Station</h1>
        </div>
       </div>
       </div>
      </div>
    </div>

   <div class="container">
   <form method="POST" action="{$base_url}Services" id="questionForm">
   <div class="qf-1">
	  <div class="row">
	  <div class="col-md-8 col-md-offset-2">
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
	 	 <div style="clear:both"></div>
	 	 	 	 	<div class="buttongroup">

			<div class="btn-group" style="float:right;">
				<a href="#" onClick="questioner('qf-1','qf-2')" class="btn btn-primary">CONTINUE</a>
			</div>
			<div class="btn-group" style="float:left;">
				<a href="{$base_url}bidding" class="btn btn-primary">BACK</a>
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
		 	 			 	 	{if $iflogin == 'no'}

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
					{/if}
			<div style="clear:both"></div>
	 	 	<div class="col-md-10">
				<div class="btn-group" style="float:right;">
				<input type="hidden" name="service_type" value="{$service_type}">

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

{include file='./global_tpl/footer_front.tpl'}
