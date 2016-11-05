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
            <?php
              foreach ($user_data->result() as $row) {
                switch ($row->{'user_group'}) {
                  case '1':
                    $userGroup = "Auditor";
                    break;
                  case '2':
                    $userGroup = "Inputter";
                    break;
                  case '3':
                    $userGroup = "Authorizer";
                    break;
                  case '999':
                    $userGroup = "System Administrator";
                    break;

                  default:
                    # code...
                    break;
                }

            ?>
            <form action="/AMS/index.php/admin/UserData/resetPassword" method="post" name ="setting" onsubmit="return checkForm()">

              <div class="col-lg-6">
                  <div class="row ">
                    <div class="form-group col-lg-3" id="empiddiv">
                      <label>User No.</label>
                      <input type="text" name="user_id" value="<?php echo $row->{'id'}?>" id='user_id' disabled required>
                      <input type="hidden" name="user_id" value="<?php echo $row->{'id'}?>" required>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-3" >
                      <label>User Group</label>
                      <input type="text" name="user_group" value="<?php echo $userGroup?>" required disabled >
                      <input type="hidden" name="user_group" value="<?php echo $userGroup?>" required >
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-lg-3" id="usernamediv">
                      <label>User Name </label>
                      <input type="text" name="user_name" id="username" value="<?php echo $row->{'user_name'}?>" required disabled >
                    </div>
                  </div>
              </div>

              <div class="col-lg-6" id="pwd-container">

                  <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Reset Password
                  </button>

                  <div class="collapse row col-lg-12" id="collapseExample">
                    <div class="card card-block">

                      <div class="row">
                        <div class="form-group col-lg-3" id="passworddiv">
                          <label>Current Password</label>
                          <input type="password" name="curr_password" id="curr_pw" oninput="activate('setting', this, 'user_password')" required  >
                        </div>
                      </div>

                      <div class="row">
                        <div class="form-group col-lg-3" id="passworddiv">
                          <label>Password</label>
                          <input type="password" name="user_password" id="user_password" oninput="activate('setting', this, 'user_password_check')" required disabled >
                        </div>
                      </div>
                      <div id="messages"></div>
                      <div class="row">
                        <div class="form-group col-lg-3" id="passworddiv">
                          <label>Confirm Password</label>
                          <input type="password" name="user_password_check" id="user_password_check" required disabled >
                        </div>
                      </div>

                      <div class="row col-lg-12">
                        <div class="form-group ">
                          <button type="submit" name="btnReset" id='submitBtn' class="btn btn-primary" disabled>Reset Password</button>
                        </div>
                      </div>

                    </div>
                  </div>

              </div>

            </form>
            <?php } ?>


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
<script src="<?php echo base_url('assets/js/pwstrength-bootstrap.js'); ?>"></script>
</body>

</html>
<script>
  $(document).ready(function(){

    var options = {};
      options.ui = {
        showVerdictsInsideProgressBar: true,
      };
      options.common = {
        onKeyUp: function (evt, data) {

             if(data.score > 50 ){
               $('#submitBtn').prop('disabled',false);
             }else{
               $('#submitBtn').prop('disabled',true);
             }
        }
    };
      $('#user_password').pwstrength(options);
  });

  $('#user_password').focus(function(){
    var curr_pw = $('#curr_pw').val();

    $.ajax({
      url:"/AMS/index.php/admin/UserData/getPassword",
      dataType:"json",
      type:"POST",
      data:{pw:curr_pw},
      success:function(data){
        if(data[0]){

        }else{
          swal({
            title: "Current password Not Match!",
            text: "Your current password not match. Please try again.",
            timer: 2000,
            showConfirmButton: false
          });
          $('#user_password').prop('disabled',false);
        }
      }
    });

  });

  $('#user_password_check').focus(function(){
    var curr_pw = $('#curr_pw').val();

    $.ajax({
      url:"/AMS/index.php/admin/UserData/getPassword",
      dataType:"json",
      type:"POST",
      data:{pw:curr_pw},
      success:function(data){
        if(data[0]){

        }else{
          swal({
            title: "Current password Not Match!",
            text: "Your current password not match. Please try again.",
            timer: 2000,
            showConfirmButton: false
          });
          $('#user_password').val("");
          $('#user_password').prop('disabled',false);
          $('#user_password_check').prop('disabled',false);
        }
      }
    });

  });

  function checkForm(){

    var new_pw = $('#user_password').val();
    var new_pw_check = $('#user_password_check').val();

    if(new_pw === new_pw_check){
      return true;
    }else{
      swal({
        title: "Password Not Match!",
        text: "Password filed not match. Please try again.",
        timer: 2000,
        showConfirmButton: false
      });
      return false;
    }

  }

</script>
