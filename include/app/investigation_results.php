<section class="content-header" >
  <h1>Investigation Results</h1> 
</section>

<section class="content">
  <div class="row">

    <div class="col-md-12">

      <div class="box">

       <div class="box-body table-responsive">

        <div class="nav-tabs-custom">
         <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">FBS</a></li>
          <li><a href="#tab_2" data-toggle="tab">Sputum</a></li>
        </ul>
        
        <div class="tab-content">

         <div class="tab-pane active" id="tab_1">
          <div class="container">
            <div class="row">
              <div id="fbs_chart" class="col-md-12" style="height: 350px;"></div>
            </div>
          </div>
        </div>
     
      </div>

    </div><!--END OF TABS-->
  
  </div>

<div class="box-footer clearfix" align="right">
  <button class="btn btn-primary" onclick="location.reload(true);"><i class="fa fa-save"></i>Refresh</button>        
</div>

</div>
</div>

</div>
</section>

<script src="../js/fbs_graph.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){
  showGraph();
});

</script>