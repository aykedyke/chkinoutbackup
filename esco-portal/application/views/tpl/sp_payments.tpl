<div class="col-xs-12">
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
                                {foreach $payments as $row}
                                        <tr>
                                            <td>{$row.strFirstName} {$row.strLastName}</td>
                                            <td>{$row.strContactNumber}</td>
                                            <td>{$row.payment_type}</td>
                                            <td>{$row.date}</td>
                                        </tr>
                                {/foreach}

                                    </table>
                                </div>
                                </div>
                                </div>