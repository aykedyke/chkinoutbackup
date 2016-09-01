<div class = "spacing"></div>
<div class="row">
  <div class="container">
  <div class="col-md-12">
    <div class="pageHeader">
		<h1 style = "font-family:Raleway;">ESCO CHECKINOUT LEAVE FORM</h1>
	</div>
   </div>
    <div class="col-md-8 col-md-offset-2">
      <form name = "leaveform" onsubmit = "return validateForm()" method="post" action="<?php echo base_url();?>Leave">

          <div class="form-group form-horizontal">
            <div class="row">
            <div class="col-md-6">
              <input type="text" name="idnum" placeholder="Employee Number" class="form-control" />
            </div>
            <div class="col-md-6">
				  <select name = "type" class="form-control" id="sel1">
						<option value = "">Type of leave</option>
						<option value = "Vacation Leave">Vacation Leave</option>
						<option value = "Sick Leave">Sick Leave</option>
						<option value = "Maternity Leave">Maternity Leave</option>
						<option value = "Paternity Leave">Paternity Leave</option>
				  </select>
            </div>
          </div>
          </div>
		  <div class="form-group form-horizontal">
            <div class="row">
            <div class="col-md-6">
               <input class="form-control" id="date" name="date1" placeholder="From Date" type="text"/>
            </div>
             <div class="col-md-6">
               <input class="form-control" id="date" name="date2" placeholder="To Date" type="text"/>
            </div>
          </div>
          </div>
		  <div class="form-group form-horizontal">
            <input type="password" name="secode" placeholder="Security Code" class="form-control">
          </div>
          <div class="form-group form-horizontal">
            <textarea name="reason" placeholder="Reason of leave" class="form-control" rows="10"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" name="save" class="btn btn-icebox" value="SEND">
          </div>
        </form>
    </div>
	</div>
</div>

