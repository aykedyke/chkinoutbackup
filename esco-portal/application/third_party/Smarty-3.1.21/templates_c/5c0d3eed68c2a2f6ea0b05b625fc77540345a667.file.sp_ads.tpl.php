<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-24 02:17:15
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/sp_ads.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1622963907572718e8d99443-47687200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c0d3eed68c2a2f6ea0b05b625fc77540345a667' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/sp_ads.tpl',
      1 => 1466752526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1622963907572718e8d99443-47687200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572718e8dc75d8_79938231',
  'variables' => 
  array (
    'countExpAds' => 0,
    'ShowAds' => 0,
    'date1' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572718e8dc75d8_79938231')) {function content_572718e8dc75d8_79938231($_smarty_tpl) {?>  <ul class="nav nav-pills" role="tablist">

    <li role="presentation" class="nav-bids active" data-id=
        "page2"><a href="#">Mobile ads
        </a></li>
        <li role="presentation" class="nav-bids" data-id=
            "page3"><a href="#">Website ads
            </a></li>
    <li role="presentation" class="nav-bids" data-id=
    "page4"><a href="#">Expired Ads <?php if ($_smarty_tpl->tpl_vars['countExpAds']->value!=0) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['countExpAds']->value;?>
</span><?php }?> </a></li>
</ul>



   <div class="contentpage page1 hide">
                            <section class="col-lg-12">
                              <div class="row">
                            <section class="col-lg-12">
                            <div class="btn btn-group" style="text-align:right;">
                                <a href="#" id="add_btn" data-id="ads_form" data-page="ads_form"  class="btn btn-primary" style="float:right;">Create New</a>

                                </div>
                                <div class="row">
                        <?php if ($_smarty_tpl->tpl_vars['ShowAds']->value!='0') {?>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ShowAds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php if (strtotime($_smarty_tpl->tpl_vars['date1']->value)<strtotime($_smarty_tpl->tpl_vars['row']->value['dateInserted'])) {?>
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
                                                        <li><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
" class="button-edit-service">View/Edit</a></li>
                                                        <li><a href="serviceprovider/delete_ads?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
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
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value['strDesc'];?>

                                            </p>
                                            <center><img style = "margin-top:20px;" src = "ads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imgSrc'];?>
" class="img-responsive"/></center>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                                                        <?php }?>

                            <?php } ?>
                            <?php } else { ?>
                            <h4 style="text-align:center;">Services is empty</h4>
                            <?php }?>

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
                      <?php if ($_smarty_tpl->tpl_vars['ShowAds']->value!='0') {?>
                      <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ShowAds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                      <?php if (strtotime($_smarty_tpl->tpl_vars['date1']->value)<strtotime($_smarty_tpl->tpl_vars['row']->value['dateInserted'])) {?>
                      <?php if ($_smarty_tpl->tpl_vars['row']->value['ads_type']=='mobile') {?>
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
                                                      <li><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
" class="button-edit-service">View/Edit</a></li>
                                                      <li><a href="serviceprovider/delete_ads?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
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
                                              <?php echo $_smarty_tpl->tpl_vars['row']->value['strDesc'];?>

                                          </p>
                                          <center><img style = "margin-top:20px;" src = "ads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imgSrc'];?>
" class="img-responsive"/></center>
                                      </div>
                                      </div>
                                  </div>
                              </div>
                          </section>
                                                      <?php }?>
                                                      <?php }?>

                          <?php } ?>
                          <?php } else { ?>
                          <h4 style="text-align:center;">Services is empty</h4>
                          <?php }?>

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
                     <?php if ($_smarty_tpl->tpl_vars['ShowAds']->value!='0') {?>
                     <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ShowAds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                     <?php if (strtotime($_smarty_tpl->tpl_vars['date1']->value)<strtotime($_smarty_tpl->tpl_vars['row']->value['dateInserted'])) {?>
                     <?php if ($_smarty_tpl->tpl_vars['row']->value['ads_type']=='web') {?>
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
                                                     <li><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
" class="button-edit-service">View/Edit</a></li>
                                                     <li><a href="serviceprovider/delete_ads?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
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
                                             <?php echo $_smarty_tpl->tpl_vars['row']->value['strDesc'];?>

                                         </p>
                                         <center><img style = "margin-top:20px;" src = "ads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imgSrc'];?>
" class="img-responsive"/></center>
                                     </div>
                                     </div>
                                 </div>
                             </div>
                         </section>
                                                     <?php }?>
                                                     <?php }?>

                         <?php } ?>
                         <?php } else { ?>
                         <h4 style="text-align:center;">Services is empty</h4>
                         <?php }?>

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
                        <?php if ($_smarty_tpl->tpl_vars['ShowAds']->value!='0') {?>
                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ShowAds']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                        <?php if (strtotime($_smarty_tpl->tpl_vars['date1']->value)>strtotime($_smarty_tpl->tpl_vars['row']->value['dateInserted'])) {?>
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
                                                        <li><a href="#" data-id="<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
" class="button-edit-service">View/Edit</a></li>
                                                        <li><a href="serviceprovider/service_delete?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['intAdsID'];?>
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
                                                <?php echo $_smarty_tpl->tpl_vars['row']->value['strDesc'];?>

                                            </p>
                                            <center><img style = "margin-top:20px;" src = "ads/<?php echo $_smarty_tpl->tpl_vars['row']->value['imgSrc'];?>
" class="img-responsive"/></center>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                                                        <?php }?>

                            <?php } ?>
                            <?php } else { ?>
                            <h4 style="text-align:center;">Services is empty</h4>
                            <?php }?>

                        </div>
                            </section>
                        </div>
                    </section>
 </div>
<?php }} ?>
