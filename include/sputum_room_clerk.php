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


  <!--START OF Current Requests-->
  <li>
    <a href="?current_requests">
      <i class="fa ion-person-add "></i> <span>Current Requests</span>
    </a>
  </li>
  <!--START OF Current Requests-->

  <!--START OF Sample Collection-->
  <li>
    <a href="?sample_collection">
      <i class="fa ion-person-add "></i> <span>Sample Collection</span>
    </a>
  </li>
  <!--START OF Sample Colection-->

  <!--START OF USER PROFILE-->
  <li id="lst" class="treeview">
    <a href="#">
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
  if(isset($_GET['current_requests'])) {
    include('app/current_requests.php');
  } 

  if(isset($_GET['my_profile'])) {
    include('app/my_profile.php');
  }

  if(isset($_GET['edit_profile'])) {
    include('app/edit_profile.php');
  }

  if(isset($_GET['sample_collection'])) {
    include('app/sample_collection.php');
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

<!-- Modal -->
  <div class="modal fade" id="modal_sputum" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body">

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 id="investg">Investigations/Sputum</h3>
            </div>
            <div class="panel-body">
              <table id="investg_table" cellpadding="7px">

                <tr id="investg_raw1" hidden="true">
                  <td width="35%">
                    <label id="inv_raw1_cell1"></label>
                  </td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Sample Index"  id="inv_raw1_cell2" aria-describedby="addon1">
                      <span class="input-group-addon" id="addon1">Index</span>
                    </div>
                  </td>
                  <td>
                    <div>
                      <select class="form-control" id="inv_raw1_cell3">
                        <option>Pending</option>
                        <option>Completed</option>
                        <option>Canceled</option>
                      </select>          
                    </div>
                  </td>
                </tr>
                
                <tr id="investg_raw2" hidden="true">
                  <td width="30%">
                    <label id="inv_raw2_cell1"></label>
                  </td>
                  <td >
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Sample Index"  id="inv_raw2_cell2" aria-describedby="addon2">
                      <span class="input-group-addon" id="addon2">Index</span>
                    </div>
                  </td>
                  <td>
                    <div>
                      <select class="form-control" id="inv_raw2_cell3">
                        <option>Pending</option>
                        <option>Completed</option>
                        <option>Canceled</option>
                      </select>          
                    </div>
                  </td>
                </tr>
                
                <tr id="investg_raw3" hidden="true">
                  <td width="30%">
                    <label id="inv_raw3_cell1"></label>
                  </td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Sample Index"  id="inv_raw3_cell2" aria-describedby="addon3">
                      <span class="input-group-addon" id="addon3">Index</span>
                    </div>
                  </td>
                  <td>
                    <div>
                      <select class="form-control" id="inv_raw3_cell3">
                        <option>Pending</option>
                        <option>Completed</option>
                        <option>Canceled</option>
                      </select>          
                    </div>
                  </td>
                </tr>

                <tr id="investg_raw4" hidden="true">
                  <td width="30%">
                    <label id="inv_raw4_cell1"></label>
                  </td>
                  <td>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Sample Index"  id="inv_raw4_cell2" aria-describedby="addon4">
                      <span class="input-group-addon" id="addon4">Index</span>
                    </div>
                  </td>
                  <td>
                    <div>
                      <select class="form-control" id="inv_raw4_cell3">
                        <option>Pending</option>
                        <option>Completed</option>
                        <option>Canceled</option>
                      </select>          
                    </div>
                  </td>
                </tr>

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

<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
<script src="../css/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="../js/app.js" type="text/javascript"></script>
<script src="../js/s_clerk.js" type="text/javascript"></script>

</body>
</html>