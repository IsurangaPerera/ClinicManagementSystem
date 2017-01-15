<section class="content-header" >
	<h1>Patient Diagnosis</h1> 
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
		<li>Patient Management</li>
		<li class="active">Patient Diagnosis</li>									
	</ol>
</section>

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
									<img src="../images/patient.png" class="img-rounded" width="86" height="81">
								</td>
								<td>
									<table width="100%">
										<tr>
											<td><u>Patient No.</u></td>
										</tr>
										<tr>
											<td>570V</td>
										</tr>
										<tr>
											<td><u>Patient Name</u></td>
										</tr>
										<tr>
											<td>Mr. Nisal Chamodh Perera</td>
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
								<td>22</td>
							</tr>
							<tr>
								<td><u>Currently Following Medications</u></td>
							</tr>
							<tr>
								<td>Abarelix</td>
							</tr>
							<tr>
								<td>E-Mycin</td>
							</tr>
							<tr>
								<td>Iferex</td>
							</tr>
							<tr>
								<td><u>Allergies</u></td>
							</tr>
							<tr>
								<td>Gynaecology</td>
							</tr>
							<tr>
								<td>Anticonvulsants</td>
							</tr>
							<tr>
								<td>Food Intolerance</td>
							</tr>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-9">
				<div class="box">
					<div class="box-footer clearfix">

						<a href="?cancel" class="btn btn-default">Cancel</a>
						<button class="btn btn-primary" onclick="postData()"><i class="fa fa-save"></i> Save</button>        
					</div>

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
								<table class="table table-striped table-inverse" id="comtable">
									<tr>
										<th>Date</th>
										<th>Complaint</th>
										<th>Period</th>
										<th>Prepared By</th>
										<th></th>
									</tr>		
								</table>
								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
							</div>

							<div class="tab-pane" id="tab_2">
								<!--Tab 2 Code goes here-->
								<a href="#" id="btn_observations" class="btn btn-primary" data-toggle="modal" data-target="#observations"><i class="fa fa-plus"></i> Add Clinical Observations</a>

								<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i>Print</a>
								<table class="table table-hover table-striped" id="obstable">
									<tr>
										<th>Date</th>
										<th>Observation</th>
										<th></th>
										<th></th>
										<th>Prepared By</th>
										<th></th>
									</tr>
								</table>

								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>

							</div>
							<div class="tab-pane" id="tab_3">

								<a href="#" id="btn_medications" class="btn btn-primary" data-toggle="modal" data-target="#medications"><i class="fa fa-plus"></i> Add Medications</a>

								<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
								<table class="table table-hover table-striped"  id="medtable">
									<tr>
										<th>Date</th>
										<th>Drug</th>
										<th>Dosage</th>
										<th>Prepared By</th>
										<th></th>
									</tr>
								</table>

								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
							</div>
							<div class="tab-pane" id="tab_4">

								<a href="#" id="btn_investigations" class="btn btn-primary" data-toggle="modal" data-target="#investigations"><i class="fa fa-plus"></i> Add Investigations</a>

								<a href="#" class="btn btn-default" target="_blank"><i class="fa fa-print"></i> Print</a>
								<table class="table table-hover table-striped" id="investable">
									<tr>
										<th>Date</th>
										<th>Investigation</th>
										<th></th>
										<th>Requested By</th>
										<th></th>
									</tr>
								</table>

								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
								<br><br><br><br><br><br><br>
							</div>
							<div class="tab-pane" id="tab_5">

								<form>
									<input type="hidden" name="opd_no" value="IP-000017">
									<input type="hidden" name="patient_no" value="000005">
									<table class="table table-hover">
										<tbody>
											<tr>
												<div class="form-group">
													<td width="21%" valign="top">Clinical Impression</td>
													<td width="79%">
														<select class="form-control input-sm" id="sel1" style="width: 60%;" onchange="showText(this.id)">
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
											<tr hidden="true" id="txtother">
												<td width="21%" valign="top">Please Specify</td>
												<td width="79%"><textarea name="reason_admission" id="reason_admission" class="form-control input-sm" style="width: 60%;" rows="3"></textarea></td>
											</tr>
											<tr>
												<td valign="top">Plan From OPD</td>
												<td>
													<select id="condition" class="form-control input-sm" style="width: 60%;" onchange="assignConsultant(this.id)" required>
														<option value="0">Discharge from OPD</option>
														<option value="1">Follow up OPD</option>
														<option value="2" id="refRoom">Referral to TB Section</option>
														<option value="3" id="refRoom">Referral to Respiratory Consultant</option>

													</select>
												</td>
											</tr>
											<tr hidden="true" id="consultants">
												<td valign="top">Consultant</td>
												<td>
													<input id="consultantin" list="doctorss" class="form-control input-sm"style="height: 100%; width: 60%; cursor:pointer;" placeholder="Consultant">
													<datalist id="doctorss">
														<option value="Dr Kirthi Gunasekara"></option>
														<option value="Dr Amitha Fernando"></option>
													</datalist>
												</td>
											</tr>
											<tr>
												<td width="21%" valign="top">Aditional Notes</td>
												<td width="79%"><textarea name="admitting_impression" id="admitting_impression" class="form-control input-sm" style="width: 60%;" rows="3"></textarea></td>
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
				</div><!--ENF OF NAV TABS-->
			</div>
		</div>
		
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
						<form>
							<table cellpadding="5" cellspacing="5" align="center" class="table table-striped table-inverse" id="tble1">
								<tr>
									<td>Complaints</td>
									<td>Duration</td>
									<td></td>
								</tr>
								<tr>
									<td>
										<input id="in00" list="complaints1" name="complaints1" class="form-control input-sm" onchange="setEnable(this.id)" style="height: 100%; cursor:pointer;" autofocus placeholder="Complaint">
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
										<input id="in02" list="days" name="days" class="form-control input-sm" style="height: 100%; cursor:pointer;" placeholder="Days/Weeks/Months/Years" disabled>
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
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="button" id="btncomplaints" class="btn btn-primary" onclick="save(this.id)">Save changes</button>
						<button type="button" id="btnnextobs" class="btn btn-secondary" onclick="">Next</button>
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
												<label for="rcervical">Right Cervical</label>
											</td>
											<td>
												<input type="checkbox" id="lcervical" />
												<label for="lcervical">Left Cervical</label>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="raxilliary" />
												<label for="raxilliary">Right Axilliary</label>
											</td>
											<td>
												<input type="checkbox" id="laxilliary" />
												<label for="laxilliary">Left Axilliary</label>
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
												<select class="selectpicker" id="rlzs">
													<option value="Inspiratory">Inspiratory</option>
													<option value="Expiratory">Expiratory</option>
													<option value="Monophonic">Monophonic</option>
													<option value="Polyphonic">Polyphonic</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="llz"/>
												<label for="llz">Left Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="llzs">
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
												<select class="selectpicker" id="rmzs">
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
												<select class="selectpicker" id="lmzs">
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
												<select class="selectpicker" id="ruzs">
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
												<select class="selectpicker" id="luzs">
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
												<input type="checkbox" id="rlz2" />
												<label for="rlz2">Right Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="rlz2s">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="llz2" />
												<label for="llz2">Left Lower Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="llz2s">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="rmz2" />
												<label for="rmz2">Right Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="rmz2s">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="lmz2" />
												<label for="lmz2">Left Mid Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="lmz2s">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="ruz2" />
												<label for="ruz2">Right Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="ruz2s">
													<option value="Fine">Fine</option>
													<option value="Corse">Corse</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="luz2" />
												<label for="luz2">Left Upper Zone</label>
											</td>
											<td>
												<select class="selectpicker" id="luz2s">
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
												<input type="checkbox" id="rlz3" />
												<label for="rlz3">Right Lower</label>
											</td>
											<td>
												<select class="selectpicker" id="rlz3s">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="llz3" />
												<label for="llz3">Left Lower</label>
											</td>
											<td>
												<select class="selectpicker" id="llz3s">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="rmz3" />
												<label for="rmz3">Right Mid</label>
											</td>
											<td>
												<select class="selectpicker" id="rmz3s">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="lmz3" />
												<label for="lmz3">Left Mid</label>
											</td>
											<td>
												<select class="selectpicker" id="lmz3s">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
										</tr>
										<tr>
											<td>
												<input type="checkbox" id="ruz3" />
												<label for="ruz3">Right Upper</label>
											</td>
											<td>
												<select class="selectpicker" id="ruz3s">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
											<td>
												<input type="checkbox" id="luz3" />
												<label for="luz3">Left Upper</label>
											</td>
											<td>
												<select class="selectpicker" id="luz3s">
													<option value="Hyper-Resonant">Hyper-Resonant</option>
													<option value="dull">Dull</option>
													<option value="Stony Dull">Stony Dull</option>
												</select>
											</td>
										</tr>
									</table>
								</div>
							</div>
								<div class="form-group">
									<label for="imp_other">Other:</label>
									<textarea class="form-control" rows="5" id="obs_other"></textarea>
								</div>

							</div>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="btnobservations" onclick="save(this.id)">Save changes</button>
							<button type="button" id="btnnextmed" class="btn btn-secondary" onclick="">Next</button>
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
											<div class="ui-widget">
											<input id="im00" type="text" class="form-control input-sm" onchange="updateUserInput(this.id);" onkeyup="updateUserInput(this.id);" onpaste="updateUserInput(this.id);" oninput="updateUserInput(this.id);" style="height: 100%; cursor:pointer;" placeholder="Medication">
											</div>
										</td>

										<td>
											<div class="ui-widget">
											<input id="im01" list="dose" name="dose" class="form-control input-sm" style="height: 100%; cursor:pointer;" placeholder="Dosage" disabled>
											<datalist id="dose">
												<option value="Dose 0"></option>
												<option value="Dose 1"></option>
												<option value="Dose 2"></option>
											</datalist>
										</div>
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
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" id="btnmedications" class="btn btn-primary" onclick="save(this.id)">Save changes</button>
							<button type="button" id="btnnextinves" class="btn btn-secondary" onclick="">Next</button>
						</div>
					</div>

				</div>
			</div>
			<!-- END Modal -->
			<!-- Modal -->
			<!-- Investigations -->
			<div class="modal fade" id="investigations" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title" id="investigations">Investigations</h4>
						</div>
						<div class="modal-body">
							<!--Start Of Panel Group-->
							<div class="panel-group">
								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="xray" onclick="changeOptions(this.id)"/>
										<label for="xray">Chest X-Ray</label>
									</div>
									<div class="panel-body" id="xrayoptions" hidden="true">
										<table class="table">
											<tr>
												<td>
													<input type="checkbox" id="pa"/>
													<label for="pa">PA</label>
												</td>
												<td>
													<input type="checkbox" id="rl"/>
													<label for="rl">Right Lateral</label>
												</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox" id="ll"/>
													<label for="ll">Left Lateral</label>
												</td>
												<td>
													<input type="checkbox" id="apical"/>
													<label for="apical">Apical</label>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="sputum" onclick="changeOptions(this.id)"/>
										<label for="sputum">Sputum</label>
									</div>
									<div class="panel-body" id="sputumoptions" hidden="true">
										<table class="table">
											<tr>
												<td>
													<input type="checkbox" id="pyogenicculture"/>
													<label for="pyogenicculture">Pyogenic Culture</label>
												</td>
												<td>
													<input type="checkbox" id="afbsmear3"/>
													<label for="afbsmear3">AFB Smear (x3 Morning)</label>
												</td>
											</tr>
											<tr>
												<td>
													<input type="checkbox" id="afbsmear"/>
													<label for="afbsmear">AFB Smear</label>
												</td>
												<td>
													<input type="checkbox" id="fungalculture"/>
													<label for="fungalculture">Fungal Culture</label>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="blood" onclick="changeOptions(this.id)"/>
										<label for="blood">Blood</label>
									</div>
									<div class="panel-body" id="bloodoptions" hidden="true">
										<table class="table">
											<tr>
												<td>
													<input type="checkbox" id="fbc"/>
													<label for="fbc">FBC</label>
												</td>
												<td>
													<input type="checkbox" id="esr"/>
													<label for="esr">ESR</label>
												</td>
												<td>
													<input type="checkbox" id="fbs"/>
													<label for="fbs">FBS</label>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="lfunction" onclick="changeOptions(this.id)"/>
										<label for="lfunction">Lung Function</label>
									</div>
									<div class="panel-body" id="lfunctionoptions" hidden="true">
										<table class="table">
											<tr>
												<td>
													<input type="checkbox" id="fev1"/>
													<label for="fev1">FEV1</label>
												</td>
												<td>
													<input type="checkbox" id="fvc"/>
													<label for="fvc">FVC</label>
												</td>
												<td>
													<input type="checkbox" id="dlco"/>
													<label for="dlco">DLCO</label>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="resting"/>
										<label for="resting">Resting SP02</label>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="walking"/>
										<label for="walking">Six Minute Walking Test</label>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="mantoux"/>
										<label for="mantoux">Mantoux</label>
									</div>
								</div>
								<!--End Of Panel-->

								<!--Start Of Panel-->
								<div class="panel panel-default">
									<div class="panel-heading">
										<input type="checkbox" id="weight"/>
										<label for="weight">Body Weight</label>
									</div>
								</div>
								<!--End Of Panel-->

							</div>
							<!--End Of Panel Group-->
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary" id="btninvestigations" onclick="save(this.id)">Save changes</button>
						</div>
					</div>
				</div>
			</div>

		</section><!-- /.content -->
		<script type="text/javascript">
		$("#btnnextobs").click(function(){
			$("#complaints").modal('hide');
			save('btncomplaints');
			$("#observations").modal('show');
		});
		$("#btnnextmed").click(function(){
			$("#observations").modal('hide');
			save('btnobservations');
			$("#medications").modal('show');
		});
		$("#btnnextinves").click(function(){
			$("#medications").modal('hide');
			save('btnmedications');
			$("#investigations").modal('show');
		});
		</script>

	</div>
