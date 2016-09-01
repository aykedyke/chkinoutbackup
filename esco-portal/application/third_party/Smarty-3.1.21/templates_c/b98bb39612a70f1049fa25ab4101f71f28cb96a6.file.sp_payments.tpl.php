<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-05-06 02:26:58
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/sp_payments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1908678506572851723ddd95-64994181%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98bb39612a70f1049fa25ab4101f71f28cb96a6' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/sp_payments.tpl',
      1 => 1462516857,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1908678506572851723ddd95-64994181',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_572851723de433_97377608',
  'variables' => 
  array (
    'payments' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_572851723de433_97377608')) {function content_572851723de433_97377608($_smarty_tpl) {?><div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Payments  </h3>
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
                                            <th>Contact #</th>
                                            <th>Type of Payment</th>
                                            <th>Date</th>

                                        
                                        </tr>
                                <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['payments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <tr>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strFirstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['strLastName'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['strContactNumber'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['payment_type'];?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
                                        </tr>
                                <?php } ?>

                                    </table>
                                </div>
                                </div>
                                </div><?php }} ?>
