<!-- Navigation -->
<?php
$usergroup = $this->session->userdata('usergroup');

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?PHP echo base_url('index.php') ?>">ASSET MANAGEMENT SYSTEM</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <!-- message notification btn -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu message-dropdown">
                <!-- Sample data -->
                <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- <li class="message-preview">
                    <a href="#">
                        <div class="media">
                            <span class="pull-left">
                                <img class="media-object" src="http://placehold.it/50x50" alt="">
                            </span>
                            <div class="media-body">
                                <h5 class="media-heading">
                                    <strong>John Smith</strong>
                                </h5>
                                <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                <p>Lorem ipsum dolor sit amet, consectetur...</p>
                            </div>
                        </div>
                    </a>
                </li> -->
                <li class="message-footer">
                    <a href="#">Read All New Messages</a>
                </li>
            </ul>
        </li>

        <!-- Alert notification btn -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <li>
                    <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                </li>
                <li>
                    <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li>
            </ul>
        </li>

        <!-- User profile drop down -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->session->userdata('username');?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo base_url();?>index.php/admin/User/logout"><i class="fa fa-fw fa-power-off"></i> Log Out </a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li id="asset_register">
                <a href="/AMS/index.php/Asset/register"><i class="fa fa-fw fa-database"></i> Asset Registration</a>
            </li>
            <li id="re_valuation">
                <a href="/AMS/index.php/Asset/re_valuation"><i class="fa fa-fw fa-recycle "></i> Re-valuation</a>
            </li>

            <?php

            if ($usergroup != 1){ ?>
            <li id="user_management">
                <a href="javascript:;" data-toggle="collapse" data-target="#user_table_list"><i class="fa fa-fw fa-arrows-v"></i> User Management <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user_table_list" class="collapse">
                    <li id="add_user">
                        <a href="/AMS/index.php/User/addUser">Add User</a>
                    </li>
                    <li id="edit_user">
                        <a href="/AMS/index.php/User/editUser">Update User</a>
                    </li>

                </ul>
            </li>

            <?php } ?>
            <li id="asset_movement">
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Asset Movement <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li id="disposal">
                        <a href="/AMS/index.php/Asset/disposal">Disposal</a>
                    </li>
                    <li id="loc_change">
                        <a href="/AMS/index.php/Asset/location_change">Location Change</a>
                    </li>
                    <li id="owner_change">
                        <a href="#">Owner Change</a>
                    </li>
                </ul>
            </li>

            <?php

              //  if ($usergroup != 1){ ?>


            <li id="master_table">
                <a href="javascript:;" data-toggle="collapse" data-target="#master_table_list"><i class="fa fa-fw fa-arrows-v"></i> Master Table <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="master_table_list" class="collapse">
                    <li id="add_category">
                        <a href="/AMS/index.php/Master/addData">Add Master Data</a>
                    </li>
                    <li id="add_location">
                        <a href="/AMS/index.php/Master/removeData">Remove Master Data</a>
                    </li>

                </ul>
            </li>

            <?php // } ?>

            <li id="blank">
                <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
