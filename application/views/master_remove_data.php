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
                    <div class="form-group form-group-sm col-lg-6" id="assetcatdiv">
                        <label>Select Category</label>
                        <select class="form-control" name="asset_category" id="assetCategory" required>
                            <option value="">--SELECT CATEGORY--</option>
                        </select>

                    </div>
                    <div class="form-group col-lg-8">
                      <button type="submit" class="btn btn-danger btn-sm" style="width:120px">Remove</button>
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
                    <button type="submit" class="btn btn-danger btn-sm" style="width:100px">Remove</button>
                  </div>

                </div>

              </div>
            </form>

            <hr class="col-lg-8">
            <div class="row">

            <form action="/AMS/index.php/admin/MasterData/removeModel" method="post">

                <div class="col-lg-6">
                    <div class="form-group" id="asset_Model">
                        <label>Remove Model</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetModel" id="assetModel" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>
                      </div>
                    </div>
                </div>

            </form>

            <form action="/AMS/index.php/admin/MasterData/removeCustodian" method="post">

                <div class="col-lg-6">
                    <div class="form-group" id="asset_Custodian">
                        <label>Remove Custodian</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetCustodian" id="assetCustodian" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>
                        </div>
                    </div>
                </div>

            </form>
          </div>

            <hr class="col-lg-8">
            <div class="row">
            <form action="/AMS/index.php/admin/MasterData/removeOwner" method="post">

                <div class=" col-lg-6">
                    <div class="form-group" id="asset_Owner">
                        <label>Remove Owner</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetOwner" id="assetOwner" style="width:200px" required>
                            <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>
                        </div>
                    </div>
                </div>

            </form>



            <form action="/AMS/index.php/admin/MasterData/removeLocation" method="post">

                <div class="col-lg-6">
                    <div class="form-group" id="asset_Location">
                        <label>Remove location</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetLocation" id="assetLocation" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>

                        </div>
                    </div>
                </div>

            </form>
            </div>
            <hr class="col-lg-8">

            <div class="row">
            <form action="/AMS/index.php/admin/MasterData/removeVendor" method="post">

                <div class=" col-lg-6">
                    <div class="form-group" id="asset_Vendor">
                        <label>Remove Vendor</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetVendor" id="assetVendor" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>

                        </div>
                    </div>
                </div>

            </form>



            <form action="/AMS/index.php/admin/MasterData/removeClassification" method="post">

                <div class=" col-lg-6">
                    <div class="form-group" id="asset_Classification">
                        <label>Remove Classification</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetClassification" id="assetClassification" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>
                        </div>
                    </div>
                </div>

            </form>
          </div>

            <hr class="col-lg-8">
            <div class="row">
            <form action="/AMS/index.php/admin/MasterData/removeManufacture" method="post">

                <div class=" col-lg-6">
                    <div class="form-group" id="asset_Manufacture">
                        <label>Remove Manufacture</label>

                        <div class="row col-lg-12">
                          <select class="form-control" name="assetManufacture" id="assetManufacture" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>
                        </div>
                    </div>
                </div>

            </form>


            <form action="/AMS/index.php/admin/MasterData/removeLifetime" method="post">

                <div class=" col-lg-6">
                    <div class="form-group" id="asset_Lifetime">
                        <label>Remove Lifetime</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetLifetime" id="assetLifetime" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>
                        </div>
                    </div>
                </div>

            </form>
          </div>

            <hr class="col-lg-8">

            <form action="/AMS/index.php/admin/MasterData/removeWarranty" method="post">

                <div class="row col-lg-6">
                    <div class="form-group" id="asset_Warranty">
                        <label>Remove Warranty Period</label>
                        <div class="row col-lg-12">
                          <select class="form-control" name="assetWarranty" id="assetWarranty" style="width:200px" required>
                              <option value="">-- SELECT --</option>
                          </select>
                          <button type="submit" class="btn btn-danger btn-sm" style="width:120px; margin-left:20px;">Remove </button>

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
    $('#sub_cat').prop('selectedIndex',0);
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
    //minimumResultsForSearch: Infinity
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

});



</script>
