<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-22 01:17:23
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/jobs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124213361657174ab2087226-04804207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9261adadf5762a40dc86e90104cc842a8537ace4' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/global_tpl/jobs.tpl',
      1 => 1466576241,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124213361657174ab2087226-04804207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57174ab20890b6_89584751',
  'variables' => 
  array (
    'count_laund' => 0,
    'count_accept_bids' => 0,
    'count_job_order' => 0,
    'countDecline' => 0,
    'Laundrybids' => 0,
    'row' => 0,
    'sp_user' => 0,
    'base_url' => 0,
    'AcceptBids' => 0,
    'ShowJobOrder' => 0,
    'declineBids' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57174ab20890b6_89584751')) {function content_57174ab20890b6_89584751($_smarty_tpl) {?><ul class="nav nav-pills" role="tablist">
<li role="presentation" class="nav-bids active" data-id=
	"page1"><a href="#">Job orders

<?php if ($_smarty_tpl->tpl_vars['count_laund']->value!=0) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_laund']->value;?>
</span><?php }?>
	</a></li>
	<li role="presentation" class="nav-bids" data-id=
	"page2"><a href="#">Pending Bids <?php if ($_smarty_tpl->tpl_vars['count_accept_bids']->value!=0) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_accept_bids']->value;?>
</span><?php }?></a></li>
	<li role="presentation" class="nav-bids" data-id=
	"page3"><a href="#">Awarded <?php if ($_smarty_tpl->tpl_vars['count_job_order']->value!=0) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['count_job_order']->value;?>
</span><?php }?></a></a></li>
	<li role="presentation" class="nav-bids" data-id=
	"page4"><a href="#">Decline <?php if ($_smarty_tpl->tpl_vars['countDecline']->value!=0) {?><span class="badge"><?php echo $_smarty_tpl->tpl_vars['countDecline']->value;?>
</span><?php }?></a></li>
</ul>
                                    <div class="box-body">

  <section class="contentpage page1">
                <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">List of Bids  </h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="box-body table-responsive no-padding">
                                    <table class="table table-hover">
                                        <tr>
                                            <th>Name</th>
                                            <th>Transaction code</th>
                                            <th>Date transaction</th>
																						<th>Status</th>

                                            <th>Budget</th>
                                            <th>Action</th>

                                        </tr>
                                     <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Laundrybids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                     <?php if ($_smarty_tpl->tpl_vars['row']->value['service_type']==$_smarty_tpl->tpl_vars['sp_user']->value['intServiceProvider_servicesID']) {?>
                                     <?php if (chck_accept_bid($_smarty_tpl->tpl_vars['row']->value['laundry_form_id'],$_smarty_tpl->tpl_vars['sp_user']->value['intServiceProviderID'])==0) {?>
                                     <?php if ($_smarty_tpl->tpl_vars['row']->value['jobaccept_status']==0) {?>
                                     <?php if ($_smarty_tpl->tpl_vars['row']->value['cancel']==0) {?>
																		 <?php if (bidsDecline($_smarty_tpl->tpl_vars['row']->value['laundry_form_id'],$_smarty_tpl->tpl_vars['sp_user']->value['intServiceProviderID'])!=1) {?>

                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['strLastName'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date_inserted'];?>
</td>
																						<td>Pending Request</td>
                                            <td>P <?php echo $_smarty_tpl->tpl_vars['row']->value['budget'];?>
</td>

                                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/?page=ViewForm&viewform=viewform<?php echo $_smarty_tpl->tpl_vars['row']->value['service_type'];?>
&TransCode=<?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
&formiD=<?php echo $_smarty_tpl->tpl_vars['row']->value['laundry_form_id'];?>
" class="btn btn-primary">View
                                            form</a></td>

                                        </tr>
                                        <?php }?>
                                        <?php }?>
                                        <?php }?>
                                        <?php }?>
                                        <?php }?>
                                        <?php } ?>
                                    </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                </section>
                                <div class="contentpage page2 hide">
                                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Accepted Open Bids  </h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  <div class="box-body table-responsive no-padding">

<table class="table table-responsive " cellpadding="15">
	<tr>
		<td>Name</td>
		<td>Email</td>
		<td>Transaction Code</td>
		<td>Date Accept</td>
		<td>Bidding Accepts</td>
		<td>Status</td>
		<td>Action</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['AcceptBids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
	<?php if (JO_accepts($_smarty_tpl->tpl_vars['row']->value['intBidsAcceptsID'])!=1) {?>

	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['strLastName'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['strEmail'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['transaction_code'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['date_accept'];?>
</td>
		<td><?php echo acceptedbids($_smarty_tpl->tpl_vars['row']->value['intQuestionFormID']);?>
</td>
		<td>Open</td>
		<td><a href="#" onClick="ShowLiveBids('<?php echo $_smarty_tpl->tpl_vars['row']->value['intQuestionFormID'];?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['transaction_code'];?>
','<?php echo $_smarty_tpl->tpl_vars['row']->value['price_accepted'];?>
');">Live Bids</a></td>
	</tr>
	<?php }?>
	<?php } ?>

</table>
</div>
</div>
</div>
<div class="contentpage page3 hide">
                                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Job orders  </h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  <div class="box-body table-responsive no-padding">

<table class="table table-responsive " cellpadding="15">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Date Accept</td>
        <td>Job Order</td>
        <td>Status</td>
        <td>Action</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ShowJobOrder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['strLastName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strEmail'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
</td>
        <td></td>
        <td>
<div class="btn-group">
					<a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/?page=ViewForm&viewform=viewform<?php echo $_smarty_tpl->tpl_vars['sp_user']->value['intServiceProvider_servicesID'];?>
&TransCode=<?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
&formiD=<?php echo $_smarty_tpl->tpl_vars['row']->value['intQuestionFormID'];?>
&viewOnly=true" class="btn btn-primary">View
				form</a>

</div>
			</td>
    </tr>
    <?php } ?>

</table>
</div>
</div>
</div>
<div class="contentpage page4 hide">
                                 <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Decline Bids  </h3>
                                    <div class="box-tools">
                                        <div class="input-group">
                                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                  <div class="box-body table-responsive no-padding">

<table class="table table-responsive " cellpadding="15">
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Date Accept</td>
        <td>Job Order</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['declineBids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['strLastName'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strEmail'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['transcode'];?>
</td>
        <td>

			</td>
    </tr>
    <?php } ?>

</table>
</div>
</div>
</div>

</div>
<?php }} ?>
