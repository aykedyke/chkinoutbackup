
		<!--JQUERY-->
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-migrate-1.0.0.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-ui-1.10.0.custom.min.js"></script>
		<script type="text/javascript" src="{$base_url}assets/plugins/fullcalendar/fullcalendar.min.js"></script>
		 <!-- FLOT CHARTS -->
        <script src="{$base_url}assets/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="{$base_url}assets/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="{$base_url}assets/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="{$base_url}assets/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>

		<!--BOOTSTRAP-->
		<script type="text/javascript" src="{$base_url}assets/plugins/bootstrap-3.3.2/js/bootstrap.min.js"></script>

		<!-- SYSTEM JS -->
        <script src="{$base_url}assets/js/dashboard.js"></script>
	    <!-- Menu Toggle Script -->
	    <script>
	    $("#menu-toggle").click(function(e) {
	        e.preventDefault();
	        $("#wrapper").toggleClass("toggled");
	    });

	    </script>
	    <script>
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

	    </script>
	    <script>
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
</script>
    	</div>
    </body>
</html>
