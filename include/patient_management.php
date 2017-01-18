<?php
require_once('config/session_check.php');
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/include/header.php");
?>

<ul class="sidebar-menu">

	<!-- Modal -->
	<div class="modal fade" id="myModal3" role="dialog" data-keyboard="false">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Search Patient</h4>
				</div>
				<div class="modal-body">
					<!--From Start-->
					<form>
						<table cellpadding="5" cellspacing="5" align="center">
							<tr>
								<td align="center">Select Patient</td>
							</tr>
							<tr>
								<td>
									<input type="text" id="patient_no" data-toggle="modal" data-target="#patientListModal" placeholder="Enter Patient ID" class="form-control input-sm" style="width: 100%; cursor:pointer;" autofocus>
								</td>
							</tr>
							<tr>
								<td>
									<input value="Submit" class="btn btn-primary" style="width: 250px;" onclick="getResult()">
								</td>
							</tr>
						</table>
					</form>
					<!--Form End-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" id="rehome">Home</button>
				</div>
			</div>

		</div>
	</div>
	<!-- END Modal -->

	<li>
		<a href="#" id="p_profile">
			<i class="fa ion-person-stalker"></i><span>Patient Profile</span>
		</a>
	</li>

	<li>
		<a href="#" id="v_history">
			<i class="fa ion-person-stalker"></i><span>Visiting History</span>
		</a>
	</li>

	<li>
		<a href="#" id="p_history">
			<i class="fa ion-person-stalker"></i><span>Prescription History</span>
		</a>
	</li>

	<li>
		<a href="#" id="i_results">
			<i class="fa ion-arrow-graph-up-right"></i> <span>Investigation Results</span>
		</a>
	</li>

	<li>
		<a href="#" id="p_diagnosis">
			<i class="fa ion-person-stalker"></i><span>Patient Diagnosis</span>
		</a>
	</li>

	<li>
		<a href="opd_doctor.php" onclick="setSession()">
			<i class="fa ion-android-home"></i><span>Home</span>
		</a>
	</li>

</ul>
</section>
</aside>

<aside class="right-side" id="r_side"><!--Start of Right Side-->
</aside><!--End Of Right Side-->

</div>

<script src="../js/patientProfile.js"></script>
<script src="../js/modal.js" type="text/javascript"></script>


<script type="text/javascript">
window.onload = function(e) {
	if(sessionStorage.getItem("patientId") === null || sessionStorage.getItem("patientId") === ""){
		$("#myModal3").modal({backdrop: "static"});   
	} else{
		getResult();
	}
}

$(document).ready(function(){
  $('#r_side').load('app/patient_profile.php');

  $("#p_profile").click(function(event){
    $('#r_side').load('app/patient_profile.php');
    docReady();
  });

  $("#p_history").click(function(event){
    $('#r_side').load('app/prescription_history.php');
    docReady();
  });

  $("#v_history").click(function(event){
    $('#r_side').load('app/visiting_history.php');
    docReady();
  });

  $("#p_diagnosis").click(function(event){
    $('#r_side').load('app/patient_diagnosis.php');
  });

  $("#i_results").click(function(event){
    $('#r_side').load('app/investigation_results.php');
  });

  $("#rehome").click(function(event){
    window.location.href = "../include/opd_doctor.php";
  });

});

function docReady(){
	if(sessionStorage.getItem("patientId") === null || sessionStorage.getItem("patientId") === ""){
		$("#myModal3").modal({backdrop: "static"});   
	} else{
		getResult();
	}
}

function setSession(){
	sessionStorage.setItem("patientId", "");
}
</script>

</body>
</html>