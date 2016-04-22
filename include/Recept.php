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
    <a href="?patient_registration">
      <i class="fa ion-person-add "></i> <span>Patient Registration</span>
    </a>
  </li>
  <!--END OF Registration-->

  <!--START OF Patient Management-->
  <li class="treeview">
    <a href="#">
      <i class="fa fa fa-wheelchair"></i> <span>Patient Management</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li><a href="?manage_appointments"><i class="fa fa-angle-double-right"></i>Manage Appointments</a></li>
      <li><a href="?search_patient"><i class="fa fa-angle-double-right"></i>Search Patient</a></li>
    </ul>
  </li>
  <!--END OF Patient Management-->

  <!--START OF USER PROFILE-->
  <li class="treeview ">
    <a href="#">
      <i class="fa fa-user"></i> <span>User Profile</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul class="treeview-menu">
      <li ><a href="http://demo-hms.eu5.org/myprofile"><i class="fa fa-angle-double-right"></i>My Profile</a></li>
      <li ><a href="http://demo-hms.eu5.org/myprofile/editprofile"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
      <li ><a href="http://demo-hms.eu5.org/myprofile/changepwd"><i class="fa fa-angle-double-right"></i>Change Password</a></li>
      <li><a href="config/logout.php"><i class="fa fa-angle-double-right"></i>Logout</a></li>
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
  <section class="content-header" >
    <h1>Dashboard</h1>
  </section>
  <?php include('app/dash_board_non_css.php'); ?>

  <?php
  if(isset($_GET['manage_appointments'])) {
    include('app/manage_appointments.php');
  } 

  if(isset($_GET['search_patient'])) {
    include('app/search_patient.php');
  }

  if(isset($_GET['patient_registration'])) {
    include('app/patient_registration.php');
  }

  if(isset($_GET['dash_board'])) {
    include('app/dash_board.php');
  }

  ?>
  <!-- Main content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ="   crossorigin="anonymous"></script>
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