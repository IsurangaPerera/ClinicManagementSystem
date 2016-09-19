<section class="content-header">
    <h1>Backup Database</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Administrator</li>
        <li class="active">Backup Database</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-12">
          <div class="box">
            <div class="box-footer clearfix">
            </div>
            <div class="box-body table-responsive">
              <div class='alert alert-danger alert-dismissable' hidden="true" id="alert"><i class='fa fa-check'></i>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <span id="err_msg"></span></div> 
               <div>
                   <p class="help">Note: Please keep backup database file to your local/file server or any directory that anyone can't access it. </p>
                   <p>Click Backup Database Button to download backup file of your database. This may take less than a minute depend on your network or internet connection.</p>
                   <div class="form-group">
                    <button class="btn btn-primary" onclick="backup()"><i class="fa fa-download"></i> Backup Database</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section><!-- /.content -->

<script type='text/javascript'>

function backup(){
  conf = confirm('Are you sure you want to backup database?');
  if(conf){
    $.ajax({
      type: "POST",
      url: "../../rest/backup_database.php",
      success: function (data) {
        $("#err_msg").html("Operation successfull");
        $("#alert").attr("class", "alert alert-success alert-dismissable");
        $("#alert").show(1000).delay(5000).hide(1000);
      },
      error: function () {
        $("#err_msg").html("An Error Occurred");
        $("#alert").attr("class", "alert alert-danger alert-dismissable");
        $("#alert").show(1000).delay(5000).hide(1000);
      }
    });
  }
}
</script>