<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-14 04:31:56
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ratings_review.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205257223157284faf0cb3e9-78772713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e0e4a7b89a8e6c9bd2bece88e11b1f507dc7276' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ratings_review.tpl',
      1 => 1465896603,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '205257223157284faf0cb3e9-78772713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_57284faf0e5576_26362328',
  'variables' => 
  array (
    'showRatings' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57284faf0e5576_26362328')) {function content_57284faf0e5576_26362328($_smarty_tpl) {?><div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Reviews And Ratings  </h3>
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
                                            <th>Email</th>
                                            <th>Reviews</th>
                                            <th>Date</th>
                                            <th>Action</th>


                                        </tr>
                                     <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showRatings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>

                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strEmail'];?>
</td>
                                            <td>
											<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['row']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['row']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>											<?php }} ?>
                                            </td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
                                            <td><a href="#" data-toggle="modal" data-target="#modal_<?php echo $_smarty_tpl->tpl_vars['row']->value['ratings_id'];?>
" >VIEW</a></td>
                                            <div class="modal fade" id="modal_<?php echo $_smarty_tpl->tpl_vars['row']->value['ratings_id'];?>
" role="dialog">
                                              <div class="modal-dialog">

                                                <!-- Modal content-->

                                                      <div class="panel panel-default" style="border:0;">
                                                        <div class="panel-heading" style="text-align:center;"><b>Rate and Reviews by: <?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
  <?php echo $_smarty_tpl->tpl_vars['row']->value['strLastName'];?>
</b></div>
                                                        <div class="panel-body">
                                                          <div class="form-group">
                                                            <label class="col-md-3">Ratings</label>
                                                            <div class="col-md-9">
                                                              <p><?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['row']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['row']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?><span class="glyphicon glyphicon-star" aria-hidden="true"></span>											<?php }} ?></p>
                                                            </div>
                                                            <label class="col-md-3">Reviews</label>
                                                            <div class="col-md-9">
                                                              <p><?php echo $_smarty_tpl->tpl_vars['row']->value['review'];?>
</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      </div>
                                                      </div>

                                        </tr>

                                        <?php } ?>
                                    </table>
                                </div>
                                </div>
                                </div>
<?php }} ?>
