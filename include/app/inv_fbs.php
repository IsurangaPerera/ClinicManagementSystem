<?php
require('hidden_right.php');
?>

<section class="content-header" >
  <h1>Fasting Blood Sugar (FBS)</h1> 
</section>

<style>
.fbs_details{
  display: block;
}
</style>

<div class="fbs_details">
  <section class="content">
    <div class="row">
      <div class="col-md-4">
      </div>

      <div class="col-md-4">

        <div class="box">

         <div class="box-body table-responsive">
          <form>
            <table cellpadding="5" cellspacing="5">

              <tr>
                <td>
                  <label for="report_id">Report ID</label>
                </td>
                <td>
                  <input type="text" id="report_id" placeholder="Report ID" class="form-control input-sm" style="cursor:pointer;" required>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="sample_index">Sample Index</label>
                </td>
                <td>
                  <input type="text" id="sample_index" placeholder="Sample Index" class="form-control input-sm" style="cursor:pointer;" required>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="result_fbs">Result</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="result_fbs">
                    <span class="input-group-addon" id="addon">mg/dl</span>
                  </div>
                </td>
              </tr>

            </table>
          </form>

        </div>

        <div class="box-footer clearfix" align="right">
          <button class="btn btn-primary" onclick="save()"><i class="fa fa-save"></i> Save</button>        
        </div>

      </div>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</section><!-- /.content -->
</div>