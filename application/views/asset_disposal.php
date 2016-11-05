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

</head>
<title>ANS | ASSET DISPOSAL</title>

<body >

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
                        <form action="/AMS/index.php/admin/Assetdata/search_d" method="post">

                            <div class="row col-lg-12">
                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                                    <input type="text" name="searchText" id="search" value="" class="form-control" placeholder='Search PABC Serial Number' required>
                                </div>
                                <div class="col-lg-4">
                                  <button type="submit" class="btn btn-success btn-md" name="search"> Search</button>
                                </div>
                            </div>

                        </form>
                        <?php
                        if( isset($list)){

                        foreach ($list->result() as $row) {
                        ?>
                        <form action="/AMS/index.php/admin/Assetdata/disposal" method="post">
                            <div class="row col-lg-8">
                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                                    <label>Date</label>
                                    <input type="text" name="date" id='date' value="<?php echo $row->{'added_date'}; ?> " class="form-control" disabled>
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-4 col-xm-6">
                                    <label>PABC Serial Number</label>
                                    <input type="text" name="pabc_serial" value="<?php echo $row->{'PABC_serial_number'}; ?> " class="form-control" disabled>
                                </div>

                                <div class="form-group col-lg-4 col-md-4 col-sm-4 ">
                                    <label>Reference Number</label>
                                    <input type="text" name="reference_num" value="<?php echo $row->{'reference_number'}; ?> " class="form-control" disabled>
                                </div>
                            </div>
                            <hr class="col-lg-8">

                            <div class="row col-lg-8">
                                <div class="form-group col-lg-4">
                                    <label>Category</label>
                                    <input type="text" name="asset_category" value="<?php echo $row->{'category'}; ?> " class="form-control" disabled>
                                </div>

                              <div class="form-group col-lg-6">
                                <label>Sub Category</label>
                                <input type="text" name="asset_sub_category" value="<?php echo $row->{'sub_category'}; ?> " id="type" class="form-control" disabled>
                              </div>
                            </div>

                            <div class="row col-lg-8">
                              <div class="form-group col-lg-8">
                                <label>Description</label>
                                <input type="text" name="asset_description" value="<?php echo $row->{'asset_description'}; ?> " class="form-control" disabled>
                              </div>
                            </div>

                            <div class="row col-lg-8">
                              <div class="form-group col-lg-4">
                                <label>Asset Owner</label>
                                <input type="text" name="asset_owner" value="<?php echo $row->{'owner'}; ?> " class="form-control" disabled>
                              </div>
                              <div class="form-group col-lg-4">
                                <label>Asset Serial Number</label>
                                <input type="text" name="asset_serial" value="<?php echo $row->{'asset_serial_number'}; ?> " class="form-control" disabled>
                              </div>
                              <div class="form-group col-lg-4">
                                <label>Asset Location</label>
                                <input type="text" name="asset_location" value="<?php echo $row->{'location'}; ?> " class="form-control" disabled>
                              </div>

                            </div>

                            <div class="row col-lg-8">
                              <div class="form-group col-lg-8">
                                <label>Remark</label>
                                <input type="text" name="asset_remark" value="<?php echo $row->{'remark'}; ?> " class="form-control" disabled>
                              </div>
                            </div>
                            <div class="row col-lg-8">
                              <div class="form-group" style=" float:right">
                                <input type="hidden" name="index" value="<?php echo $row->{'asset_id'}; ?>" >
                                <button type="submit"  class="btn btn-warning" id="btn-submit" style="width:150px">Disposal</button>
                              </div>

                            </div>

                        <?php }} ?>


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
<script>

$('#btn-submit').on('click',function(e){
    e.preventDefault();
    var form = $(this).parents('form');
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this asset",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete ",
        closeOnConfirm: false
    }, function(isConfirm){
        if (isConfirm) form.submit();
    });
});



</script>
</body>
</html>
