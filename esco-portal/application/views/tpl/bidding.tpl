{include file='./global_tpl/header_front.tpl'}

<div class="col-md-12"><div id="spacing"></div></div>

   <div class="container">
	  <div class="row">
	  <form method="POST" action="{$base_url}Services">
	      <div class="col-md-6 col-md-offset-3">
	    <div class="col-md-12">
	    	<input type = "hidden" name = "service_type" value = "laundry" />
			<h4>Pick a service</h4>
				<div class="col-md-12">
					<div class="choose_bid2">
						{foreach $getServicetype as $row}
						<ul class="nav">
							<li><a href="{$base_url}Services?service_type={$row.intServiceProvider_servicesID}">{$row.strName}</a></li>
						</ul>
						{/foreach}
					</div>
				</div>
	 	 </div>
	 	 <div style="clear:both"></div>
	 	 	 	 	<div class="buttongroup">


	 	 </div>
	 	 </div>
	 	 </form>
	  </div>
		<div class="col-md-12"><div id="spacing"></div></div>

  </div>

{include file='./global_tpl/footer_front.tpl'}
