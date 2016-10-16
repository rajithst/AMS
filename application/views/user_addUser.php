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

            <form action="/AMS/index.php/admin/UserData/addUser" method="post">

                <div class="row col-lg-12">

                    <div class="form-group col-lg-3" id="empiddiv">
                        <label>Employee No.</label>
                        <input type="text" name="emp_id" value="" id='emp_id' disabled required>
                    </div>

                    <div class="form-group col-lg-3" id="usernamediv">
                        <label>User Name </label>
                        <input type="text" name="emp_name" value="" required>
                    </div>

                    <div class="form-group col-lg-3" id="passworddiv">
                        <label>Password</label>
                        <input type="password" name="emp_pw" value="" required>
                    </div>

                    <div class="form-group col-lg-3" >
                        <label>User Group</label>
                        <select class="form-control" name="user_group" id="userGroup" style='width:160px' required>
                            <option value="">--SELECT GROUP--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>

                        </select>
                    </div>

                    <div class="row col-lg-12">
                      <div class="form-group col-lg-3">
                          <label>Password Reset</label>
                          <input type="text" name="" disabled>
                      </div>
                    </div>

                    <div class="row col-lg-12">
                      <div class="form-group ">
                        <button type="submit" class="btn btn-primary" style="width:100px">Add User</button>
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
  $('#userGroup').select2({
    // ajax:{
    //   url:"/AMS/index.php/admin/UserData/getUserGroup",
    //   dataType:"json",
    //   delay:300,
    //   processResults:function(data){
    //     return {
    //         results:data
    //     };
    //   }
    // },
    minimumResultsForSearch: Infinity
  });

  $.ajax({
    url:"/AMS/index.php/admin/UserData/getEmpId",
    dataType:"json",
    type:"POST",
    success:function(data){
      if(data[0]){
        var emp = parseInt(data[0]['emp_id']);
      }else{
        var emp = 0;
      }
      $('#emp_id').val(emp + 1);
    }
  });

});


</script>
