<section class="content-header" >
  <h1>Investigation Results</h1> 
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Patient Management</a></li>
    <li class="active">Investigation Results</li>
  </ol>
</section>

<section class="content">
  <div class="row">

    <div class="col-md-12">

      <div class="box">

       <div class="box-body table-responsive">

        <div class="nav-tabs-custom">
         <ul class="nav nav-tabs">
          <li class="active"><a href="#tab_1" data-toggle="tab">FBS</a></li>
          <li><a href="#tab_2" data-toggle="tab">FBC</a></li>
          <li><a href="#tab_3" data-toggle="tab">Sputum</a></li>
          <li><a href="#tab_4" data-toggle="tab">X-Ray</a></li>
          <!--<li><a href="#tab_5" data-toggle="tab">Lung Function</a></li>
          <li><a href="#tab_6" data-toggle="tab">Resting Sp02</a></li>
          <li><a href="#tab_7" data-toggle="tab">Other</a></li>-->
        </ul>
        
        <div class="tab-content">

         <div class="tab-pane active" id="tab_1">
          <div class="container">
            <div class="row">
              <div id="fbs_chart" class="col-md-12" style="height: 350px;"></div>
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab_2">
          <div class="container">
            <div class="row">

              <div class="col-md-4">
                <div class="panel-group" id="fbc_panel">

                </div>
              </div>
              <div class="col-md-4">
                <div class="panel-group" id="fbc_panel2">

                </div>
              </div>
              <div class="col-md-4">
                <div class="panel-group" id="fbc_panel3">

                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab_3">
          <div class="container">
            <div class="row">
              
              <div class="col-md-4">
                <div class="panel-group" id="sputum_panel">
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="panel-group" id="sputum_panel2">
                </div>
              </div>
              
              <div class="col-md-4">
                <div class="panel-group" id="sputum_panel3">
                </div>
              </div>
            
            </div>
          </div>
        </div>

        <div class="tab-pane" id="tab_4">
          <div class="container">
            <div class="row">

              <div class="col-md-4">
                <div class="panel-group" id="xray_panel">

                </div>
              </div>
              <div class="col-md-4">
                <div class="panel-group" id="xray_panel2">

                </div>
              </div>
              <div class="col-md-4">
                <div class="panel-group" id="xray_panel3">

                </div>
              </div>

            </div>
          </div>
        </div>

      </div>

    </div><!--END OF TABS-->

  </div>

  <div class="box-footer clearfix" align="right">
    <button class="btn btn-primary" onclick="loadFunctions();"><i class="fa fa-save"></i>Refresh</button>        
  </div>

</div>
</div>

</div>

<!-- START OF FBC MODAL -->
<div id="dataModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="report_id"></h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
          <thead>
            <th>Full Blood Count</th><th>Result</th><th>Reference Range</th>
          </thead>
          <tbody>
            <tr><td>White Blood Count</td><td id="white_cells"></td><td>3.6-9.6 x 10<sup>9</sup>/l</td></tr>
            <tr><td>Red Blood Cells</td><td id="red_cells"></td><td>4.2-5.8 x 10<sup>12</sup>/l</td></tr>
            <tr><td>Haemoglobin</td><td id="haemoglobin"></td><td>13-15.5g/dl</td></tr>
            <tr><td>Haematocrit</td><td id="haematocrit"></td><td>0.35-0.48</td></tr>
            <tr><td>Platelet Count</td><td id="platelets"></td><td>140-440 x 10<sup>9</sup>/l</td></tr>
            <tr><td>Polymorphs</td><td id="polymorphs"></td><td>42.4-75.2%</td></tr>
            <tr><td>Lymphocytes</td><td id="lymphocytes"></td><td>20.5-51.1%</td></tr>
            <tr><td>Monocytes</td><td id="monocytes"></td><td>1.7-9.3%</td></tr>
            <tr><td>Eosinophils</td><td id="eosinophils"></td><td>1-6%</td></tr>
            <tr><td>Basophils</td><td id="basophils"></td><td>0-2%</td></tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- END OF FBC MODAL -->

<!-- START OF SPUTUM MODAL -->
<div id="dataModalSputum" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" id="reports_id"></h4>
      </div>
      <div class="modal-body">
        <table class="table table-hover">
          <thead>
            <th>Full Blood Count</th><th>Result</th><th>Reference Range</th>
          </thead>
          <tbody>
            <tr><td>Polygenic Culture</td><td id="pcp"></td><td id="pcn"></td></tr>
            <tr><td>AFB Smear (x3 Morning)</td><td id="asmp"></td><td id="asmn"></td></tr>
            <tr><td>AFB Smear</td><td id="asp"></td><td id="asn"></td></tr>
            <tr><td>Fungal Culture</td><td id="fcp"></td><td id="fcn"></td></tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- END OF SPUTUM MODAL -->

</section>

<script src="../js/fbs_graph.js" type="text/javascript"></script>
<script src="../js/fbc_data.js" type="text/javascript"></script>
<script src="../js/sputum_data.js" type="text/javascript"></script>
<script src="../js/xray_data.js" type="text/javascript"></script>


<script type="text/javascript">

$(document).ready(function(){
  loadFunctions();
});

function loadFunctions() {
  showGraph();
  loadFbcData();
  loadSputumData();
  loadXRayData();
}

</script>