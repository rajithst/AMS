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

<title>ANS | MASTER TABLE </title>
</head>

<body style="height:100%">

<div id="wrapper">

<!-- import navigation  -->
<?php require_once 'includes/_navigation.php'; ?>

<div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Master Table Hadling
                <small>Add Master Data</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Add Master Data
                </li>
            </ol>

            <!-- Form Begin -->

            <form action="/AMS/index.php/admin/MasterData/addCategory" method="post">

                <div class="row col-lg-6">
                    <div class="form-group col-lg-6" id="assetcatdiv">
                        <label>Add New Asset Category</label>
                        <input type="text" name="asset_category" value="" required>
                    </div>
                    <div class="form-group col-lg-8">
                      <button type="submit" class="btn btn-primary" style="width:120px">Add Category</button>
                    </div>
                </div>

            </form>


            <form action="/AMS/index.php/admin/MasterData/addSubCategory" method="post">

                <div class="row col-lg-6">
                    <div class="form-group col-lg-6" style="padding:0px">
                        <label>Asset Category</label>
                        <select class="form-control" name="asset_category" id="assetcat" required>
                            <option value="">--SELECT CATEGORY--</option>
                        </select>
                    </div>

                  <div class="row col-lg-8 ">
                    <div class="form-group ">
                        <label>Asset Sub Category</label>
                        <input type="text" name="sub_cat" required>
                    </div>
                  </div>

                <div class="row col-lg-8">
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary" style="width:100px">Add</button>
                  </div>

                </div>

              </div>
            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addModel" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetModel">
                        <label>Add New Asset Model</label>
                        <div class="row col-lg-12">
                          <input type="text" name="assetModel" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px;margin-left:20px;">Add </button>
                      </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addCustodian" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetCustodian">
                        <label>Add New Asset Custodian</label>
                        <div class="row col-lg-12">
                          <input type="text" name="assetCustodian" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px;margin-left:20px;">Add </button>
                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addOwner" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetOwner">
                        <label>Add New Asset Owner</label>
                        <div class="row col-lg-12">
                          <input type="text" name="assetOwner" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px;margin-left: 20px;">Add </button>

                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addLocation" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetLocation">
                        <label>Add New Asset location</label>
                        <div class="row col-lg-12">
                          <input type="text" name="assetLocation" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px; margin-left:20px;">Add </button>

                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addVendor" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetVendor">
                        <label>Add New Asset vendor</label>
                        <div class="row col-lg-12">
                          <input type="text" name="assetVendor" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px; margin-left:20px;">Add </button>

                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addClassification" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetClassification">
                        <label>Add New Asset Classification</label>
                        <div class="row col-lg-12">
                          <input type="text" name="assetClassification" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px; margin-left:20px;">Add </button>
                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addManufacture" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetManufacture">
                        <label>Add New Asset Manufacture</label>

                        <div class="row col-lg-12">
                          <input type="text" name="assetManufacture" value="" required>
                          <button type="submit" class="btn btn-primary" style="width:120px; margin-left:20px;">Add </button>
                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addLifetime" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetLifetime">
                        <label>Add New Asset Lifetime</label>
                        <div class="row col-lg-12">
                          <input type="number" name="assetLifetime" value="" style="width:190px;" placeholder="Use number of months" min='1' required>
                          <button type="submit" class="btn btn-primary" style="width:120px; margin-left:20px;">Add </button>

                        </div>
                    </div>
                </div>

            </form>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/addWarranty" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="assetWarranty">
                        <label>Add New Asset Warranty</label>
                        <div class="row col-lg-12">
                            <input type="text" name="assetWarranty" value="" required>
                            <button type="submit" class="btn btn-primary" style="width:120px; margin-left:20px;">Add </button>
                        </div>
                    </div>
                </div>

            </form>
            <div class="" style="height:100px;">

            </div>

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
    //minimumResultsForSearch: Infinity
  });
});


</script>
