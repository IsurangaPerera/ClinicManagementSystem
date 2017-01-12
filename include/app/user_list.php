 <section class="content-header">
    <h1>User Masterlist</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Management</a></li>
        <li class="active">User Masterlist</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-12">

          <div class="box">
             <form class="form-search">
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
                        <th>User ID</th><th>Name</th><th>Designation</th><th>Department</th><th>Email Address</th><th>Actions</th></tr>
                    </thead>
                    <tbody id="u_list">

                    </tbody>
                </table>                                
            </div>
            <div class="box-footer clearfix">
               <ul class="pagination pagination no-margin pull-right"><li class="active"><a href="">1</a></li><li class="page"><a href="#">2</a></li><li class="page"><a href="#">3</a></li><li class="next page"><a href="#">Next &rarr;</a></li></ul><!--pagination-->                                </div>
           </div>
       </div>
   </div>
</section><!-- /.content -->

<script type="text/javascript">
$(document).ready(function(){
    getResult();
});
</script>