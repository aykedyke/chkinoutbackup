            <aside class="left-side sidebar-offcanvas">                
                <section class="sidebar">
                    <ul class="sidebar-menu">
                    	{$mainTree = stringexploder('_',$page,'0')}
                        {if $page!=''}
                            {$childTree = $page}
                        {else}
                            {$childTree = ''}
                        {/if}
                        <li class="{if $mainTree==''} active{/if}">
                            <a href="{$base_url}dashboard">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="{if $mainTree=='users'} active{/if}">
                            <a href="{$base_url}dashboard?page=users">
                                <i class="fa fa-users"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class="{if $mainTree=='settings'} active{/if}">
                            <a href="{$base_url}dashboard?page=settings&amp;id={$userdata['intUserID']}">
                                <i class="fa fa-cog"></i> <span>Settings</span>
                            </a>
                        </li>
                        <!--li class="treeview{if $mainTree=='distributors' || $mainTree=='add' || $mainTree=='edit' || $mainTree=='stocks'} active{/if}">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Manage Distributors</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li{if $childTree=='listdistributors' || $mainTree=='add' || $mainTree=='edit' || $mainTree=='stocks'} class="active"{/if}><a href="{$base_url}dashboard?page=distributors_listdistributors"><i class="fa fa-angle-double-right"></i> Distributors List</a></li>
                                <li{if $childTree=='addnewdistributor'} class="active"{/if}><a href="{$base_url}dashboard?page=distributors_addnewdistributor"><i class="fa fa-angle-double-right"></i> Add New</a></li>
                            </ul>
                        </li-->
                    </ul>
                </section>
            </aside>