<?php
require('hidden_right.php');
?>

<section class="content-header" >
  <h1>Change Password</h1> 
</section>

<style>
.change_password{
  display: block;
}

</style>

<?php
if(isset($_POST['submit'])){
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  require("$root/include/config/query.php");
  require("$root/include/security/security1.php");
  $oldpwd = test_input($_POST['oldPwd']);
  $newpwd = test_input($_POST['newPwd']);
  $newconfirmed = test_input($_POST['conPwd']);

  if(strcmp($newpwd,$newconfirmed)!==0){
    ?>  

    <div class="alert alert-danger center" >
      <a href = "#" class = "close" data-dismiss = "alert">&times;</a>
      <strong>Error!</strong> Passwords Doesn't Match.
    </div>

    <?php
  } else {

    $make_query = new Query();
    $flag = $make_query->changePassword($oldpwd,$newpwd);
    if($flag < 1){

      ?>

      <div class="alert alert-danger center" >
        <a href = "#" class = "close" data-dismiss = "alert">&times;</a>
        <strong>Error!</strong> Old Password Incorrect.
      </div>

      <?php
    } else {

      ?>

      <div id = "myAlert" class = "alert alert-success center">
       <a href = "#" class = "close" data-dismiss = "alert">&times;</a>
       <strong>Success!</strong> Password Changed Successfully.
      </div>

     <?php
   }
 }
}
?>

<div class="change_password">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div id="alert"></div>
        <div class="box">
          <div class="box-footer clearfix ">
          </div>
          <div class="box-body table-responsive" >

           <form method="post" action="" >
             <div class="form-group">
              <label for="exampleInputEmail1">Old Password <font color="#FF0000">*</font></label>
              <input class="form-control input-sm" name="oldPwd" value="" id="oldPwd" type="password" placeholder="Old Password" style="width: 350px;" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">New Password <font color="#FF0000">*</font></label>
              <input class="form-control input-sm" name="newPwd" id="newPwd" type="password" placeholder="New Password" style="width: 350px;" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Confirm Password <font color="#FF0000">*</font></label>
              <input class="form-control input-sm" name="conPwd" id="conPwd" type="password" placeholder="Confirm Password" style="width: 350px;" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary" name="submit" id="submit" type="submit" ><i class="fa fa-save"></i> Save</button>
            </div>
            <input type="hidden" name="truePwd" id="truePwd" value="">
          </form>

        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->
</div>
<style>
.center {
  margin: auto;
  margin-top: 25px;
  padding: 10px;
  text-align: center;
}
</style>


