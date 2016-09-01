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
                                            <th>Reviews</th>
                                            <th>Rates</th>

                                        
                                        </tr>
                                     {foreach $showRatings as $row}
     
                                        <tr>
                                            <td>{$row.strFirstName}</td>
                                            <td>{$row.review}</td>
                                            <td>
											{for $foo=1 to 3}
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>											{/for}
                                            </td>


                                        </tr>

                                        {/foreach} 
                                    </table>
                                </div>
                                </div>
                                </div>