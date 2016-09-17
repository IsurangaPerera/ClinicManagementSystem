<section class="content-header" >
  <h1>Current Requests</h1> 
  <ol class="breadcrumb">
    <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Current Requests</li>
  </ol>
</section>

<div class="current_requests">

  <!-- Main content -->
  <section class="content">

   <div class="row" height="100%">
    <div class="col-md-12">
     <div class="box">
      <form class="form-search" method="post" action="">
        <div class="box-header">
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

        <table class="table table-hover table-striped">
          <thead>
            <tr>
              <th>Date</th>
              <th>Patient No.</th>
              <th>Investigation</th>
              <th>Requested By</th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="blood_req_table">
          </tbody>
        </table>                                
      
      </div>
      <div class="box-footer clearfix">
        <ul class="pagination pagination no-margin pull-right">
          <li class="active"><a href="">1</a></li>
          <li class="page"><a href="">2</a></li>
          <li class="page"><a href="">3</a></li>
          <li class="next page"><a href="">Next &rarr;</a></li>
          <li class="next page"><a href="">Last &raquo;</a></li>
        </ul><!--pagination-->                               
      </div>
    </div>
  </div>
</div>

</section><!-- /.content -->

<script src="../js/current_blood_requests.js" type="text/javascript"></script>
<script type="text/javascript">

$(document).ready(function(){
  processData();
});

</script>

</div><!--End Of Patient Profile-->


