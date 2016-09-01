<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-21 04:59:55
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/footer_front.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67123956957107c084bec10-05057850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5603ecba34e2eceab0bb50501ea4cea3aac4f6f' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/footer_front.tpl',
      1 => 1466503189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67123956957107c084bec10-05057850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57107c0855a701_95171231',
  'variables' => 
  array (
    'base_url' => 0,
    'strEmail' => 0,
    'strPassword' => 0,
    'strConfirmPassword' => 0,
    'strSecQuestion' => 0,
    'strSecAnswer' => 0,
    'strFirstName' => 0,
    'strLastName' => 0,
    'strGender' => 0,
    'strMstatus' => 0,
    'intAge' => 0,
    'strAddress' => 0,
    'strContactNumber' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57107c0855a701_95171231')) {function content_57107c0855a701_95171231($_smarty_tpl) {?><div class="theFooter">
<div class="container">
<div class="row">
    <div class="col-sm-2">
      <img src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/images/dj_logo.png" style="width:150px;">
    </div>
    <div class="col-sm-5" style="padding-top:1em;">
      Copyright © 2016 DirtyJobs. All rights reserved.
    </div>
    <div class="col-sm-5">
      <ul class="nav navbar-nav ">
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
AboutUs">ABOUT US</b></a></li>
        <li ><a href="#">TERMS & CONDITION</b></a></li>

        <li class="socmed">
         <div class="fb"><a  href="#" class="fa fa-facebook">&nbsp;</a></div>
         <div class="linkedin"><a href="#" class="fa fa-linkedin">&nbsp;</a></div>
       </li>
        </ul>
    </div>
    </div>
</div>
</div>


<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->

            <div class="loginHome">
            <div class="panel panel-default" style="border:0;">
              <div class="panel-heading" style="text-align:center;"><b>LOG IN</b></div>
              <div class="panel-body">
                  <div class="form-group">
                    <div class="col-md-12">
                      <form action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
" action="javascript:;" method="POST" id="loginForm">
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
            <div style="text-align:center; color:#ddd;"> <a href="" style="color:#ccc;">Not a member yet?</a></div>
            <a href="" class="btn btn-getstarted btn-block" data-toggle="modal" data-target="#registerModal" >Get Started</a>
          </div>
          </div>
    </div>
  </div>
  <div class="modal fade" id="registerModal" role="dialog" >
    <div class="modal-dialog" >

      <!-- Modal content-->

            <div class="registerHome">
              <form action="home" method="POST" id="RegForm">
            <div class="panel panel-default" style="border:0;">
              <div class="panel-heading" style="text-align:center;"><h4>REGISTER</h4></div>
              <div class="panel-body">
                  <div class="form-group">
                    <div class="col-md-6">
                      <h4>LOGIN DETAILS</h4>

                      <div class="form-group">
                        <input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strEmail']->value=='') {?>validation<?php }?>" placeholder="E-mail" name="strEmail" value="<?php echo $_smarty_tpl->tpl_vars['strEmail']->value;?>
">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strPassword']->value=='') {?>validation<?php }?>" placeholder="Password" name="strPassword" value="<?php echo $_smarty_tpl->tpl_vars['strPassword']->value;?>
" id="strPassword">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strConfirmPassword']->value=='') {?>validation<?php }?>" placeholder="Confirm Password" name="strConfirmPassword" value="<?php echo $_smarty_tpl->tpl_vars['strConfirmPassword']->value;?>
">
                      </div>
                      <div class="form-group">
                        <select name="strSecQuestion" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=='') {?>validation<?php }?>" placeholder="Choose Security Question">
                          <option value="">--Select Security Question--</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=="What's your favourite pet's name?") {?>selected<?php }?>>What's your favourite pet's name?</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=="What's your favourite movie?") {?>selected<?php }?> >What's your favourite movie?</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['strSecQuestion']->value=="What's your mobile phone number?") {?>selected<?php }?>>What's your mobile phone number?</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strSecAnswer']->value=='') {?>validation<?php }?>" placeholder="Security Answer" name="strSecAnswer" value="<?php echo $_smarty_tpl->tpl_vars['strSecAnswer']->value;?>
">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4>PERSONAL DETAILS</h4>
                      <div class="form-group" >
                          <input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strFirstName']->value=='') {?>validation<?php }?>" placeholder="First Name" name="strFirstName" value="<?php echo $_smarty_tpl->tpl_vars['strFirstName']->value;?>
">
                      </div>
                      <div class="form-group" >

                        <input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strLastName']->value=='') {?>validation<?php }?>" placeholder="Last Name" name="strLastName" value="<?php echo $_smarty_tpl->tpl_vars['strLastName']->value;?>
">
                      </div>
                      <div class="col-md-4 nopadding" style="padding:0;">

                        <select class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strGender']->value=='') {?>validation<?php }?>" name="strGender" style="margin:0;">
                          <option <?php if ($_smarty_tpl->tpl_vars['strGender']->value=='Male') {?> selected <?php }?>>Male</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['strGender']->value=='Female') {?> selected <?php }?>>Female</option>
                        </select>
                      </div>
                      <div class="col-md-4 nopadding" style="padding:0;border-left:2px solid #fff;border-right:2px solid #fff;">
                        <div class="form-group">
                        <select type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strMstatus']->value=='') {?>validation<?php }?>" name="strMstatus">
                          <option <?php if ($_smarty_tpl->tpl_vars['strMstatus']->value=='Single') {?> selected <?php }?>>Single</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['strMstatus']->value=='Married') {?> selected <?php }?>>Married</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-4 nopadding" style="padding:0;">
                        <div class="form-group">
                        <input type="number" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['intAge']->value=='') {?>validation<?php }?>" placeholder="Age" name="intAge" value="<?php echo $_smarty_tpl->tpl_vars['intAge']->value;?>
">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strAddress']->value=='') {?>validation<?php }?>" placeholder="Address" name="strAddress" value="<?php echo $_smarty_tpl->tpl_vars['strAddress']->value;?>
">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_gray <?php if ($_smarty_tpl->tpl_vars['strContactNumber']->value=='') {?>validation<?php }?>" placeholder="Contact Number" name="strContactNumber" value="<?php echo $_smarty_tpl->tpl_vars['strContactNumber']->value;?>
">
                      </div>
                      <div class="col-md-12" style="padding:0;">
                <div class="pull-right">
              </div>
              </div>
                    </div>

              </div>
            </div>
            <div style="text-align:center; color:#ddd;"> <a href="" style="color:#ccc;">Not a member yet?</a></div>
            <input type="submit" name="save" class="btn btn-getstarted btn-block" value="SUBMIT">

          </div>
        </form>

          </div>
    </div>
  </div>

		<!--JQUERY-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-migrate-1.0.0.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"><?php echo '</script'; ?>
>
		 <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/cameraslide/js/jquery.mobile.customized.min.js'><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/cameraslide/js/jquery.easing.1.3.js'><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/cameraslide/js/camera.js'><?php echo '</script'; ?>
>


		<!--BOOTSTRAP-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/liquid_carousel/index.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"><?php echo '</script'; ?>
>		<!-- SYSTEM JS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/app.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/app2.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/formvalidation.js"><?php echo '</script'; ?>
>

  </body>
  <?php echo '<script'; ?>
>
function initMap() {
  // Create a map object and specify the DOM element for display.
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {
      lat: -34.397,
      lng: 150.644
    },
    scrollwheel: false,
    zoom: 8
  });
}

  <?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSFgNUtwBshWTCxko-h869uGKpVYcxjYw&callback=initMap"
    async defer><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/Filterizr-master/link/filterizr/jquery.filterizr.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/Filterizr-master/link/js/controls.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/star_ratings/js/star-rating.js" type="text/javascript"><?php echo '</script'; ?>
>
</html>
<?php }} ?>
