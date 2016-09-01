            <!-- Sidebar -->
            {$mainTree = stringexploder('_',$page,'0')}
            {if $page!=''}
                {$childTree = $page}
            {else}
                {$childTree = ''}
            {/if}
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                        <a href="{$base_url}/serviceprovider">
                            <div class="navbar-brand-sp"></div>
                        </a>
                                               <h3 style="padding:10px;color:#fff;text-align:center;">{$ServiceName} Services</h3>

                    <li{if $mainTree==''} class="active"{/if}>
                        <a href="{$base_url}serviceprovider"><i class="overview-icon"></i> OVERVIEW <div id="jobalert">{if $count_laund != 0}<small class="badge pull-right bg-blue" style="margin-top:8px;">{$count_laund + $count_accept_bids + count_job_order}</small>{/if}</div></a>
                    </li>
                    <li{if $mainTree=='jobs'} class="active"{/if}>
                        <a href="{$base_url}serviceprovider?page=jobs"><i class="jobs-icon"></i> JOBS </a>
                    </li>
                    <li{if $mainTree=='advertisements'} class="active"{/if}>
                        <a href="{$base_url}serviceprovider?page=advertisements"><i class="advertisements-icon"></i> ADVERTISEMENTS{if $countExpAds != 0}<small class="badge pull-right bg-red" style="margin-top:8px;">{$countExpAds}</small>{/if}</a>
                    </li>
                    <li{if $mainTree=='payments'} class="active"{/if}>
                        <a href="{$base_url}serviceprovider?page=payments"><i class="payments-icon"></i> PAYMENTS</a>
                    </li>
                    <li{if $mainTree=='ratingsreviews'} class="active"{/if}>
                        <a href="{$base_url}serviceprovider?page=ratingsreviews"><i class="rr-icon"></i> RATINGS + REVIEWS</a>
                    </li>
                    <li{if $mainTree=='accountsettings'} class="active"{/if}>
                        <a href="{$base_url}serviceprovider?page=accountsettings"><i class="as-icon"></i> ACCOUNT SETTINGS</a>
                    </li>

                </ul>
                <div class="sidebar_footer">
                    <a href="{$base_url}serviceprovider/logout" style="text-align:center;">Log out?</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
            <div id="countit" class="hide" >{$count_laund + $count_accept_bids + $count_job_order}</div>

            <script>
                    fnotif();
       function fnotif(){
        var interval = setInterval(function()
        {
             data2 = {
                    'intUserID' : '{$sp_user.intServiceProviderID}'
                };
              $.ajax({
            type: "POST",
            url:base_url+"serviceprovider/BidsPage",
            data:data2,
                beforeSend: function() {
                },
                success : function (res) {
                    if($('#countit').html() != res){
                        $('#countit').html(res);
                        var audio = new Audio(  '{$base_url}/assets/notif4.mp3');
                        audio.play();
                        $('#jobalert').html('<small class="badge pull-right bg-blue" style="margin-top:8px;">'+res+'</small>');
                        document.title = "("+res+") DirtyJobs";
                        $(".contentpage").load(location.href + " .contentpage ");

                    }
                }
            });

        },1000);
    }
            </script>
            <!-- /#sidebar-wrapper -->
