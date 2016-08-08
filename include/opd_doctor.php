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

  <li>
    <a href="patient_management.php">
      <i class="fa fa-dashboard"></i> <span>Patient Management</span>
    </a>
  </li> 


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

  if(isset($_GET['patient_registration'])) {
    include('app/patient_registration.php');
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

<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<script src="../css/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="../js/app.js" type="text/javascript"></script>

<!-- BDAY -->
<script src="../../dp/js/dp.js"></script>

<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {

              $('#cFrom').datepicker({
                    //format: "dd/mm/yyyy"
                    format: "yyyy-mm-dd"
                  });  

              $('#cTo').datepicker({
                    //format: "dd/mm/yyyy"
                    format: "yyyy-mm-dd"
                  });  
            });
            </script>
            <!-- END BDAY -->
            


          </body>
          </html>
