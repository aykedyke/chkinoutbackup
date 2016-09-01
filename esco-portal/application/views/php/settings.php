<div id="page-wrapper">
    <div class="container-fluid">
      <section class="col-lg-12">
             <div class="box">
				  <div class="col-md-8 col-md-offset-2">
					<div class="pageHeader">
						<h1 style = "font-family:Raleway;">Account Settings</h1>
					</div>
				   </div>
					<div class="col-md-8 col-md-offset-2">
					  <form name = "leaveform" onsubmit = "return validateForm()" method="post" action="<?php echo base_url();?>Leave">

						  <div class="form-group form-horizontal">
							<input type="password" name="secode" placeholder="OLD PASSWORD" class="form-control">
						  </div>
						   <div class="form-group form-horizontal">
							<input type="password" name="secode" placeholder="NEW PASSWORD" class="form-control">
						  </div>
						   <div class="form-group form-horizontal">
							<input type="password" name="secode" placeholder="RETYPE NEW PASSWORD" class="form-control">
						  </div>
						  <div class="form-group">
							<input type="submit" name="save" class="btn btn-icebox" value="Update">
						  </div>
						</form>
					</div>
			</div>
         </section>
    </div>
    <!-- /.container-fluid -->
</div>
