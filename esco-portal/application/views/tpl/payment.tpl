{include file='./global_tpl/header_front.tpl'}
	   <div class="dj_payment_header">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="{$base_url}assets/images/payment.png" class="dj_header_logo">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>PAYMENT</h1>
        </div>
       </div>
       </div>
      </div>
    </div>

   <div class="container">
	  <div class="row">
	    <div class="col-md-12">

					<div class="col-md-6 ">
						<div class="row">
						<div class="col-md-8">
						<div class="dj_login2">
										{if $is_loggedin == ''}

				<form action="{$base_url}payment" method="POST">
				<h3>Log in</h3>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="strUser">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="strLogInPassword">
							<input type="hidden" name="strRememberMe" value="0">
						<input type="checkbox" value="1" name="strRememberMe"><span>&nbsp;</span>Remember me?</label>	
					</div>
				<input type="submit" class="btn btn-primary btn-block" id="dj_btn_login" value="LOG IN">
				<button type="button" class="btn btn-fb btn-block" id="dj_btn_login">Log in with Facebook</button><br/>
				<span>Not yet a member?</span>	
				<button type="button" class="btn btn-reg btn-block" id="dj_btn_login">REGISTER</button>			

				</form>
				{else}
				<h3>Welcome {$is_loggedin['strLastName']} , {$is_loggedin['strFirstName']}</h3>
				<a href="{$base_url}?logout">Logout?</a>
			{/if}
			</div>
			</div>
						</div>
						
					</div>
					<div class="col-md-6 brd-div-left">
						<h4>Payment Options</h4>

					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4 nopadding" >
      							<img src="{$base_url}assets/images/po_cash.png" class="fullwidth">
      							<div class="payment_option">
      							<label>CASH</label>
      							<div class="fullwidth"><input type="radio" value="" name="payment_options"><span>&nbsp;</span></div>
      							</div>
							</div>
							<div class="col-md-4 nopadding" >
      							<img src="{$base_url}assets/images/po_credit_card.png" class="fullwidth">
      							  <div class="payment_option">
      							<label>CREDIT CARD</label>
      							<div class="fullwidth"><input type="radio" value="" name="payment_options"><span>&nbsp;</span></div>

      							</div>
							</div>
							<div class="col-md-4 nopadding" >
      							<img src="{$base_url}assets/images/po_others.png" class="fullwidth">
      							   <div class="payment_option">
      							<label>OTHER</label>
       							<div class="fullwidth"><input type="radio" value="" name="payment_options"><span>&nbsp;</span></div>
      							</div>
							</div>
						</div>
					</div>
						<h4>Payment Details</h4>
						<p>Fill in the required fields</p>
							<div class="row">

								<div class="col-md-6">
										 <div class="form-group">
										    <label for="exampleInputEmail1">Billing Country/Region</label>
										    <select class="form-control form_gray" id="exampleInputEmail1" placeholder="Email">
										    	<option>Philippines</option>
										    </select>
										  </div>
										  <div class="form-group">
										    <label for="exampleInputPassword1">Payment Method</label>
										    <select class="form-control form_gray" id="exampleInputPassword1" placeholder="Password">
										    	<option>VISA</option>
										    </select>
										  </div>
								</div>
								<div class="col-md-6">
 										 <div class="form-group">
										    <label for="exampleInputPassword1">Card Details</label>
										    <input type="password" class="form-control form_gray" id="exampleInputPassword1" placeholder="Name">
										  </div>
										  <div class="form-group">
										    <input type="password" class="form-control form_gray" id="exampleInputPassword1" placeholder="Credit Card No.">
										  </div>
										  <div class="form-group">
										    <label for="exampleInputPassword1">Expiry Date</label>
										    <div class="col-md-12 nopadding">
											    <div class="col-md-6 nopadding">
											    <select class="form-control form_gray" id="exampleInputPassword1" placeholder="Month">
											    	<option>Month</option>
											    </select>
											    </div>
											     <div class="col-md-6 nopadding">
											    <select class="form-control form_gray" id="exampleInputPassword1" placeholder="Password">
											    	<option>Year</option>
											    </select>
											    </div>
										    </div>
										     <div class="col-md-6 nopadding">
											    <input type="password" class="form-control form_gray" id="exampleInputPassword1" placeholder="CW">
											  </div>
											  <div class="col-md-12">
											  <div class="text-right">
											  	<button class="btn btn-primary">CONFIRM</button>
											  </div>
											  </div>
										  </div>
								</div>

							</div>
					</div>
	    </div>
	  </div> 
  </div>

{include file='./global_tpl/footer_front.tpl'}