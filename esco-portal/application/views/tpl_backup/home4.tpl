{include file='./global_tpl/header_front.tpl'}
 <div class="fluid_container">
        <div class="camera_wrap camera_emboss" id="camera_wrap_3">
            <div data-thumb="{$base_url}assets/images/1.png" data-src="{$base_url}assets/images/header/dj_about.png" data-time="1500" data-trasPeriod="4000" data-link="http://www.google.com/" data-target="_blank">
                <div class="camera_caption fadeFromBottom">
                    Curabitur nec nisl ut mauris condimentum efficitur
                </div>
            </div>
            <div data-thumb="{$base_url}assets/images/2.png" data-src="{$base_url}assets/images/header/dj_register.png">
                <div style="position:absolute; top:5%; left:5%; background:#000; color:#fff; padding:5px; width:25%" class="fadeIn camera_effected">Donec varius felis id leo finibus malesuada</div>
            </div>


        </div><!-- #camera_wrap_3 -->
	<div class="BidNow hide">
		<a href="{$base_url}bidding">
		<div class="bidleft">
		<img src="{$base_url}assets/images/bidlogo.png" class="img-responsive">
		</div>
		<div class="bidright"><h1>BID NOW.</h1>
			<p>This is a template for a simple marketing </p>
		</div>
	</div>
	      </a>
    </div>

        <div style="clear:both; display:block; height:100px;margin-bottom:0;padding:0;"></div>

<div class="container">
<div class="row">
{if $StatusAlert != ''}
	<div class="alert alert-{$AlertType}"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{$StatusAlert}</div>

{/if}
<style>
	.wj_widget_desc h4{
		font-size:17px;
	}
		.wj_widget_desc p > b{
			font-size:13.5px;
		}

</style>
         <div class="col-lg-12 col-md-12" >
         <div class="row">
         <h2>PREMIUM PROVIDERS</h2>
          <div style="width:100%;min-height:25px"></div>
          <div class="col-xs-1" style="padding-top:5%" >
	            <a data-slide="prev" href="#myCarousel" > <img src="{$base_url}assets/plugins/liquid_carousel/images/left1.png" class="img-responsive"></a>
          </div>
		<div class="col-xs-10">
    <div class="carousel slide" id="myCarousel">

        <div class="carousel-inner" style="width:100%;">
          <div class="item active">
           <div class="col-xs-3 fprov">
				<div class="thumbnail2">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/nailaholics-logo.jpg" class="img-responsive"></a>
				</div>
				<div class="caption">
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h4>NAILAHOLICS</h4>

				</div>
				<div class="hoverView">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/magnify.png" class="img-responsive"></a>
				</div>
			</div>
			<div class="col-xs-3 fprov">

				<div class="thumbnail2">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/CNY-Article-20120824-DavidsSalon.jpg" class="img-responsive"></a>
				</div>
				<div class="caption">
			<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h4>DAVID SALON</h4>
				</div>
				<div class="hoverView">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/magnify.png" class="img-responsive"></a>
				</div>
			</div>
			<div class="col-xs-3 fprov">
				<div class="thumbnail2">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/uber.jpg" class="img-responsive"></a>
				</div>
				<div class="caption">
				<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h6 class="glyphicon glyphicon-star" aria-hidden="true"></h6>
					<h4>UBER</h4>
				</div>
				<div class="hoverView">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/magnify.png" class="img-responsive"></a>
				</div>
			</div>
      <div class="col-xs-3">
        <div class="thumbnail2">
          <a href="#"><img src="http://placehold.it/360x240" class="img-responsive"></a>
        </div>
        <div class="caption">
          <h4>Praesent commodo</h4>
          <p>Nullam Condimentum Nibh Etiam Sem</p>
        </div>
      </div>
           </div><!-- /Slide1 -->
		   <div class="item">
           <div class="col-xs-3 fprov">
				<div class="thumbnail2">
					<a href="#"><img src="http://placehold.it/360x240" class="img-responsive"></a>
				</div>
				<div class="caption">
					<h4>Praesent commodo</h4>
					<p>Nullam Condimentum Nibh Etiam Sem</p>
				</div>
				<div class="hoverView">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/magnify.png" class="img-responsive"></a>
				</div>
			</div>
			<div class="col-xs-3 fprov">
				<div class="thumbnail2">
					<a href="#"><img src="http://placehold.it/360x240" class="img-responsive"></a>
				</div>
				<div class="caption">
					<h4>Praesent commodo</h4>
					<p>Nullam Condimentum Nibh Etiam Sem</p>
				</div>
				<div class="hoverView">
					<a href="#"><img src="{$base_url}assets/plugins/liquid_carousel/images/magnify.png" class="img-responsive"></a>
				</div>
			</div>
			<div class="col-xs-3">
				<div class="thumbnail2">
					<a href="#"><img src="http://placehold.it/360x240" class="img-responsive"></a>
				</div>
				<div class="caption">
					<h4>Praesent commodo</h4>
					<p>Nullam Condimentum Nibh Etiam Sem</p>
				</div>
			</div>
           </div><!-- /Slide1 -->
        </div>
        </div>


    </div><!-- /#myCarousel -->
      <div class="col-xs-1" style="padding-top:5%">
              <a data-slide="next" href="#myCarousel"> <img src="{$base_url}assets/plugins/liquid_carousel/images/right1.png" class="img-responsive"></a>
      </div>
		</div>
   </div>
</div>
        <div class="row">
        <div class="col-md-12">
        <div id="spacing"></div>
        </div>
        </div>
  <div class="row">

   <div class="col-lg-4 col-md-4 nopadding nopaddTop">
               <div class="col-lg-6 col-md-6 nopadding expandhover">
		            <div class="thumbnail">
						<img src="{$base_url}assets/images/1.png" class="img-responsive">
						<span class="wj_widget_desc">
							<h4><b>LAUNDRY CONCERNS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
			        </div>
           		 </div>
           		 <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/2.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>PET </br>CONCERNS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/3.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>PHOTO</br> & VIDEO</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/4.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>ELECTRICAL REPAIR</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            </div>
             <div class="col-lg-4 col-md-4 nopadding nopaddTop">
               <div class="col-lg-6 col-md-6 nopadding expandhover">
		            <div class="thumbnail">
						<img src="{$base_url}assets/images/1.png" class="img-responsive">
						<span class="wj_widget_desc">
							<h4><b>LAUNDRY CONCERNS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
			        </div>
           		 </div>
           		 <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/7.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>HOUSEHOLD NEEDS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/6.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>CARS & AUTOMOTIVE</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/5.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>AQUARIUM DESIGNS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-4 nopadding nopaddTop">
               <div class="col-lg-6 col-md-6 nopadding expandhover">
		            <div class="thumbnail">
						<img src="{$base_url}assets/images/1.png" class="img-responsive">
						<span class="wj_widget_desc">
							<h4><b>LAUNDRY CONCERNS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
			        </div>
           		 </div>
           		 <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/7.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>HOUSEHOLD NEEDS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/6.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>CARS & AUTOMOTIVE</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 nopadding expandhover">
                <div class="thumbnail" href="#">
				<img src="{$base_url}assets/images/5.png" class="img-responsive">
				<span class="wj_widget_desc">
							<h4><b>AQUARIUM DESIGNS</b></h4>
							<p><b>Hire a service provider</b></p>
							<a href="#" class="btn btn-primary btn-sm">LEARN MORE</a>
						</span>
                </div>
            </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-12">
        <div id="spacing"></div>
        </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-6">
              <img src="{$base_url}assets/images/dwnload1.jpg" class="img-responsive"></a>
            </div>
            <div class="col-md-6 pull-right">
              <img src="{$base_url}assets/images/download2.jpg" class="img-responsive"></a>
            </div>
          </div>
        </div>
        <div id="spacing"></div>

      </div>
      <script>
function viewTransactions(id){
	data2 = {
					'id' : id
				};

	$.ajax({
			type: "POST",
			url:base_url+"Home/myTransaction",
			data: data2,
				beforeSend: function() {
				},
				success : function (res) {
					$('body').append(res);
				}
			});
}
function closethis(){
	$('#closethis').remove();
}
      </script>
{include file='./global_tpl/footer_front.tpl'}
