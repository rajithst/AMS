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
                <small>Add Categories</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Add New Category
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
                    <div class="form-group col-lg-6" id="assetcatdiv">
                        <label>Asset Category</label>
                        <select class="form-control" name="asset_category" id="assetcat" required>
                            <option value="">--SELECT CATEGORY--</option>
                        </select>
                    </div>

                  <div class="row col-lg-8 ">
                    <div class="form-group ">
                        <label>Asset Sub Category</label>
                        <input type="text" name="sub_cat" value="" required>
                    </div>
                  </div>

                <div class="row col-lg-8">
                  <div class="form-group ">
                    <button type="submit" class="btn btn-primary" style="width:100px">Add</button>
                  </div>

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
              }
            });
    });


</script>
