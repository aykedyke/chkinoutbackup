{include file='./global_tpl/sp_header.tpl'}
        <div class="wrapper row-offcanvas row-offcanvas-left">
            {include file='./global_tpl/sp_sidebar.tpl'}
            <aside class="right-side">
                {if $page == 'jobs'}
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            JOBS
                        </h1>
                    </section>

                    <!-- Main content -->
                     <section class="content">
                        <div class="row">
                        <div style="padding:10px;">
                            {include file='./global_tpl/jobs.tpl'}
                        </div>
                        </div>
                    </section>
                {elseif $page == 'services'}
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            SERVICES
                        </h1>
                    </section>

                    <!-- Main content -->
                        <section class="content">
                        <div class="row">
                            <section class="col-lg-4"> 
                                <a href="#" id="button-add-service" data-id="add" class="btn btn-primary">Add Service</a>
                            </section>
                        </div><br/>
                        <div class="row">
                        {if $servicesrow != '0'}
                        {foreach $servicesrow as $row}
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
                                                        <li><a href="#" data-id="{$row.intServiceID}" class="button-edit-service">View/Edit</a></li>
                                                        <li><a href="serviceprovider/service_delete?del={$row.intServiceID}">Delete</a></li>
                                                        <li><a href="#">Change photo</a></li>
                                                    </ul>
                                                </div>
                                            </div>                             
                                    </div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="row">
                                        <div style = "padding:25px;">
                                            <p>
                                                {$row.strDescription}
                                            </p>
                                            <center><img style = "margin-top:20px;" src = "service_img/{$row.strImage}" /></center>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            {/foreach}
                            {else}
                            <h4 style="text-align:center;">Services is empty</h4>
                            {/if}
                          
                        </div>
                    </section>
                {elseif $page == 'advertisements'}
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            ADVERTISEMENTS
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">
			{include file='./sp_ads.tpl'}
                    </section>
                {elseif $page == 'payments'}
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            PAYMENTS
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        {include file='./sp_payments.tpl'}
                        
                    </section>
                {elseif $page == 'ratingsreviews'}
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            RATINGS + REVIEWS
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        {include file='./ratings_review.tpl'}
                    </section>
                {elseif $page == 'biddings'}

  <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            BIDDINGS
                        </h1>
                    </section>
                                        <section class="content">
                <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of Bids  </h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Name</th>
                                            <th>Transaction code</th>
                                            <th>Date transaction</th>
                                            <th>Forms</th>
                                            <th>Action</th>
                                        
                                        </tr>
                                     {foreach $Laundrybids as $row}
                                     {if $row.service_type == $sp_user.intServiceProvider_servicesID}
                                     {if chck_accept_bid($row.laundry_form_id,$sp_user.intServiceProviderID) == 0}
                                        <tr>
                                            <td>{$row.strFirstName}</td>
                                            <td>{$row.transcode}</td>
                                            <td>{$row.date_inserted}</td>
                                            <td><a href="{$base_url}serviceprovider/?page=ViewForm&viewform=viewform{$row.service_type}&TransCode={$row.transcode}&formiD={$row.laundry_form_id}" class="btn btn-primary">View</a></td>
                                        <td><a href="{$base_url}serviceprovider/accept_bid?accept={$row.transcode}&&UserID={$sp_user.intServiceProviderID}&&formiD={$row.laundry_form_id}" class="btn btn-primary">Accept</a></td>
                                            
                                        </tr>
                                        {/if} 
                                        {/if} 
                                        {/foreach} 
                                    </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </section>
                {elseif $page == 'ViewForm'}
                    <!-- (Page View Forms) -->
                        <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            VIEW FORM
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <section class="col-lg-12"> 
                            {if $viewform != ''}
								{include file="./viewform/$viewform.tpl"}
							{/if}
                            </section>
                        </div>
                    </section>



                {elseif $page == 'accountsettings'}


                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            ACCOUNT SETTINGS
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                            <section class="col-lg-12"> 
                                <div class="box">
                                    <center><img width = "100%" style = "" src = "assets/images/bgaccount1.jpg" />
                                    </center>

                                    <div class="box-body no-padding">
                                        <div class="row" style="min-height:400px">
                                        <div style = "padding:25px;">
                                            <div style = "font-weight:bold;position:absolute;margin-top:-143px;font-size:20px;margin-left:50px;">
                                                <img width = "17%" style = "margin-right:20px;" src = "assets/images/accountIcon.png" />
                                                DJ LAUNDRY PROFILE NAME
                                            </div>
                                            <div class="box box-primary">
                                                <div class="box-header">
                                                    <h3 class="box-title">Updating Profile</h3>
                                                </div><!-- /.box-header -->
                                                <!-- form start -->
                                                <form role="form">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Name</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value = "{$sp_user.strUsername}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = "{$sp_user.strAddress}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = "{$sp_user.strEmail}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Contact</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = "{$sp_user.strContacts}">
                                                        </div>
                                                       
                                                    </div><!-- /.box-body -->

                                                    <div class="box-footer">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </section>
                {else}  

                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            OVERVIEW
                        </h1>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="row">
                        {include file='./sp_overview.tpl'}
                        </div>
                    </section>
                {/if}
            </aside>
        </div>
{include file='./global_tpl/sp_footer.tpl'}