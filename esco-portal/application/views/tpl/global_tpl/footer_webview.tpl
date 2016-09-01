
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
        <script src="{$base_url}assets/js/formvalidation.js"></script>

        <script>
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

</script>
<div id="spacing"></div>
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
</html>
