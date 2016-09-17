<!DOCTYPE html>
<html lang="en">

<head>
        <!-- Import header content -->
        <?php require_once 'includes/_header.php'; ?>

</head>
<title>ANS | ASSET DISPOSAL</title>

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
                            <small>Asset Disposal</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="#">Asset Movements</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Disposal
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
                                    <label>Asset Name</label>
                                    <input type="text" name="asset_name" value="" class="form-control">
                                </div>

                              <div class="form-group col-lg-6">
                                <label>Asset Type</label>
                                <input type="text" name="asset_type" value="" id="type" class="form-control">
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
                                <label>Asset Owner</label>
                                <input type="text" name="asset_owner" value="" class="form-control">
                              </div>
                              <div class="form-group col-lg-4">
                                <label>Asset Serial Number</label>
                                <input type="text" name="asset_serial" value="" class="form-control">
                              </div>
                              <div class="form-group col-lg-4">
                                <label>Asset Location</label>
                                <input type="text" name="asset_location" value="" class="form-control">
                              </div>

                            </div>

                            <div class="row col-lg-8">
                              <div class="form-group col-lg-8">
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
