<!DOCTYPE html>
<!-- Camera is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) --> 
<html> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" > 
    <title>Camera | a free jQuery slideshow by Pixedelic</title> 
   
    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
            <link href="../../css/jumbotron.css" rel="stylesheet" type="text/css" />

    <link rel='stylesheet' href='css/camera.css' type='text/css' media='all'> 
    <style>
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 90%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 

 
</head>
<body>

    
    <div style="clear:both; display:block; height:100px"></div>
	<div class="fluid_container">
        <div class="camera_wrap camera_emboss" id="camera_wrap_3">
            <div data-thumb="../../images/1.png" data-src="../../images/1.png">
            	<iframe src="http://player.vimeo.com/video/2203727" width="100%" height="100%" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
        
        </div><!-- #camera_wrap_3 -->

    </div><!-- .fluid_container -->
    
    <div style="clear:both; display:block; height:100px"></div>
        <script type="text/javascript" src="../jQuery/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="../jQuery/jquery-migrate-1.0.0.js"></script>
        <script type="text/javascript" src="../jQuery/jquery-ui-1.10.0.custom.min.js"></script>
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='js/camera.js'></script> 
    
    <script>
        jQuery(function(){
            
            jQuery('#camera_wrap_3').camera({
                height: '26%',
                pagination: false,
            });

        });
    </script></body> 
</html>