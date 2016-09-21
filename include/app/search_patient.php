<?php
require('hidden_right.php');
?>

<section class="content-header" >
  <h1>Search Patient</h1> 
</section>

<style>
.search_patient{
  display: block;
}
</style>

<div class="search_patient">
  <section class="content">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="box">
          <div class="box-body table-responsive" align="center">
            <h4 class="box-title"></h4>

                <form method="post" action="" onSubmit="return validate();" role='form' style="width: 100%;">
                  <table cellpadding="5" cellspacing="5" align="center">
                    <tr>
                      <td align="center">Select Patient</td>
                    </tr>
                    <tr>
                      <td>

                        <input type="text" id="patient_no" data-toggle="modal" data-target="#patientListModal" placeholder="Enter Patient ID" class="form-control input-sm" style="width: 100%; cursor:pointer;" required autofocus>

                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="submit" value="Submit" class="btn btn-primary" style="width:250px;" name="btnSubmit">
                      </td>
                    </tr>
                  </table>
                </form>
              
            </div>

        </div>

      </div>
    </section><!-- /.content -->
  </div>