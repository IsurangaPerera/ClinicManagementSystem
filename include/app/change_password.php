<?php
require('hidden_right.php');
?>

<style>
.change_password{
    display: block;
}

</style>

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
                       document.getElementById("truePwd").value = document.getElementById("newPwd").value 
                   }
                   </script>
                   <form method="post" action="http://demo-hms.eu5.org/myprofile/savepwd" onSubmit="return confirm('Are you sure you want to Change Password');" >
                       <div class="form-group">
                          <label for="exampleInputEmail1">Old Password <font color="#FF0000">*</font></label>
                          <input class="form-control input-sm" name="oldPwd" id="oldPwd" type="password" placeholder="Old Password" style="width: 350px;" required>
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
                          <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>
                      </div>
                      <input type="hidden" name="truePwd" id="truePwd" value="">
                  </form>

              </div>
          </div>
      </div>
  </div>
</section><!-- /.content -->
</div>