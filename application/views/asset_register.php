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
                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>Date</label>
                        <input type="text" name="date" id='date' value="" class="form-control" disabled>
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>PABC Serial Number</label>
                        <input type="text" name="pabc_serial" value="" class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-4 ">
                        <label>Reference Number</label>
                        <input type="text" name="reference_num" value="" class="form-control">
                    </div>
                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                    <div class="form-group col-lg-4" id="assetcatdiv">
                        <label>Asset Category</label>
                        <select class="form-control" name="asset_category" id="assetcat" >
                            <option value="">--SELECT CATEGORY--</option>

                        </select>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Asset Sub Category</label>
                        <select class="form-control" name="sub_category" id='sub_cat' disabled>
                            <option value="">-- SELECT --</option>
                        </select>
                    </div>

                    <div class="row col-lg-8">
                      <div class="form-group col-lg-3">
                        <label>C</label>
                        <input type="number" name="asset_dep_rate_C" id="asset_dep_rate_C" value="0" class="form-control " min="1" max="3" >
                      </div>
                      <div class="form-group col-lg-3">
                        <label for="">I</label>
                        <input type="number" name="asset_dep_rate_I" id="asset_dep_rate_I" value="0" class="form-control " min="1" max="3" >
                      </div>
                      <div class="form-group col-lg-3">
                        <label for="">A</label>
                        <input type="number" name="asset_dep_rate_A" id="asset_dep_rate_A" value="0" class="form-control " min="1" max="3" >
                      </div>
                      <div class="form-group col-lg-2">
                        <label for="">Value</label>
                        <input type="text" id="asset_dep_value" value="" disabled>
                      </div>
                    </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group col-lg-6">
                    <label>Asset Custodian</label>
                    <select class="form-control" name="asset_custodian" id="custodian_id">
                      <option value="">-- Select --</option>

                    </select>
                  </div>
                  <div class="form-group col-lg-6">
                    <label>Asset Owner</label>
                    <select class="form-control" name="asset_owner" id="user_id">
                      <option value="">-- Select --</option>

                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-6">
                    <label>Asset Serial Number</label>
                    <input type="text" name="asset_serial" value="" id="serial" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-8">
                    <label>Description</label>
                    <input type="text" name="asset_description" value="" class="form-control">
                  </div>

                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-4">
                    <label>OS Version</label>
                    <input type="text" name="asset_os_version" value="" class="form-control">
                  </div>
                  <div class="form-group col-lg-2">
                    <label>Color</label>
                    <input type="color" name="asset_color" value="" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-5">
                    <label>Asset Model</label>
                    <input type="text" name="asset_model" value="" class="form-control">
                  </div>
                  <div class="form-group col-lg-5">
                    <label>Manufacture</label>
                    <input type="text" name="asset_manufacture" value="" class="form-control">
                  </div>

                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                  <div class="form-group col-lg-6">
                    <label>Location</label>
                    <select class="form-control" name="asset_location" id="asset_location">
                      <option value="">-- select --</option>

                    </select>
                  </div>

                  <div class="form-group col-lg-6">
                    <label>Asset Classification</label>
                    <select class="form-control" name="asset_classification">
                      <option value="">-- select --</option>
                      <option value="Very Low">Very Low</option>
                      <option value="Low">Low</option>
                      <option value="Medium">Medium</option>
                      <option value="High">High</option>
                      <option value="Very High">Very High</option>
                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-4">
                    <label>Lifetime Period</label>
                    <select class="form-control" name="asset_lifetime">
                      <option value="User1">Time 1</option>
                      <option value="User2">Time 2</option>
                      <option value="User3">Time 3</option>
                      <option value="User4">Time 4</option>
                    </select>
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Depreciation Rate</label>
                    <input type="number" name="asset_dep_rate" value="" class="form-control" min="0" step="any">
                  </div>
                  <div class="form-group col-lg-4">
                    <label>Warranty Period</label>
                    <select class="form-control" name="asset_warranty">
                      <option value="User1">Time 1</option>
                      <option value="User2">Time 2</option>
                      <option value="User3">Time 3</option>
                      <option value="User4">Time 4</option>
                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-5">
                    <label>Maintain Status</label>
                    <input type="text" name="asset_maintain_status" value="" class="form-control">
                  </div>
                  <div class="form-group col-lg-5">
                    <label>Vendor</label>
                    <input type="text" name="asset_vender" value="" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-5">
                    <label>Disposal Date</label>
                    <input type="text" name="asset_disposal_date" id="disposal_date" value="" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group col-lg-12">
                    <label>Remark</label>
                    <input type="text" name="asset_remark" value="" class="form-control">
                  </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group col-lg-offset-8">
                    <button type="submit" class="btn btn-primary" style="width:100px">Submit</button>
                    <button type="reset" class="btn btn-primary" style="width:100px">Reset</button>
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
            $('#disposal_date').datepicker();

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
            $('#user_id').select2({
              ajax:{
                url:"/AMS/index.php/admin/UserData/getUser",
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

            // Get Employee details to custodian
            $('#custodian_id').select2({
              ajax:{
                url:"/AMS/index.php/admin/UserData/getUser",
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
