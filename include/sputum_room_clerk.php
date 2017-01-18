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

  <!--START OF SAMPLE COLLECTION-->
  <li>
    <a href="#" id="s_collection">
      <i class="fa ion-person-add "></i> <span>Sample Collection</span>
    </a>
  </li>
  <!--END OF SAMPLE COLLECTION-->

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
<script src="../js/s_clerk.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#r_side').load('app/dash_board.php');

  $('#s_collection').click(function(event){
    $('#r_side').load('app/sample_collection.php');
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