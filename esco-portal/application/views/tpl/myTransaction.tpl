

<div style="min-width:100%;min-height:100%;background:rgba(0,0,0,0.20);position:fixed;top:0;left:0;z-index:5000;" id="closethis">


<div style="width:50%;min-height:50%;background:#fff;box-shadow:3px 3px 5px #888888;margin:100px auto;padding:10px;">
<div style="width:100%;" >
<a class="close" onClick="closethis()">
x
</a>
</div>

<style>
#thisTable {
    border-collapse: collapse;
    width: 100%;
}

#thisTable th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

</style>
<h3>My Transaction</h3>
<table id="thisTable">

	<tr>
		<td><b>Transaction code</b></td>
		<td><b>Date Transaction</b></td>
		<td><b>Status</b></td>
		<td><b>Action</b></td>
	</tr>
{foreach $transaction as $row}
{if $row.intUserID == $userID}
	<tr>
		<td>{$row.transcode}</td>
		<td>{$row.date_inserted}</td>
		<td></td>
		<td><a href="">VIEW</a></td>
	</tr>
{/if}
{/foreach}
</table>
</div>
</div>