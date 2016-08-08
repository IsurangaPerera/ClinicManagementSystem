<?php
session_start();
require('config/session_check.php');
include('config/user_common.php');
$usr = new User();
$usr->verifyUser($_SESSION['user_type'], $_SESSION['user_type']);
require('header.php');
?>

<ul class="sidebar-menu">

  <li>
    <a href="?dash_board">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>     

  <!--START OF POS-->

  <!--START OF Registration-->
  <li>
    <a href="?tb_patient_registration">
      <i class="fa ion-person-add "></i> <span>TB Patient Registration</span>
    </a>
  </li>
  <!--END OF Registration-->

  <!--START OF USER PROFILE-->
  <li id="lst" class="treeview">
    <a href="#" onclick="openHidden()">
      <i class="fa fa-user"></i> <span>User Profile</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul id="slst" class="treeview-menu">
      <li ><a href="?my_profile"><i class="fa fa-angle-double-right"></i>My Profile</a></li>
      <li ><a href="?edit_profile"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
      <li ><a href="?change_password"><i class="fa fa-angle-double-right"></i>Change Password</a></li>
      <li ><a href="config/logout.php"><i class="fa fa-angle-double-right"></i>Logout</a></li>
    </ul>
  </li>
  <!--END OF USER PROFILE-->
</ul>

</section>
<!-- /.sidebar -->
</aside>

<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side" >

  <!-- Content Header (Page header) -->
  <!--<section class="content-header" >
    <h1>DashBoard</h1> 
  </section>-->

  <?php include('app/dash_board.php'); ?>

  <?php
  if(isset($_GET['manage_appointments'])) {
    include('app/manage_appointments.php');
  } 

  if(isset($_GET['my_profile'])) {
    include('app/my_profile.php');
  }

  if(isset($_GET['edit_profile'])) {
    include('app/edit_profile.php');
  }

  if(isset($_GET['search_patient'])) {
    include('app/search_patient.php');
  }

  if(isset($_GET['tb_patient_registration'])) {
    include('app/tb_patient_registration.php');
  }

  if(isset($_GET['dash_board'])) {
    require('app/hidden_right.php');
    ?>

    <style>
    .dash_board, .opt{
      display: block;
    }
    </style>
    
    <?php

  }

  if(isset($_GET['change_password'])) {
    include('app/change_password.php');
  }

  ?>
  <!-- Main content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!--<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>-->

<!--<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>-->

<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<script src="../../dp/js/dp.js"></script>
<script src="../js/app.js" type="text/javascript"></script>
<script src="../css/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>  

</html>