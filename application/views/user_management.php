<?php

$logedin = $this->session->userdata('loggedin');

if ($logedin != true){

    redirect('admin/User/login');

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Import header content -->
        <?php require_once 'includes/_header.php'; ?>

        <title>ANS | USER MANAGEMENT</title>
</head>

<body style="background-color:white">

    <div id="wrapper">

        <!-- import navigation  -->
        <?php require_once 'includes/_navigation.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            User Management

                            <small>View Users</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> User Management
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- List -->
                <div class="row col-lg-10 col-md-10">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                System Users
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="user_list">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>User Group</th>
                                            <th>Logged Date</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                        foreach ($list->result() as $row) {

                                          switch ($row->{'user_group'}) {
                                            case '1':
                                              $userGroup = "Auditor";
                                              break;
                                            case '2':
                                              $userGroup = "Inputter";
                                              break;
                                            case '3':
                                              $userGroup = "Authorizer";
                                              break;
                                            case '999':
                                              $userGroup = "System Administrator";
                                              break;

                                            default:
                                              # code...
                                              break;

                                          }


                                          echo "<tr class=\"odd gradeX\">
                                              <td>".$row->{'id'}."</td>
                                              <td>".$row->{'user_name'}."</td>
                                              <td class=\"center\">".$userGroup."</td>
                                              <td>".$row->{'join_date'}."</td>
                                              <td><button type=\"submit\" name=".$row->{'id'}." value=".$row->{'id'}." id=\"btn_view\"  class=\"btn btn-primary btn-xs\" >View</button> <button type=\"submit\" name=".$row->{'id'}." value=".$row->{'id'}." id=\"btn_del\"  class=\"btn btn-danger btn-xs\" >Delete</button></td>
                                          </tr>";
                                        }
                                       ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>

                <div class="row col-lg-12">
                  <hr>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php require_once 'includes/_footer.php'; ?>
    <script src="<?php echo base_url('assets/js/datatables/js/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/datatables-responsive/dataTables.responsive.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/canvasjs.min.js'); ?>"></script>
    <script>
    $(document).ready(function() {
          $('#user_list').DataTable({
              responsive: true,
              "order": [[ 1, "desc" ]]
          });

          $('#user_list').on('click','#btn_view',function(){
            console.log(this.value);
            $.ajax({
              type: "POST",
              url:"/AMS/index.php/Asset/authorizeItem",
              data:{asset_id:this.value},
              success:function(result){
                $('.newOne').html(result);
              }
            });
          });

    });
    </script>

</body>

</html>
