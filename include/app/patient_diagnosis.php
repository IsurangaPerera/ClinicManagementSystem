<?php
require('hidden_right.php');
?>

<section class="content-header" >
	<h1>Patient Diagnosis</h1> 
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="#">Patient Appointment</a></li>
		<li class="active">Add Appointment</li>									
	</ol>
</section>

<style>
.patient_diagnosis{
	display: block;
}
</style>

<div class="patient_diagnosis">
	<!-- Main content -->
	<section class="content">

		<div class="row">

			<div class="col-md-3">
				<div class="box">
					<div class="box-header"></div>
					<div class="box-body table-responsive no-padding">
						<table width="100%" cellpadding="3" cellspacing="3">
							<tr>
								<td width="15%" valign="top" align="center">
									<img src="../images/patient.png" class="img-rounded" width="86" height="88">
								</td>
								<td>
									<table width="100%">
										<tr>
											<td><u>Patient No.</u></td>
										</tr>
										<tr>
											<td>000014</td>
										</tr>
										<tr>
											<td><u>Patient Name</u></td>
										</tr>
										<tr>
											<td>Mr. Arnold G. Bariring</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div class="box-footer clearfix">

						<table class="table">
							<tr>
								<td><u>Age</u></td>
							</tr>
							<tr>
								<td>23</td>
							</tr>
							<tr>
								<td><u>Currently Following Medications</u></td>
							</tr>
							<tr>
								<td>Paracetomol</td>
							</tr>
							<tr>
								<td>Dollar</td>
							</tr>
							<tr>
								<td>Beco</td>
							</tr>
							<tr>
								<td><u>Allergies</u></td>
							</tr>
							<tr>
								<td>Gynaecology</td>
							</tr>

						</table>
					</div>
				</div>
			</div>

			<div class="col-md-9"> 
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab">Presenting Complaints</a></li>
						<li><a href="#tab_2" data-toggle="tab">Clinical Observations</a></li>
						<li><a href="#tab_3" data-toggle="tab">Medications</a></li>
						<li><a href="#tab_4" data-toggle="tab">Investigations</a></li>
						<li><a href="#tab_5" data-toggle="tab">Treatment Plan</a></li>

					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">

							<a href="#" id="btn_complaints" class="btn btn-primary" data-toggle="modal" data-target="#complaints"><i class="fa fa-plus"></i> Add Complaints</a>

							<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>Time</th>
										<th>Complaint</th>
										<th>Period</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>May 19, 2016</td>
										<td>02:55:00 PM</td>
										<td>Haemoptysis</td>
										<td>2 days</td>

										<td>
											<a href="#" onClick="return confirm('Are you sure you want to remove?');">Remove</a>

										</td>
									</tr>

								</tbody>
							</table>



							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
						</div>

						<div class="tab-pane" id="tab_2">
							<!--Tab 2 Code goes here-->
							<a href="#" id="btn_observations" class="btn btn-primary" data-toggle="modal" data-target="#observations"><i class="fa fa-plus"></i> Add Clinical Observations</a>

							<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>Time</th>
										<th>Complaint</th>
										<th>Period</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>May 19, 2016</td>
										<td>02:55:00 PM</td>
										<td>Haemoptysis</td>
										<td>2 days</td>

										<td>
											<a href="#" onClick="return confirm('Are you sure you want to remove?');">Remove</a>

										</td>
									</tr>

								</tbody>
							</table>



							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>

						</div>
						<div class="tab-pane" id="tab_3">

							<a href="#" id="btn_medications" class="btn btn-primary" data-toggle="modal" data-target="#medications"><i class="fa fa-plus"></i> Add Medications</a>

							<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>Time</th>
										<th>Drug</th>
										<th>Dosage</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>May 19, 2016</td>
										<td>02:55:00 PM</td>
										<td>Paraetomol</td>
										<td>20mg</td>

										<td>
											<a href="#" onClick="return confirm('Are you sure you want to remove?');">Remove</a>

										</td>
									</tr>

								</tbody>
							</table>



							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
						</div>
						<div class="tab-pane" id="tab_4">

							<a href="#" id="btn_investigations" class="btn btn-primary" data-toggle="modal" data-target="#investigations"><i class="fa fa-plus"></i> Add Investigations</a>

							<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
							<table class="table table-hover table-striped">
								<thead>
									<tr>
										<th>Date</th>
										<th>Time</th>
										<th>Complaint</th>
										<th>Period</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>May 19, 2016</td>
										<td>02:55:00 PM</td>
										<td>Haemoptysis</td>
										<td>2 days</td>

										<td>
											<a href="#" onClick="return confirm('Are you sure you want to remove?');">Remove</a>

										</td>
									</tr>

								</tbody>
							</table>



							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
						</div>
						<div class="tab-pane" id="tab_5">

							<form method="post" action="" onSubmit="return confirm('Are you sure you want to save?');">
								<input type="hidden" name="opd_no" value="IP-000017">
								<input type="hidden" name="patient_no" value="000005">
								<table class="table table-hover">
									<tbody>
										<tr>
											<div class="form-group">
												<td width="21%" valign="top">Clinical Impression</td>

												<td width="79%">

													<select class="form-control input-sm" id="sel1" style="width: 60%;">
														<option value="0">Non specific symptoms</option>
														<option value="1">Upper respiratory tract infection</option>
														<option value="2">Lower respiratory tract infection</option>
														<option value="3">Community Acquired Pneumonia</option>
														<option value="4">Pulmonary tuberculosis</option>
														<option value="5">Extrapulmonary tuberculosis</option>
														<option value="6">Asthma</option>
														<option value="7">COPD</option>
														<option value="8">Interstitial lung disease</option>
														<option value="9">Bronchiectasis</option>
														<option value="10">Lung malignancy</option>
														<option value="11">Chronic cough</option>
														<option value="12">Pleural effusion</option>
														<option value="13">Pneumothorax</option>
														<option value="14">Sleep disordered breathing</option>
														<option value="15" id="other">Other</option>
													</select>
												</td>
											</div>
										</tr>
										<tr hidden="True">
											<td width="21%" valign="top">Please Specify</td>
											<td width="79%"><textarea name="reason_admission" id="reason_admission" class="form-control input-sm" style="width: 60%;" rows="3"></textarea></td>
										</tr>
										
										<tr>
											<td valign="top">Plan From OPD</td>
											<td>
												<select name="condition" id="condition" class="form-control input-sm" style="width: 60%;" required>
													<option value="1">Discharge from OPD</option>
													<option value="2">Follow up OPD</option>
													<option value="3" id="refRoom">Referral to TB Section</option>
													<option value="3" id="refRoom">Referral to Respiratory Consultant</option>

												</select>
											</td>
										</tr>
										<tr hidden="True">
											<td valign="top">Consultant</td>
											<td>
												<select name="condition" id="condition" class="form-control input-sm" style="width: 60%;" required>
													<option value="Dr Kirthi Gunasekara">Dr Kirthi Gunasekara</option>
													<option value="Dr Amitha Fernando">Dr Amitha Fernando</option>
												</select>
											</td>
										</tr>
										<tr>
											<td width="21%" valign="top">Aditional Notes</td>
											<td width="79%"><textarea name="admitting_impression" id="admitting_impression" class="form-control input-sm" style="width: 60%;" rows="3"></textarea></td>
										</tr>

										<tr>
											<td colspan="2">
												<button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>

												<a href="" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
											</td>
										</tr>
									</tbody>
								</table>
							</form>

							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
							<br><br><br><br><br><br><br>
						</div>
					</div>
					<div class="box-footer clearfix">

					</div>
				</div>
			</div>
		</div>
		<div class="bottomright">
			<a href="#" data-toggle="modal" data-target="#bfmodal" id="modali">
				<img src="../images/add.png" alt="AddButton" width="100" height="100">
			</a>
		</div>

		<style>

		.bottomright {
			position: fixed;
			right : 10px;
			bottom : 10px;
		}

		</style>

		<!-- Modal -->
		<!-- Presenting Complaints -->
		<div class="modal fade" id="complaints" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Presenting Complaints</h4>
					</div>
					<div class="modal-body">
						<!--From Start-->
						<form method="post" action="" onSubmit="return validate();">
							<table cellpadding="5" cellspacing="5" align="center" class="table table-striped table-inverse" id="tble1">
								<tr>
									<td>Complaints</td>
									<td>Duration</td>
									<td></td>
								</tr>
								<tr>
									<td>
										<input id="in00" list="complaints1" name="complaint" class="form-control input-sm" onchange="setEnable(this.id)" style="height: 100%; cursor:pointer;" autofocus placeholder="Complaint">
										<datalist id="complaints1"></option>
											<option value="Cough"></option>
											<option value="Sputum"></option>
											<option value="Haemoptysis"></option>
											<option value="Shortness of Breath"></option>
											<option value="Wheeze"></option>
											<option value="Fever"></option>
											<option value="Night Sweats"></option>
											<option value="Loss of Apetite"></option>
											<option value="Loss of Weight"></option>
											<option value="Chest Pain"></option>
										</datalist>
									</td>

									<td>
										<input id="in01" type="text" class="form-control input-sm" style="height: 100%; cursor:pointer;" placeholder="Duration(eg.24)" disabled>
									</td>

									<td>
										<input id="in02" list="days" name="complaint" class="form-control input-sm" style="height: 100%; cursor:pointer;" placeholder="Days/Weeks/Months/Years" disabled>
										<datalist id="days">
											<option value="Days"></option>
											<option value="Weeks"></option>
											<option value="Months"></option>
											<option value="Years"></option>
										</datalist>
									</td>
								</tr>
							</table>

							<div class="bottomright" style="bottom: 80px; right: 20px">
								<a href="#" id="addmore" onclick="addRow()">
									<img src="../images/addmore.png" alt="AddButton" width="30" height="30">
								</a>
							</div>

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
		
		<!-- Modal -->
		<!-- Clinical Observations -->
		<div class="modal fade" id="observations" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Clinical Observations</h4>
					</div>
					<div class="modal-body">

						<div class="panel-group">
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="cachexia"/>
									<label for="cachexia">Cachexia</label>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="clubbing"/>
									<label for="clubbing">Clubbing</label>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="lymphadenopathy" name="lymphadenopathy" onclick="changeOptions(this.id)"/>
									<label for="lymphadenopathy">Lymphadenopathy</label>
								</div>
								<div class="panel-body" id="lymphadenopathyoptions" hidden="true">
									<table class="table">
										<tr>
											<td>
												<input type="checkbox" id="rcervical" />
												<label for="cachexia">Right Cervical</label>
											</td>
											<td>
												<input type="checkbox" id="lcervical" />
												<label for="cachexia">Left Cervical</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="rauxiiliary" />
												<label for="cachexia">Right Axilliary</label>
											</td>
											<td>
												<input type="checkbox" id="lauxilliary" />
												<label for="cachexia">Left Axilliary</label>
											</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="reducedchestexpansion"onclick="changeOptions(this.id)"/>
									<label for="reducedchestexpansion">Reduced Chest Expansion</label>
								</div> 
								<div class="panel-body" id="reducedchestexpansionoptions" hidden="true">
									<table class="table">
										<tr>
											<td>
												<input type="checkbox" id="right" />
												<label for="right">Right</label>
											</td>
											<td>
												<input type="checkbox" id="left" />
												<label for="left">Left</label>
											</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="vbs"/>
									<label for="vbs">Vesicular Breath Sounds</label>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="rhonchi" onclick="changeOptions(this.id)"/>
									<label for="rhonchi">Rhonchi</label>
								</div>
								<div class="panel-body" id="rhonchioptions" hidden="true">
									<table class="table">
										<tr>
											<td>
												<input type="checkbox" id="rlz" />
												<label for="rlz">Right Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="llz" />
												<label for="llz">Left Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="rmz" />
												<label for="rmz">Right Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="lmz" />
												<label for="lmz">Left Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="ruz" />
												<label for="ruz">Right Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="luz" />
												<label for="luz">Left Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="ic" onclick="changeOptions(this.id)"/>
									<label for="ic">Inpiratory Crepitations</label>
								</div>
							
								<div class="panel-body" id="icoptions" hidden="true">
									<table class="table">
										<tr>
											<td>
												<input type="checkbox" id="rlz" />
												<label for="rlz">Right Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="llz" />
												<label for="llz">Left Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="rmz" />
												<label for="rmz">Right Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="lmz" />
												<label for="lmz">Left Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="ruz" />
												<label for="ruz">Right Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="luz" />
												<label for="luz">Left Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<input type="checkbox" id="ap" onclick="changeOptions(this.id)"/>
									<label for="ap">Abnormal Percussion</label>
								</div>
							
								<div class="panel-body" id="apoptions" hidden="true">
									<table class="table">
										<tr>
											<td>
												<input type="checkbox" id="rlz" />
												<label for="rlz">Right Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="llz" />
												<label for="llz">Left Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="rmz" />
												<label for="rmz">Right Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="lmz" />
												<label for="lmz">Left Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="ruz" />
												<label for="ruz">Right Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="luz" />
												<label for="luz">Left Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
							</div>
						
						
						</div>

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>

			</div>
		</div>
		<!-- END Modal -->

		<!-- Modal -->
		<!-- Presenting Complaints -->
		<div class="modal fade" id="medications" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Medications</h4>
					</div>
					<div class="modal-body">
						<!--From Start-->
						<form role="form">
							<table cellpadding="5" cellspacing="5" align="center" class="table table-striped table-inverse" id="tble3">
								<tr>
									<td>Medication</td>
									<td>Dosage</td>
								</tr>
								<tr>
									<td>
										<input id="im00" type="text" class="form-control input-sm" onchange="setEnable2(this.id)" style="height: 100%; cursor:pointer;" placeholder="Medication">
									</td>

									<td>
										<input id="im01" list="dose" name="dose" class="form-control input-sm" style="height: 100%; cursor:pointer;" placeholder="Dosage" disabled>
										<datalist id="dose">
											<option value="Dose 0"></option>
											<option value="Dose 1"></option>
											<option value="Dose 2"></option>
										</datalist>
									</td>
								</tr>
							</table>

							<div class="bottomright" style="bottom: 80px; right: 20px">
								<a href="#" id="addmore" onclick="addRow2()">
									<img src="../images/addmore.png" alt="AddButton" width="30" height="30">
								</a>
							</div>
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
		<!-- Modal -->
		<!-- Investigations -->
		<div class="modal fade" id="investigations" tabindex="-1" role="dialog" aria-labelledby="investigations" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title" id="investigations">Modal title</h4>
					</div>
					<div class="modal-body">
						...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

	</section><!-- /.content -->

</div>
