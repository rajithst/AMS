<!DOCTYPE html>
<html lang="en">

<head>
<!-- Import header content -->
<?php require_once 'includes/_header.php';?>
<title>ANS | ASSET RE-VALUATOIN</title>
</head>

<body>

<div id="wrapper">

<!-- import navigation  -->
<?php require_once 'includes/_navigation.php';?>
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
          <form action="" method="post">
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
                  <div class="form-group col-lg-4">
                      <label>Asset Category</label>
                      <select class="form-control" name="asset_category" >
                          <option value="cat 1">Category 1</option>
                          <option value="cat 2">Category 2</option>
                          <option value="cat 3">Category 3</option>
                          <option value="cat 4">Category 4</option>

                      </select>
                  </div>
                  <div class="form-group col-lg-4">
                      <label>Asset Sub Category</label>
                      <select class="form-control" name="sub_category" >
                          <option value="cat 1">Sub Category 1</option>
                          <option value="cat 2">Sub Category 2</option>
                          <option value="cat 3">Sub Category 3</option>
                          <option value="cat 4">Sub Category 4</option>

                      </select>
                  </div>
                  <div class="form-group col-lg-4">
                      <label>C.I.A</label>
                      <select class="form-control" name="asset_cia" >
                          <option value="cat 1">Option 1</option>
                          <option value="cat 2">Option 2</option>
                          <option value="cat 3">Option 3</option>
                          <option value="cat 4">Option 4</option>

                      </select>
                  </div>
              </div>

              <div class="row col-lg-8">
                <div class="form-group col-lg-6">
                  <label>Asset Owner</label>
                  <select class="form-control" name="asset_owner">
                    <option value="User1">User 1</option>
                    <option value="User2">User 2</option>
                    <option value="User3">User 3</option>
                    <option value="User4">User 4</option>
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
                  <select class="form-control" name="asset_location">
                    <option value="User1">Location 1</option>
                    <option value="User2">Location 2</option>
                    <option value="User3">Location 3</option>
                    <option value="User4">Location 4</option>
                  </select>
                </div>

                <div class="form-group col-lg-6">
                  <label>Asset Classification</label>
                  <select class="form-control" name="asset_classification">
                    <option value="User1">Class 1</option>
                    <option value="User2">Class 2</option>
                    <option value="User3">Class 3</option>
                    <option value="User4">Class 4</option>
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
                  <input type="text" name="asset_disposal_date" value="" class="form-control">
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

<!-- Include footer  -->
<?php require_once 'includes/_footer.php';?>
</body>

</html>
