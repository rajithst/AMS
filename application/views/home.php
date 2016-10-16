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

        <title>ANS | HOME</title>
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
                            Blank Pagebr
                            <br><br><br><br>
                            <br><br>

                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
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
