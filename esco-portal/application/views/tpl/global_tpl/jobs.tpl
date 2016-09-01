<ul class="nav nav-pills" role="tablist">
<li role="presentation" class="nav-bids active" data-id=
	"page1"><a href="#">Job orders

{if $count_laund != 0}<span class="badge">{$count_laund}</span>{/if}
	</a></li>
	<li role="presentation" class="nav-bids" data-id=
	"page2"><a href="#">Pending Bids {if $count_accept_bids != 0}<span class="badge">{$count_accept_bids}</span>{/if}</a></li>
	<li role="presentation" class="nav-bids" data-id=
	"page3"><a href="#">Awarded {if $count_job_order != 0}<span class="badge">{$count_job_order}</span>{/if}</a></a></li>
	<li role="presentation" class="nav-bids" data-id=
	"page4"><a href="#">Decline {if $countDecline != 0}<span class="badge">{$countDecline}</span>{/if}</a></li>
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
                                     {foreach $Laundrybids as $row}
                                     {if $row.service_type == $sp_user.intServiceProvider_servicesID}
                                     {if chck_accept_bid($row.laundry_form_id,$sp_user.intServiceProviderID) == 0}
                                     {if $row.jobaccept_status == 0}
                                     {if $row.cancel == 0}
																		 {if bidsDecline($row.laundry_form_id,$sp_user.intServiceProviderID) != 1}

                                        <tr>
                                            <td>{$row.strFirstName} {$row.strLastName}</td>
                                            <td>{$row.transcode}</td>
                                            <td>{$row.date_inserted}</td>
																						<td>Pending Request</td>
                                            <td>P {$row.budget}</td>

                                            <td><a href="{$base_url}serviceprovider/?page=ViewForm&viewform=viewform{$row.service_type}&TransCode={$row.transcode}&formiD={$row.laundry_form_id}" class="btn btn-primary">View
                                            form</a></td>

                                        </tr>
                                        {/if}
                                        {/if}
                                        {/if}
                                        {/if}
                                        {/if}
                                        {/foreach}
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
	{foreach $AcceptBids as $row}
	{if JO_accepts($row.intBidsAcceptsID) != 1}

	<tr>
		<td>{$row.strFirstName} {$row.strLastName}</td>
		<td>{$row.strEmail}</td>
		<td>{$row.transaction_code}</td>
		<td>{$row.date_accept}</td>
		<td>{acceptedbids($row['intQuestionFormID'])}</td>
		<td>Open</td>
		<td><a href="#" onClick="ShowLiveBids('{$row.intQuestionFormID}','{$row.transaction_code}','{$row.price_accepted}');">Live Bids</a></td>
	</tr>
	{/if}
	{/foreach}

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
    {foreach $ShowJobOrder as $row}

    <tr>
        <td>{$row.strFirstName} {$row.strLastName}</td>
        <td>{$row.strEmail}</td>
        <td>{$row.date}</td>
        <td>{$row.transcode}</td>
        <td></td>
        <td>
<div class="btn-group">
					<a href="{$base_url}serviceprovider/?page=ViewForm&viewform=viewform{$sp_user.intServiceProvider_servicesID}&TransCode={$row.transcode}&formiD={$row.intQuestionFormID}&viewOnly=true" class="btn btn-primary">View
				form</a>

</div>
			</td>
    </tr>
    {/foreach}

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
    {foreach $declineBids as $row}

    <tr>
        <td>{$row.strFirstName} {$row.strLastName}</td>
        <td>{$row.strEmail}</td>
        <td>{$row.date}</td>
        <td>{$row.transcode}</td>
        <td>

			</td>
    </tr>
    {/foreach}

</table>
</div>
</div>
</div>

</div>
