  <section class="content-header">
                        <a href="#menu-toggle" class="btn btn-default pull-left" id="menu-toggle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-bars"></span>
                        </a>
                        <h1>
                            ADD SERVICE
                        </h1>
                    </section>
                    <div class="container">
                    <section class="content">
                        <div class="row">
                          {if $service_form != 'change_service_photo'}

                            <form action="serviceprovider/{$service_form}" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="strTitle" class="form-control" placeholder="Enter Title here" value="{$strTitle}">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="20" name="strDescription" placeholder="Description" >{$strDescription}</textarea>
                                </div>
                                <div class="form-group">
                                    <input name="image" type="file"  accept="image/*" />
                                </div>
                                <div class="form-group col-md-12" style="padding:0;">
                                    <div class="col-md-6" style="margin:0;padding:0;">
                                        <input type="text" name="strPrice" class="form-control" placeholder="Enter Price" value="{$strPrice}">
                                    </div>
                                </div>
                                <div class="btn-group">
                                {if $service_form == 'view_service'}
                                        <input type="hidden" value="{$intServiceID}" name="intServiceID">
                                {/if}
                                    <input type="submit" class="btn btn-primary" name="save">
                                
                                
                                </div>

                            </form>
                            {else}

                            {/if}
                        </div>
                    </section>
                    </div>