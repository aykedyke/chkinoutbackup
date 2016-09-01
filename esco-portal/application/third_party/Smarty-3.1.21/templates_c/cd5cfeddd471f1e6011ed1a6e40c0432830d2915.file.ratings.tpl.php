<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-03 02:07:09
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ratings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1404477048572840820d4fa7-48492697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd5cfeddd471f1e6011ed1a6e40c0432830d2915' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/ratings.tpl',
      1 => 1462259225,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1404477048572840820d4fa7-48492697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572840820d5945_63072505',
  'variables' => 
  array (
    'showRatings' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572840820d5945_63072505')) {function content_572840820d5945_63072505($_smarty_tpl) {?><div class="col-xs-12">
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
                                            <th>Reviews</th>
                                            <th>Rates</th>

                                        
                                        </tr>
                                     <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['showRatings']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
     
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['review'];?>
</td>
                                            <td>
											<?php $_smarty_tpl->tpl_vars[Array] = new Smarty_Variable;$_smarty_tpl->tpl_vars[Array]->step = 1;$_smarty_tpl->tpl_vars[Array]->total = (int) ceil(($_smarty_tpl->tpl_vars[Array]->step > 0 ? $_smarty_tpl->tpl_vars['row']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['row']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars[Array]->step));
if ($_smarty_tpl->tpl_vars[Array]->total > 0) {
for ($_smarty_tpl->tpl_vars[Array]->value = 1, $_smarty_tpl->tpl_vars[Array]->iteration = 1;$_smarty_tpl->tpl_vars[Array]->iteration <= $_smarty_tpl->tpl_vars[Array]->total;$_smarty_tpl->tpl_vars[Array]->value += $_smarty_tpl->tpl_vars[Array]->step, $_smarty_tpl->tpl_vars[Array]->iteration++) {
$_smarty_tpl->tpl_vars[Array]->first = $_smarty_tpl->tpl_vars[Array]->iteration == 1;$_smarty_tpl->tpl_vars[Array]->last = $_smarty_tpl->tpl_vars[Array]->iteration == $_smarty_tpl->tpl_vars[Array]->total;?>
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>											<?php }} ?>
                                            </td>


                                        </tr>

                                        <?php } ?> 
                                    </table>
                                </div>
                                </div>
                                </div><?php }} ?>
