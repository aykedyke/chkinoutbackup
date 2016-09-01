<div class="col-xs-12">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Reviews And Ratings  </h3>
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
                                            <th>Email</th>
                                            <th>Reviews</th>
                                            <th>Date</th>
                                            <th>Action</th>


                                        </tr>
                                     {foreach $showRatings as $row}

                                        <tr>
                                            <td>{$row.strFirstName}</td>
                                            <td>{$row.strEmail}</td>
                                            <td>
											{for $foo=1 to $row.rating}
<span class="glyphicon glyphicon-star" aria-hidden="true"></span>											{/for}
                                            </td>
                                            <td>{$row.date}</td>
                                            <td><a href="#" data-toggle="modal" data-target="#modal_{$row.ratings_id}" >VIEW</a></td>
                                            <div class="modal fade" id="modal_{$row.ratings_id}" role="dialog">
                                              <div class="modal-dialog">

                                                <!-- Modal content-->

                                                      <div class="panel panel-default" style="border:0;">
                                                        <div class="panel-heading" style="text-align:center;"><b>Rate and Reviews by: {$row.strFirstName}  {$row.strLastName}</b></div>
                                                        <div class="panel-body">
                                                          <div class="form-group">
                                                            <label class="col-md-3">Ratings</label>
                                                            <div class="col-md-9">
                                                              <p>{for $foo=1 to $row.rating}<span class="glyphicon glyphicon-star" aria-hidden="true"></span>											{/for}</p>
                                                            </div>
                                                            <label class="col-md-3">Reviews</label>
                                                            <div class="col-md-9">
                                                              <p>{$row.review}</p>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      </div>
                                                      </div>

                                        </tr>

                                        {/foreach}
                                    </table>
                                </div>
                                </div>
                                </div>
