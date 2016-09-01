{include file='./global_tpl/header_front.tpl'}
<!--	   <div class="dj_register_header">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      		<img src="{$base_url}assets/images/list_of_services.png" class="dj_header_logo">
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

{elseif $msg['status'] eq 'empty_field'}
	<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Please fill out all the field</div>
	<style>
	.validation{
		border:1px solid red;
	}
	</style>

{/if}
    <div class="container">
  <div class="row">
  <div class="col-md-12">
  	<h4>Select All That Apply</h4>
      {foreach $Service_type as $row}
      <div class="col-md-6 col-md-3">
      <label class="col-md-12"><input type="checkbox" name="strService[]" value="{$row.intServiceProvider_servicesID}"><span>&nbsp;</span>{$row.strName}</label>
     	</div>
     {/foreach}
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
							<input type="text" class="form-control form_gray {if $strEmail == ''}validation{/if}" placeholder="E-mail" name="strEmail" value="{$strEmail}">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form_gray {if $strPassword == ''}validation{/if}" placeholder="Password" name="strPassword" value="{$strPassword}" id="strPassword">
						</div>
						<div class="form-group">
							<input type="password" class="form-control form_gray {if $strConfirmPassword == ''}validation{/if}" placeholder="Confirm Password" name="strConfirmPassword" value="{$strConfirmPassword}">
						</div>
						<div class="form-group">
							<select name="strSecQuestion" class="form-control form_gray {if $strSecQuestion == ''}validation{/if}" placeholder="Choose Security Question">
								<option value="">--Select Security Question--</option>
								<option {if $strSecQuestion == "What's your favourite pet's name?"}selected{/if}>What's your favourite pet's name?</option>
								<option {if $strSecQuestion == "What's your favourite movie?"}selected{/if} >What's your favourite movie?</option>
								<option {if $strSecQuestion == "What's your mobile phone number?"}selected{/if}>What's your mobile phone number?</option>
							</select>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray {if $strSecAnswer == ''}validation{/if}" placeholder="Security Answer" name="strSecAnswer" value="{$strSecAnswer}">
						</div>
					</div>
					<div class="col-md-6">
						<h4>PERSONAL DETAILS</h4>
						<div class="form-group" >
								<input type="text" class="form-control form_gray {if $strFirstName == ''}validation{/if}" placeholder="First Name" name="strFirstName" value="{$strFirstName}">
						</div>
						<div class="form-group" >

							<input type="text" class="form-control form_gray {if $strLastName == ''}validation{/if}" placeholder="Last Name" name="strLastName" value="{$strLastName}">
						</div>
						<div class="col-md-4 nopadding" style="padding:0;">

							<select class="form-control form_gray {if $strGender == ''}validation{/if}" name="strGender" style="margin:0;">
								<option {if $strGender == 'Male'} selected {/if}>Male</option>
								<option {if $strGender == 'Female'} selected {/if}>Female</option>
							</select>
						</div>
						<div class="col-md-4 nopadding" style="padding:0;border-left:2px solid #fff;border-right:2px solid #fff;">
							<div class="form-group">
							<select type="text" class="form-control form_gray {if $strMstatus == ''}validation{/if}" name="strMstatus">
								<option {if $strMstatus == 'Single'} selected {/if}>Single</option>
								<option {if $strMstatus == 'Married'} selected {/if}>Married</option>
							</select>
							</div>
						</div>
						<div class="col-md-4 nopadding" style="padding:0;">
							<div class="form-group">
							<input type="number" class="form-control form_gray {if $intAge == ''}validation{/if}" placeholder="Age" name="intAge" value="{$intAge}">
							</div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray {if $strAddress == ''}validation{/if}" placeholder="Address" name="strAddress" value="{$strAddress}">
						</div>
						<div class="form-group">
							<input type="text" class="form-control form_gray {if $strContactNumber == ''}validation{/if}" placeholder="Contact Number" name="strContactNumber" value="{$strContactNumber}">
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
{include file='./global_tpl/footer_front.tpl'}
