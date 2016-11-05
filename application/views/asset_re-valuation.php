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
                  <i class="fa fa-dashboard"></i>  <a href="<?PHP echo base_url('index.php') ?>">Dashboard</a>
              </li>
              <li class="active">
                  <i class="fa fa-file"></i> Re-Valuation
              </li>
          </ol>

          <!-- Form Begin -->
          <form action="/AMS/index.php/admin/Assetdata/search" method="post">

              <div class="row col-lg-12">
                  <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                      <input type="text" name="searchText" id="search" value="" class="form-control" placeholder='Search PABC Serial Number' required>
                  </div>
                  <div class="col-lg-4">
                    <button type="submit" class="btn btn-success btn-md" name="search"> Search</button>
                  </div>
              </div>

          </form>
          <div class="row col-lg-12">
            <hr>
          </div>
          <?php
          if( isset($list)){
              foreach ($list->result() as $row) {
          ?>
            <!-- Form Begin -->
            <form action="/AMS/index.php/admin/Assetdata/reValuation" method="post">
                <div class="row col-lg-8">
                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>Date</label>
                        <input type="text" name="date" id='date' value="<?php echo $row->{'added_date'}; ?> " class="form-control" disabled>
                    </div>

                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 col-xm-6">
                        <label>PABC Serial Number</label>
                        <input type="text" name="pabc_serial" value="<?php echo $row->{'PABC_serial_number'}; ?>" class="form-control" disabled>
                    </div>

                    <div class="form-group form-group-sm col-lg-4 col-md-4 col-sm-4 ">
                        <label>Reference Number</label>
                        <input type="text" name="reference_num" value="<?php echo $row->{'reference_number'}; ?> " class="form-control" disabled>
                    </div>
                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                    <div class="form-group form-group-sm col-lg-4" id="assetcatdiv">
                        <label>Asset Category</label>
                        <input type="text" name="assetCategory" id="assetCategory" value="<?php echo $row->{'category'}; ?>" class="form-control" disabled>

                    </div>
                    <div class="form-group form-group-sm col-lg-4">
                        <label>Asset Sub Category</label>
                        <input type="text" name="assetSubCategory" id="assetSubCategory" value="<?php echo $row->{'sub_category'}; ?>" class="form-control" disabled>

                    </div>

                    <div class="row col-lg-8">
                      <div class="form-group form-group-sm col-lg-3">
                        <label>C</label>
                        <input type="text" name="asset_rate_C" value="<?php echo $row->{'confidentiality'}; ?>" class="form-control " disabled>
                      </div>
                      <div class="form-group form-group-sm col-lg-3">
                        <label for="">I</label>
                        <input type="text" name="asset_rate_I" value="<?php echo $row->{'integrity'}; ?>" class="form-control " disabled>
                      </div>
                      <div class="form-group form-group-sm col-lg-3">
                        <label for="">A</label>
                        <input type="text" name="asset_rate_A" value="<?php echo $row->{'availability'}; ?>" class="form-control " disabled>
                      </div>
                      <div class="form-group form-group-sm col-lg-2">
                        <label for="">Value</label>
                        <input type="text" value="<?php echo $row->{'cia_value'}; ?>" style='width:100px;' disabled>
                      </div>
                    </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Custodian</label>
                    <input type="text" name="assetCustodian" id="assetCustodian" value="<?php echo $row->{'custodian'}; ?>" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Owner</label>
                    <input type="text" name="assetOwner" id="assetOwner" value="<?php echo $row->{'owner'}; ?>" class="form-control" disabled>

                  </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Serial Number</label>
                    <input type="text" name="assetSerial" id="assetSerial" value="<?php echo $row->{'asset_serial_number'}; ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-8">
                    <label>Description</label>
                    <textarea name="assetDescription" class="form-control" value="" rows="8" cols="40" disabled><?php echo $row->{'asset_description'}; ?></textarea>

                  </div>

                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-4">
                    <label>OS Version</label>
                    <input type="text" name="asset_os_version" value="<?php echo $row->{'OS_version'}; ?>" class="form-control" disabled>
                  </div>
                  <div class="form-group form-group-sm col-lg-2">
                    <label>Color</label>
                    <input type="color" name="asset_color" value="<?php echo $row->{'color'}; ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm  col-lg-5">
                    <label>Asset Model</label>
                    <input type="text" name="assetModel" id="assetModel" value="<?php echo $row->{'model'}; ?>" class="form-control" disabled>
                    </div>
                  <div class="form-group form-group-sm col-lg-5">
                    <label>Manufacture</label>
                    <input type="text" name="assetManufacture" id="assetManufacture" value="<?php echo $row->{'manufacture'}; ?>" class="form-control" disabled>
                  </div>

                </div>
                <hr class="col-lg-8">
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-6">
                    <label>Location</label>
                    <input type="text" name="assetLocation" id="assetLocation" value="<?php echo $row->{'location'}; ?>" class="form-control" disabled>
                  </div>

                  <div class="form-group form-group-sm col-lg-6">
                    <label>Asset Classification</label>
                    <input type="text" name="assetClassification" id="assetClassification" value="<?php echo $row->{'classification'}; ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-4">
                    <label>Lifetime Period</label>
                    <select class="form-control" name="assetLifetime" id="assetLifetime" required>
                      <option value=""><?php echo $row->{'lifetime'}; ?></option>
                    </select>
                  </div>

                  <div class="form-group form-group-sm col-lg-4">
                    <label>Depreciation Rate</label>
                    <input type="number" name="asset_dep_rate" value="<?php echo $row->{'depreciation_rate'}; ?>" class="form-control" min="0" step="any" required>
                  </div>

                  <div class="form-group form-group-sm col-lg-4">
                    <label>Warranty Period</label>
                    <select class="form-control" name="assetWarranty" id="assetWarranty" required>
                      <option value=""><?php echo $row->{'warranty'}; ?></option>
                    </select>
                  </div>
                </div>
                <div class="row col-lg-8">

                  <div class="form-group form-group-sm col-lg-5">
                    <label>Maintain Status</label>
                    <input type="text" name="asset_maintain_status" value="<?php echo $row->{'Maintain_status'}; ?>" class="form-control">
                  </div>

                  <div class="form-group form-group-sm col-lg-5">
                    <label>Vendor</label>
                    <input type="text" name="assetVendor" id="assetVendor" value="<?php echo $row->{'vendor'}; ?>" class="form-control" disabled>
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-5">
                    <label>Disposal Date</label>
                    <input type="text" name="asset_disposal_date" id="disposal_date" value="<?php echo $row->{'disposal_date'}; ?>" class="form-control">
                  </div>
                </div>
                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-12">
                    <label>Remark</label>
                    <input type="text" name="asset_remark" value="<?php echo $row->{'remark'}; ?>" class="form-control">
                  </div>
                </div>

                <div class="row col-lg-8">
                  <div class="form-group form-group-sm col-lg-offset-8">
                    <input type="hidden" name='index' value="<?php echo $row->{'asset_id'}; ?>">
                    <button type="submit" name='submit' class="btn btn-success btn-sm" style="width:100px">Authorize</button>
                    <button onclick="location.href = '<?PHP echo base_url('index.php') ?>'" class="btn btn-primary btn-sm" style="width:100px">Back</button>
                  </div>

                </div>
            </form>
<?php }} ?>

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

<script>
  $(document).ready(function(){

    //Asset life time
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

    //warranty perrion get
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

    // Disposal date datepicker set up
    $('#disposal_date').datepicker({dateFormat : 'yy-mm-dd'});

  });
</script>

</body>

</html>
