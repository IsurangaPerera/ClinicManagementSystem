<?php
session_start();
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/include/config/session_check.php");
require("$root/include/config/user_common.php");
$usr = new User();
$usr->verifyUser($_SESSION['user_type'], $_SESSION['user_type']);
require("$root/include/header.php");
?>

<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
-->

<ul class="sidebar-menu">

	<!-- Modal -->
	<div class="modal fade" id="myModal3" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Search Patient</h4>
				</div>
				<div class="modal-body">
					<!--From Start-->
					<form method="post" action="" onSubmit="return validate();">
						<table cellpadding="5" cellspacing="5" align="center">
							<tr>
								<td align="center">Select Patient</td>
							</tr>
							<tr>
								<td>

									<input type="text" id="patient_no" data-toggle="modal" data-target="#patientListModal" placeholder="Enter Patient ID" class="form-control input-sm" style="width: 100%; cursor:pointer;" required autofocus>

								</td>
							</tr>
							<tr>
								<td>
									<input type="submit" value="Submit" class="btn btn-primary" style="width: 250px;" name="btnSubmit">
								</td>
							</tr>
						</table>
					</form>
					<!--Form End-->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<!-- END Modal -->

	<li class="header" style="text-align: center; padding: 10px; margin-bottom: 5px; border: none;">Patient Details</li>

	<li>
		<a href="?patient_profile">
			<i class="fa ion-person-stalker"></i><span>Patient Profile</span>
		</a>
	</li>

	<li>
		<a href="?visiting_history">
			<i class="fa ion-person-stalker"></i><span>Visiting History</span>
		</a>
	</li>

	<li>
		<a href="?prescription_history">
			<i class="fa ion-person-stalker"></i><span>Prescription History</span>
		</a>
	</li>

	<li>
		<a href="?patient_diagnosis">
			<i class="fa ion-person-stalker"></i><span>Patient Diagnosis</span>
		</a>
	</li>


</ul>
</section>
</aside>

<aside class="right-side"><!--Start of Right Side-->

	<?php include("app/patient_profile.php"); ?>

	<?php

	if(isset($_GET['visiting_history'])) {
		require('app/visiting_history.php');
	}

	if(isset($_GET['patient_diagnosis'])) {
		require('app/patient_diagnosis.php');
	}

	if(isset($_GET['prescription_history'])) {
		require('app/prescription_history.php');
	}

	if(isset($_GET['patient_profile'])) {
		require('app/hidden_right.php');
		?>

		<style>
		.patient_profile, .opt{
			display: block;
		}
		</style>

		<?php
	}

	?>


</aside><!--End Of Right Side-->

</div>
<script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script>
<script src="../css/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>  

<script src="../js/app.js" type="text/javascript"></script>

<!-- BDAY -->
<script src="../../dp/js/dp.js"></script>

<script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {

            	$("#myModal3").modal({backdrop: "static"});

            	$('#cFrom').datepicker({
                    //format: "dd/mm/yyyy"
                    format: "yyyy-mm-dd"
                });  

            	$('#cTo').datepicker({
                    //format: "dd/mm/yyyy"
                    format: "yyyy-mm-dd"
                });  
            });
            </script>
            <!-- END BDAY -->
        </body>
        </html>