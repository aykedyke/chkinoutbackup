{include file='./global_tpl/header_front.tpl'}
	   <div class="DjLaundryService">
      <div class="container">
      <div class="clearfix">
      <div class="col-md-5">
      </div>
      <div class="col-md-7">
        <div class="dj_header_title">
        <h1>{$ServiceName}</h1>
        </div>
       </div>
       </div>
      </div>
    </div>
    {foreach $ServiceProviders as $row}
	{if $row.intServiceProvider_servicesID == $DsID.intServiceProvider_servicesID }
	<div class="col-md-12">
		{$row.strServiceName}
	</div>
	{/if}

    {/foreach}  
    <div class="col-md-12">
        {$testarrays}

    </div>


  

{include file='./global_tpl/footer_front.tpl'}