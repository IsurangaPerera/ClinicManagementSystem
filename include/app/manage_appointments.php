 <?php
require('hidden_right.php');
?>

<section class="content-header" >
  <h1>Manage Appointments</h1> 
</section>

<style>
.manage_appointments{
    display: block;
}
</style>

<!-- Content Header (Page header) -->
<div class="manage_appointments">

  <div class="row">
    <div class="col-md-12 custom1">

      <style>

      .custom1{
        margin: 10px;
      }

      .custom2{
        margin-bottom: 0px;
      }

      </style>

      <div class="box custom2">

        <div class="box-body table-responsive no-padding">
          <h4 class="box-title">Search Patient</h4>

          <div class="box-tools">
            <div class="input-group">
              <form method="post" action="">
                <table cellpadding="3" cellspacing="3" width="100%">
                  <tr>
                    <td>From Date</td>
                    <td>To Date</td>
                    <td>PID/LastName/FirstName</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td><input class="form-control input-sm" name="cFrom" id="cFrom" type="text" value="2016-04-16" placeholder="From Date Registration" style="width: 130px;"></td>
                    <td><input class="form-control input-sm" name="cTo" id="cTo" type="text" value="2016-04-16" placeholder="to Date Registration" style="width: 130px;"></td>

                    <td>
                      <input type="text" class="form-control input-sm" name="search" id="search" placeholder="PID/LastName/FirstName" style="width: 180px;" autofocus>
                    </td>
                    <td>
                      <button class="btn btn-sm btn-primary" name="btnSearch" id="btnSearch" type="submit"><i class="fa fa-search"></i> Search </button>
                    </td>
                  </tr>
                </table>
              </form>
            </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-footer clearfix">
        </div>
      </div>
    </div>        
    <div class="col-md-12 custom1">
     <div class="box">
      <div class="box-body table-responsive no-padding">

        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Patient ID</th><th>Patient Name</th><th>Age</th><th>Visit Date Time</th><th>NextAppointment</th><th>Consultant Doctor</th></tr>
            </thead>
          </table>                                
        </div>
        <div class="box-footer clearfix">
        </div>
      </div>
    </div>
  </div>
</section><!-- /.content -->


</div>