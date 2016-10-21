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

<title>ANS | ASSET AUTHORIZE</title>
</head>

<body>

<div id="wrapper">

<!-- import navigation  -->
<?php require_once 'includes/_navigation.php'; ?>

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Asset Management System
                <small>Asset Authorize</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Authorize
                </li>


            </ol>

            <!-- List -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Un-authorized Asset Data
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="authorizing_list">
                                <thead>
                                    <tr>
                                        <th>PABC Serial</th>
                                        <th>Asset Category</th>
                                        <th>C.I.A. Value</th>
                                        <th>Location</th>
                                        <th>Data Inputer</th>
                                        <th>Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    foreach ($list->result() as $row) {
                                      echo "<tr class=\"odd gradeX\">
                                          <td>".$row->{'PABC_serial_number'}."</td>
                                          <td>".$row->{'category'}."</td>
                                          <td class=\"center\">".$row->{'cia_value'}."</td>
                                          <td>".$row->{'location'}."</td>
                                          <td>".$row->{'user_name'}."</td>
                                          <td><button type=\"submit\" name=".$row->{'asset_id'}." value=".$row->{'asset_id'}." id=\"btn_view\"  class=\"btn btn-primary btn-xs\" style=\"width:100px\">View</button></td>
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

        </div>
    </div>
    <!-- /.row -->
    <div class="newOne">

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php require_once 'includes/_footer.php'; ?>
</body>

</html>

<script src="<?php echo base_url('assets/js/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datatables-plugins/dataTables.bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/datatables-responsive/dataTables.responsive.js'); ?>"></script>
<script>
$(document).ready(function() {
      $('#authorizing_list').DataTable({
          responsive: true
      });

      $('#authorizing_list').on('click','#btn_view',function(){
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
