  <ul class="nav nav-pills" role="tablist">

    <li role="presentation" class="nav-bids active" data-id=
        "page2"><a href="#">Mobile ads
        </a></li>
        <li role="presentation" class="nav-bids" data-id=
            "page3"><a href="#">Website ads
            </a></li>
    <li role="presentation" class="nav-bids" data-id=
    "page4"><a href="#">Expired Ads {if $countExpAds != 0}<span class="badge">{$countExpAds}</span>{/if} </a></li>
</ul>



   <div class="contentpage page1 hide">
                            <section class="col-lg-12">
                              <div class="row">
                            <section class="col-lg-12">
                            <div class="btn btn-group" style="text-align:right;">
                                <a href="#" id="add_btn" data-id="ads_form" data-page="ads_form"  class="btn btn-primary" style="float:right;">Create New</a>

                                </div>
                                <div class="row">
                        {if $ShowAds != '0'}
                        {foreach $ShowAds as $row}
                        {if $date1|strtotime < $row.dateInserted|strtotime}
                             <section class="col-lg-4">
                                <div class="box">
                                    <!-- box-header -->
                                    <div class="box-header">
                                        <div class="box-title">{$row.strTitle}</div>
                                         <div class="pull-right box-tools">
                                                <!-- button with a dropdown -->
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#" data-id="{$row.intAdsID}" class="button-edit-service">View/Edit</a></li>
                                                        <li><a href="serviceprovider/delete_ads?del={$row.intAdsID}">Delete</a></li>
                                                        <li><a href="#">Change photo</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="row">
                                        <div style = "padding:25px;">
                                            <p>
                                                {$row.strDesc}
                                            </p>
                                            <center><img style = "margin-top:20px;" src = "ads/{$row.imgSrc}" class="img-responsive"/></center>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                                                        {/if}

                            {/foreach}
                            {else}
                            <h4 style="text-align:center;">Services is empty</h4>
                            {/if}

                        </div>
                            </section>
                        </div>
                    </section>
 </div>
 <div class="contentpage page2">
                          <section class="col-lg-12">
                            <div class="row">
                          <section class="col-lg-12">
                          <div class="btn btn-group" style="text-align:right;">
                              <a href="#" id="add_btn_mobile" data-id="ads_form" data-page="ads_form" data-adsType="mobile"  class="btn btn-primary" style="float:right;">Create Ads for Mobile</a>
                              </div>
                              <div class="row">
                      {if $ShowAds != '0'}
                      {foreach $ShowAds as $row}
                      {if $date1|strtotime < $row.dateInserted|strtotime}
                      {if $row.ads_type == 'mobile'}
                           <section class="col-lg-4">
                              <div class="box">
                                  <!-- box-header -->
                                  <div class="box-header">
                                      <div class="box-title">{$row.strTitle}</div>
                                       <div class="pull-right box-tools">
                                              <!-- button with a dropdown -->
                                              <div class="btn-group">
                                                  <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                                  <ul class="dropdown-menu pull-right" role="menu">
                                                      <li><a href="#" data-id="{$row.intAdsID}" class="button-edit-service">View/Edit</a></li>
                                                      <li><a href="serviceprovider/delete_ads?del={$row.intAdsID}">Delete</a></li>
                                                      <li><a href="#">Change photo</a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                  </div><!-- /.box-header -->
                                  <div class="box-body no-padding">
                                      <div class="row">
                                      <div style = "padding:25px;">
                                          <p>
                                              {$row.strDesc}
                                          </p>
                                          <center><img style = "margin-top:20px;" src = "ads/{$row.imgSrc}" class="img-responsive"/></center>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                          </section>
                                                      {/if}
                                                      {/if}

                          {/foreach}
                          {else}
                          <h4 style="text-align:center;">Services is empty</h4>
                          {/if}

                      </div>
                          </section>
                      </div>
                  </section>
</div>
<div class="contentpage page3 hide">
                         <section class="col-lg-12">
                           <div class="row">
                         <section class="col-lg-12">
                         <div class="btn btn-group" style="text-align:right;">
                             <a href="#" id="add_btn_web" data-id="ads_form" data-page="ads_form" class="btn btn-primary"   data-adsType="web"  style="float:right;">Create Ads for Web</a>
                             </div>
                             <div class="row">
                     {if $ShowAds != '0'}
                     {foreach $ShowAds as $row}
                     {if $date1|strtotime < $row.dateInserted|strtotime}
                     {if $row.ads_type == 'web'}
                          <section class="col-lg-4">
                             <div class="box">
                                 <!-- box-header -->
                                 <div class="box-header">
                                     <div class="box-title">{$row.strTitle}</div>
                                      <div class="pull-right box-tools">
                                             <!-- button with a dropdown -->
                                             <div class="btn-group">
                                                 <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                                 <ul class="dropdown-menu pull-right" role="menu">
                                                     <li><a href="#" data-id="{$row.intAdsID}" class="button-edit-service">View/Edit</a></li>
                                                     <li><a href="serviceprovider/delete_ads?del={$row.intAdsID}">Delete</a></li>
                                                     <li><a href="#">Change photo</a></li>
                                                 </ul>
                                             </div>
                                         </div>
                                 </div><!-- /.box-header -->
                                 <div class="box-body no-padding">
                                     <div class="row">
                                     <div style = "padding:25px;">
                                         <p>
                                             {$row.strDesc}
                                         </p>
                                         <center><img style = "margin-top:20px;" src = "ads/{$row.imgSrc}" class="img-responsive"/></center>
                                     </div>
                                     </div>
                                 </div>
                             </div>
                         </section>
                                                     {/if}
                                                     {/if}

                         {/foreach}
                         {else}
                         <h4 style="text-align:center;">Services is empty</h4>
                         {/if}

                     </div>
                         </section>
                     </div>
                 </section>
</div>
 <div class="contentpage page4 hide">
                            <section class="col-lg-12">
                              <div class="row">
                            <section class="col-lg-12">
                                <div class="row">
                        {if $ShowAds != '0'}
                        {foreach $ShowAds as $row}
                        {if $date1|strtotime > $row.dateInserted|strtotime}
                             <section class="col-lg-4">
                                <div class="box">
                                    <!-- box-header -->
                                    <div class="box-header">
                                        <div class="box-title">{$row.strTitle}</div>
                                         <div class="pull-right box-tools">
                                                <!-- button with a dropdown -->
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#" data-id="{$row.intAdsID}" class="button-edit-service">View/Edit</a></li>
                                                        <li><a href="serviceprovider/service_delete?del={$row.intAdsID}">Delete</a></li>
                                                        <li><a href="#">Change photo</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="row">
                                        <div style = "padding:25px;">
                                            <p>
                                                {$row.strDesc}
                                            </p>
                                            <center><img style = "margin-top:20px;" src = "ads/{$row.imgSrc}" class="img-responsive"/></center>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                                                        {/if}

                            {/foreach}
                            {else}
                            <h4 style="text-align:center;">Services is empty</h4>
                            {/if}

                        </div>
                            </section>
                        </div>
                    </section>
 </div>
