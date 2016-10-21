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
                User Management
                <small>Add User</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="#">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Add New User
                </li>
            </ol>

            <!-- Form Begin -->

            <form action="/AMS/index.php/admin/UserData/addUser" method="post" name = "adduser">

                <div class="row col-lg-12">
                    <div class="form-group col-lg-3" id="empiddiv">
                        <label>Employee No.</label>
                        <input type="text" name="user_id" value="" id='user_id' disabled required>
                    </div>

                    <div class="form-group col-lg-3" >
                        <label>User Group</label>
                        <select class="form-control" name="user_group" onchange="activate('adduser', this, 'user_name')" id="userGroup" style='width:160px' required >
                            <option value="">--- SELECT ---</option>
                            <option value="1">Auditor</option>
                            <option value="2">Inputter</option>
                            <option value="3">Authorizer</option>

                        </select>
                    </div>

                  </div>

                  <div class="row col-lg-12">
                    <div class="form-group col-lg-3" id="usernamediv">
                        <label>User Name </label>
                        <input type="text" name="user_name" oninput="activate('adduser', this, 'user_password')" required disabled >
                    </div>

                    <div class="form-group col-lg-2" id="passworddiv">
                        <label>Password</label>
                        <input type="password" id="password" name="user_password" oninput="activate('adduser', this, 'pwd_reset')" required disabled >
                    </div>
                  </div>
                  <div class="row col-lg-6">

                    <div class="row col-lg-12">
                      <div class="form-group ">
                        <button type="submit" id="submitBtn" class="btn btn-primary" style="width:100px; float:right" disabled>Add User</button>
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
<script src="<?php echo base_url('assets/js/pwstrength-bootstrap.js'); ?>"></script>
</body>

</html>
<script>

$(document).ready(function () {

  $('#userGroup').select2({
    minimumResultsForSearch: Infinity
  });

  //Get last user id and generate new emp id
  $.ajax({
    url:"/AMS/index.php/admin/UserData/getUserId",
    dataType:"json",
    type:"POST",
    success:function(data){
      if(data[0]){
        var emp = parseInt(data[0]['id']);
      }else{
        var emp = 0;
      }

      var number = pad( emp+1 , 4);

      $('#user_id').val(number);
    }
  });

  function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
  }

  // password field
  var options = {};
    options.ui = {
      showVerdictsInsideProgressBar: true,
    };
    options.common = {
      onKeyUp: function (evt, data) {

           if(data.score > 40 ){
             $('#submitBtn').prop('disabled',false);
           }else{
             $('#submitBtn').prop('disabled',true);
           }
      }
  };
    $('#password').pwstrength(options);
});



</script>
