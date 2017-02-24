<section class="content-header" >
  <h1>X-Ray</h1> 
</section>

<div class="search_patient">
  <section class="content">
    <div class='alert alert-info alert-dismissable' hidden="true" id="alert"><i class='fa fa-check'></i>
      <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
      <span id="err_msg"></span></div>
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
                      <input value="Submit" class="btn btn-primary" onclick="checkAvailability()" style="width:250px;">
                    </td>
                  </tr>
                </table>
              </div>

            </div>

          </div>

        </div>
      </section><!-- /.content -->

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Add X-Ray</h4>
            </div>

            <div class="modal-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                   <td>
                    <span id="particular">Category</span>
                  </td>
                  <td>
                   <select id="xray_cat" class="form-control input-sm" style="width: 100%;" required>
                   </select>
                 </td>
               </tr>
               <tr>
                 <td>Note</td>
                 <td><textarea name="note" id="note" placeholder="note" class="form-control input-sm" style="width: 100%;"></textarea></td>
               </tr>

               <tr>
                 <td>Image Upload</td>

                 <td>
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                    <div>
                      <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" id="prod_image" name="newfile"></span>
                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                  </div>   
                </td>

              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onClick="addXRay()">Add</button>
        </div>

      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->  
  <script type="text/javascript" src="../js/xray.js"></script>

</div>
</div>
</div>