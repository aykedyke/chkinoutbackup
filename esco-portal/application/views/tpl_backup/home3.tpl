{include file='./global_tpl/header_front.tpl'}
	   <div class="dj_home_header">
      <div class="container">
	      <div class="dj_home">
	      <a href="bidding">
	      <div class="col-xs-4">
	      <img src="{$base_url}assets/images/bidlogo.png" class="img-responsive">
	      </div>
	      	      <div class="col-xs-8">

	        <h1>BID NOW.</h1>
	        <p>This is a template for a simple marketing </p>
	       </div>      
	       </a>
	       </div>      
      </div>
    </div>
    
<div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-4 nopadding">
               <div class="col-lg-6 col-md-6 nopadding expandhover">
		            <div class="thumbnail">
						<img src="{$base_url}assets/images/1.png" class="img-responsive">
						<span class="wj_widget_desc">
							<h4>LAUNDRY CONCERNS1</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
			        </div>
           		 </div>
           		 <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/2.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4>PET CONCERNS</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/3.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4>PHOTO & VIDEO</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/4.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4>ELECTRICAL REPAIR</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            </div>
             <div class="col-lg-4 col-md-4 nopadding">
               <div class="col-lg-6 col-md-6 nopadding expandhover">
		            <div class="thumbnail">
						<img src="{$base_url}assets/images/1.png" class="img-responsive">
						<span class="wj_widget_desc">
							<h4>LAUNDRY CONCERNS</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
			        </div>
           		 </div>
           		 <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/7.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4>HOUSEHOLD NEEDS</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/6.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4>CARS & AUTOMOTIVE</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/5.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4>AQUARIUM DESIGNS</h4>
							<p>Hire a service provider</p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 thumb">
                	<div class="dj_login">
				<form action="{$base_url}" action="javascript:;" method="POST">
				{if $is_loggedin == ''}
				<h4>Log in</h4>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Username" name="strUser">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" placeholder="Password" name="strLogInPassword">
					</div>
					<div class="form-group">
						<input type="hidden" name="strRememberMe" value="0">
						<input type="checkbox" value="1" name="strRememberMe"><span>&nbsp;</span>Remember me?</label>	
						<label><a href="{$base_url}home/forgotpass">Forgot Password?</a></label>
						</div>
				<input type="submit" class="btn btn-primary btn-block btn-sm" id="dj_btn_login" value="LOG IN">
				<button type="button" class="btn btn-fb btn-block btn-sm" id="dj_btn_login">Log in with Facebook</button>
				</form>
				<span>Not yet a member</span>	
				<a href="register" type="button" class="btn btn-reg btn-block" id="dj_btn_login">REGISTER</a>			
			</div>
			{else}
				<h4>Welcome {$is_loggedin['strLastName']} , {$is_loggedin['strFirstName']}</h4>
				<a href="{$base_url}?logout">Logout?</a>
			{/if}
            </div>

        </div>
      </div>
{include file='./global_tpl/footer_front.tpl'}