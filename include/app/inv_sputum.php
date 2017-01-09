<section class="content-header" >
  <h1>Sputum Results</h1> 
</section>

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
                <td colspan="2">
                  <input type="text" id="report_id" placeholder="Report ID" class="form-control input-sm" style="cursor:pointer;" required>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="sample_index">Sample Index</label>
                </td>
                <td colspan="2">
                  <input type="text" id="sample_index" placeholder="Sample Index" class="form-control input-sm">
                </td>
              </tr>

              <tr>
                <td>
                  <label for="result_fbs">Pyogenic Culture</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Positive"  id="sp1p">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Negative"  id="sp1n">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="result_fbs">AFB Smear (x3 Morning)</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Positive" id="sp2p">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Negative"  id="sp2n">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="result_fbs">AFB Smear</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Positive" id="sp3p">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Negative"  id="sp3n">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
              </tr>
              <tr>
                <td>
                  <label for="result_fbs">Fungal Culture</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Positive" id="sp4p">
                    <span class="input-group-addon" id="addon">%</span>
                  </div>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Negative"  id="sp4n">
                    <span class="input-group-addon" id="addon">%</span>
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

<script type="text/javascript" src="../../js/inv_sputum.js"></script>