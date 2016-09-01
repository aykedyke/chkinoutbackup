<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 04:16:45
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/footer_webview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:39375840957465e46087389-76408372%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77b8e43eea1a857680ff964c89eeae4dd57f5964' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/footer_webview.tpl',
      1 => 1466673398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39375840957465e46087389-76408372',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57465e460e3d35_85964459',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57465e460e3d35_85964459')) {function content_57465e460e3d35_85964459($_smarty_tpl) {?>
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
assets/js/formvalidation.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
>
$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

function popupalert(){

	alert('working');
}
jQuery(function(){

      jQuery('#camera_wrap_3').camera({
        height: '26%',
        pagination: false,
      });

    });
function questioner(id,id2){
var checkinputAll = 0;

  if($('input.qf_1-1').prop('checked')) {
          checkinputAll++;
         $('.qf-1_a').show();
   }else{
        $('.qf-1_a').hide();
   }
   if ($('input.qf_1-2').prop('checked')) {
                checkinputAll++;

        $('.qf-1_b').show();
   }else{
        $('.qf-1_b').hide();
   }

   if ($('input.qf_1-3').prop('checked')) {
                checkinputAll++;

        $('.qf-1_c').show();
   }else{
        $('.qf-1_c').hide();
   }
   if ($('input.qf_1-4').prop('checked')) {

        $('.qf-1_d').show();
   }else{
        $('.qf-1_d').hide();
   }
   if ($('input.qf_1-5').prop('checked')) {
                checkinputAll++;

        $('.qf-1_e').show();
   }else{
        $('.qf-1_e').hide();
   }

   if(checkinputAll != 0){
  $('.'+id+'').hide("slide", { direction: "left" }, 100);
  $('.'+id2+'').show();
     }else{
      alert('Please Choose type of service')
     }


}
function ShowHide(id){
if ($('input.'+id+'').prop('checked')) {

        $('.hdshw_'+id+'').removeClass('hide');
   }else{
        $('.hdshw_'+id+'').addClass('hide');
   }

}
function qf_back(id,id2){

  $('.'+id+'').hide("slide", { direction: "right" }, 1000);
  $('.'+id2+'').show("slide", { direction: "left" }, 2000);

}
function questioner_1(){
  var showpage2 = 0
    if ($('input.qf_1-1').prop('checked')) {

         $('.qf-1_a').show();
   }else{
        $('.qf-1_a').hide();
   }
   if ($('input.qf_1-2').prop('checked')) {

        $('.qf-1_b').show();
   }else{
        $('.qf-1_b').hide();
   }
     if ($('input.qf_1-3').prop('checked')) {

        $('.qf-1_c').show();
   }else{
        $('.qf-1_c').hide();
   }
   if ($('input.qf_1-4').prop('checked')) {

        $('.qf-1_d').show();
   }else{
        $('.qf-1_d').hide();
   }

}
$('.numOnly').keyup(function(event){ event.preventDefault();
	if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
		$(this).val(0);
}
});
  $('.fCount').keyup(function(event){ event.preventDefault();
   var index = $( ".fCount" ).index( this );
   var fCount = document.getElementsByClassName('fCount');
   var sCount = document.getElementsByClassName('sCount');
   if(fCount[index].value == ''){
    ValfCount = 0;
   }else{
   var ValfCount = fCount[index].value;
 }
 if(sCount[index].value == ''){
  ValsCount = 0;
 }else{
   var ValsCount = sCount[index].value;
 }
   var theTotal = document.getElementsByClassName('theTotal');

    theTotal[index].value = parseInt(ValfCount) + parseInt(ValsCount);
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
	 //display error message
	 fCount[index].value = '';
	 theTotal[index].value = parseInt(ValsCount);
}



  });
    $('.sCount').keyup(function(event){ event.preventDefault();
   var index = $( ".sCount" ).index( this );
   var fCount = document.getElementsByClassName('fCount');
   var sCount = document.getElementsByClassName('sCount');
   var ValfCount = fCount[index].value;
   var ValsCount = sCount[index].value;
	 if(fCount[index].value == ''){
		ValfCount = 0;
	 }else{
	 var ValfCount = fCount[index].value;
 }
 if(sCount[index].value == ''){
	ValsCount = 0;
 }else{
	 var ValsCount = sCount[index].value;
 }
   var theTotal = document.getElementsByClassName('theTotal');

    theTotal[index].value = parseInt(ValfCount) + parseInt(ValsCount);
		if (event.which != 8 && event.which != 0 && (event.which < 48 || event.which > 57)) {
		//display error message
		sCount[index].value = 0;
		theTotal[index].value = parseInt(ValfCount);
		}
  });

<?php echo '</script'; ?>
>
<div id="spacing"></div>
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
</html>
<?php }} ?>
