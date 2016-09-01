{include file='./global_tpl/header_front.tpl'}
	   <div class="dj_register_header">	
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="{$base_url}assets/images/list_of_services.png" class="dj_header_logo">
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
{if $msg['status'] eq 'pw_mismatch'}
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Your password did not match</div>
{elseif $msg['status'] eq 'email_not_valid'}
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Your email is not valid</div>
{elseif $msg['status'] eq 'success'}
		<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please check your email to activate your account!</div>
<script>
	setTimeout(function () {
   window.location.href= '{$base_url}'; // the redirect goes here

},3000);
	</script>
{elseif $msg['status'] eq 'email_exist'}
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Email is already Exist</div>
{/if}
    <div class="container">
  <div class="row">
  <div class="col-md-12">
         <h3 style="text-align:center">SERVICE PROVIDER REGISTRATION</h3>

  	<h4>Choose your Service</h4>
  	<input type="hidden" name="intServiceProvider_servicesID" value="0">
      {foreach $Service_type as $row}
            <div class="col-md-3">

      <label class="col-md-12"><input type="radio" name="intServiceProvider_servicesID" value="{$row.intServiceProvider_servicesID}"><span>&nbsp;</span>{$row.strName}</label>
      </div>
      {/foreach}
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
							<input type="text" class="form-control form_gray" placeholder="E-mail" name="strEmail" value="{$strEmail}">
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
							<input type="text" class="form-control form_gray" placeholder="Service Name" name="strServiceName" value="{$strServiceName}">
						</div>
						
						
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Address" name="strAddress" value="{$strAddress}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray" placeholder="Contact Number" name="strContacts" value="{$strContacts}" id="Contacts">
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

{include file='./global_tpl/footer_front.tpl'}