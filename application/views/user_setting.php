<?php

$logedin = $this->session->userdata('loggedin');

if ($logedin != true){
    redirect('admin/User/login');
}

$user_id = $this->sessio->userdata('user_id');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Import header content -->
<?php require_once 'includes/_header.php'; ?>

<title>AMS | PROFILE SETTING </title>


    <script>


        function activate(form, origin, target) {
            if (origin.value.length > 0) {
                document.forms[form][target].disabled = false;
            } else {
                document.forms[form][target].disabled = true;
                document.forms[form][target].value = "";
            }
        }


    </script>
</head>

<body style="background-color:white">

<div id="wrapper">

<!-- import navigation  -->
<?php require_once 'includes/_navigation.php'; ?>

<div id="page-wrapper">

<div class="container-fluid"  style="height:100%" >

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                User Profile
                <small>Profile Setting</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Profile Setting
                </li>
            </ol>

            <!-- Form Begin -->

            <form action="/AMS/index.php/admin/UserData/addUser" method="post" name ="setting">

              <div class="col-lg-6">
                  <div class="row ">
                    <div class="form-group col-lg-3" id="empiddiv">
                      <label>Employee No.</label>
                      <input type="text" name="user_id" value="" id='user_id' disabled required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-3" >
                      <label>User Group</label>
                      <input type="text" name="user_group" oninput="activate('adduser', this, 'user_password')" required disabled >
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-3" id="usernamediv">
                      <label>User Name </label>
                      <input type="text" name="user_name" oninput="activate('adduser', this, 'user_password')" required disabled >
                    </div>
                  </div>
              </div>

              <div class="col-lg-6">

                  <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Reset Password
                  </button>

                  <div class="collapse row col-lg-12" id="collapseExample">
                    <div class="card card-block">

                      <div class="row">
                        <div class="form-group col-lg-3" id="passworddiv">
                          <label>Current Password</label>
                          <input type="password" name="curr_password" oninput="activate('setting', this, 'user_password')" required  >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-lg-3" id="passworddiv">
                          <label>Password</label>
                          <input type="password" name="user_password" oninput="activate('setting', this, 'user_password_check')" required disabled >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-lg-3" id="passworddiv">
                          <label>Confirm Password</label>
                          <input type="password" name="user_password_check" oninput="activate('setting', this, 'btnReset')" required disabled >
                        </div>
                      </div>

                      <div class="row col-lg-12">
                        <div class="form-group ">
                          <button type="submit" name="btnReset" class="btn btn-primary" disabled>Reset Password</button>
                        </div>
                      </div>

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



});


</script>
