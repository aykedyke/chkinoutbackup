<div id="page-wrapper">
    <div class="container-fluid">
      <section class="col-lg-12">
             <div class="box">
				  <div class="col-md-8 col-md-offset-2">
					<div class="pageHeader">
						<h1 style = "font-family:Raleway;">Leave form</h1>
					</div>
				   </div>
					<div class="col-md-8 col-md-offset-2">
					  <form name = "leaveform" onsubmit = "return validateForm()" method="post" action="<?php echo base_url();?>Leave">

						  <div class="form-group form-horizontal">
							<div class="row">
							<div class="col-md-6">
							  <input readonly type="text" value = "<?php echo $session123; ?>" name="idnum" placeholder="Employee Number" class="form-control" />
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
							<input onclick="return confirm('Are you sure you want to file this leave?');" type="submit" name="save" class="btn btn-icebox" value="SEND">
						  </div>
						</form>
					</div>
			</div>
         </section>
    </div>
    <!-- /.container-fluid -->
</div>
