<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 07:25:18
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/sp_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:827642755571064f5d2a196-57715034%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93957283942a5bf7ca59e302aa1a8fbe3e8e29b2' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/sp_footer.tpl',
      1 => 1466684685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '827642755571064f5d2a196-57715034',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571064f5d51c42_40607594',
  'variables' => 
  array (
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571064f5d51c42_40607594')) {function content_571064f5d51c42_40607594($_smarty_tpl) {?>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/fullcalendar/fullcalendar.min.js"><?php echo '</script'; ?>
>
		 <!-- FLOT CHARTS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/flot/jquery.flot.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"><?php echo '</script'; ?>
>

		<!--BOOTSTRAP-->
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"><?php echo '</script'; ?>
>

		<!-- SYSTEM JS -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/js/dashboard.js"><?php echo '</script'; ?>
>
	    <!-- Menu Toggle Script -->
	    <?php echo '<script'; ?>
>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });

	    <?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
>
			$(".showBid").click(function(e) {
				e.preventDefault();
				$('.priceBid').toggleClass("hide");

			});
			$("#add_btn").click(function(e) {
	        e.preventDefault();
	        		var id = $(this).attr('data-id');
	        		var datapage = $(this).attr('data-page');
	        		var ads_type = $(this).attr('data-adsType');

	        data2 = {
					'id' : id,
					'datapage' : datapage,
					'ads_type' : ads_type
				};
				$.ajax({
			type: "POST",
			url:base_url+"serviceprovider/"+datapage+"",
			data: data2,
				beforeSend: function() {
				},
				success : function (res) {
					$(".right-side").html(res);
				}
			});
		});
		$("#add_btn_mobile").click(function(e) {
				e.preventDefault();
						var id = $(this).attr('data-id');
						var datapage = $(this).attr('data-page');
						var ads_type = $(this).attr('data-adsType');

				data2 = {
				'id' : id,
				'datapage' : datapage,
				'ads_type' : ads_type
			};
			$.ajax({
		type: "POST",
		url:base_url+"serviceprovider/"+datapage+"",
		data: data2,
			beforeSend: function() {
			},
			success : function (res) {
				$(".right-side").html(res);
			}
		});
	});
	$("#add_btn_web").click(function(e) {
			e.preventDefault();
					var id = $(this).attr('data-id');
					var datapage = $(this).attr('data-page');
					var ads_type = $(this).attr('data-adsType');

			data2 = {
			'id' : id,
			'datapage' : datapage,
			'ads_type' : ads_type
		};
		$.ajax({
	type: "POST",
	url:base_url+"serviceprovider/"+datapage+"",
	data: data2,
		beforeSend: function() {
		},
		success : function (res) {
			$(".right-side").html(res);
		}
	});
});
	    $("#button-add-service").click(function(e) {
	        e.preventDefault();
	        		var id = $(this).attr('data-id');

	        data2 = {
					'id' : id
				};
				$.ajax(                                         {
			type: "POST",
			url:base_url+"serviceprovider/add_service",
			data: data2,
				beforeSend: function() {
				},
				success : function (res) {
					$(".right-side").html(res);
				}
			});
		});
		  $(".button-edit-service").click(function(e) {
	        e.preventDefault();
	        		var id = $(this).attr('data-id');

	        data2 = {
					'id' : id
				};
				$.ajax({
			type: "POST",
			url:base_url+"serviceprovider/view_service",
			data: data2,
				beforeSend: function() {
				},
				success : function (res) {
					$(".right-side").html(res);
				}
			});
		});
		  $(".nav-bids").click(function(e) {
		  var id = $(this).attr('data-id');

	        e.preventDefault();
	        $('.nav-bids').removeClass('active');
	        $(this).addClass('active');

	        $('.contentpage').addClass('hide');
	        $('.'+id+'').removeClass('hide');



		});

	    <?php echo '</script'; ?>
>
	    <?php echo '<script'; ?>
>
var interval2;
function showCalendar(page) {
var data2 = {

		page:page
	}
	$.ajax({
		type: "POST",
		url:base_url+"ajax/calendar.php",
		data: data2,
		beforeSend: function() {
		},
		success : function (res) {
			$('#myCalendar').html(res);
		}
	});
}
function ShowLiveBids(id,transcode,currentAmount) {
	$('body').append('<div class="panel-layer"></div>');

	interval2 = setInterval(function(){
		var panelLayer = $('.panel-layer').html();
var data2 = {

		id:id,
		transcode:transcode,
		currentAmount:currentAmount
	}
	$.ajax({
		type: "POST",
		url:base_url+"serviceprovider/ShowLiveBids",
		data: data2,
		beforeSend: function() {
		},
		success : function (res) {
			if(panelLayer != res){
			$('.panel-layer').html(res);
		}

		}
	});
	 }, 3000);
}
function editAmountBids(id,transcode,currentAmount,id2){
var data2 = {

		id:id,
		id2:id2,
		transcode:transcode,
		currentAmount:currentAmount
	}
	$.ajax({
		type: "POST",
		url:base_url+"serviceprovider/editAmountBids",
		data: data2,
		beforeSend: function() {
		},
		success : function (res) {
			$('.panel-layer').html(res);

		}
	});
	clearInterval(interval2);

}
function ConfirmService(id,status){

	var data2 = {

			id:id,
			status:status
				}
	$.ajax({
		type: "POST",
		url:base_url+"serviceprovider/ConfirmService",
		data: data2,
		beforeSend: function() {
		},
		success : function (res) {
			alert("Service succesfully Confirmed!");
			$('#jo_id_'+id).html(status);
			$('.jo_id_'+id).hide();

		}
	});

}
function saveEditAmount(){
	var id = $('#trans_id').val();
	var id2 = $('#id2').val();
	var transcode = $('#transcode').val();
	var amount = $('#amount').val();
	var data2 = {

		id:id,
		amount:amount,
		save:'save',
	}

	$.ajax({
		type: "POST",
		url:base_url+"serviceprovider/editAmountBids",
		data: data2,
		beforeSend: function() {
		},
		success : function (res) {
			$('.panel-layer').remove();
			alert("Amount succesfully Changed!");
			ShowLiveBids(id2,transcode,amount);


		}
	});
}

function ClosePanel(){
	$('.panel-layer').remove();
	clearInterval(interval2);

}
<?php echo '</script'; ?>
>
    	</div>
    </body>
</html>
<?php }} ?>
