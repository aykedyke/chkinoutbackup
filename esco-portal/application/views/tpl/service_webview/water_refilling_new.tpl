{include file='../global_tpl/headerstyle.tpl'}


   <form method="POST" action="{$base_url}Services_webview/SucessSent" onSubmit="return formSubmit()" id="questionForm">

	  <div class="col-md-6 col-md-offset-3" style="padding:0;">
	  <div class="col-md-12 reviewForm">
	 <h3> Please review your Form </h3>
	  </div>
<!-- budget -->
<div class="col-md-12">
  <div class = "question-box2">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <h4>How much is your budget?</h4>
      <div class="col-sm-12">
        <input type="number" class="form-control" name="budget" placeholder="P" id="budget">
      </div>
      </div>
    </div>
    </div>
                     <div class="row">    <div class="col-md-12"><div class="break-line"></div></div></div>

    </div>

  </div>
  <div class="col-md-12"><div class="break-line"></div></div>
<div class="col-md-12">
  <div class = "question-box2">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <h4>Bidding Deadline</h4>
      <div class="col-sm-12">
        <input type="date" class="form-control " name="deadline" id="deadline">
      </div>
      </div>
    </div>
    </div>
                     <div class="row">    <div class="col-md-12"><div class="break-line"></div></div></div>

    </div>

  </div>
  <div class="col-md-12"><div class="break-line"></div></div>
<div class="col-md-12">
  <div class = "question-box2">
    <div class="row">
    <div class="col-md-12">
      <div class="form-group">
        <h4>Payment Type</h4>
      <div class="col-xs-6">
        <label class="col-md-12"><input type="radio" name="payment_type" value="cash"><span>&nbsp;</span>CASH</label>
        </div>
      <div class="col-xs-6">
        <label class="col-md-12"><input type="radio" name="payment_type" value="paypal"><span>&nbsp;</span>PAYPAL</label>
        </div>

      </div>
    </div>
    </div>
                     <div class="row">    <div class="col-md-12"><div class="break-line"></div></div></div>

    </div>

  </div>
  <div class="col-md-12"><div class="break-line"></div></div>

<!-- //budget -->
		<div class="col-md-12">
			<div class = "question-header" onClick="testthis();">
        <div class="row">
        <div class="col-md-12">
				<div class="col-xs-4 qnum">
					<span>01</span>
					<p>Question</p>
				</div>
				<div class="col-xs-8 question">
					<p>{$question[1]}<p>
					<input type="hidden" name="questions[]" value="{$question[0]}">
				</div>
			</div>
			</div>
			</div>
			<div class = "question-body">
				<div class="row" style="margin;0;padding:0;">
          <div class="col-xs-12">
							<div class="question-ans">
                <!-- answer -->
    					 <label class="col-xs-12">
                 <div class="col-xs-10">Purified</div>
                 <div class="col-xs-2 question-check">
                   <input type="checkbox" name="qf_1[]" value="Purified"><span>&nbsp;</span>
                 </div>
              </label>
              <label class="col-xs-12">
                <div class="col-xs-10">Mineral</div>
                <div class="col-xs-2 question-check">
                  <input type="checkbox" name="qf_1[]" value="Mineral" ><span>&nbsp;</span>
                </div>
             </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Distilled</div>
               <div class="col-xs-2 question-check">
                 <input type="checkbox" name="qf_1[]" value="Distilled" ><span>&nbsp;</span>
               </div>
            </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Alkaline </div>
               <div class="col-xs-2 question-check">
                 <input type="checkbox" name="qf_1[]" value="Alkaline"><span>&nbsp;</span>
               </div>
            </label>
               <!-- //answer -->

					</div>
				</div>
				</div>
			</div>

		</div>

    <div class="col-md-12"><div class="break-line"></div></div>
    <div class="col-md-12">
			<div class = "question-header" onClick="testthis();">
        <div class="row">
        <div class="col-md-12">
				<div class="col-xs-4 qnum">
					<span>02</span>
					<p>Question</p>
				</div>
				<div class="col-xs-8 question">
					<p>{$question[2]}<p>
				</div>
			</div>
			</div>
			</div>
			<div class = "question-body">
				<div class="row" style="margin;0;padding:0;">
          <div class="col-xs-12">
							<div class="question-ans">
                <!-- answer -->
    					 <label class="col-xs-12">
                 <div class="col-xs-10">Bottle</div>
                 <div class="col-xs-2 question-check">
                   <input type="checkbox" name="qf_2[]" value="Bottle" class="showHide_box"><span>&nbsp;</span>
                 </div>
              </label>
              <label class="col-xs-12">
                <div class="col-xs-10">Refillable</div>
                <div class="col-xs-2 question-check">
                  <input type="checkbox" name="qf_2[]" value="Refillable" class="showHide_box"><span>&nbsp;</span>
                </div>
             </label>

               <!-- //answer -->

					</div>
				</div>
				</div>
			</div>

		</div>
    <div class="col-md-12"><div class="break-line"></div></div>
    <div class="col-md-12 hidden-question">
      <div class = "question-header">
        <div class="row">
        <div class="col-md-12">
        <div class="col-xs-4 qnum">
          <span>03</span>
          <p>Question</p>
        </div>
        <div class="col-xs-8 question">
          <p>{$question[3]}<p>
          <input type="hidden" name="questions[]" value="{$question[2]}">
        </div>
      </div>
      </div>
      </div>
      <div class = "question-body">
        <div class="row" style="margin;0;padding:0;">
          <div class="col-xs-12">
              <div class="question-ans">
              <table class="table TableService">
                <thead>
                  <tr>
                    <td>Item</td>
                    <td>Quantity</td>

                  </tr>
                </thead>
                <tbody>
                <tr>
                  <th>Bubble bottle</th>
                  <input type="hidden" value="Bubble bottle" name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>

                </tbody>
                <tr>
                  <th>350 mL</th>
                  <input type="hidden" value="350 mL" name="qf_2[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>500 mL</th>
                  <input type="hidden" value="500 mL" name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>1 L</th>
                  <input type="hidden" value="1 L" name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>1.5 L</th>
                  <input type="hidden" value="1.5 L" name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>4 L</th>
                  <input type="hidden" value="4 L" name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>6 L </th>
                  <input type="hidden" value="6 L " name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>10 L</th>
                  <input type="hidden" value="10 L " name="qf_3[]">
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>
                <tr>
                  <th>  <input type="text" placeholder="Other(specify)" name="qf_3[]" class="form-control"></th>
                  <td><input type="text" name="qf_3[]" class="form-control" ></td>
                </tr>

                </tbody>
              </table>
              </div>
          </div>
        </div>
        </div>
      </div>
      <div class="col-md-12"><div class="break-line"></div></div>
      <div class="col-md-12 hidden-question">
        <div class = "question-header">
          <div class="row">
          <div class="col-md-12">
          <div class="col-xs-4 qnum">
            <span>04</span>
            <p>Question</p>
          </div>
          <div class="col-xs-8 question">
            <p>{$question[4]}<p>
            <input type="hidden" name="questions[]" value="{$question[2]}">
          </div>
        </div>
        </div>
        </div>
        <div class = "question-body">
          <div class="row" style="margin;0;padding:0;">
            <div class="col-xs-12">
                <div class="question-ans">
                <table class="table TableService">
                  <thead>
                    <tr>
                      <td>Item</td>
                      <td>Quantity</td>

                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>5 gallons for water dispenser</th>
                    <input type="hidden" value="5 gallons for water dispenser" name="qf_3[]">
                    <td><input type="text" name="qf_3[]" class="form-control" ></td>
                  </tr>

                  </tbody>
                  <tr>
                    <th>5 gallons with faucet</th>
                    <input type="hidden" value="5 gallons with faucet" name="qf_2[]">
                    <td><input type="text" name="qf_3[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>  <input type="text" placeholder="Other(specify)" name="qf_3[]" class="form-control"></th>
                    <td><input type="text" name="qf_3[]" class="form-control" ></td>
                  </tr>



                  </tbody>
                </table>
                </div>
            </div>
          </div>
          </div>
        </div>
        <div class="col-md-12"><div class="break-line"></div></div>

      <div class="col-md-12">
        <div class = "question-box">
          <div class="row">
          <div class="col-md-12">
            <div class="form-group">
            <h4>Delivery Address</h4>
            <div class="col-sm-12">
              <textarea class="form-control form_gray"  name="qf_4[]" cols="6"></textarea>
            </div>
            </div>
          </div>
          </div>
                           <div class="row">    <div class="col-md-12"><div class="break-line"></div></div></div>

          </div>

        </div>
        <div class="col-md-12"><div class="break-line"></div></div>

        <div class="col-md-12">
          <div class = "question-box">
            <div class="row">
            <div class="col-md-12">
              <div class="form-group">
              <h4>Additional instructions:</h4>
              <div class="col-sm-12">
                <textarea class="form-control form_gray"  name="qf_5[]" cols="6"></textarea>
              </div>
              </div>
            </div>
            </div>
                             <div class="row">    <div class="col-md-12"><div class="break-line"></div></div></div>

            </div>

          </div>



          <div class="col-md-12"><div class="break-line"></div></div>
<div class="row"></div>
            <div class="form-group continueBtn" >
              <input type = "hidden" name = "service_type" value = "{$service_type}" />
      	    	<input type = "hidden" name = "userid" value = "{$userid}" />
              <a class="btn btn-primary btn-block" name="save" onClick="showSummary()">SUBMIT</a>
            </div>
            <div class="form-group submitBtn" >
              <input type = "hidden" name = "service_type" value = "{$service_type}" />
      	    	<input type = "hidden" name = "userid" value = "{$userid}" />
      	    	<a class="btn btn-primary" name="save" onClick="cancelSubmit()">CANCEL</a>
              <button class="btn btn-primary" name="save">CONTINUE</button>
            </div>
		</div>
</form>


{include file='../global_tpl/footer_webview.tpl'}
<script>function cancelSubmit(){
	$('.continueBtn').show();
	$('.submitBtn').hide();
	$("question-check input:checkbox:not(:checked)").hide();
	 $('.reviewForm').hide();
	 $('.question-body').hide();
	 $('.question-body').removeClass('summary');
   $('.form-control').removeClass('summary');

	 $('.qnum').show();
	 $('.question-header').removeClass('summary');
	 $('.question').removeClass('summary');
	 var testStop = 0;
	    $('body').prepend('<div class="panel-layer"><div class="panel-box">Loading...</div></div>');

setInterval(function(){
	testStop++;
if(testStop == 3){
	$('.panel-layer').remove();
	$('.question-body').eq(0).show();
}

 }, 1000);


}
function showSummary(){
  allQuestion = 0;
budget =  $('#budget').val();
deadline =  $('#deadline').val();
var budget_input ='';
var deadline_input ='';
var pay_input ='';
if (!$("input[name='payment_type']").is(':checked')) {
  pay_input = 'Please input your Payment type'
  allQuestion++;

}
if(budget == ''){
  allQuestion++;
   budget_input = 'Please input your Budget';
}
if(deadline == ''){
  allQuestion++;
  deadline_input = 'Please input your Bidding deadline'
}

  $('.question-header').each(function(){
  if($(this).is(":visible")){
    var qheader = $( ".question-header" ).index( this );
    var qcheckbox = $('.question-body').eq(qheader).find("input:checkbox");
    if(qcheckbox.length != 0){
    	var chck_checkbox = 0;
    	qcheckbox.each(function(){
    		if($(this).prop('checked')){
    			chck_checkbox++;
    		}
    	});
    	if(chck_checkbox == 0){
        allQuestion++
      }

  }
  var qinputext = $('.question-body').eq(qheader).find("input:text");
  if(qinputext.length != 0){
    var chk_input = 0;
    qinputext.each(function(){
      if($(this).val() != ''){
        chk_input++;
      }

    });
    if(chk_input == 0){
        allQuestion++;
      }
  }
  var qradio = $('.question-body').eq(qheader).find("input:radio");
  if(qradio.length != 0){
  if(qradio.prop('checked')) {

    }else{
   allQuestion++;

  }
 }


  }
  });
  if(allQuestion == 0){


$('body').scrollTop(0);
$('.continueBtn').hide();
$('.submitBtn').show();
$(".question-check input:checkbox:not(:checked)").hide();
 $('.reviewForm').show();
 $('.question-body').show();
 $('.question-body').addClass('summary');
 $('.form-control').addClass('summary');
 $('.qnum').hide();
 $('.question-header').addClass('summary');
 $('.question').addClass('summary');
 $('input').css('border = 0')
 var testStop = 0;
    $('body').prepend('<div class="panel-layer"><div class="panel-box">Loading...</div></div>');

setInterval(function(){
testStop++;
if(testStop == 3){
$('.panel-layer').remove();
}

}, 1000);
}else{
$('body').prepend('<div class="panel-layer"><div class="panel-box" ><p>'+budget_input+'</p><p>'+deadline_input+'</p><p>'+pay_input+'</p><p>Please answer all the questions</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
}
}
function showSummary2(){
		allQuestion = $('.question-body').length;
	var checkQuestion = 0;
		$('.question-body').each(function(){
		if($(this).is(":hidden")){
		checkQuestion++;
		}
	});
		if(checkQuestion == allQuestion){


	$('body').scrollTop(0);
	$('.continueBtn').hide();
	$('.submitBtn').show();
	$(".question-check input:checkbox:not(:checked)").hide();
	 $('.reviewForm').show();
	 $('.question-body').show();
	 $('.question-body').addClass('summary');
	 $('.qnum').hide();
	 $('.question-header').addClass('summary');
	 $('.question').addClass('summary');
	 $('input').css('border = 0')
	 var testStop = 0;
	    $('body').prepend('<div class="panel-layer"><div class="panel-box">Loading...</div></div>');

setInterval(function(){
	testStop++;
if(testStop == 3){
	$('.panel-layer').remove();
}

 }, 1000);
}else{
  $('body').prepend('<div class="panel-layer"><div class="panel-box" ><p>please close the questions</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
}


}

function closepanel(){
	$('.panel-layer').remove();
}
$(window).load(function() {
$('.question-body').eq(0).show();
  $("input.showHide_box").click(function(){

      var countbox = $("input.showHide_box").index(this);
      $('.hidden-question').eq(countbox).fadeToggle("fast","linear");
      var count_qnum = $('input.showHide_box:checked').length;
      $('.hidden-question').eq(countbox).find(".question-header").find(".row").find(".col-md-12 span").html(count_qnum+1);


  });
$( ".question-header" ).click(function() {
  var qheader = $( ".question-header" ).index( this );

  $('.question-body').eq(qheader).slideToggle( "fast", "linear" );
  $('.question-body').eq(qheader + 1).slideToggle( "fast", "linear" );
});


});
</script>
