<?php

  $logedin = $this->session->userdata('loggedin');
  $user_id = $this->session->userdata('user_id');
  if ($logedin != true){
      redirect('admin/User/login');
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- Import header content -->
<?php require_once 'includes/_header.php'; ?>

<title>ANS | ASSET REGISTER</title>
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
                <small>Asset Registration</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Registration
                </li>


            </ol>

            <!-- Form Begin -->
            <form action="/AMS/index.php/admin/Assetdata/register" method="post">
                <div class="row col-lg-8">
                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>Date</label>
                        <input type="text" name="date" id='date' value="" class="form-control" disabled>
                    </div>

                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>PABC Serial Number</label>
                        <input type="text" id="pabc_serial1" class="form-control" disabled>
                        <input type="hidden" name="pabc_serial" id="pabc_serial" required>
                    </div>

                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 ">
                        <label>Reference Number</label>
                        <input type="text" name="reference_num" value="" class="form-control">
                    </div>
                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                    <div class="form-group form-group-sm col-lg-4" id="assetcatdiv">
                        <label>Asset Category</label>
                        <select class="form-control" name="asset_category" id="assetcat" required>
                            <option value="">--SELECT CATEGORY--</option>

                        </select>
                    </div>
                    <div class="form-group form-group-sm col-lg-4">
                        <label>Asset Sub Category</label>
                        <select class="form-control" name="sub_category" id='sub_cat' disabled required>
                            <option value="">-- SELECT --</option>
                        </select>
                    </div>

                    <div class="row col-lg-8">
                      <div class="form-group form-group-sm col-lg-3">
                        <label>C</label>
                        <input type="number" name="asset_rate_C" id="asset_dep_rate_C" value="0" class="form-control " min="0" max="3" >
                      </div>
                      <div class="form-group form-group-sm col-lg-3">
                        <label for="">I</label>
                        <input type="number" name="asset_rate_I" id="asset_dep_rate_I" value="0" class="form-control " min="0" max="3" >
                      </div>
                      <div class="form-group form-group-sm col-lg-3">
                        <label for="">A</label>
                        <input type="number" name="asset_rate_A" id="asset_dep_rate_A" value="0" class="form-control " min="0" max="3" >
                      </div>
                      <div class="form-group form-group-sm col-lg-2">
                        <label for="">Value</label>
                        <input type="text" id="asset_dep_value" style='width:100px;' disabled>
                        <input type="hidden" name="asset_value" id="asset_value" required>
                      </div>
                    </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Custodian</label>
                    <select class="form-control" name="assetCustodian" id="assetCustodian">
                      <option value="">-- Select --</option>

                    </select>
                  </div>
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Owner</label>
                    <select class="form-control" name="assetOwner" id="assetOwner" required>
                      <option value="">-- Select --</option>

                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Serial Number</label>
                    <input type="text" name="assetSerial" value="" id="assetSerial" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-8">
                    <label>Description</label>
                    <textarea name="assetDescription" class="form-control" rows="8" cols="40"></textarea>

                  </div>

                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-4">
                    <label>OS Version</label>
                    <input type="text" name="asset_os_version" value="" class="form-control">
                  </div>
                  <div class="form-group form-group-sm col-lg-2">
                    <label>Color</label>
                    <input type="color" name="asset_color" value="" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm  col-lg-5">
                    <label>Asset Model</label>
                    <select class="form-control" name="assetModel" id="assetModel" required>
                      <option value="">-- Select --</option>

                    </select>

                  </div>
                  <div class="form-group form-group-sm col-lg-5">
                    <label>Manufacture</label>
                    <select class="form-control" name="assetManufacture" id="assetManufacture" required>
                      <option value="">-- Select --</option>
                    </select>
                  </div>

                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Location</label>
                    <select class="form-control" name="asset_location" id="asset_location">
                      <option value="">-- select --</option>

                    </select>
                  </div>

                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Classification</label>
                    <select class="form-control" name="assetClassification" id="assetClassification">
                      <option value="">-- select --</option>
                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-4">
                    <label>Lifetime Period</label>
                    <select class="form-control" name="assetLifetime" id="assetLifetime" required>
                      <option value="">-- select --</option>
                    </select>
                  </div>

                  <div class="form-group form-group-sm col-lg-4">
                    <label>Depreciation Rate</label>
                    <input type="number" name="asset_dep_rate" value="" class="form-control" min="0" step="any">
                  </div>

                  <div class="form-group form-group-sm col-lg-4">
                    <label>Warranty Period</label>
                    <select class="form-control" name="assetWarranty" id="assetWarranty" required>
                      <option value="">-- select --</option>
                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">

                  <div class="form-group form-group-sm col-lg-5">
                    <label>Maintain Status</label>
                    <input type="text" name="asset_maintain_status" value="" class="form-control">
                  </div>

                  <div class="form-group form-group-sm col-lg-5">
                    <label>Vendor</label>
                    <select class="form-control" name="assetVendor" id="assetVendor" required>
                      <option value="">-- select --</option>
                    </select>

                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-5">
                    <label>Disposal Date</label>
                    <input type="text" name="asset_disposal_date" id="disposal_date" value="" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-12">
                    <label>Remark</label>
                    <input type="text" name="asset_remark" value="" class="form-control">
                  </div>
                </div>
                <input type="hidden" name="user_id" value="<?php echo $user_id?>">
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-offset-8">
                    <button type="submit" class="btn btn-success" style="width:100px">Submit</button>
                    <button onclick="location.reload();" class="btn btn-danger" style="width:100px">Reset</button>
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

            // Disposal date datepicker set up
            $('#disposal_date').datepicker({dateFormat : 'yy-mm-dd'});

            var cat_id ="";

            //Get CATEGORY details
            $('#assetcat').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getCategory",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              minimumResultsForSearch: Infinity
            });

            //Enable sub CATEGORY option
            $('#assetcat').change(function(){
              cat_id = $('#assetcat').val();
              $('#sub_cat').prop('disabled',false);
              $('#sub_cat').val('');
              $('#sub_cat').prop('selectedIndex',0);
            });

            //Get sub CATEGORY details
            $('#sub_cat').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getSubCategory",
                dataType:"json",
                data:function(params){
                  var query = {
                    search:cat_id,
                  }
                  return query;
                },
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              minimumResultsForSearch: Infinity
            });

            // Get Employee details to owners
            $('#assetOwner').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getOwner",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });

            // Get Employee details to custodian
            $('#assetCustodian').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getCustodian",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });

            // Get location details
            $('#asset_location').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getLocation",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              minimumResultsForSearch: Infinity
            });

            $('#assetModel').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getModel",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });

            $('#assetVendor').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getVendor",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });

            $('#assetClassification').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getClassification",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              minimumResultsForSearch: Infinity
            });

            $('#assetManufacture').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getManufacture",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });

            $('#assetLifetime').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getLifetime",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });

            $('#assetWarranty').select2({
              ajax:{
                url:"/AMS/index.php/admin/MasterData/getWarranty",
                dataType:"json",
                delay:300,
                processResults:function(data){
                  return {
                      results:data
                  };
                }
              },
              //minimumResultsForSearch: Infinity
            });



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
              var value = ave.toFixed(3);
              $('#asset_dep_value').val(value);
              $('#asset_value').val(value);
            }

            // Generate PABC Number
            $('#assetcat').change(function(){
              $('#pabc_serial').val("");
              $('#pabc_serial1').val("");
            });
            $('#sub_cat').change(function(){
              generatePABC();
            });

            function generatePABC(){
              var valc = $('#assetcat option:selected').text();
              var prefix1 = valc.substring(0,2).toUpperCase();

              var vals = $('#sub_cat option:selected').text();
              var prefix2 = vals.substring(0,3).toUpperCase();

              var prefix = prefix1+"-"+prefix2+"-"+Math.floor((Math.random()*10000));
              $('#pabc_serial').val(prefix);
              $('#pabc_serial1').val(prefix);

            }
    });


</script>
