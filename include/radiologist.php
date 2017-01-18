<?php
/*session_start();
require('config/session_check.php');
include('config/user_common.php');
$usr = new User();
$usr->verifyUser($_SESSION['user_type'], $_SESSION['user_type']);*/
require_once('config/session_check.php');
require('header.php');
?>

<ul class="sidebar-menu">

  <li>
    <a href="#" id="d_board">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>     

  <!--START OF X Ray RESULTS-->
  <li>
    <a href="#" id="x-ray">
      <i class="fa fa-dashboard"></i> <span>X-Ray</span>
    </a>
  </li>
  <!--END OF X Ray RESULTS-->

  <!--START OF USER PROFILE-->
  <li id="lst" class="treeview">
    <a href="#">
      <i class="fa fa-user"></i> <span>User Profile</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul id="slst" class="treeview-menu">
      <li ><a href="#" id="m_prof"><i class="fa fa-angle-double-right"></i>My Profile</a></li>
      <li ><a href="#" id="e_prof"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
      <li ><a href="#" id="c_pass"><i class="fa fa-angle-double-right"></i>Change Password</a></li>
      <li ><a href="config/logout.php"><i class="fa fa-angle-double-right"></i>Logout</a></li>
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

<script src="../js/fbs.js" type="text/javascript"></script>
<script src="../js/inv_fbc.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#r_side').load('app/dash_board.php');

  
  $('#x-ray').click(function(event){
    $('#r_side').load('app/xray.php');
  });

  $("#m_prof").click(function(event){
    $('#r_side').load('app/my_profile.php');
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