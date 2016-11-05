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

        <title>ANS | HOME</title>
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
                            Welcome

                            <small>Asset Management System</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Home
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
                                Current Asset Details
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
                                            <th>Disposal Date</th>
                                            <th>Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                      <?php
                                        foreach ($list1->result() as $row) {
                                          echo "<tr class=\"odd gradeX\">
                                              <td>".$row->{'PABC_serial_number'}."</td>
                                              <td>".$row->{'category'}."</td>
                                              <td class=\"center\">".$row->{'cia_value'}."</td>
                                              <td>".$row->{'location'}."</td>
                                              <td>".$row->{'disposal_date'}."</td><form action=\" ".base_url()."index.php/Asset/viewAsset\" method=\"post\">
                                              <td><button type=\"submit\" name=\"btn_view\" value=".$row->{'asset_id'}." id=\"btn_view\"  class=\"btn btn-primary btn-xs\" style=\"width:100px\">View</button></td>
                                          </tr></form>";
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
                <div class="row col-lg-7">
                  <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                </div>
                <!-- /.col-lg-6 -->
                <div class="col-lg-5">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Recent Disposable Asset
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>PABC</th>
                                            <th>Category</th>
                                            <th>Disposal Date</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php
                                      if(isset($list2)){
                                        foreach ($list2->result() as $row2) {
                                          echo "<tr>
                                              <td>".$row2->{'PABC_serial_number'}."</td>
                                              <td>".$row2->{'category'}."</td>
                                              <td>".$row2->{'disposal_date'}."</td><form action=\" ".base_url()."index.php/Asset/viewAsset\" method=\"post\">
                                              <td><button type=\"submit\" name=\"btn_view\" value=".$row->{'asset_id'}." id=\"btn_view\"  class=\"btn btn-success btn-xs\" style=\"\">View</button></td>
                                          </tr></form>";
                                        }
                                      }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->



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
          $('#authorizing_list').DataTable({
              responsive: true,
              "order": [[ 1, "desc" ]]
          });

        	var chart = new CanvasJS.Chart("chartContainer",
        	{
        		title:{
        			text: "Asset Categories"
        		},
        		exportFileName: "Pie Chart",
        		exportEnabled: true,
            animationEnabled: true,
        		legend:{
        			verticalAlign: "bottom",
        			horizontalAlign: "center"
        		},
        		data: [
        		{
        			type: "pie",
        			showInLegend: true,
        			toolTipContent: "{name}: <strong>{y}%</strong>",
        			indexLabel: "{name} {y}%",
        			dataPoints: [
              <?php
                foreach ($list3->result() as $row3) {
              ?>
        				{  y: parseInt("<?php echo $row3->{'total'}?>") , name: "<?php echo $row3->{'category'}?>"},
              <?php
                  }
               ?>
        			]
        	   }
        	  ]
        	});
        	chart.render();

    });
    </script>

</body>

</html>
