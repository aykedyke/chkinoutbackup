<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-12 21:24:54
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/sp_sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311459224571064f5c88cd5-14329882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36699d903a47210f41635e0d36dd75fa1e8a962' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/sp_sidebar.tpl',
      1 => 1465784690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311459224571064f5c88cd5-14329882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571064f5d00f82_39250761',
  'variables' => 
  array (
    'page' => 0,
    'base_url' => 0,
    'ServiceName' => 0,
    'mainTree' => 0,
    'count_laund' => 0,
    'count_accept_bids' => 0,
    'countExpAds' => 0,
    'count_job_order' => 0,
    'sp_user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571064f5d00f82_39250761')) {function content_571064f5d00f82_39250761($_smarty_tpl) {?>            <!-- Sidebar -->
            <?php $_smarty_tpl->tpl_vars['mainTree'] = new Smarty_variable(stringexploder('_',$_smarty_tpl->tpl_vars['page']->value,'0'), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value!='') {?>
                <?php $_smarty_tpl->tpl_vars['childTree'] = new Smarty_variable($_smarty_tpl->tpl_vars['page']->value, null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars['childTree'] = new Smarty_variable('', null, 0);?>
            <?php }?>
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/serviceprovider">
                            <div class="navbar-brand-sp"></div>
                        </a>
                                               <h3 style="padding:10px;color:#fff;text-align:center;"><?php echo $_smarty_tpl->tpl_vars['ServiceName']->value;?>
 Services</h3>

                    <li<?php if ($_smarty_tpl->tpl_vars['mainTree']->value=='') {?> class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider"><i class="overview-icon"></i> OVERVIEW <div id="jobalert"><?php if ($_smarty_tpl->tpl_vars['count_laund']->value!=0) {?><small class="badge pull-right bg-blue" style="margin-top:8px;"><?php echo $_smarty_tpl->tpl_vars['count_laund']->value+$_smarty_tpl->tpl_vars['count_accept_bids']->value+'count_job_order';?>
</small><?php }?></div></a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['mainTree']->value=='jobs') {?> class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider?page=jobs"><i class="jobs-icon"></i> JOBS </a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['mainTree']->value=='advertisements') {?> class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider?page=advertisements"><i class="advertisements-icon"></i> ADVERTISEMENTS<?php if ($_smarty_tpl->tpl_vars['countExpAds']->value!=0) {?><small class="badge pull-right bg-red" style="margin-top:8px;"><?php echo $_smarty_tpl->tpl_vars['countExpAds']->value;?>
</small><?php }?></a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['mainTree']->value=='payments') {?> class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider?page=payments"><i class="payments-icon"></i> PAYMENTS</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['mainTree']->value=='ratingsreviews') {?> class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider?page=ratingsreviews"><i class="rr-icon"></i> RATINGS + REVIEWS</a>
                    </li>
                    <li<?php if ($_smarty_tpl->tpl_vars['mainTree']->value=='accountsettings') {?> class="active"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider?page=accountsettings"><i class="as-icon"></i> ACCOUNT SETTINGS</a>
                    </li>

                </ul>
                <div class="sidebar_footer">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/logout" style="text-align:center;">Log out?</a>
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <a href="#">Terms & Conditions</a>
                </div>
            </div>
            <div id="countit" class="hide" ><?php echo $_smarty_tpl->tpl_vars['count_laund']->value+$_smarty_tpl->tpl_vars['count_accept_bids']->value+$_smarty_tpl->tpl_vars['count_job_order']->value;?>
</div>

            <?php echo '<script'; ?>
>
                    fnotif();
       function fnotif(){
        var interval = setInterval(function()
        {
             data2 = {
                    'intUserID' : '<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['intServiceProviderID'];?>
'
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
                        var audio = new Audio(  '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
/assets/notif4.mp3');
                        audio.play();
                        $('#jobalert').html('<small class="badge pull-right bg-blue" style="margin-top:8px;">'+res+'</small>');
                        document.title = "("+res+") DirtyJobs";
                        $(".contentpage").load(location.href + " .contentpage ");

                    }
                }
            });

        },1000);
    }
            <?php echo '</script'; ?>
>
            <!-- /#sidebar-wrapper -->
<?php }} ?>
