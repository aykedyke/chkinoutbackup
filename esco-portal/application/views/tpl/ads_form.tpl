
  <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            Create Ads
                        </h1>
                    </section>
                    <div class="container">
                    <section class="content">
                        <div class="row">
                          <div class="col-md-6">

                          {if $service_form != 'change_service_photo'}

                            <form action="serviceprovider/{$service_form}" method="POST" enctype="multipart/form-data">

                                <div class="form-group" style="padding-top:20%;padding-left:40%;">
                                  <span class="btn btn-default btn-block btn-file">
                                      Upload Image <input type="file" accept="image/*"  name="image">
                                  </span>
                                  <h3>150 x 250</h3>

                                </div>

                                <div class="form-group" style="text-align:center;">
                                {if $service_form == 'view_service'}
                                        <input type="hidden" value="{$intServiceID}" name="intServiceID">
                                {/if}
                                <input type="hidden" name="ads_type" value="{$ads_type}">
                                    <input type="submit" class="btn btn-primary" name="save">


                                </div>

                            </form>
                            {else}

                            {/if}
                          </div>
                          {if $ads_type == 'web'}
                          <div class='col-md-6'>
                            <h3>Sample ads</h3>
                            <img src="{$base_url}assets/images/webAds.png" class="img-responsive" style="width:50%;">
                          </div>
                          {/if}
                          {if $ads_type == 'mobile'}
                          <div class='col-md-6'>
                            <h3>Sample ads</h3>

                            <img src="{$base_url}assets/images/appAds.png" class="img-responsive" style="width:30%;">
                          </div>
                          {/if}


                        </div>
                    </section>
                    </div>
