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

  <!--START OF REGISTRATION-->
  <li>
    <a href="#" id="p_reg">
      <i class="fa ion-person-add "></i> <span>Patient Registration</span>
    </a>
  </li>
  <!--END OF REGISTRATION-->

  <!--START OF PATIENT MANAGEMENT-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa fa-wheelchair"></i> <span>Patient Management</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="#" id="s_pat"><i class="fa fa-angle-double-right"></i>Search Patient</a></li>
    </ul>
  </li>
  <!--END OF PATIENT MANAGEMENT-->

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

<script src="../js/patient_registration.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/patient_id_generator.js"></script>
<script type="text/javascript" src="../js/search_m_patient.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $('#r_side').load('app/dash_board.php');

  $("#p_reg").click(function(event){
    $('#r_side').load('app/patient_registration.php');
  });

  $("#s_pat").click(function(event){
    $('#r_side').load('app/search_patient.php');
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