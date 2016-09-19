<section class="content-header">
    <h1>User Roles</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Management</a></li>
        <li class="active">User Roles</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

   <div class="row">
      <div class="col-md-12">

          <div class="box">
             <form class="form-search">
                 <div class="box-header">
                    <h3 class="box-title"><a href="#" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a></h3>

                    <div class="box-tools">
                        <div class="input-group">
                            <input type="text" id="search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default" name="btnSearch" id="btnSearch"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>

                </div><!-- /.box-header -->
            </form>
            <div class="box-body table-responsive no-padding">

               <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Role Name</th><th>Description</th><th>Action</th></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#">Administrator and CEO</a></td><td>Minimal supervision</td><td><a href="#">Edit</a>&nbsp|&nbsp;<a href="#" class="delete" onclick="return confirm('Are you sure want to delete?')">Delete</a></td></tr>

                        </tbody>
                    </table>                                
                </div>
                <div class="box-footer clearfix">
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content -->