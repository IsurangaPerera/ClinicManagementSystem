
<section class="content-header opt" >
  <h1>Patient Profile</h1> 
</section>

<div class="patient_profile">

  	<!--Satrt Of General Details-->
  	<div class="panel panel-info" style="margin: 10px;">
  		
      <div class="panel-heading">
       General Details
      </div>

   <div class="panel-body">
     <div class="row">
      <div class="col-md-4">
       <table cellpadding="3" cellspacing="3" width="80%" >
        <tr>
         <td>Full Name::</td>
         <td id="pname"></td>
       </tr>
       <tr>
         <td>Date Of Birth::</td>
         <td id="pdob"></td>
       </tr>
       <tr>
         <td>Gender::</td>
         <td id="pgender"></td>
       </tr>
       <tr>
         <td valign="top">Address::</td>
         <td id="paddress"></td>
       </tr>
     </table>
   </div>
   <div class="col-md-4">
     <table cellpadding="3" cellspacing="3" width="60%">
      <tr>
       <td>Patient Id::</td>
       <td id="pid"></td>
     </tr>
     <tr>
       <td>National ID::</td>
       <td id="nic"></td>
     </tr>
     <tr>
       <td>Religion::</td>
       <td id="religion"></td>
     </tr>
     <tr>
       <td>Blood Group::</td>
       <td id="blood"></td>
     </tr>
     <tr>
       <td valign="top">Phone::</td>
       <td id="phone"></td>
     </tr>
   </table>
 </div>

 <div class="col-md-4">
    <img src="../images/patient.png" class="img-rounded" width="45%" height="45%" align="right">
 </div>
 
 </div>
</div>
</div>
<!--End Of General Details-->	

<!--Start Of Visiting History-->
<div class="panel panel-info" style="padding: 0px; margin: 10px;">
  
  <div class="panel-heading">
   <h3 class="panel-title pull-left">Visiting History</h3>
   <a class="btn btn-primary pull-right" id="vhismore"><i class="fa fa-plus"></i> View More</a>
   <div class="clearfix"></div>
  </div>
 
 <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Date</th>
            <th>Impression</th>
            <th>Plan From OPD</th>
            <th>Consultant</th>
            <th>Comment</th>
            <th>Prepared By</th>
          </tr>
        </thead>
        <tbody id="tblePlan">
        </tbody>
      </table>
  </div>
</div>
<!--End Of Visiting History-->

<!--Start of Prescription History-->
<div class="panel panel-info" style="margin: 10px;">
  
  <div class="panel-heading">
   <h3 class="panel-title pull-left">Prescription History</h3>
   <a class="btn btn-primary pull-right" id="phismore"><i class="fa fa-plus"></i> View More</a>
   <div class="clearfix"></div>
  </div>
 
 <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>Date</th>
            <th>Drug</th>
            <th>Dosage</th>
            <th>Doctor</th>
          </tr>
        </thead>
        <tbody id="tblePres">
        </tbody>
      </table>
  </div>
</div>
<!--End Of Prescription History-->
</div><!--End Of Patient Profile-->

<script type="text/javascript">
$(document).ready(function(){

  $("#vhismore").click(function(event){
    $('#r_side').load('app/visiting_history.php');
  });

  $("#phismore").click(function(event){
    $('#r_side').load('app/prescription_history.php');
  });
});

</script>



