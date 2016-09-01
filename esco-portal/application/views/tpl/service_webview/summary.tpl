{include file='../global_tpl/headerstyle.tpl'}


<form method="POST" action="{$base_url}Services_webview/SucessSent" onSubmit="return formSubmit()">

	<div class="col-md-6 col-md-offset-3" style="padding:0;">

	<h3>Review Summary</h3>
	<h4>{$post.questions[0]}</h4>
	<ul>
	{foreach $post['qf_1'] as $row}
		<li>{$row}</li>
		<input type="hidden" name="qf_1[]" value="{$row}">
	{/foreach}
	</ul>
	<h4>{$post.questions[1]}</h4>
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
                  <td><input type="text" name="qf_2[]" class="form-control fCount" readonly></td>
                  <td><input type="text" name="qf_2[]" class="form-control sCount" readonly></td>
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

<input type="hidden" name="userid" value="{$post['userid']}">
	<input type="hidden" name="service_type" value="{$post['service_type']}">
	<div class="form-group" style="text-align:center;">
	<div class="break-line"></div>
	<input type="submit" name="save" value="CANCEL" class="btn btn-primary">
	<input type="submit" name="save" value="CONTINTUE" class="btn btn-primary">
	</div>
	
	</div>
</form>






{include file='../global_tpl/footer_webview.tpl'}
