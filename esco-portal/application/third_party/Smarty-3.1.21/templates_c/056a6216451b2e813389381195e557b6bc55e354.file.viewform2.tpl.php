<?php /* Smarty version Smarty-3.1.21-dev, created on 2016-06-16 12:32:01
         compiled from "/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/viewform/viewform2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14279703875715d6af3f09e5-76112125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '056a6216451b2e813389381195e557b6bc55e354' => 
    array (
      0 => '/home/tapdash/public_html/projects/dirtyjobs/application/views/tpl/viewform/viewform2.tpl',
      1 => 1466098292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14279703875715d6af3f09e5-76112125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5715d6af6b82b0_82012968',
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
<?php if ($_valid && !is_callable('content_5715d6af6b82b0_82012968')) {function content_5715d6af6b82b0_82012968($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['q1answer'] = new Smarty_variable(json_array($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q1_answer']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['q2answer'] = new Smarty_variable(json_array($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q2_answer']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['q3answer'] = new Smarty_variable(jsondecoding_table2($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q3_answer']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['q4answer'] = new Smarty_variable(json_array($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q4_answer']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['q5answer'] = new Smarty_variable(json_array($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q5_answer']), null, 0);?>
<?php $_smarty_tpl->tpl_vars['q6answer'] = new Smarty_variable(jsondecoding_table2($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q6_answer']), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('../global_tpl/headerstyle.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
width:100%;
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
<div class="container2">
<div class="qf-1">
 <div class="row">
 <div class="col-md-12">
   <div class="col-md-8 col-md-offset-2">
     <div class="col-md-12">

     <h4>What type of drinking water do you need?</h4>
       <div class="col-md-12">
               <?php echo $_smarty_tpl->tpl_vars['q1answer']->value;?>

       </div>
    </div>
    <div class="col-md-12">

     <h4>What type of water container do you need?</h4>
       <div class="col-md-12">
         <div class="choose_bid">
            <?php echo $_smarty_tpl->tpl_vars['q2answer']->value;?>


         </div>
       </div>
    </div>
    <div class="col-md-12 qf-1_a">

    <h4>For bottled water, which size(s) do you need?</h4>
      <div class="col-md-12">
        <table class="TableService">
        <?php echo jsondecoding_table2($_smarty_tpl->tpl_vars['ctrl_viewform']->value['q3_answer']);?>

      </table>
      </div>
    </div>
    <div style="clear:both"></div>

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

     <?php if ($_smarty_tpl->tpl_vars['access_type']->value!="mobile") {?>
             <form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
serviceprovider/accept_bid">

     <div class="col-md-10">
         <h4>Accept bids information</h4>
         <div class="form-group">
           <div class="col-md-6 nopadding">
             <input type="text" class="form-control form_gray" placeholder="Price Accepted" name="price_accepted"  >
           </div>
         </div>
     </div>
     <div class="col-md-12" style="padding-top:20px;">
       <div class="btn-group">
         <?php if ($_smarty_tpl->tpl_vars['viewOnly']->value!='true') {?>
       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['intUserID'];?>
" name="UserID">
       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['laundry_form_id'];?>
" name="formiD">
       <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ctrl_viewform']->value['transaction_code'];?>
" name="accept">
         <button class="btn btn-primary">Accept</button>
         <?php }?>
       </div>
     </form>
     <?php }?>
     </div>
<?php }} ?>
