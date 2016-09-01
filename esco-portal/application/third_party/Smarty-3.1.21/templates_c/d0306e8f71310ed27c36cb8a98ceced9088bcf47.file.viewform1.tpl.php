<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-23 01:21:27
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/viewform/viewform1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255301788571064f5d046d7-90131124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0306e8f71310ed27c36cb8a98ceced9088bcf47' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/viewform/viewform1.tpl',
      1 => 1466662789,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255301788571064f5d046d7-90131124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_571064f5d23151_96030936',
  'variables' => 
  array (
    'ctrl_viewform' => 0,
    'base_url' => 0,
    'q1answer' => 0,
    'q2answer' => 0,
    'access_type' => 0,
    'viewOnly' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571064f5d23151_96030936')) {function content_571064f5d23151_96030936($_smarty_tpl) {?>   <?php $_smarty_tpl->tpl_vars['q1answer'] = new Smarty_variable(json_array($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q1_answer']), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['q2answer'] = new Smarty_variable(jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q2_answer']), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['q3answer'] = new Smarty_variable(jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q3_answer']), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['q4answer'] = new Smarty_variable(jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q4_answer']), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['q5answer'] = new Smarty_variable(jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q5_answer']), null, 0);?>
   <?php $_smarty_tpl->tpl_vars['q6answer'] = new Smarty_variable(jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q6_answer']), null, 0);?>
   <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
assets/plugins/jQuery/jquery-1.11.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(function(){
  $(".tb-ans").each(function(){
    var tb_1 = $(this).find("td").eq(1).html();
    var tb_2= $(this).find("td").eq(2).html();
    if(tb_1 == '' && tb_2 == ''){
      $(this).hide();
    }

  });
});

<?php echo '</script'; ?>
>
   <style>
.TableService{
	width:50%;
  margin:0 auto;
}
.TableService tr td {
	border:2px solid #000;
	padding:10px;
}

.TableService thead th{
	text-align:center;
}
.question-form1,.question-form2,.question-form2,.question-form3,.question-form4,.question-form5{
  display:none;
}

   </style>
   <div class="container">
   <div class="qf-1">
	  <div class="row">
	  <div class="col-md-12">
	    <div class="col-md-12">
	    	<input type = "hidden" name = "service_type" value = "laundry" />
			<h4>What type of wash/cleaning?</h4>
				<div class="col-md-12">
					<div class="choose_bid">
						 <?php echo $_smarty_tpl->tpl_vars['q1answer']->value;?>

					</div>
				</div>
	 	 </div>
	 	 <div style="clear:both"></div>

	 	 </div>
<br/><br/>


	 	 	  </div>
	 	 	  </div> <br/>
		<div class="questioner qf-2">
	 	 <div class="col-md-12">
	 	  	<div class="col-md-12 qf-1_a question-form0">
		 	 	<h4>For Regular Wash & Fold:</h4>
		 	 	<div class="col-md-10">
		 	 	<table class="TableService">
		 	 		<?php echo $_smarty_tpl->tpl_vars['q2answer']->value;?>

		 	 	</table>
		 	 	</div>
	 	 	</div>
	 	 	<div class="col-md-12 qf-1_b question-form1">
			<h4>For Regular Wash & Press: </h4>
	 	 	<div class="col-md-10">
		 	 	<table class="TableService">
		 	 		<?php echo jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q3_answer']);?>

		 	 	</table>
	 	 	</div>

	 	 	</div>


	 	 <div class="col-md-12 qf-1_c question-form2">
	 	 	<h4>For Special Wash: </h4>
	 	 	<div class="col-md-10">
	 	 	<table class="TableService">
	 	 		<?php echo jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q4_answer']);?>

	 	 	</table>
	 	 	</div>
	 	 	</div>


		 	 <div class="col-md-12 qf-1_d br question-form3">
			 	 <h4>For Dry Cleaning: </h4>
			 	 	<div class="col-md-10">
			 	 	<table class="TableService">
			 	 		<?php echo jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q5_answer']);?>

			 	 	</table>
			 	 	</div>
	 	 	</div>
	 	 	<div class="col-md-12 qf-1_e question-form4" >
	 			<h4>For Special Care: </h4>
		 	 	<div class="col-md-10">
		 	 	<table class="TableService">
		 	 		<?php echo jsondecoding_table($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q6_answer']);?>

		 	 	</table>
		 	 	</div>
	 	 	</div>

			 	 <div class="col-md-12">
				 	 	<h5>Specific notes and instructions for the transaction.</h5>
				 	 	<div class="col-md-10">
							<?php echo jsondecoding_array($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q11_answer']);?>

				 	 	</div>
		 	 	</div>
		 	 	 	 <!--<div class="col-md-12">
					 	 	<h5>Attach picture of items. (optional)</h5>
					 	 	<div class="col-md-10">
								<input type="file" name="">
					 	 	</div>
			 	 	</div>-->
		 	 	<div class="col-md-10">
						<h4>CONTACT INFORMATION</h4>
						<div class="form-group">
							<div class="col-md-12 nopadding">
								<label class="col-md-5">Name:</label>
                  <div class="col-md-7">
                  <?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['strLastName'];?>

  							  </div>
							</div>
              <div class="col-md-12 nopadding">
								<label class="col-md-5">Email:</label>
                  <div class="col-md-7">
                  <?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['strEmail'];?>

  							  </div>
							</div>
              <div class="col-md-12 nopadding">
								<label class="col-md-5">Address:</label>
                  <div class="col-md-7">
                  <?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['strAddress'];?>

  							  </div>
							</div>
              <div class="col-md-12 nopadding">
								<label class="col-md-5">Contact Number:</label>
                  <div class="col-md-7">
                  <?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['strContactNumber'];?>

  							  </div>
							</div>

						</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['access_type']->value!="mobile") {?>
								<form method="POST" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/accept_bid">

				<div class="col-md-10">
          <h4>Bids information</h4>
          <div class="form-group">
            <div class="col-md-12 nopadding">
              <label class="col-md-5">Bidding Deadline</label>
              <div clalss="col-md-7"><?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['deadline'];?>
</div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12 nopadding">
              <label class="col-md-5">Payment type</label>
              <div clalss="col-md-7"><?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['payment_type'];?>
</div>
            </div>
          </div>
						<h4>Bid Information</h4>

						<div class="form-group">
							<div class="col-md-10">
                <label class="col-md-5 control-label">Budget</label>
                <div class="col-md-7">
								<p><?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['budget'];?>
</p>
							</div>
							</div>
							<div class="col-md-10 priceBid hide">
                <label class="col-md-5 control-label">Bid Price</label>
                <div class="col-md-5">
								<input type="text" class="form-control form_gray " placeholder="Place your bid here" name="price_accepted" >
							</div>
              <div class="col-md-2">
                <input type="submit" class="btn btn-primary" name="save" value="Place bid">

              </div>
							</div>
						</div>

				</div>
				<div class="col-md-10" style="padding-top:20px;">
					<div class="form-group pull-right">
            <?php if ($_smarty_tpl->tpl_vars['viewOnly']->value!='true') {?>
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['intUserID'];?>
" name="UserID">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['laundry_form_id'];?>
" name="formiD">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['transaction_code'];?>
" name="accept">
					<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['budget'];?>
" name="acceptedBid">
          <a class="btn btn-primary showBid">Bid</a>
						<input type="submit" class="btn btn-primary" name="save" value="Accept">
						<input type="submit" class="btn btn-primary" name="save" value="Decline">
            <?php }?>
					</div>
				</form>
				<?php }?>
				</div>
<?php }} ?>
