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
                <small>Remove Master Data</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Remove Master Data
                </li>
            </ol>

            <!-- Form Begin -->

            <form action="/AMS/index.php/admin/MasterData/removeCategory" method="post">

                <div class="row col-lg-6">
                    <div class="form-group col-lg-6" id="assetcatdiv">
                        <label>Select Category</label>
                        <select class="form-control" name="asset_category" id="assetCategory" required>
                            <option value="">--SELECT CATEGORY--</option>
                        </select>

                    </div>
                    <div class="form-group col-lg-8">
                      <button type="submit" class="btn btn-danger" style="width:120px">Remove</button>
                    </div>
                </div>

            </form>


            <form action="/AMS/index.php/admin/MasterData/removeSubCategory" method="post">

                <div class="row col-lg-6">
                    <div class="form-group col-lg-6" style="padding:0px">
                        <label>Asset Category</label>
                        <select class="form-control" name="asset_category" id="assetcat" required>
                            <option value="">--SELECT CATEGORY--</option>
                        </select>
                    </div>

                  <div class="row col-lg-8 ">
                    <div class="form-group ">
                        <label>Select Sub Category</label>
                        <select class="form-control" name="asset_sub_category" id="assetSubcat" disabled required>
                            <option value="">--SELECT --</option>
                        </select>
                    </div>
                  </div>

                <div class="row col-lg-8">
                  <div class="form-group ">
                    <button type="submit" class="btn btn-danger" style="width:100px">Remove</button>
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

            <form action="/AMS/index.php/admin/MasterData/removeLocation" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="asset_Location">
                        <label>Remove location</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetLocation" id="assetLocation" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger" style="width:120px; margin-left:20px;">Remove </button>

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
                          <input type="text" name="assetLifetime" value="" required>
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

  //Select category
  $('#assetCategory').select2({
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


  //TO remove sub category
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

  $('#assetcat').change(function(){
    cat_id = $('#assetcat').val();
    $('#assetSubcat').prop('disabled',false);
    $('#assetSubcat').val('');
  });

  //Get sub CATEGORY details
  $('#assetSubcat').select2({
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
    //minimumResultsForSearch: Infinity
  });


  $('#assetLocation').select2({
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
    //minimumResultsForSearch: Infinity
  });

});



</script>
