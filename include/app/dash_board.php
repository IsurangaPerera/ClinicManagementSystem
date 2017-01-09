
<section class="content-header opt" >
  <h1>DashBoard</h1> 
</section>

<div class="dash_board">

 <section class="content">
  <div class="row">
    <section class="col-lg-12 connectedSortable">
      
    </section>
  </div>

<!-- Main content -->

<div class="row">
  <section class="col-lg-6 connectedSortable">

    <!--Start of New Patient-->
    <div class="box box-primary" id="loading-example">
      <div class="box-header">
        <div class="pull-right box-tools">
          <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#inbody" aria-expanded="false" aria-controls="inbody"><i class="fa fa-minus"></i></button>
          
        </div>
        <i class="fa fa-user-md"></i>
        
        <h3 class="box-title">Users IN</h3>
      </div>
      <div class="box-body no-padding collapse" id="inbody">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Doctor Name</th>
                <th>Department</th>
                <th>Designation</th>
              </tr>
            </thead>
            <tbody id="docin">
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer">
      </div>
    </div>
    <!--End of New Patient-->
    
  </section>
  
  <section class="col-lg-6 connectedSortable">

    <!--Start of Patient Visited-->
    <div class="box box-primary" id="loading-example">
      <div class="box-header">
        <div class="pull-right box-tools">
          <button class="btn btn-primary btn-sm" data-toggle="collapse" data-target="#outbody" aria-expanded="false" aria-controls="outbody"><i class="fa fa-minus"></i></button>
          
        </div>
        <i class="fa fa-user-md"></i>
        <h3 class="box-title">Users OUT</h3>
      </div>
      <div class="box-body no-padding collapse" id="outbody">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Doctor Name</th>
                <th>Department</th>
                <th>Designation</th>
              </tr>
            </thead>
            <tbody id="docout">
            </tbody>
          </table>
        </div>
      </div>
      <div class="box-footer">
      </div>
    </div>
    <!--End of Patient Visited-->
    
  </section>
  <!-- Main content -->

<div class="row">
<div class="col-lg-12">
  <iframe src="https://calendar.google.com/calendar/embed?title=%20%20%20&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=isurangamperera%40gmail.com&amp;color=%2329527A&amp;ctz=Asia%2FColombo" style="border-width:0" width="100%" height="600" frameborder="0" scrolling="no"></iframe></div>
</div>

  </section>

  <script type="text/javascript" src="../../js/dash_board.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      getAllData();
      
    });
  </script>
</div>