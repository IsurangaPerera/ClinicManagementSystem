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

  <!--START OF INVESTIGATION RESULTS-->
  <li id="lst" class="treeview">
    <a href="#">
      <i class="fa fa-user"></i> <span>Investigation Results</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul id="slst" class="treeview-menu">
      <li ><a href="#" id="inv_fbs"><i class="fa fa-angle-double-right"></i><span>FBS</span></a></li>
      <li ><a href="#" id="inv_fbc"><i class="fa fa-angle-double-right"></i><span>FBC</span></a></li>
      <li ><a href="#" id="inv_sputum"><i class="fa fa-angle-double-right"></i><span>Sputum</span></a></li>
    </ul>
  </li>
  <!--END OF INVESTIGATION RESULTS-->

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

<script src="../js/fbs.js" type="text/javascript"></script>
<script src="../js/inv_fbc.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#r_side').load('app/dash_board.php');

  
  $('#inv_fbs').click(function(event){
    $('#r_side').load('app/inv_fbs.php');
  });

  $('#inv_fbc').click(function(event){
    $('#r_side').load('app/inv_fbc.php');
  })

  $('#inv_sputum').click(function(event){
    $('#r_side').load('app/inv_sputum.php');
  })

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