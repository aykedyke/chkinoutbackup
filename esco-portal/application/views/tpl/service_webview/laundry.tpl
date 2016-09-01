{include file='../global_tpl/headerstyle.tpl'}


   <form method="POST" action="{$base_url}Services_webview/SucessSent" onSubmit="return formSubmit()">

	  <div class="col-md-12">
<!-- budget -->
	  <div class="col-md-12">
		 	 	<h4 >How much is your budget?</h4>
			<div class="form-horizontal">
			<div class="form-group">
				<div class="col-sm-12">
					<input type="text" class="form-control form_gray" name="budget" placeholder="P">
				</div>
				</div>
			</div>
		</div>
<!-- //budget -->
		<div class="col-md-12">
			<div class = "question-header">
				<div class="col-xs-4 qnum">
					<span>01</span>
					<p>Question</p>
				</div>
				<div class="col-xs-8 question">
					<p>What type of washing / cleaning service do you need? (Please tick all that apply.)<p>
				</div>
			</div>
			<div class = "question-body">
				<div class="row" style="margin;0;padding:0;">
          <div class="col-xs-12">
							<div class="question-ans">
                <!-- answer -->
    					 <label class="col-xs-12">
                 <div class="col-xs-10">Regular wash and fold</div>
                 <div class="col-xs-2 question-radio">
                   <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
                 </div>
              </label>
              <label class="col-xs-12">
                <div class="col-xs-10">Regular wash and press</div>
                <div class="col-xs-2 question-radio">
                  <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
                </div>
             </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Special wash (for delicates, comforters, bulky items, and heavy-soil items) </div>
               <div class="col-xs-2 question-radio">
                 <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
               </div>
            </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Dry cleaning </div>
               <div class="col-xs-2 question-radio">
                 <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
               </div>
            </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Special care (for signature items, individually packed) </div>
               <div class="col-xs-2 question-radio">
                 <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
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
			<div class = "question-header">
				<div class="col-xs-4 qnum">
					<span>02</span>
					<p>Question</p>
				</div>
				<div class="col-xs-8 question">
					<p>For regular wash and fold, indicate the number of items:<p>
				</div>
			</div>
			<div class = "question-body">
        <div class="row" style="margin;0;padding:0;">
          <div class="col-xs-12">
							<div class="question-ans">
              <table class="table TableService">
                <thead>
                  <tr>
                    <td></td>
                    <td>White</td>
                    <td>Colored</td>
                    <td>Total</td>
                  </tr>
                </thead>
                <tr>
                  <th>T-Shirt</th>
                  <input type="hidden" value="T-Shirt" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Polo Shirt</th>
                  <input type="hidden" value="Polo Shirt" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Polo</th>
                  <input type="hidden" value="Polo" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Longsleves</th>
                  <input type="hidden" value="Longsleves" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Pants</th>
                  <input type="hidden" value="Pants" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Shorts</th>
                  <input type="hidden" value="Shorts" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Blouse</th>
                  <input type="hidden" value="Blouse" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Dress</th>
                  <input type="hidden" value="Dress" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Socks</th>
                  <input type="hidden" value="Socks" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Towels</th>
                  <input type="hidden" value="Towels" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount"  ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                <tr>
                  <th>Blankets</th>
                  <input type="hidden" value="Blankets" name="qf_2[]">
                  <td><input type="text" name="qf_2[]" class="form-control fCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" ></td>
                  <td><input type="text" name="qf_2[]" class="form-control theTotal"  readonly></td>
                </tr>
                </tbody>
              </div>
					</div>
				</div>
				</div>
			</div>

		</div>



{include file='../global_tpl/footer_webview.tpl'}
