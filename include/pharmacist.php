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
    <a href="#" id="d_board">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>

  <!--START OF Medications-->
  <li>
    <a href="#" id="c_pres">
      <i class="fa ion-person-add "></i> <span>Current Prescriptions</span>
    </a>
  </li>
  <!--END OF Medications-->     

  <!--START OF Medications-->
  <li>
    <a href="#" id="i_medi">
      <i class="fa ion-person-add "></i> <span>Issue Medications</span>
    </a>
  </li>
  <!--END OF Medications-->

  <!--START OF Inventory Management-->
  <li id="lst" class="treeview">
    <a href="#">
      <i class="fa fa-user"></i> <span>Inventory Management</span>
      <i class="fa fa-angle-left pull-right"></i>
    </a>
    <ul id="slst" class="treeview-menu">
      <li ><a href='#' id="add_stock"><i class="fa fa-angle-double-right"></i>Add Stock</a></li>
      <li ><a href='#' id="e_prof"><i class="fa fa-angle-double-right"></i>Purchase Order</a></li>
      <li ><a href='#' id="c_pass"><i class="fa fa-angle-double-right"></i>Purchase Invoice</a></li>
      <li ><a href='#' id="expired_stock"><i class="fa fa-angle-double-right"></i>Expired Stock</a></li>
      <li ><a href='#' id=""><i class="fa fa-angle-double-right"></i>View Stock</a></li>
    </ul>
  </li>
  <!--END OF Inventory Management-->

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

<script src="../js/issue_medications.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#r_side').load('app/dash_board.php');

  $("#c_pres").click(function(event){
    $('#r_side').load('app/current_prescriptions.php');
  });

  $("#i_medi").click(function(event){
    $('#r_side').load('app/issue_medications.php');
  });

  $("#add_stock").click(function(event){
    $('#r_side').load('app/add_stock.php');
  });

  $("#expired_stock").click(function(event){
    $('#r_side').load('app/expired_stock.php');
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

<!-- Modal -->
<div class="modal fade" id="modal_med" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Prescriptions</h3>
          </div>
          <div class="panel-body">
            <table class="table table-responsive" cellpadding="7px">
              <thead>
                <th>Date</th>
                <th>Medicine</th>
                <th>Dosage</th>
                <th>Instructions</th>
                <th>Status</th>
              </thead>
              <tbody id="tble_med">
              </tbody>
            </table>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="save()">Save</button>
        </div>
      </div>

    </div>
  </div>
  <!-- END Modal -->

  

</body>
</html>