<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 02:56:25
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1339205435571091ed0be0f9-68920073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4603b815293e9a32f82b9f608d3d1adb75b847f8' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/service_form.tpl',
      1 => 1462521381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1339205435571091ed0be0f9-68920073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571091ed15ba62_38433629',
  'variables' => 
  array (
    'service_form' => 0,
    'strTitle' => 0,
    'strDescription' => 0,
    'strPrice' => 0,
    'intServiceID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571091ed15ba62_38433629')) {function content_571091ed15ba62_38433629($_smarty_tpl) {?>  <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            ADD SERVICE
                        </h1>
                    </section>
                    <div class="container">
                    <section class="content">
                        <div class="row">
                          <?php if ($_smarty_tpl->tpl_vars['service_form']->value!='change_service_photo') {?>

                            <form action="serviceprovider/<?php echo $_smarty_tpl->tpl_vars['service_form']->value;?>
" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="strTitle" class="form-control" placeholder="Enter Title here" value="<?php echo $_smarty_tpl->tpl_vars['strTitle']->value;?>
">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="20" name="strDescription" placeholder="Description" ><?php echo $_smarty_tpl->tpl_vars['strDescription']->value;?>
</textarea>
                                </div>
                                <div class="form-group">
                                    <input name="image" type="file"  accept="image/*" />
                                </div>
                                <div class="form-group col-md-12" style="padding:0;">
                                    <div class="col-md-6" style="margin:0;padding:0;">
                                        <input type="text" name="strPrice" class="form-control" placeholder="Enter Price" value="<?php echo $_smarty_tpl->tpl_vars['strPrice']->value;?>
">
                                    </div>
                                </div>
                                <div class="btn-group">
                                <?php if ($_smarty_tpl->tpl_vars['service_form']->value=='view_service') {?>
                                        <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['intServiceID']->value;?>
" name="intServiceID">
                                <?php }?>
                                    <input type="submit" class="btn btn-primary" name="save">
                                
                                
                                </div>

                            </form>
                            <?php } else { ?>

                            <?php }?>
                        </div>
                    </section>
                    </div><?php }} ?>
