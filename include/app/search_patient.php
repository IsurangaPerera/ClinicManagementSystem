<section class="content-header" >
  <h1>Search Patient</h1> 
</section>

<div class="search_patient">
  <section class="content">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="box">
          <div class="box-body table-responsive" align="center">
            <h4 class="box-title"></h4>

            <div style="width: 100%;">
              <table cellpadding="5" cellspacing="5" align="center">
                <tr>
                  <td align="center">Select Patient</td>
                </tr>
                <tr>
                  <td>

                    <input type="text" id="keyword" data-toggle="modal" placeholder="Enter Patient ID" class="form-control input-sm" style="width: 100%; cursor:pointer;" required autofocus>

                  </td>
                </tr>
                <tr>
                  <td>
                    <input value="Submit" class="btn btn-primary" onclick="callSearch()" style="width:250px;">
                  </td>
                </tr>
              </table>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /.content -->

    <!--START OF MODAL-->
    <div class="modal fade in" id="patientListModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" hidden">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title" id="myModalLabel">Search Patient</h4>
          </div>
          <div class="modal-body">


            <input class="form-control input-sm" id="cSearch" type="text" placeholder="Search here">
            <span id="showPatients">
              <div class="alt2" dir="ltr" style="
              margin: 0px;
              padding: 0px;
              border: 0px solid #919b9c;
              width: 100%;
              height: 390px;
              text-align: left;
              overflow: auto">
              <table class="table table-striped table-hover">
               
                <thead>
                  <tr>
                    <th>Patient No.</th>
                    <th>Name</th>
                    <th>Birth Date</th>
                    <th>NIC</th>
                    <th></th>
                  </tr>
                </thead>
               
                <tbody id="tbleSearch">
                </tbody>
              </table>
            </div></span>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary" onClick="return addPatient()">Proceed</button>-->
          </div>

        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
      <!-- END OF MODAL -->

    </div>
  </div>
</div>