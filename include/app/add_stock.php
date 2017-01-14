<section class="content-header">
  <h1>Add Stock</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Add Stock</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-md-12">

    <div class="box">
     <form>
       <div class="box-header">
        <h3 class="box-title"><a href="#" class="btn btn-primary" onclick="openModal()"><i class="fa fa-plus"></i>New Stock</a></h3>

        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default" name="btnSearch" id="btnSearch" type="submit"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>

      </div><!-- /.box-header -->
    </form>
    <div class="box-body table-responsive no-padding">
      <div class='alert alert-success alert-dismissable' hidden="true"><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Drug Name successfully Deleted!</div>  

      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th>Date</th><th>Product Code</th><th>Product Name</th><th>Formulation</th><th>Batch No</th><th>Quantity</th><th>Expiry</th><th>Action</th></tr>
          </thead>
          <tbody id="tble_stock">
          </tbody>
        </table>                                
      </div>
      <div class="box-footer clearfix">
       <ul class="pagination pagination no-margin pull-right"><li class="active"><a href="">1</a></li><li class="page"><a href="#">2</a></li><li class="next page"><a href="#">Next &rarr;</a></li></ul><!--pagination-->                                </div>
     </div>
   </div>
 </div>

 <!-- Modal -->
 <div class="modal fade" id="modal_stock" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      </div>
      <div class="modal-body">

        <div class="panel panel-default">
          <div class="panel-heading">
            <h3>Add Stock</h3>
          </div>
          <div class="panel-body">
            <div class='alert alert-danger alert-dismissable' hidden="true" id="alert"><i class='fa fa-check'></i>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <span id="err_msg"></span></div> 
              <table class="table table-responsive" cellpadding="7px" id="tble_add_stock">
               <tr>
                 <td><label for="p_code">Product Code</label></td>
                 <td><input type="text" class="form-control" id="p_code"></td>
               </tr>
               <tr>
                 <td><label for="p_name">Product Name</label></td>
                 <td><input type="text" class="form-control" id="p_name"></td>
               </tr>
               <tr>
                 <td><label for="formula">Formulation</label></td>
                 <td><input type="text" class="form-control" id="formula"></td>
               </tr>
               <tr>
                 <td><label for="batch_no">Batch No</label></td>
                 <td><input type="text" class="form-control"  id="batch_no"></td>
               </tr>
               <tr>
                 <td><label for="quantity">Quantity</label></td>
                 <td><input type="text" class="form-control" id="quantity"></td>
               </tr>
               <tr>
                 <td><label for="expiry">Expiry</label></td>
                 <td><input type="text" class="form-control" id="expiry"></td>
               </tr>
             </table>
           </div>
         </div>

         <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="saveStock()">Save</button>
        </div>
      </div>

    </div>
  </div>
  <!-- END Modal -->

  <script type="text/javascript">
  $(document).ready(function(){
    loadStock();
  });

  function openModal(){
    $('#modal_stock').modal({backdrop: "static"});
  }

  $( function() {
   $( "#expiry" ).datepicker({
    dateFormat: "yy-mm-dd"
  });
 });


  </script>

</section><!-- /.content -->