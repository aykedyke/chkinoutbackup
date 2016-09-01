<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-11 04:29:11
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_provider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:215639587571064f5b29545-25906307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ceebd1662af36801553611fd042673d9c4e42c76' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_provider.tpl',
      1 => 1462957817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215639587571064f5b29545-25906307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571064f5c61582_84236058',
  'variables' => 
  array (
    'page' => 0,
    'servicesrow' => 0,
    'row' => 0,
    'Laundrybids' => 0,
    'sp_user' => 0,
    'base_url' => 0,
    'viewform' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571064f5c61582_84236058')) {function content_571064f5c61582_84236058($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/sp_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/sp_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <aside class="right-side">
                <?php if ($_smarty_tpl->tpl_vars['page']->value=='jobs') {?>
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
                            <?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/jobs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                        </div>
                    </section>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='services') {?>
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
                        <?php if ($_smarty_tpl->tpl_vars['servicesrow']->value!='0') {?>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['servicesrow']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                             <section class="col-lg-4"> 
                                <div class="box">
                                    <!-- box-header -->
                                    <div class="box-header">
                                        <div class="box-title"><?php echo $_smarty_tpl->tpl_vars['row']->value['strTitle'];?>
</div>    
                                         <div class="pull-right box-tools">
                                                <!-- button with a dropdown -->
                                                <div class="btn-group">
                                                    <button class="btn btn-warning btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
                                                    <ul class="dropdown-menu pull-right" role="menu">
                                                        <li><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['intServiceID'];?>
" class="button-edit-service">View/Edit</a></li>
                                                        <li><a href="serviceprovider/service_delete?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['intServiceID'];?>
">Delete</a></li>
                                                        <li><a href="#">Change photo</a></li>
                                                    </ul>
                                                </div>
                                            </div>                             
                                    </div><!-- /.box-header -->
                                    <div class="box-body no-padding">
                                        <div class="row">
                                        <div style = "padding:25px;">
                                            <p>
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value['strDescription'];?>

                                            </p>
                                            <center><img style = "margin-top:20px;" src = "service_img/<?php echo $_smarty_tpl->tpl_vars['row']->value['strImage'];?>
" /></center>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } ?>
                            <?php } else { ?>
                            <h4 style="text-align:center;">Services is empty</h4>
                            <?php }?>
                          
                        </div>
                    </section>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='advertisements') {?>
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
			<?php echo $_smarty_tpl->getSubTemplate ('./sp_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </section>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='payments') {?>
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
                        <?php echo $_smarty_tpl->getSubTemplate ('./sp_payments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        
                    </section>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='ratingsreviews') {?>
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
                        <?php echo $_smarty_tpl->getSubTemplate ('./ratings_review.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    </section>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='biddings') {?>

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
                                     <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Laundrybids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                     <?php if ($_smarty_tpl->tpl_vars['row']->value['service_type']==$_smarty_tpl->tpl_vars['sp_user']->value['intServiceProvider_servicesID']) {?>
                                     <?php if (chck_accept_bid($_smarty_tpl->tpl_vars['row']->value['laundry_form_id'],$_smarty_tpl->tpl_vars['sp_user']->value['intServiceProviderID'])==0) {?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date_inserted'];?>
</td>
                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/?page=ViewForm&viewform=viewform<?php echo $_smarty_tpl->tpl_vars['row']->value['service_type'];?>
&TransCode=<?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
&formiD=<?php echo $_smarty_tpl->tpl_vars['row']->value['laundry_form_id'];?>
" class="btn btn-primary">View</a></td>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/accept_bid?accept=<?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
&&UserID=<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['intServiceProviderID'];?>
&&formiD=<?php echo $_smarty_tpl->tpl_vars['row']->value['laundry_form_id'];?>
" class="btn btn-primary">Accept</a></td>
                                            
                                        </tr>
                                        <?php }?> 
                                        <?php }?> 
                                        <?php } ?> 
                                    </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </section>
                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='ViewForm') {?>
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
                            <?php if ($_smarty_tpl->tpl_vars['viewform']->value!='') {?>
								<?php echo $_smarty_tpl->getSubTemplate ("./viewform/".((string)$_smarty_tpl->tpl_vars['viewform']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php }?>
                            </section>
                        </div>
                    </section>



                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value=='accountsettings') {?>


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
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value = "<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['strUsername'];?>
">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Address</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = "<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['strAddress'];?>
">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = "<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['strEmail'];?>
">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Contact</label>
                                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value = "<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['strContacts'];?>
">
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
                <?php } else { ?>  

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
                        <?php echo $_smarty_tpl->getSubTemplate ('./sp_overview.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                        </div>
                    </section>
                <?php }?>
            </aside>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/sp_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
