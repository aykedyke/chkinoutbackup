{$q1answer = json_array($ctrl_viewform['q1_answer'])}
{$q2answer = jsondecoding_table($ctrl_viewform['q2_answer'])}
{$q3answer = jsondecoding_table($ctrl_viewform['q3_answer'])}
{$q4answer = jsondecoding_table($ctrl_viewform['q4_answer'])}
{$q5answer = jsondecoding_table($ctrl_viewform['q5_answer'])}
{$q6answer = jsondecoding_table($ctrl_viewform['q6_answer'])}
{include file='../global_tpl/headerstyle.tpl'}

<script type="text/javascript" src="{$base_url}assets/plugins/jQuery/jquery-1.11.0.min.js"></script>
<script>
$(function(){
$(".tb-ans").each(function(){
 var tb_1 = $(this).find("td").eq(1).html();
 var tb_2= $(this).find("td").eq(2).html();
 if(tb_1 == '' && tb_2 == ''){
   $(this).hide();
 }

});
});

</script>
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
   <div class="col-md-12">
     <input type = "hidden" name = "service_type" value = "laundry" />
   <h4>What type of wash/cleaning?</h4>
     <div class="col-md-12">
       <div class="choose_bid">
          {$q1answer}
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
       {$q2answer}
     </table>
     </div>
   </div>
   <div class="col-md-12 qf-1_b question-form1">
   <h4>For Regular Wash & Press: </h4>
   <div class="col-md-10">
     <table class="TableService">
       {jsondecoding_table($ctrl_viewform['q3_answer'])}
     </table>
   </div>

   </div>


  <div class="col-md-12 qf-1_c question-form2">
   <h4>For Special Wash: </h4>
   <div class="col-md-10">
   <table class="TableService">
     {jsondecoding_table($ctrl_viewform['q4_answer'])}
   </table>
   </div>
   </div>


    <div class="col-md-12 qf-1_d br question-form3">
      <h4>For Dry Cleaning: </h4>
       <div class="col-md-10">
       <table class="TableService">
         {jsondecoding_table($ctrl_viewform['q5_answer'])}
       </table>
       </div>
   </div>
   <div class="col-md-12 qf-1_e question-form4" >
     <h4>For Special Care: </h4>
     <div class="col-md-10">
     <table class="TableService">
       {jsondecoding_table($ctrl_viewform['q6_answer'])}
     </table>
     </div>
   </div>

      <div class="col-md-12">
         <h5>Specific notes and instructions for the transaction.</h5>
         <div class="col-md-10">
           {jsondecoding_array($ctrl_viewform['q11_answer'])}
         </div>
     </div>
        <!--<div class="col-md-12">
           <h5>Attach picture of items. (optional)</h5>
           <div class="col-md-10">
             <input type="file" name="">
           </div>
       </div>-->

     {if $access_type != "mobile"}
             <form method="GET" action="{$base_url}serviceprovider/accept_bid">

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
         {if $viewOnly != 'true'}
       <input type="hidden" value="{$ctrl_viewform['intUserID']}" name="UserID">
       <input type="hidden" value="{$ctrl_viewform['laundry_form_id']}" name="formiD">
       <input type="hidden" value="{$ctrl_viewform['transaction_code']}" name="accept">
         <button class="btn btn-primary">Accept</button>
         {/if}
       </div>
     </form>
     {/if}
     </div>
