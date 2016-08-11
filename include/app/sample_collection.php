<?php
require('hidden_right.php');
?>

<section class="content-header" >
  <h1>Sample Collection</h1> 
</section>

<style>
.sample_collection{
  display: block;
}
</style>

<div class="sample_collection">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <form>
          <table cellpadding="5" cellspacing="5" align="center">
            <tr>
              <td align="center">Select Patient</td>
            </tr>
            <tr>
              <td>
                <input type="text" id="patient_no"placeholder="Enter Patient ID" class="form-control input-sm" style="width: 100%; cursor:pointer;" required autofocus>
              </td>
            </tr>
            <tr>
              <td>
                <input value="Submit" class="btn btn-primary" style="width: 250px;" onclick="process()">
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </section><!-- /.content -->
</div>