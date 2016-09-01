{include file='./global_tpl/header_front.tpl'}
<link href="{$base_url}assets/css/home.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet prefetch' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/animate.min.css'>
<div class="fullwidth"><!--header banner -->
  <div class="container2">
    <div class="row">
      <div class="col-md-6">
        {if $is_loggedin == ''}

        <div class="loginHome">
        <div class="panel panel-default" style="border:0;">
          <div class="panel-heading" style="text-align:center;"><b>LOG IN</b></div>
          <div class="panel-body">
              <div class="form-group">
                <div class="col-md-12">
                  <form action="{$base_url}" action="javascript:;" method="POST" id="loginForm">
  					          <div class="form-group">
  					            <input type="text" class="form-control" placeholder="E-mail" name="strUser" required>
  					          </div>
  					          <div class="form-group">
  					            <input type="password" class="form-control" placeholder="Password" name="strLogInPassword" required>
  					        </div>
  					        <div class="form-group">

  					      <input type="submit" class="btn btn-default btn-block btn-sm" id="dj_btn_login" value="Log in">
  					      <button type="button" class="btn btn-default btn-block btn-sm" id="dj_btn_login">Log in with Facebook</button>
              </div>
              <input type="hidden" name="strRememberMe" value="0">

            </form>

              </div>
          </div>
        </div>
        <div style="text-align:center; color:#ddd;"> <a href="" style="color:#ccc;" data-toggle="modal" data-target="#registerModal" >Not a member yet?</a></div>
        <a href="{$base_url}Register" class="btn btn-getstarted btn-block" data-toggle="modal" data-target="#registerModal" >Get Started</a>
      </div>
      </div>
      {/if  }
      </div>
      <div class="col-md-6">
        <div style="color:#fff;padding:5em;">
        <div class="col-sm-5"><a href="{$base_url}home/bidding"><img src="{$base_url}assets/images/bidlogo.png" class="img-responsive"></a></div>
        <div class="col-sm-7" style="padding-top:1.5em;"><h1>BID NOW.</h1></div>
        <div class="col-sm-12" style="padding:1.5em;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
          euismod bibendum laoreet. Proin gravida dolor sit amet lacus
          accumsan et viverra justo commodo.
        </div>
      </div>
      </div>
    </div>
  </div>
</div><!--// header banner -->

{if $StatusAlert != ''}
	<div class="alert alert-{$AlertType}"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{$StatusAlert}</div>
{/if}

<div id="premprov">
<div class="container">
<div id="spacing"></div>
<div class="row" >
  <div class="col-md-12">
    <div class="form-group" style="text-align:center;">
    <a class="btn btn-filter-active btn-responsive">All</a>
    <a class="btn btn-filter btn-responsive">Laundry</a>
    <a class="btn btn-filter btn-responsive">Pet Concerns</a>
    <a class="btn btn-filter btn-responsive">Automotive</a>
    <a class="btn btn-filter btn-responsive">Photo & Video</a>
  </div>
  </div>
  <div class="col-md-12">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->

    <div class="carousel-inner" role="listbox">
      <ol class="carousel-indicators" >
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="item active">
        <div class="col-md-12 nopad">
            <div class="col-sm-3 col-xs-6 nopadding">

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
                    <div class="col-md-6 img-plus" onClick="showServices('nailaholics','Nail Salon & Spa')">
                        <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                    </div>
                  </div>
                </div><!--/panel-->
              </div><!--/col-->
              <div class="col-sm-3 col-xs-6 nopadding">

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
                      <div class="col-md-6 img-plus" onClick="showServices('davidd','Hair and spa salon')">
                          <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                      </div>
                   </div>
                 </div><!--/panel-->
               </div><!--/col-->
               <div class="col-sm-3 col-xs-6 nopadding">

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
                        <div class="col-md-6 img-plus" onClick="showServices('pskin','Nail Salon & Spa')">
                            <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                        </div>
                     </div>
                   </div><!--/panel-->
                 </div><!--/col-->
                 <div class="col-sm-3 col-xs-6 nopadding">

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
                          <div class="col-md-6 img-plus" onClick="showServices('uber','Transportation Services')">
                              <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                          </div>
                       </div>
                     </div><!--/panel-->
                   </div><!--/col-->
                   <div class="col-sm-3 col-xs-6 nopadding">

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
                            <div class="col-md-6 img-plus" onClick="showServices('mottech','Sample Serivce')">
                                <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                            </div>
                         </div>
                       </div><!--/panel-->
                     </div><!--/col-->
                     <div class="col-sm-3 col-xs-6 nopadding">

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
                              <div class="col-md-6 img-plus" onClick="showServices('deovir','Sample Serivce')">
                                  <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                              </div>
                           </div>
                         </div><!--/panel-->
                       </div><!--/col-->
                       <div class="col-sm-3 col-xs-6 nopadding">

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
                                <div class="col-md-6 img-plus" onClick="showServices('niceprint','Printing press')">
                                    <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                                </div>
                             </div>
                           </div><!--/panel-->
                         </div><!--/col-->
                         <div class="col-sm-3 col-xs-6 nopadding">

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
                                  <div class="col-md-6 img-plus" onClick="showServices('snoots','Sample Serivce')">
                                      <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                                  </div>
                               </div>
                             </div><!--/panel-->
                           </div><!--/col-->
                        </div>
                      </div>
      <!-- / 1st item -->
      <div class="item">
        <div class="col-md-12 nopad">
            <div class="col-sm-3 col-xs-6 nopadding">

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
                     <div class="col-md-6 img-plus" onClick="showServices('nailaholics','Sample Serivce')">
                         <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                     </div>
                  </div>
                </div><!--/panel-->
              </div><!--/col-->
              <div class="col-sm-3 col-xs-6 nopadding">

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
                      <div class="col-md-6 img-plus" onClick="showServices('davidd','Sample Serivce')">
                          <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                      </div>
                   </div>
                 </div><!--/panel-->
               </div><!--/col-->
               <div class="col-sm-3 col-xs-6 nopadding">

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
                        <div class="col-md-6 img-plus" onClick="showServices('pskin','Sample Serivce')">
                            <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                        </div>
                     </div>
                   </div><!--/panel-->
                 </div><!--/col-->
                 <div class="col-sm-3 col-xs-6 nopadding">

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
                          <div class="col-md-6 img-plus" onClick="showServices('uber','Sample Serivce')">
                              <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                          </div>
                       </div>
                     </div><!--/panel-->
                   </div><!--/col-->
                   <div class="col-sm-3 col-xs-6 nopadding">

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
                            <div class="col-md-6 img-plus" onClick="showServices('mottech','Sample Serivce')">
                                <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                            </div>
                         </div>
                       </div><!--/panel-->
                     </div><!--/col-->
                     <div class="col-sm-3 col-xs-6 nopadding">

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
                              <div class="col-md-6 img-plus" onClick="showServices('deovir','Sample Serivce')">
                                  <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                              </div>
                           </div>
                         </div><!--/panel-->
                       </div><!--/col-->
                       <div class="col-sm-3 col-xs-6 nopadding">

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
                                <div class="col-md-6 img-plus" onClick="showServices('niceprint','Sample Serivce')">
                                    <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                                </div>
                             </div>
                           </div><!--/panel-->
                         </div><!--/col-->
                         <div class="col-sm-3 col-xs-6 nopadding">

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
                                  <div class="col-md-6 img-plus" onClick="showServices('snoots','Sample Serivce')">
                                      <img src="{$base_url}assets/images/cross.png" class="img-responsive">
                                  </div>
                               </div>
                             </div><!--/panel-->
                           </div><!--/col-->
                      </div>
                    </div><!-- / 2nd item -->
                    <div id="spacing"></div>
                  </div>
                </div><!-- /.carousel -->
              </div>
            </div>
          </div><!--/container -->
          <div class="col-md-12"><div id="spacing"></div></div>
</div>
<!--/preprov -->

<!--services description -->
<div id="djServices">

  <div class="container">
    <div class="row" >


        <div class="col-sm-2 col-xs-5 nopad" style="position:relative;">
          <a onClick="scrollDown()" class="scDown"><img src="{$base_url}assets/images/down2.png" class="img-responsive"></a>
          <a onClick="scrollUp()" class="scUp"><img src="{$base_url}assets/images/up2.png" class="img-responsive"></a>
          <div class="djServices-nav" id="scrolNav">

            <a class="btn btn-services btn-block activ-services" data-item="item-pet">
              PET CONCERNS
            </a>
            <a class="btn btn-services btn-block " data-item="item-laundry">
              LAUNDRY SERVICES
            </a>
            <a class="btn btn-services btn-block ">
              CAR MAINTENANCE
            </a>
            <a class="btn btn-services btn-block">
              HOUSE CLEANING
            </a>
            <a class="btn btn-services btn-block ">
              VET & PET
            </a>
            <a class="btn btn-services btn-block ">
              H&M AND SPA
            </a>
          </div>
        </div>
        <div class="col-xs-7 col-sm-4 col-sm-push-6 djServices-img" >
          <div class="djService-item-img animated fadeIn item-pet-img active-item-img">
            <img src="{$base_url}assets/images/SmartDogCat.jpg" style="width:400px;height:300px;">
          </div>
          <div class="djService-item-img animated fadeIn item-laundry-img">
            <img src="{$base_url}assets/images/laundry-machines.jpg" style="width:400px;height:300px;">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-sm-pull-4 djServices-desc">
          <div class="djServices-item animated fadeIn item-pet active-item">
            <h3>Pet Concerns</h3>
            <h4>Hire a service provider</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod
            bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra
            justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque
            penatibus et magnis dis parturient montes.</p>
            <a class="btn btn-primary" onClick="showAllServices('Pet-Concerns','')">Learn more</a>
          </div>
          <div class="djServices-item animated fadeIn item-laundry" >
            <h3>Laundry Services</h3>
            <h4>Hire a service provider</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod
            bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra
            justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque
            penatibus et magnis dis parturient montes.</p>
            <a class="btn btn-primary">Learn more</a>
          </div>
        </div>

    </div>
    <div id="spacing"></div>
  </div>
</div>
<!-- //services description -->

<!-- app add banners -->
<div id="appBanners">
  <div class="container3">
    <div class="row">
      <div id="myCarousel2" class="carousel slide nopad" data-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-inner" role="listbox">

          <div class="item active">
            <div class="col-md-6 " >
              <div class="appads-left">
                <img src="{$base_url}assets/images/dj_logo.png" class="img-responsive">
                  <p>Find a Service Provider that will cater to your needs</p>
                  <p><b>DOWNLOAD NOW!</b></p>
                    <div class="col-xs-6"><a href=""><img src="{$base_url}assets/images/dj_appleapp.png" class="img-responsive"></a></div>
                    <div class="col-xs-6"><a href=""><img src="{$base_url}assets/images/dj_androidapp.png" class="img-responsive pull-right"></a></div>
              </div>
            </div>
            <div class="col-md-6 nopad">
                <img src="{$base_url}assets/images/appads-1.png" class="img-responsive pull-right" >
            </div>
          </div>
          <div class="item ">
            <div class="col-md-6 nopad" >
              <div class="appads-left">
                <img src="{$base_url}assets/images/dj_logo.png" class="img-responsive">
                  <p>Become a Dirty Jobs Service Provider</p>
                  <p><b>DOWNLOAD NOW!</b></p>
                  <div class="row">
                    <div class="col-xs-6"><a href=""><img src="{$base_url}assets/images/dj_appleapp.png" class="img-responsive"></a></div>
                    <div class="col-xs-6"><a href=""><img src="{$base_url}assets/images/dj_androidapp.png" class="img-responsive pull-right"></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6" style="padding:0;">
                <img src="{$base_url}assets/images/appads-2.png" class="img-responsive pull-right">
            </div>
          </div>
          <div class="item ">
            <div class="col-md-6" >
              <div class="appads-left">
                <img src="{$base_url}assets/images/dj_logo.png" class="img-responsive">
                  <p>Become a Dirty Jobs Driver</p>
                  <p><b>DOWNLOAD NOW!</b></p>
                  <div class="row">
                  <div class="col-xs-6"><a href=""><img src="{$base_url}assets/images/dj_appleapp.png" class="img-responsive"></a></div>
                  <div class="col-xs-6"><a href=""><img src="{$base_url}assets/images/dj_androidapp.png" class="img-responsive pull-right" ></a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 nopad">
                <img src="{$base_url}assets/images/appads-3.png" class="img-responsive pull-right">
            </div>
          </div>
     </div>
     </div>
    </div>
  </div>
</div>
<!-- // app add banners -->
<!-- Contact Us -->
<div class="contactUs">
<div class="container">
 <div class="row">
  <div class="col-md-12">
    <div class="pageHeader">
      <h3>CONCTACT US</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
  </div>
   <div class="col-md-12">
     <div class="col-md-6 col-md-push-6">
           <h4>Address</h4>
<iframe style="overflow:auto;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d123495.56500714444!2d120.94477242970265!3d14.699218692821653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7a97fef0a15%3A0x66095dfe333d9fef!2sC%26E+Publishing%2C+Inc.!5e0!3m2!1sen!2sph!4v1464233058915" width="330" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
     </div>
     <div class="col-md-6 col-md-pull-6">
       <h4>Feel Free to drop us a message!</h4>
       <div class="form-group">
           <input type="text" class="form-control form_gray" placeholder="Name">
         </div>
         <div class="form-group">
           <input type="text" class="form-control form_gray" placeholder="E-mail">
         </div>
         <div class="form-group">
           <input type="text" class="form-control form_gray" placeholder="Subject:">
         </div>
         <div class="form-group">
           <textarea class="form-control form_gray" placeholder="Message:" rows="10"></textarea>
         </div>
         <div class="text-right">
           <button class="btn btn-getstarted">SUBMIT</button>
         </div>
     </div>
   </div>
 </div>
</div>
</div>
<!-- //ContactUs -->
      <script>

      var step = 110
      function scrollDown(){
        currenttop = $("#scrolNav").scrollTop();
        $('#scrolNav').animate({ scrollTop: (currenttop + 105) + 'px' }, 600);
        $("#serviceCarousel").carousel(2);

      }
      function scrollUp(){
        currenttop = $("#scrolNav").scrollTop();
        $('#scrolNav').animate({ scrollTop: (currenttop - 110) + 'px' }, 600);
      }
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
function showServices(id,desc){
  data2 = {
					'id' : id,
					'desc' : desc
				};

	$.ajax({
			type: "POST",
			url:base_url+"ajax/services.php",
			data: data2,
				beforeSend: function() {
				},
				success : function (res) {
          $('body').append(res);
				}
			});
    }
    function showAllServices(id,desc){
      data2 = {
    					'id' : id,
    					'desc' : desc
    				};

    	$.ajax({
    			type: "POST",
    			url:base_url+"ajax/all_services.php",
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
