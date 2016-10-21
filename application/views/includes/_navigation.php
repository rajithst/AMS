<!-- Navigation -->
<?php
$usergroup = $this->session->userdata('usergroup');
switch ($usergroup) {
  case '1':
    $role = "Auditor";
    break;
  case '2':
    $role = "Data Inputer";
    break;
  case '3':
    $role = "Authorizer";
    break;
  case '999':
    $role = "Administrator";
    break;
  default:
    $role = "";
    break;
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <a class="navbar-brand" href="<?PHP echo base_url('index.php') ?>">ASSET MANAGEMENT SYSTEM</a>
        <a class="navbar-brand" style="font-size:1em; padding-left:0; " ><?php echo $role; ?></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">

        <!-- Alert notification btn -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
            <ul class="dropdown-menu alert-dropdown">
                <!--
                <li>
                    <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">View All</a>
                </li> -->
            </ul>
        </li>

        <!-- User profile drop down -->
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo strtoupper($this->session->userdata('username'));?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?php echo base_url();?>index.php/User/setting"><i class="fa fa-fw fa-gear"></i> Settings</a>
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

          <!-- If admin user -->
          <?php

          if($usergroup == 999){
          ?>
            <li id="dashboard">
                <a href="<?PHP echo base_url('index.php') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li id="asset_register">
                <a href="<?php echo base_url();?>index.php/Asset/register"><i class="fa fa-fw fa-database"></i> Asset Registration</a>
            </li>

            <li id="asset_authorizer">
                <a href="<?php echo base_url();?>index.php/Asset/authorize"><i class="fa fa-fw fa-database"></i> Asset Authorize</a>
            </li>

            <li id="re_valuation">
                <a href="<?php echo base_url();?>index.php/Asset/re_valuation"><i class="fa fa-fw fa-recycle "></i> Re-valuation</a>
            </li>


            <li id="user_management">
                <a href="javascript:;" data-toggle="collapse" data-target="#user_table_list"><i class="fa fa-fw fa-arrows-v"></i> User Management <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="user_table_list" class="collapse">
                    <li id="add_user">
                        <a href="<?php echo base_url();?>index.php/admin/User/addUser">Add User</a>
                    </li>
                    <li id="edit_user">
                        <a href="<?php echo base_url();?>index.php/admin/User/management">Manage Users</a>
                    </li>

                </ul>
            </li>

            <li id="asset_movement">
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Asset Movement <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li id="disposal">
                        <a href="<?php echo base_url();?>index.php/Asset/disposal">Disposal</a>
                    </li>
                    <li id="loc_change">
                        <a href="<?php echo base_url();?>index.php/Asset/location_change">Location Change</a>
                    </li>
                    <li id="owner_change">
                        <a href="<?php echo base_url();?>index.php/Asset/owner_change">Owner Change</a>
                    </li>
                </ul>
            </li>


            <li id="master_table">
                <a href="javascript:;" data-toggle="collapse" data-target="#master_table_list"><i class="fa fa-fw fa-arrows-v"></i> Master Table <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="master_table_list" class="collapse">
                    <li id="addData">
                        <a href="<?php echo base_url();?>index.php/Master/addData">Add Master Data</a>
                    </li>
                    <li id="removeData">
                        <a href="<?php echo base_url();?>index.php/Master/removeData">Remove Master Data</a>
                    </li>

                </ul>
            </li>
          <?php
          }
          ?>

          <!-- If user is authoruzer -->

          <?php

          if($usergroup == 3){
          ?>

            <li id="dashboard">
                <a href="<?PHP echo base_url('index.php') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li id="asset_authorizer">
                <a href="<?php echo base_url();?>index.php/Asset/authorize"><i class="fa fa-fw fa-database"></i> Asset Authorize</a>
            </li>

          <?php
          }
          ?>

          <!-- If user is a Inputer -->
          <?php

          if($usergroup == 2){
          ?>

            <li id="dashboard">
                <a href="<?PHP echo base_url('index.php') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
            </li>

            <li id="asset_register">
                <a href="<?php echo base_url();?>index.php/Asset/register"><i class="fa fa-fw fa-database"></i> Asset Registration</a>
            </li>

            <li id="re_valuation">
                <a href="<?php echo base_url();?>index.php/Asset/re_valuation"><i class="fa fa-fw fa-recycle "></i> Re-valuation</a>
            </li>


            <li id="asset_movement">
                <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Asset Movement <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo" class="collapse">
                    <li id="disposal">
                        <a href="<?php echo base_url();?>index.php/Asset/disposal">Disposal</a>
                    </li>
                    <li id="loc_change">
                        <a href="<?php echo base_url();?>index.php/Asset/location_change">Location Change</a>
                    </li>
                    <li id="owner_change">
                        <a href="<?php echo base_url();?>index.php/Asset/owner_change">Owner Change</a>
                    </li>
                </ul>
            </li>

          <?php
          }
          ?>

          <!-- if user is a Auditor -->
          <?php

          if($usergroup == 1){
          ?>
          <li id="dashboard">
              <a href="<?PHP echo base_url('index.php') ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
          </li>

            <li id="user_view">
                <a href="/AMS/index.php/User/view"><i class="fa fa-fw fa-database"></i>User View</a>
            </li>

            <li id="report_view">
                <a href="/AMS/index.php/User/view"><i class="fa fa-fw fa-database"></i>Report View</a>
            </li>

          <?php
          }
          ?>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>
