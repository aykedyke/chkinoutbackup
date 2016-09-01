{include file='./global_tpl/header.tpl'}
        <div class="wrapper row-offcanvas row-offcanvas-left">
            {include file='./global_tpl/sidebar_menu.tpl'}
            <aside class="right-side">
                {if $page == 'settings'}          
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Settings
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="{$base_url}dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="{$base_url}dashboard?page=settings"><i class="fa fa-cog"></i> Settings</a></li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" href="#profile-settings"><i class="fa fa-user"></i> Profile Settings</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#profile-password"><i class="fa fa-lock"></i> Password</a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#change-permission"><i class="fa fa-key"></i> Change Permission</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="profile-settings" class="tab-pane active">
                                    <h4 class="page-header"><i class="fa fa-user"></i> Profile Settings</h4>
                                    {if $msgtab1 != ''}
                                        {$msgtab1}
                                    {/if}
                                    <div class="row">
                                        <div class="col-md-3">
                                                <div class="uploadBtnHolder">
                                                    <i id="selectFile" class="fa fa-camera" title="Browse Photo"></i>
                                                    <input class="hidden" type="file" id="uploader">
                                                </div>
                                            {if $userdata['strAvatar']==''}
                                                <img class="thumbnail" id="profile-avatar" style="width:180px" src="{$base_url}assets/images/default-avatar.png" title="{$profileinfo['strFirstName']} {$profileinfo['strLastName']}">
                                            {else}
                                                <img class="thumbnail" id="profile-avatar" style="width:180px" src="{$profileinfo['strAvatar']}" title="{$profileinfo['strFirstName']} {$profileinfo['strLastName']}">
                                            {/if}
                                        </div>
                                        <div class="col-md-9">
                                            <form action="{$base_url}dashboard?page=settings&amp;id={$profileinfo['intUserID']}&amp;mode=update_profile" method="POST" role="form">
                                                <input type="hidden" name="profile_id" id="profile_id" value="{$profileinfo['intUserID']}">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="strEmail">Email address</label>
                                                                <input id="strEmail" name="strEmail" class="form-control" type="email" value="{$profileinfo['strEmail']}" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="col-md-6 no-padding">
                                                                <div class="form-group">
                                                                    <label for="strFirstName">Firstname</label>
                                                                    <input id="strFirstName" name="strFirstName" class="form-control" type="text" value="{$profileinfo['strFirstName']}" placeholder="Enter firstname">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 no-padding">
                                                                <div class="form-group">
                                                                    <label for="strLastName">Lastname</label>
                                                                    <input id="strLastName" name="strLastName" class="form-control" type="text" value="{$profileinfo['strLastName']}" placeholder="Enter lastname">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="col-md-6 no-padding">
                                                                <div class="form-group">
                                                                    <label for="strBirthDate">Birth Date</label>
                                                                    <input id="strBirthDate" name="strBirthDate" class="form-control" type="text" value="{$profileinfo['dateBirthDate']}" placeholder="Enter email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 no-padding">
                                                                <div class="form-group">
                                                                    <label for="strGender">Gender</label>
                                                                    <select id="strGender" name="strGender" class="form-control">
                                                                        {if $profileinfo['strGender'] == 'f'}
                                                                        <option value="f">Female</option>
                                                                        <option value="m">Male</option>
                                                                        {/if}
                                                                        {if $profileinfo['strGender'] == 'm'}
                                                                        <option value="m">Male</option>
                                                                        <option value="f">Female</option>
                                                                        {/if}
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="strContactNumber">Contact Number</label>
                                                                <input id="strContactNumber" name="strContactNumber" class="form-control" type="text" value="{$profileinfo['strContactNumber']}" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="profile-password" class="tab-pane">
                                    <h4 class="page-header"><i class="fa fa-lock"></i> Password</h4>
                                    {if $msgtab2 != ''}
                                        {$msgtab2}
                                    {/if}
                                    <div class="row">
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-9">
                                            <form action="{$base_url}dashboard?page=settings&amp;id={$profileinfo['intUserID']}&amp;mode=update_password" method="POST" role="form">
                                                <input type="hidden" name="profile_id" id="profile_id" value="{$profileinfo['intUserID']}">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="strOldPassword">Old Password</label>
                                                                <input id="strOldPassword" name="strOldPassword" class="form-control" type="password" placeholder="Enter old password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="strNewPassword">New Password</label>
                                                                <input id="strNewPassword" name="strNewPassword" class="form-control" type="password" placeholder="Enter new password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="strConfirmNewPassword">Confirm New Password</label>
                                                                <input id="strConfirmNewPassword" name="strConfirmNewPassword" class="form-control" type="password" placeholder="Confirm new password">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="change-permission" class="tab-pane">
                                    <h4 class="page-header"><i class="fa fa-key"></i> Change Permission</h4>
                                    {if $msgtab3 != ''}
                                        {$msgtab3}
                                    {/if}
                                    <div class="row">
                                        <div class="col-md-3">&nbsp;</div>
                                        <div class="col-md-9">
                                            <form action="{$base_url}dashboard?page=settings&amp;id={$profileinfo['intUserID']}&amp;mode=change_permission" method="POST" role="form">
                                                <input type="hidden" name="profile_id" id="profile_id" value="{$profileinfo['intUserID']}">
                                                <div class="box-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="strPerm">Account Type</label>
                                                                <select id="strPerm" name="strPerm" class="form-control">
                                                                    <option value="0">-- Select Account Type --</option>
                                                                    <option value="user">Normal</option>
                                                                    <option value="admin">Administrator</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box-footer">
                                                    <button class="btn btn-primary" type="submit">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                {else if $page == 'users'}          
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Users
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="{$base_url}dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="{$base_url}dashboard?page=users"><i class="fa fa-users"></i> Users</a></li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="box box-solid">
                            <div class="box-header">
                                <h3 class="box-title"><i class="fa fa-users"></i> Users List</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                                <table id="listView" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th width="50px">Avatar</th>
                                            <th>User Details</th>
                                            <th width="10px">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    {if $list_users != 0}
                                        {foreach from=$list_users key=i item=row}
                                            <tr>
                                                <td>
                                                    {if $row['strAvatar']==''}
                                                        <img class="thumbnail" id="profile-avatar" style="width:50px;height:50px" src="{$base_url}assets/images/default-avatar.png" title="{$row['strFirstName']} {$row['strLastName']}">
                                                    {else}
                                                        <img class="thumbnail" id="profile-avatar" style="width:50px;height:50px" src="{$row['strAvatar']}" title="{$row['strFirstName']} {$row['strLastName']}">
                                                    {/if}
                                                </td>
                                                <td>
                                                    <strong>{$row['strFirstName']} {$row['strLastName']}</strong> 
                                                    <br />
                                                    {if $row['strWork'] != ''}Work: {$row['strWork']}
                                                    <br />{/if}
                                                    Gender: {if $row['strGender']=='f'}<i class="fa fa-female"></i> Female{else}<i class="fa fa-male"></i> Male{/if}
                                                    <br />
                                                    {if $row['strEmail'] != ''}Email: {$row['strEmail']}
                                                    <br />{/if}
                                                    {if $row['strContactNumber'] != ''}Contact Number: {$row['strContactNumber']}
                                                    <br />{/if}
                                                    {if $row['dateRegisteredDate'] != ''}Date Joined: {$row['dateRegisteredDate']}
                                                    <br />{/if}
                                                    {if $row['strLastIPUsed'] != ''}Last IP Used: {$row['strLastIPUsed']}
                                                    <br />{/if}
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu_{$row['intUserID']}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            <i class="glyphicon glyphicon-triangle-bottom"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu_{$row['intUserID']}">
                                                            <li><a href="{$base_url}dashboard?page=settings&amp;id={$row['intUserID']}" target="_blank"><i class="glyphicon glyphicon-edit"></i> Modify Information</a></li>
                                                            <li role="separator" class="divider"></li>
                                                            <li><a href="{$base_url}dashboard?page=users&amp;id={$row['intUserID']}&amp;mode=delete_user"><i class="glyphicon glyphicon-trash"></i> Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        {/foreach}
                                    {/if}
                                    </tbody>
                                </table>
                            </div><!-- /.box-body -->
                        </div>
                    </section>
                {else}  
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                        <h1>
                            Dashboard
                        </h1>
                        <ol class="breadcrumb">
                            <li><a href="{$base_url}dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
                        </ol>
                    </section>

                    <!-- Main content -->
                    <section class="content">

                    </section>
                {/if}
            </aside>
        </div>
{include file='./global_tpl/footer.tpl'}