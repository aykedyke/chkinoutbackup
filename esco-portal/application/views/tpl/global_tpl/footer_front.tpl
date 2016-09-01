<div class="theFooter">
<div class="container">
<div class="row">
    <div class="col-sm-2">
      <img src="{$base_url}assets/images/dj_logo.png" style="width:150px;">
    </div>
    <div class="col-sm-5" style="padding-top:1em;">
      Copyright © 2016 DirtyJobs. All rights reserved.
    </div>
    <div class="col-sm-5">
      <ul class="nav navbar-nav ">
        <li ><a href="{$base_url}AboutUs">ABOUT US</b></a></li>
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
                      <form action="{$base_url}" action="javascript:;" method="POST" id="loginForm">
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
                        <input type="text" class="form-control form_gray {if $strEmail == ''}validation{/if}" placeholder="E-mail" name="strEmail" value="{$strEmail}">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form_gray {if $strPassword == ''}validation{/if}" placeholder="Password" name="strPassword" value="{$strPassword}" id="strPassword">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control form_gray {if $strConfirmPassword == ''}validation{/if}" placeholder="Confirm Password" name="strConfirmPassword" value="{$strConfirmPassword}">
                      </div>
                      <div class="form-group">
                        <select name="strSecQuestion" class="form-control form_gray {if $strSecQuestion == ''}validation{/if}" placeholder="Choose Security Question">
                          <option value="">--Select Security Question--</option>
                          <option {if $strSecQuestion == "What's your favourite pet's name?"}selected{/if}>What's your favourite pet's name?</option>
                          <option {if $strSecQuestion == "What's your favourite movie?"}selected{/if} >What's your favourite movie?</option>
                          <option {if $strSecQuestion == "What's your mobile phone number?"}selected{/if}>What's your mobile phone number?</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_gray {if $strSecAnswer == ''}validation{/if}" placeholder="Security Answer" name="strSecAnswer" value="{$strSecAnswer}">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h4>PERSONAL DETAILS</h4>
                      <div class="form-group" >
                          <input type="text" class="form-control form_gray {if $strFirstName == ''}validation{/if}" placeholder="First Name" name="strFirstName" value="{$strFirstName}">
                      </div>
                      <div class="form-group" >

                        <input type="text" class="form-control form_gray {if $strLastName == ''}validation{/if}" placeholder="Last Name" name="strLastName" value="{$strLastName}">
                      </div>
                      <div class="col-md-4 nopadding" style="padding:0;">

                        <select class="form-control form_gray {if $strGender == ''}validation{/if}" name="strGender" style="margin:0;">
                          <option {if $strGender == 'Male'} selected {/if}>Male</option>
                          <option {if $strGender == 'Female'} selected {/if}>Female</option>
                        </select>
                      </div>
                      <div class="col-md-4 nopadding" style="padding:0;border-left:2px solid #fff;border-right:2px solid #fff;">
                        <div class="form-group">
                        <select type="text" class="form-control form_gray {if $strMstatus == ''}validation{/if}" name="strMstatus">
                          <option {if $strMstatus == 'Single'} selected {/if}>Single</option>
                          <option {if $strMstatus == 'Married'} selected {/if}>Married</option>
                        </select>
                        </div>
                      </div>
                      <div class="col-md-4 nopadding" style="padding:0;">
                        <div class="form-group">
                        <input type="number" class="form-control form_gray {if $intAge == ''}validation{/if}" placeholder="Age" name="intAge" value="{$intAge}">
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_gray {if $strAddress == ''}validation{/if}" placeholder="Address" name="strAddress" value="{$strAddress}">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control form_gray {if $strContactNumber == ''}validation{/if}" placeholder="Contact Number" name="strContactNumber" value="{$strContactNumber}">
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
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-migrate-1.0.0.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"></script>
		 <script type='text/javascript' src='{$base_url}assets/plugins/cameraslide/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='{$base_url}assets/plugins/cameraslide/js/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='{$base_url}assets/plugins/cameraslide/js/camera.js'></script>


		<!--BOOTSTRAP-->
    <script type="text/javascript" src="{$base_url}assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{$base_url}assets/plugins/liquid_carousel/index.js"></script>
<script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>		<!-- SYSTEM JS -->
        <script src="{$base_url}assets/js/app.js"></script>
        <script src="{$base_url}assets/js/app2.js"></script>
        <script src="{$base_url}assets/js/formvalidation.js"></script>

  </body>
  <script>
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

  </script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSFgNUtwBshWTCxko-h869uGKpVYcxjYw&callback=initMap"
    async defer></script>
    <script src="{$base_url}assets/plugins/Filterizr-master/link/filterizr/jquery.filterizr.js"></script>
    <script src="{$base_url}assets/plugins/Filterizr-master/link/js/controls.js"></script>
    <script src="{$base_url}assets/plugins/star_ratings/js/star-rating.js" type="text/javascript"></script>
</html>
