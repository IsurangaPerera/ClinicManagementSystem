<section class="content-header" >
  <h1>Full Blood Count (FBC)</h1> 
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">FBC</a></li>
  </ol>
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
                  <label for="wc">White Cells</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="wc">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="rc">Red Cells</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="rc">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="haem">Haemoglobin</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="haem">
                    <span class="input-group-addon" id="addon">g/dl</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label for="plat">Platelets</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="plat">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

               <tr>
                <td>
                  <label for="crit">Haematocrit</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="crit">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

               <tr>
                <td>
                  <label for="poly">Polymorphs</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="poly">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label>Lymphocytes</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="poly">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label>Monocytes</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="poly">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label>Eosinophils</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="poly">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <label>Basophils</label>
                </td>
                <td>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Result" aria-describedby="addon" id="poly">
                    <span class="input-group-addon" id="addon">/l</span>
                  </div>
                </td>
              </tr>

            </table>
          </form>

        </div>

        <div class="box-footer clearfix" align="right">
          <button class="btn btn-primary" onclick="saveFBC()"><i class="fa fa-save"></i> Save</button>        
        </div>

      </div>
    </div>
    <div class="col-md-4">
    </div>
  </div>
</section><!-- /.content -->
</div>