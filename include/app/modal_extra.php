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
