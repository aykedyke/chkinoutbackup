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
  </a>

	</div>
    </div>



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
#premprov{
  background:#fafafa;
  width:100%;
  float:left;
}
.filtr-item{
  background:#fff;
}
.panel-thumbnail{
  margin:1.5rem;
  text-align:center;
  background:#f5f5f5;
  margin-bottom:0;
}
.panel-thumbnail a img{
  margin:0 auto;
}
.panel-body{
padding:0;
}
.btn-filter-active{
  background:#f7942a;
  color:#fff;
  border:2px solid #f7942a;

}
.btn-filter{
  border:2px solid #cecece;
  color:#cecece;
}
.panel-star{
  border-right:1px solid #ddd;padding:1rem;
  text-align:center;
}
.panel-expand{

}
.panel-thumbnail{
  max-height:200px;
  overflow: auto;
}
/* Carousel base class */
.carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}
</style>
<div id="spacing"></div>

  <div id="premprov">
  <div class="container">

<div class="row" >
  <div class="col-md-12">
    <div class="form-group" style="text-align:center;">
    <a class="btn btn-filter-active">All</a>
    <a class="btn btn-filter">Laundry</a>
    <a class="btn btn-filter">Pet Concerns</a>
    <a class="btn btn-filter">Automotive</a>
    <a class="btn btn-filter">Photo & Video</a>
  </div>
  </div>

         <div class="col-md-12" >
         <div class="filtr-container">
           <div id="myCarousel" class="carousel slide" data-ride="carousel">
             <!-- Indicators -->

             <div class="carousel-inner" role="listbox">
               <ol class="carousel-indicators" >
                 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                 <li data-target="#myCarousel" data-slide-to="1"></li>
                 <li data-target="#myCarousel" data-slide-to="2"></li>
               </ol><div class="item active">
                 <div class="col-sm-3 col-xs-6">

                     <div class="panel panel-default">
                       <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/nailaholics.png" class="img-responsive"></a></div>
                       <div class="panel-body">
                         <div class="col-md-6 panel-star">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                          </div>
                         <div class="col-md-6">
                         </div>
                       </div>
                     </div><!--/panel-->
                   </div><!--/col-->
                   <div class="col-sm-3 col-xs-6">

                      <div class="panel panel-default">
                        <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/davidd.png" class="img-responsive"></a></div>
                        <div class="panel-body">
                          <div class="col-md-6 panel-star">
                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                           </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div><!--/panel-->
                    </div><!--/col-->
                    <div class="col-sm-3 col-xs-6">

                        <div class="panel panel-default">
                          <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/pskin.png" class="img-responsive"></a></div>
                          <div class="panel-body">
                            <div class="col-md-6 panel-star">
                             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                             </div>
                            <div class="col-md-6">
                            </div>
                          </div>
                        </div><!--/panel-->
                      </div><!--/col-->
                      <div class="col-sm-3 col-xs-6">

                          <div class="panel panel-default">
                            <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/uber.png" class="img-responsive"></a></div>
                            <div class="panel-body">
                              <div class="col-md-6 panel-star">
                               <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                               </div>
                              <div class="col-md-6">
                              </div>
                            </div>
                          </div><!--/panel-->
                        </div><!--/col-->
                        <div class="col-sm-3 col-xs-6">

                            <div class="panel panel-default">
                              <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/mottech.png" class="img-responsive"></a></div>
                              <div class="panel-body">
                                <div class="col-md-6 panel-star">
                                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                 </div>
                                <div class="col-md-6">
                                </div>
                              </div>
                            </div><!--/panel-->
                          </div><!--/col-->
                          <div class="col-sm-3 col-xs-6">

                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/deovir.png" class="img-responsive"></a></div>
                                <div class="panel-body">
                                  <div class="col-md-6 panel-star">
                                   <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                   </div>
                                  <div class="col-md-6">
                                  </div>
                                </div>
                              </div><!--/panel-->
                            </div><!--/col-->
                            <div class="col-sm-3 col-xs-6">

                                <div class="panel panel-default">
                                  <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/niceprint.png" class="img-responsive"></a></div>
                                  <div class="panel-body">
                                    <div class="col-md-6 panel-star">
                                     <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                     </div>
                                    <div class="col-md-6">
                                    </div>
                                  </div>
                                </div><!--/panel-->
                              </div><!--/col-->
                              <div class="col-sm-3 col-xs-6">

                                  <div class="panel panel-default">
                                    <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/snoots.png" class="img-responsive"></a></div>
                                    <div class="panel-body">
                                      <div class="col-md-6 panel-star">
                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                       </div>
                                      <div class="col-md-6">
                                      </div>
                                    </div>
                                  </div><!--/panel-->
                                </div><!--/col-->
               </div><!-- / 1st item -->
               <div class="item">
                 <div class="col-sm-3 col-xs-6">

                     <div class="panel panel-default">
                       <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/nailaholics.png" class="img-responsive"></a></div>
                       <div class="panel-body">
                         <div class="col-md-6 panel-star">
                          <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                          <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                          </div>
                         <div class="col-md-6">
                         </div>
                       </div>
                     </div><!--/panel-->
                   </div><!--/col-->
                   <div class="col-sm-3 col-xs-6">

                      <div class="panel panel-default">
                        <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/davidd.png" class="img-responsive"></a></div>
                        <div class="panel-body">
                          <div class="col-md-6 panel-star">
                           <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                           <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                           </div>
                          <div class="col-md-6">
                          </div>
                        </div>
                      </div><!--/panel-->
                    </div><!--/col-->
                    <div class="col-sm-3 col-xs-6">

                        <div class="panel panel-default">
                          <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/pskin.png" class="img-responsive"></a></div>
                          <div class="panel-body">
                            <div class="col-md-6 panel-star">
                             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                             <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                             </div>
                            <div class="col-md-6">
                            </div>
                          </div>
                        </div><!--/panel-->
                      </div><!--/col-->
                      <div class="col-sm-3 col-xs-6">

                          <div class="panel panel-default">
                            <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/uber.png" class="img-responsive"></a></div>
                            <div class="panel-body">
                              <div class="col-md-6 panel-star">
                               <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                               <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                               </div>
                              <div class="col-md-6">
                              </div>
                            </div>
                          </div><!--/panel-->
                        </div><!--/col-->
                        <div class="col-sm-3 col-xs-6">

                            <div class="panel panel-default">
                              <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/mottech.png" class="img-responsive"></a></div>
                              <div class="panel-body">
                                <div class="col-md-6 panel-star">
                                 <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                 <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                 </div>
                                <div class="col-md-6">
                                </div>
                              </div>
                            </div><!--/panel-->
                          </div><!--/col-->
                          <div class="col-sm-3 col-xs-6">

                              <div class="panel panel-default">
                                <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/deovir.png" class="img-responsive"></a></div>
                                <div class="panel-body">
                                  <div class="col-md-6 panel-star">
                                   <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                   <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                   </div>
                                  <div class="col-md-6">
                                  </div>
                                </div>
                              </div><!--/panel-->
                            </div><!--/col-->
                            <div class="col-sm-3 col-xs-6">

                                <div class="panel panel-default">
                                  <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/niceprint.png" class="img-responsive"></a></div>
                                  <div class="panel-body">
                                    <div class="col-md-6 panel-star">
                                     <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                     <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                     </div>
                                    <div class="col-md-6">
                                    </div>
                                  </div>
                                </div><!--/panel-->
                              </div><!--/col-->
                              <div class="col-sm-3 col-xs-6">

                                  <div class="panel panel-default">
                                    <div class="panel-thumbnail"><a href="#" title="Renovations"><img src="{$base_url}assets/images/premium_providers/snoots.png" class="img-responsive"></a></div>
                                    <div class="panel-body">
                                      <div class="col-md-6 panel-star">
                                       <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                                       <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>

                                       </div>
                                      <div class="col-md-6">
                                      </div>
                                    </div>
                                  </div><!--/panel-->
                                </div><!--/col-->
               </div><!-- / 1st item -->
             </div>

           </div><!-- /.carousel -->

    		</div>
       </div>
   </div>
 </div><!--/container -->
   <div class="col-md-12">
   <div id="spacing"></div>
 </div>
</div> <!--/preprov -->


<div id="spacing"></div>

      <script>
      jQuery(document).ready(function () {
          $("#input-21f").rating({
              starCaptions: function(val) {
                  if (val < 3) {
                      return val;
                  } else {
                      return 'high';
                  }
              },
              starCaptionClasses: function(val) {
                  if (val < 3) {
                      return 'label label-danger';
                  } else {
                      return 'label label-success';
                  }
              },
              hoverOnClear: false
          });
        });
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
$(function() {
    //Initialize filterizr with default options
    $('.filtr-container').filterizr();
});
      </script>
{include file='./global_tpl/footer_front.tpl'}
