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

<!-- //budget -->
		<div class="col-md-12 ">
			<div class = "question-header">
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
                 <div class="col-xs-10">Regular wash and fold</div>
                 <div class="col-xs-2 question-check">
                   <input type="checkbox" name="qf_1[]" value="Regular wash and fold" class="showHide_box"><span>&nbsp;</span>
                 </div>
              </label>
              <label class="col-xs-12">
                <div class="col-xs-10">Regular wash and press</div>
                <div class="col-xs-2 question-check">
                  <input type="checkbox" name="qf_1[]" value="Regular wash and press" class="showHide_box"><span>&nbsp;</span>
                </div>
             </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Special wash (for delicates, comforters, bulky items, and heavy-soil items) </div>
               <div class="col-xs-2 question-check">
                 <input type="checkbox" name="qf_1[]" value="Special wash (for delicates, comforters, bulky items, and heavy-soil items)" class="showHide_box"><span>&nbsp;</span>
               </div>
            </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Dry cleaning </div>
               <div class="col-xs-2 question-check">
                 <input type="checkbox" name="qf_1[]" value="Dry cleaning" class="showHide_box"><span>&nbsp;</span>
               </div>
            </label>
             <label class="col-xs-12">
               <div class="col-xs-10">Special care (for signature items, individually packed) </div>
               <div class="col-xs-2 question-check">
                 <input type="checkbox" name="qf_1[]" value="Special care (for signature items, individually packed) " class="showHide_box"><span>&nbsp;</span>
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
					<span>02</span>
					<p>Question</p>
				</div>
				<div class="col-xs-8 question">
					<p>{$question[2]}<p>
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
                    <td></td>
                    <td>White</td>
                    <td>Colored</td>
                    <td>Total</td>
                  </tr>
                </thead>
                <tbody>
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
            <span>03</span>
            <p>Question</p>
          </div>
          <div class="col-xs-8 question">
            <p>{$question[3]}<p>
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
                      <td></td>
                      <td>White</td>
                      <td>Colored</td>
                      <td>Total</td>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
          					<th>T-Shirt</th>
          					<input type="hidden" value="T-Shirts" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Polo Shirt</th>
          					<input type="hidden" value="Polo Shirt" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Polo</th>
          					<input type="hidden" value="Polo" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Longsleves</th>
          					<input type="hidden" value="Longsleves" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Pants</th>
          					<input type="hidden" value="Pants" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Shorts</th>
          					<input type="hidden" value="Shorts" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Blouse</th>
          					<input type="hidden" value="Blouse" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
          				</tr>
          				<tr>
          					<th>Dress</th>
          					<input type="hidden" value="Dress" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control"  readonly></td>
          				</tr>
          				<tr>
          					<th>Socks</th>
          					<input type="hidden" value="Socks" name="qf_3[]">
          					<td><input type="text" name="qf_3[]" class="form-control fCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control sCount" ></td>
          					<td><input type="text" name="qf_3[]" class="form-control theTotal"  readonly></td>
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
                      <td></td>
                      <td>White</td>
                      <td>Colored</td>
                      <td>Total</td>
                    </tr>
                  </thead>
                  <tbody>
          				<tr>
          					<th>Delicates</th>
          					<input type="hidden" value="Delicates" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Curtains</th>
          					<input type="hidden" value="Curtains" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Seat covers</th>
          					<input type="hidden" value="Seat Covers" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Table cloths</th>
          					<input type="hidden" value="Table cloths" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Draperies</th>
          					<input type="hidden" value="Draperies" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Heavy soil</th>
          					<input type="hidden" value="Heavy soil" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control"  ></td>
          					<td><input type="text" name="qf_4[]" class="form-control"  ></td>
          				</tr>
          				<tr>
          					<th>Items</th>
          					<input type="hidden" value="Items" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Comforters</th>
          					<input type="hidden" value="Comforters" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Carpet</th>
          					<input type="hidden" value="Carpet" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Pillow</th>
          					<input type="hidden" value="Pillow" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Stuff Toys</th>
          					<input type="hidden" value="Stuff Toys" name="qf_4[]">
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
          					<td><input type="text" name="qf_4[]" class="form-control" ></td>
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
            <span>05</span>
            <p>Question</p>
          </div>
          <div class="col-xs-8 question">
            <p>{$question[5]}<p>
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
                      <td></td>
                      <td>White</td>
                      <td>Colored</td>
                      <td>Total</td>
                    </tr>
                  </thead>
                  <tbody>
          				<tr>
          					<th>Barong Jusi</th>
          					<input type="hidden" value="Barong Jusi" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Barong Pina</th>
          					<input type="hidden" value="Barong Pina" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          				</tr>
          				<tr>
          					<th>Barong Ramie</th>
          					<input type="hidden" value="Barong Ramie" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control"   ></td>
          				</tr>
          				<tr>
          					<th>Suit (Top)</th>
          					<input type="hidden" value="Suit (Top)" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control"   ></td>
          					<td><input type="text" name="qf_5[]" class="form-control"   ></td>
          					<td><input type="text" name="qf_5[]" class="form-control"  ></td>
          				</tr>
          				<tr>
          					<th>Suit (Trousers)</th>
          					<input type="hidden" value="Suit (Trousers)" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control"   ></td>
          				</tr>
          				<tr>
          					<th>Wedding Gown</th>
          					<input type="hidden" value="Suit (Wedding Gown)" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control"  ></td>
          					<td><input type="text" name="qf_5[]" class="form-control"  ></td>
          					<td><input type="text" name="qf_5[]" class="form-control"  ></td>
          				</tr>
          				<tr>
          					<th>Gown</th>
          					<input type="hidden" value="Suit (Gown)" name="qf_5[]">
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
          					<td><input type="text" name="qf_5[]" class="form-control" ></td>
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
            <span>06</span>
            <p>Question</p>
          </div>
          <div class="col-xs-8 question">
            <p>{$question[6]}<p>
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
                      <td></td>
                      <td>White</td>
                      <td>Colored</td>
                      <td>Total</td>
                    </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>T-Shirt</th>
                    <input type="hidden" value="T-Shirts" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>Polo Shirt</th>
                    <input type="hidden" value="Polo Shirt" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>Polo Longsleeves</th>
                    <input type="hidden" value="Polo Longsleeves" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>Pants</th>
                    <input type="hidden" value="Pants" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>Shorts</th>
                    <input type="hidden" value="Shorts" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>Blouse</th>
                    <input type="hidden" value="Blouse" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                  </tr>
                  <tr>
                    <th>Dress</th>
                    <input type="hidden" value="Dress" name="qf_6[]">
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
                    <td><input type="text" name="qf_6[]" class="form-control" ></td>
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
              <span>07</span>
              <p>Question</p>
            </div>
            <div class="col-xs-8 question">
              <p>{$question[7]}<p>
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
                     <div class="col-xs-10">Yes</div>
                     <div class="col-xs-2 question-radio">
                       <input type="radio" name="qf_7[]" value="Purified"><span>&nbsp;</span>
                     </div>
                  </label>
                  <label class="col-xs-12">
                    <div class="col-xs-10">No</div>
                    <div class="col-xs-2 question-radio">
                      <input type="radio" name="qf_7[]" value="Purified"><span>&nbsp;</span>
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
              <span>08</span>
              <p>Question</p>
            </div>
            <div class="col-xs-8 question">
              <p>{$question[8]}<p>
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
                     <div class="col-xs-10">Yes</div>
                     <div class="col-xs-2 question-radio">
                       <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
                     </div>
                  </label>
                  <label class="col-xs-12">
                    <div class="col-xs-10">No</div>
                    <div class="col-xs-2 question-radio">
                      <input type="radio" name="qf_1[]" value="Purified"><span>&nbsp;</span>
                    </div>
                  </label>
                   <!-- //answer -->
                   <div class="row"></div>
                  <div class="col-md-12">
                  <div class="form-horizontal">
                     <div class="form-group">
                     <label class="col-sm-3">Pick up Address</label>
                     <div class="col-sm-9">
                       <textarea class="form-control form_gray"  name="qf_9[]" cols="6"></textarea>
                     </div>
                     </div>
                     <div class="form-group">

                     <label class="col-sm-3">Delivery Address</label>
                     <div class="col-sm-9">
                       <textarea class="form-control form_gray"  name="qf_10[]" cols="6"></textarea>
                     </div>
                   </div>
                   </div>
                   </div>
                   </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class = "question-box2">
            <div class="row">
            <div class="col-md-12">
              <div class="form-group">
              <h4>Additional instruction</h4>
              <div class="col-sm-12">
                <textarea class="form-control form_gray"  name="qf_9[]" cols="6"></textarea>
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
<script>
function cancelSubmit(){
	$('.continueBtn').show();
	$('.submitBtn').hide();
	$("question-check input:checkbox:not(:checked)").hide();
	 $('.reviewForm').hide();
	 $('.question-body').hide();
	 $('.question-body').removeClass('summary');
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
if(budget == ''){
  allQuestion++;
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
$('body').prepend('<div class="panel-layer"><div class="panel-box" ><p>please fill all the fields</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
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

var allqheader
	   var qheader = $( ".question-header" ).index( this );


   var qcheckbox = $('.question-body').eq(qheader).find("input:checkbox");
   if(qcheckbox.length != 0){
   	var chck_checkbox = 0;
   	qcheckbox.each(function(){
   		if($(this).prop('checked')){
   			chck_checkbox++;
   		}
   	});
   	if(chck_checkbox != 0){
			$('.question-body').eq(qheader).slideToggle( "fast", "linear" );
			$('.question-body').eq(qheader + 1).slideToggle( "fast", "linear" );

     }else{
  $('body').prepend('<div class="panel-layer"><div class="panel-box" ><p>please input the fields</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
       	      $('.question-body').eq(qheader).show();
     	         $('.question-body').eq(qheader - 1).hide();

     }

 }
 var qradio = $('.question-body').eq(qheader).find("input:radio");
 if(qradio.length != 0){
 if(qradio.prop('checked')) {
   $('.question-body').eq(qheader).slideToggle( "fast", "linear" );
 }else{
  $('body').prepend('<div class="panel-layer"><div class="panel-box" ><p>please input the fields</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
          	      $('.question-body').eq(qheader).show();
         	      $('.question-body').eq(qheader - 1).hide();

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
  $('body').prepend('<div class="panel-layer"><div class="panel-box" ><p>please input the fields</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
           	      $('.question-body').eq(qheader).show();
         	      $('.question-body').eq(qheader - 1).hide();

  }else{
    $('.question-body').eq(qheader).slideToggle( "fast", "linear" );
    $('.question-body').eq(qheader + 1).slideToggle( "fast", "linear" );
  }
}

});


});
</script>
