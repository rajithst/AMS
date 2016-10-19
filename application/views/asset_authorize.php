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

            <!-- Form Begin -->
            <form action="/AMS/index.php/admin/Assetdata/authorize" method="post">
                <div class="row col-lg-8">
                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>Date</label>
                        <input type="text" name="date" id='date' value="" class="form-control" disabled>
                    </div>

                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>PABC Serial Number</label>
                        <input type="text" name="pabc_serial" value="" class="form-control" disabled>
                    </div>

                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 ">
                        <label>Reference Number</label>
                        <input type="text" name="reference_num" value="" class="form-control" disabled>
                    </div>
                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                    <div class="form-group form-group-sm col-lg-4" id="assetcatdiv">
                        <label>Asset Category</label>
                        <input type="text" name="assetCategory" id="assetCategory" value="" class="form-control" disabled>

                    </div>
                    <div class="form-group form-group-sm col-lg-4">
                        <label>Asset Sub Category</label>
                        <input type="text" name="assetSubCategory" id="assetSubCategory" value="" class="form-control" disabled>

                    </div>

                    <div class="row col-lg-8">
                      <div class="form-group form-group-sm col-lg-3">
                        <label>C</label>
                        <input type="text" name="asset_rate_C" id="asset_dep_rate_C" class="form-control " disabled>
                      </div>
                      <div class="form-group form-group-sm col-lg-3">
                        <label for="">I</label>
                        <input type="text" name="asset_rate_I" id="asset_dep_rate_I" class="form-control " disabled>
                      </div>
                      <div class="form-group form-group-sm col-lg-3">
                        <label for="">A</label>
                        <input type="text" name="asset_rate_A" id="asset_dep_rate_A" class="form-control " disabled>
                      </div>
                      <div class="form-group form-group-sm col-lg-2">
                        <label for="">Value</label>
                        <input type="text" id="asset_dep_value" style='width:100px;' disabled>
                      </div>
                    </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Custodian</label>
                    <input type="text" name="assetCustodian" id="assetCustodian" value="" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Owner</label>
                    <input type="text" name="assetOwner" id="assetOwner" value="" class="form-control" disabled>

                  </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Serial Number</label>
                    <input type="text" name="assetSerial" id="assetSerial" value="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-8">
                    <label>Description</label>
                    <textarea name="assetDescription" class="form-control" rows="8" cols="40" disabled></textarea>

                  </div>

                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-4">
                    <label>OS Version</label>
                    <input type="text" name="asset_os_version" value="" class="form-control" disabled>
                  </div>
                  <div class="form-group form-group-sm col-lg-2">
                    <label>Color</label>
                    <input type="color" name="asset_color" value="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm  col-lg-5">
                    <label>Asset Model</label>
                    <input type="text" name="assetModel" id="assetModel" value="" class="form-control" disabled>
                    </div>
                  <div class="form-group form-group-sm col-lg-5">
                    <label>Manufacture</label>
                    <input type="text" name="assetManufacture" id="assetManufacture" value="" class="form-control" disabled>
                  </div>

                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Location</label>
                    <input type="text" name="assetLocation" id="assetLocation" value="" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Classification</label>
                    <input type="text" name="assetClassification" id="assetClassification" value="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-4">
                    <label>Lifetime Period</label>
                    <input type="text" name="assetLifetime" id="assetLifetime" value="" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-4">
                    <label>Depreciation Rate</label>
                    <input type="text" name="asset_dep_rate" id="assetOwner" value="" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-4">
                    <label>Warranty Period</label>
                    <input type="text" name="assetWarranty" id="assetWarranty" value="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">

                  <div class="form-group form-group-sm col-lg-5">
                    <label>Maintain Status</label>
                    <input type="text" name="asset_maintain_status" value="" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-5">
                    <label>Vendor</label>
                    <input type="text" name="assetVendor" id="assetVendor" value="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-5">
                    <label>Disposal Date</label>
                    <input type="text" name="asset_disposal_date" id="disposal_date" value="" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-12">
                    <label>Remark</label>
                    <input type="text" name="asset_remark" value="" class="form-control" disabled>
                  </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-offset-8">
                    <button type="submit" class="btn btn-success btn-sm" style="width:100px">Authorize</button>
                    <button type="reset" class="btn btn-danger btn-sm" style="width:100px">Reject</button>
                  </div>

                </div>
            </form>


        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php require_once 'includes/_footer.php'; ?>
</body>

</html>
<script>

$(document).ready(function () {

            //C.I.A value calculation
            $('#asset_dep_rate_C').change(function () {
              cal_cia_average();
            });

            $('#asset_dep_rate_I').change(function () {
              cal_cia_average();
            });

            $('#asset_dep_rate_A').change(function () {
              cal_cia_average();
            });

            function cal_cia_average(){
              var c = parseInt($('#asset_dep_rate_C').val());
              var i = parseInt($('#asset_dep_rate_I').val());
              var a = parseInt($('#asset_dep_rate_A').val());
              var ave = (c + i + a)/3;
              $('#asset_dep_value').val(ave.toFixed(2));
            }
            
    });


</script>
