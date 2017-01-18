<?php
require_once('config/session_check.php');
require('header.php');
?>

<ul class="sidebar-menu">

  <!--START OF DASHBOARD-->
  <li>
    <a href="#" id="d_board">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li> 
  <!--END OF DASHBOARD-->    

  <!--START OF USER MANAGEMENT-->
  <li class="treeview">
    <a href="#">
      <i class="fa ion-ios-people-outline"></i> <span>User Management</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#" id="add_user"><i class="fa fa-angle-double-right"></i>Add New User</a></li>
      <li><a href="#" id="user_list"><i class="fa fa-angle-double-right"></i>User Masterlist</a></li>
      <!--<li><a href="#" id="user_roles"><i class="fa fa-angle-double-right"></i>User Roles</a></li>-->
    </ul>
  </li>
  <!--END OF USER MANAGEMENT-->

  <!--START OF DB BACKUP-->
  <li>
    <a href="#" id="backup_database">
      <i class="fa ion-android-checkbox-outline"></i> <span>Backup Database</span>
    </a>
  </li>
  <!--END OF DB BACKUP-->

  <!--START OF USER PROFILE-->
  <li id="lst" class="treeview">
    <a href="#">
      <i class="fa fa-user"></i> <span>User Profile</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul id="slst" class="treeview-menu">
      <li ><a href="#" id="e_prof"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
      <li ><a href="#" id="c_pass"><i class="fa fa-angle-double-right"></i>Change Password</a></li>
      <li ><a href="../login/delete/"><i class="fa fa-angle-double-right"></i>Logout</a></li>
    </ul>
  </li>
  <!--END OF USER PROFILE-->
</ul>

</section>
<!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side" id="r_side">

  <!-- Main content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<script src="../js/user_registration.js" type="text/javascript"></script>
<script src="../js/list_users.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#r_side').load('app/dash_board.php');

  $("#add_user").click(function(event){
    $('#r_side').load('app/add_user.php');
  });

  $("#user_list").click(function(event){
    $('#r_side').load('app/user_list.php');
  });

  $("#user_roles").click(function(event){
    $('#r_side').load('app/user_roles.php');
  });

  $("#backup_database").click(function(event){
    $('#r_side').load('app/backup_database.php');
  });

  $("#e_prof").click(function(event){
    $('#r_side').load('app/edit_profile.php');
  });

  $("#c_pass").click(function(event){
    $('#r_side').load('app/change_password.php');
  });

  $("#d_board").click(function(event){
    $('#r_side').load('app/dash_board.php');
  });
});
</script>

</body>
</html>