<?php
require('hidden_right.php');
?>

<style>
.change_password{
  display: block;
}

</style>

<?php
if(isset($_POST['submit'])){

 $oldpwd = $_POST['oldPwd'];
 $newpwd = $_POST['newPwd'];
 $newconfirmed = $_POST['conPwd'];

 $root = realpath($_SERVER["DOCUMENT_ROOT"]);
 require("$root/include/config/query.php");
 $make_query = new Query();
 $flag = $make_query->changePassword($oldpwd,$newpwd);
 
 if($flag < 1){

  ?>

  <script language="javascript">
  alert("Old password doesn't match");
  </script>

  <?php
}
}

?>

<div class="change_password">
  <section class="content">
   <div class="row">
    <div class="col-md-12">

      <div class="box">

        <div class="box-footer clearfix">

        </div>

        <div class="box-body table-responsive">

          <script language="javascript">
          function copy(){
           document.getElementById("truePwd").value = document.getElementById("newPwd").value;
         }

         function validate(evt){
          if(document.getElementById("newPwd").value .localeCompare(document.getElementById("conPwd")) != 0){
           evt.preventDefault();
           alert("Password Not Match");
           return false;
         } else {
           return confirm('Are you sure you want to Change Password');
         }
       }
       </script>
       <form method="post" action="" onSubmit="return validate();" >
         <div class="form-group">
          <label for="exampleInputEmail1">Old Password <font color="#FF0000">*</font></label>
          <input class="form-control input-sm" name="oldPwd" value="<?php echo $oldpwd; ?>" id="oldPwd" type="password" placeholder="Old Password" style="width: 350px;" required>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">New Password <font color="#FF0000">*</font></label>
          <input class="form-control input-sm" onKeyUp="copy()" name="newPwd" id="newPwd" type="password" placeholder="New Password" style="width: 350px;" required>
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