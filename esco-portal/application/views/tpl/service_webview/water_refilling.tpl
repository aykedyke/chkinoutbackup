{include file='../global_tpl/headerstyle.tpl'}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
    <div class="container">
   <form method="POST" action="{$base_url}Services_webview/SucessSent">
   <div class="qf-1">
     <div class="row">


          <div class="col-md-12">
          <h4>How much is your budget?</h4>
        <div class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
          <input type="text" class="form-control form_gray" name="budget" placeholder="P">
          </div>
          </div>

        </div>
      </div>
     </div>
     <div class="col-md-12">
         <h4>Bidding Deadline</h4>
       <div class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-12">
           <input type="date" class="form-control form_gray " name="deadline" placeholder="P">
         </div>
         </div>
       </div>
     </div>
	  <div class="row">
<div id="accordion">

  <h3>QUESTION 1</h3>
  <div>
    <div class="col-md-12">

			<h4>What type of drinking water do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Purified"><span>&nbsp;</span>Purified</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Mineral"><span>&nbsp;</span>Mineral</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Distilled" ><span>&nbsp;</span>Distilled</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]" value="Alkaline"><span>&nbsp;</span>Alkaline</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_1[]"  value="Other(Specify)"><span>&nbsp;</span>Other (Specify)</label>
					</div>
				</div>
	 	 </div>
  </div>
  <h3>QUESTION 2</h3>
  <div>
<div class="col-md-12">

			<h4>What type of water container do you need?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <label class="col-xs-12"><input type="checkbox" name="qf_2[]" onClick="questioner_1()" value="Bottle" class="qf_1-1" ><span>&nbsp;</span>Bottle</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_2[]" onClick="questioner_1()" value="Refillable" class="qf_1-2"><span>&nbsp;</span>Refillable</label>
						 <label class="col-xs-12"><input type="checkbox" name="qf_2[]" onClick="questioner_1()" value="Other"  class="qf_1-3"><span>&nbsp;</span>Other (specify)</label>

					</div>
				</div>
	 	 </div>
  </div>
  <h3>QUESTION 3</h3>
  <div>
<div class="col-md-12">
		 	 	<h5>Delivery address:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_5"></textarea>
					</div>
		 	 	</div>
		 	 	<div class="col-md-12">
		 	 	<h5>Additional instruction:</h5>
					<div class="col-lg-7">
						<textarea class="form-control form_gray"  name="qf_6"></textarea>
					</div>
		 	 	</div>
  </div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="btn-group" style="float:right;">
				<input type="hidden" name="service_type" value="{$service_type}">
				<input type="hidden" name="userid" value="{$userid}">
					<button name="save" class="btn btn-primary">CONTINUE</button>
				</div>
				</div>
				</div>

			</form>
	  </div>
  </div>

{include file='../global_tpl/footer_webview.tpl'}
