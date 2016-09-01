<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-24 05:32:19
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ads_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177963835657109341f15826-35592177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96c27a2cce8242f7d679a03bbea99d6414ccae1e' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ads_form.tpl',
      1 => 1466764333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177963835657109341f15826-35592177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57109342026fb3_52523662',
  'variables' => 
  array (
    'service_form' => 0,
    'intServiceID' => 0,
    'ads_type' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57109342026fb3_52523662')) {function content_57109342026fb3_52523662($_smarty_tpl) {?>
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

                          <?php if ($_smarty_tpl->tpl_vars['service_form']->value!='change_service_photo') {?>

                            <form action="serviceprovider/<?php echo $_smarty_tpl->tpl_vars['service_form']->value;?>
" method="POST" enctype="multipart/form-data">

                                <div class="form-group" style="padding-top:20%;padding-left:40%;">
                                  <span class="btn btn-default btn-block btn-file">
                                      Upload Image <input type="file" accept="image/*"  name="image">
                                  </span>
                                  <h3>150 x 250</h3>

                                </div>

                                <div class="form-group" style="text-align:center;">
                                <?php if ($_smarty_tpl->tpl_vars['service_form']->value=='view_service') {?>
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['intServiceID']->value;?>
" name="intServiceID">
                                <?php }?>
                                <input type="hidden" name="ads_type" value="<?php echo $_smarty_tpl->tpl_vars['ads_type']->value;?>
">
                                    <input type="submit" class="btn btn-primary" name="save">


                                </div>

                            </form>
                            <?php } else { ?>

                            <?php }?>
                          </div>
                          <?php if ($_smarty_tpl->tpl_vars['ads_type']->value=='web') {?>
                          <div class='col-md-6'>
                            <h3>Sample ads</h3>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/webAds.png" class="img-responsive" style="width:50%;">
                          </div>
                          <?php }?>
                          <?php if ($_smarty_tpl->tpl_vars['ads_type']->value=='mobile') {?>
                          <div class='col-md-6'>
                            <h3>Sample ads</h3>

                            <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/appAds.png" class="img-responsive" style="width:30%;">
                          </div>
                          <?php }?>


                        </div>
                    </section>
                    </div>
<?php }} ?>
