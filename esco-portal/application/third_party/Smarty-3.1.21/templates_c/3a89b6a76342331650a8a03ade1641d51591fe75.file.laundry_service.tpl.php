<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-26 20:45:01
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/laundry_service.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3033498385710e72e9e2d42-81401720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a89b6a76342331650a8a03ade1641d51591fe75' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/laundry_service.tpl',
      1 => 1466991897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3033498385710e72e9e2d42-81401720',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5710e72ea887b4_13687343',
  'variables' => 
  array (
    'base_url' => 0,
    'question' => 0,
    'userid' => 0,
    'service_type' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5710e72ea887b4_13687343')) {function content_5710e72ea887b4_13687343($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/header_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<style>
  body{
    background:#fff;
  }
</style>
<div class="panel-layer2 terms">

  <div class="panel panel-default terms-body">
    <div class="panel-heading" style="text-align:center;">
      TERMS & CONDITIONS
    </div>
    <div class="panel-body">
    <p style="max-height:200px;overflow:auto;"> mauris a mauris ultrices interdum eu vel felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;

      Proin in nisl iaculis, lacinia turpis ac, dignissim metus. Curabitur eget elit sed nisl hendrerit facilisis. Suspendisse lacinia pretium eros, vitae porta libero. Integer sodales varius ornare. Pellentesque laoreet tellus urna, id egestas augue venenatis semper. Donec gravida auctor leo, quis iaculis tortor fringilla ut. Morbi eleifend at velit ac lobortis. Pellentesque bibendum libero ut rhoncus mattis. Phasellus velit neque, tincidunt eget ipsum ac, cursus tincidunt ligula. Fusce laoreet ipsum vitae est aliquam, a finibus sem faucibus. Proin elementum sollicitudin ipsum id pellentesque. Nulla ut tellus vitae nulla dignissim pharetra. Quisque hendrerit quam sit amet imperdiet auctor. Proin elementum purus id nisl venenatis, nec hendrerit sem cursus. Praesent vulputate sed lorem at pulvinar.</p>
      <div id="spacing"></div>

      <div class="form-group" style="text-align:center" >
        <button class="btn btn-primary" onClick="AcceptTerms()">ACCEPT</button>
        <button class="btn btn-primary">DECLINE</button>
      </div>
    </div>
  </div>


</div>
<div id="spacing"></div>
<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
Services" id="questionForm">

	  <div class="col-md-6 col-md-offset-3" style="padding:0;">
	  <div class="col-md-12 reviewForm">
	 <h3> Please review your Form </h3>
	  </div>
<!-- budget -->
<div class="col-md-12">
  <div class = "question-box2">
    <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <h4>How much is your budget?</h4>
      <div class="col-sm-12">
        <input type="text" class="form-control numOnly" name="budget" placeholder="P" id="budget">
      </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        <h4>Bidding Deadline</h4>
      <div class="col-sm-12">
        <select class="form-control " name="deadline" id="deadline">

          <option>5 hrs</option>
          <option>6 hrs</option>
          <option>7 hrs</option>
          <option>8 hrs</option>
          <option>9 hrs</option>
          <option>10 hrs</option>
          <option>11 hrs</option>
          <option>12 hrs</option>
          <option>13 hrs</option>
          <option>14 hrs</option>
          <option>15 hrs</option>
          <option>16 hrs</option>
          <option>17 hrs</option>
          <option>18 hrs</option>
          <option>19 hrs</option>
          <option>20 hrs</option>
          <option>21 hrs</option>
          <option>22 hrs</option>
          <option>23 hrs</option>
          <option>24 hrs</option>
          <option>25 hrs</option>
          <option>26 hrs</option>
          <option>27 hrs</option>
          <option>28 hrs</option>
          <option>29 hrs</option>
          <option>30 hrs</option>
          <option>32 hrs</option>
          <option>33 hrs</option>
          <option>34 hrs</option>
          <option>35 hrs</option>
          <option>36 hrs</option>
          <option>37 hrs</option>
          <option>38  hrs</option>
          <option>39 hrs</option>
          <option>40 hrs</option>
          <option>41 hrs</option>
          <option>42 hrs</option>
          <option>43 hrs</option>
          <option>44 hrs</option>
          <option>45 hrs</option>
          <option>46 hrs</option>
          <option>47 hrs</option>
          <option>48 hrs</option>
        </select>
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

				<div class="col-xs-12 question">
					<p><?php echo $_smarty_tpl->tpl_vars['question']->value[1];?>
<p>
					<input type="hidden" name="questions[]" value="<?php echo $_smarty_tpl->tpl_vars['question']->value[0];?>
">
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
                 <input type="checkbox" name="qf_1[]" value="Special wash (for delicates, comforters, bulky items, and heavy-soil items) " class="showHide_box"><span>&nbsp;</span>
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
                 <input type="checkbox" name="qf_1[]" value="Special care (for signature items, individually packed)" class="showHide_box"><span>&nbsp;</span>
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

				<div class="col-xs-12 question">
					<p><?php echo $_smarty_tpl->tpl_vars['question']->value[2];?>
<p>
					<input type="hidden" name="questions[]" value="<?php echo $_smarty_tpl->tpl_vars['question']->value[2];?>
">
				</div>
			</div>
			</div>
			</div>
			<div class = "question-body">
        <div class="row" style="margin;0;padding:0;">
          <div class="col-xs-12">
							<div class="question-ans">
              <table class="table ">
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

          <div class="col-xs-12 question">
            <p><?php echo $_smarty_tpl->tpl_vars['question']->value[3];?>
<p>
          </div>
        </div>
        </div>
        </div>
        <div class = "question-body">
          <div class="row" style="margin;0;padding:0;">
            <div class="col-xs-12">
                <div class="question-ans">
                <table class="table ">
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

          <div class="col-xs-12 question">
            <p><?php echo $_smarty_tpl->tpl_vars['question']->value[4];?>
<p>
          </div>
        </div>
        </div>
        </div>
        <div class = "question-body">
          <div class="row" style="margin;0;padding:0;">
            <div class="col-xs-12">
                <div class="question-ans">
                <table class="table ">
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

          <div class="col-xs-12 question">
            <p><?php echo $_smarty_tpl->tpl_vars['question']->value[5];?>
<p>
          </div>
        </div>
        </div>
        </div>
        <div class = "question-body">
          <div class="row" style="margin;0;padding:0;">
            <div class="col-xs-12">
                <div class="question-ans">
                <table class="table ">
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

          <div class="col-xs-12 question">
            <p><?php echo $_smarty_tpl->tpl_vars['question']->value[6];?>
<p>
          </div>
        </div>
        </div>
        </div>
        <div class = "question-body">
          <div class="row" style="margin;0;padding:0;">
            <div class="col-xs-12">
                <div class="question-ans">
                <table class="table ">
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

            <div class="col-xs-12 question">
              <p><?php echo $_smarty_tpl->tpl_vars['question']->value[7];?>
<p>
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

            <div class="col-xs-12 question">
              <p><?php echo $_smarty_tpl->tpl_vars['question']->value[8];?>
<p>
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
          <div class = "question-box">
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
          <?php if ($_smarty_tpl->tpl_vars['userid']->value=='unregistered') {?>
          <div class="col-md-12 ">
  						<h4>CONTACT INFORMATION</h4>
  						<div class="form-group reg_form">
  							<div class="col-md-6 nopadding reg_form">
  								<input type="text" class="form-control form_gray" placeholder="First Name" name="strFirstName" id="fname">
  							</div>
  						<div class="col-md-6 nopadding reg_form">
  							<input type="text" class="form-control form_gray" placeholder="Last Name" name="strLastName" id="lname">
  						</div>
  						<div class="col-md-12 nopadding reg_form">
  								<input type="text" class="form-control form_gray" placeholder="E-mail Address" name="strEmail" id="strEmail">
  						</div>
  						<div class="col-md-12 nopadding reg_form">
  								<input type="text" class="form-control form_gray" placeholder="Address" name="strAddress" id="strAddress">
  						</div>
  						<div class="col-md-12 nopadding reg_form">
  							<div class="input-group reg_form">
  								<div class="input-group-addon">+63</div><input type="text" class="form-control numOnly" placeholder="Contact" name="strContactNumber" >
  							</div>
  						</div>
  						</div>
  				</div>
          <?php }?>
          <div class="col-md-12"><div class="break-line"></div></div>
<div class="row"></div>
            <div class="form-group continueBtn" >
              <input type = "hidden" name = "service_type" value = "<?php echo $_smarty_tpl->tpl_vars['service_type']->value;?>
" />
      	    	<input type = "hidden" name = "userid" value = "<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
              <a class="btn btn-primary btn-block" name="save" onClick="showSummary()">SUBMIT</a>
            </div>
            <div class="form-group submitBtn" >
              <input type = "hidden" name = "service_type" value = "<?php echo $_smarty_tpl->tpl_vars['service_type']->value;?>
" />
      	    	<input type = "hidden" name = "userid" value = "<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" />
      	    	<a class="btn btn-primary" name="save" onClick="cancelSubmit()">CANCEL</a>
              <button class="btn btn-primary" name="save">CONTINUE</button>
            </div>
		</div>
</form>
</div>
<div class="row"></div>
<?php echo $_smarty_tpl->getSubTemplate ('./global_tpl/footer_front.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php echo '<script'; ?>
>
$('form').attr('onsubmit', 'return false');

function AcceptTerms(){
  $('form').attr('onsubmit', 'return true');

  $('.terms').hide();
}
function cancelSubmit(){
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
<?php if ($_smarty_tpl->tpl_vars['userid']->value=='unregistered') {?>
fname =  $('#fname').val();
lname =  $('#lname').val();
strEmail =  $('#strEmail').val();
<?php } else { ?>
fname = 'none';
lname = 'none';
strEmail = 'none';
<?php }?>
var budget_input ='';
var deadline_input ='';
var pay_input ='';
var fname_req ='';
var lname_req ='';
var Email_req ='';
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
if(fname == ''){
  allQuestion++;

  fname_req = 'First Name: Please input your First Name'

}
if(fname.search(/[^a-zA-Z]+/) !== -1){
  fname_req = fname_req+' </br>'+'First Name: Please input letters only';
}
if(lname.search(/[^a-zA-Z]+/) !== -1){
  fname_req = fname_req+' </br>'+'Last Name: Please input letters only';
}
if(!strEmail.match(/\S+@\S+\.\S+/)){ // Jaymon's / Squirtle's solution
        // Do something
        Email_req = Email_req+' </br>'+'Email: email is not Valid ';
    }

if(lname == ''){
  allQuestion++;

  lname_req = 'Please input your Last Name'

}
if(strEmail == ''){
  allQuestion++;

  Email_req = 'Please input your Email'

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
 $('.qnum').hide();
 $('.question-header').addClass('summary');
 $('.question').addClass('summary');
 $('.form-control').addClass('summary');
 $('input').css('border = 0')
 var testStop = 0;

    $('.terms').show();

}else{
$('body').prepend('<div class="panel-layer"><div class="panel-box" ><p<p>'+budget_input+'</p><p>'+deadline_input+'</p><p>'+pay_input+'</p><p>'+fname_req+'</p><p>'+lname_req+'</p><p>'+Email_req+'</p><p>Please answer all the questions</p> <a class="btn btn-primary btn-block" onClick="closepanel()">OK</a></div></div>');
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
<?php echo '</script'; ?>
>
<?php }} ?>
