{include file='./global_tpl/header_front.tpl'}
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
   {if $stats == 'success'}
   	<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Password sent to your Email</div>
   	{/if}

	<div class="col-md-10 col-sm-offset-4">
		<form method="POST" action="{$base_url}home/forgotPassword" class="form-inline">
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input type="email" class="form-control form_gray" id="exampleInputEmail2" placeholder="jane.doe@example.com" name="strEmail">
  </div>
  <button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>
	</div>
  </div>

{include file='./global_tpl/footer_front.tpl'}