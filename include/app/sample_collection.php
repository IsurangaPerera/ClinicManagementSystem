<section class="content-header" >
  <h1>Sample Collection</h1> 
</section>

<div class='alert alert-success alert-dismissable' id="alert" hidden><i class='fa fa-check'></i>
  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
  <span id="err_msg"></span></div> 

  <div class="sample_collection">
    <section class="content">
      <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
        <div class="box">
          <div class="box-body table-responsive">
            <div class="box-body" align="center">
              <div class="input-group">
                <form>
                  <table cellpadding="5" cellspacing="5" align="center">
                    <tr>
                      <td align="center">Select Patient</td>
                    </tr>
                    <tr>
                      <td>
                        <input type="text" id="patient_no" placeholder="Enter Patient ID" class="form-control input-sm" style="width: 100%; cursor:pointer;" required autofocus>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input value="Submit" class="btn btn-primary" style="width: 250px;" onclick="process(null)">
                      </td>
                    </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /.content -->

  </div>