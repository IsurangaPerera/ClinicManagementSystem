<section class="content-header">
  <h1>Expired Stock</h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Expired Stock</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
 <div class="row">
  <div class="col-md-12">

    <div class="box">
     <form>
       <div class="box-header">
        <h3 class="box-title"><a href="#" class="btn btn-primary"><i class="fa fa-plus"></i>Remove Stock</a></h3>

        <div class="box-tools">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
            <div class="input-group-btn">
              <button class="btn btn-sm btn-default" id="btnSearch"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </div>

      </div><!-- /.box-header -->
    </form>
    <div class="box-body table-responsive no-padding">
      <div class='alert alert-success alert-dismissable' hidden='true'><i class='fa fa-check'></i><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>Drug Name successfully Deleted!</div>  

      <table class="table table-hover table-striped">
        <thead>
          <tr>
            <th>Date</th><th>Product Code</th><th>Product Name</th><th>Formulation</th><th>Batch No</th><th>Quantity</th><th>Expiry</th><th>Action</th></tr>
          </thead>
          <tbody id="expire_stock">
          </tbody>
        </table>                                
      </div>
      <div class="box-footer clearfix">
       <ul class="pagination pagination no-margin pull-right"><li class="active"><a href="">1</a></li><li class="page"><a href="#">2</a></li><li class="next page"><a href="#">Next &rarr;</a></li></ul><!--pagination-->                                </div>
     </div>
   </div>
 </div>

<script type="text/javascript">
  $(document).ready(function(){
    loadExpiryStock();
  });
</script>

</section><!-- /.content -->