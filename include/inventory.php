
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>EROM-MGH</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link href="http://demo-hms.eu5.org/public/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="http://demo-hms.eu5.org/public/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://demo-hms.eu5.org/public/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="http://demo-hms.eu5.org/public/css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <link href="http://demo-hms.eu5.org/public/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- scrollbar -->
    <link rel="stylesheet" href="http://demo-hms.eu5.org/public/scrollbar/jquery.mCustomScrollbar.css">
    <!-- Google CDN jQuery with fallback to local -->
    <script src="http://demo-hms.eu5.org/public/scrollbar/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://demo-hms.eu5.org/public/scrollbar/js/minified/jquery-1.11.0.min.js"><\/script>')</script>

    <!-- custom scrollbar plugin -->
    <link rel="stylesheet" href="http://demo-hms.eu5.org/public/scrollbar/style.css">
    <script src="http://demo-hms.eu5.org/public/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="glyphicon glyphicon-user"></i>
            <span>Admin Administrator<i class="caret"></i></span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header bg-light-blue">
               <img src="http://demo-hms.eu5.org/public/user_picture/no_avatar.gif" class="img-circle" alt="User Image" />
               <p>
                Admin Administrator <br /> System Administrator                                    </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <a href="http://demo-hms.eu5.org/myprofile" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a href="http://demo-hms.eu5.org/login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
            </li>
        </ul>
    </li>
</ul>
</div>
</nav>
</header>        		<form method="post" action="http://demo-hms.eu5.org/app/billing/save_invoice" onSubmit="return validate_form();">
<input type="hidden" name="patient" id="patient">

<section class="content">

   <div class="row">
      <div class="col-md-3">
       <div class="box box-primary">
        <div class="box-header">
        </div>

        <div class="box-content"> 
           <div class="box-body table-responsive no-padding">
              <span id="patientDetials">
                  <table width="100%" cellpadding="3" cellspacing="3">
                    <tr>
                       <td width="15%" valign="top" align="center">
                        <img src="http://demo-hms.eu5.org/public/patient_picture/avatar.png" class="img-rounded" width="86" height="81">
                    </td>
                    <td>
                     <table cellpadding="2" width="100%">
                        <tr>
                           <td><strong>Patient No.</strong></td>
                           <td>-</td>
                       </tr>
                       <tr>
                           <td><strong>IOP No.</strong></td>
                           <td>-</td>
                       </tr>
                       <tr>
                           <td><strong>Patient Name.</strong></td>
                       </tr>
                       <tr>
                           <td>-</td>
                       </tr>
                   </table>
               </td>
           </tr>
       </table>
   </span>
</div>	
</div>
<div class="box-footer">

    <div class="form-group">
       <label for="exampleInputEmail1">Date</label>
       <input type="text" value="11/08/2016" readonly name="dDate22222" id="dDate22222" class="form-control input-sm">
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Invoice No.</label>
       <input type="text" value="SI-000066" readonly name="invoiceno" id="invoiceno" class="form-control input-sm">
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Total Items</label>
       <input type="text" readonly name="hdnrowcnt" id="hdnrowcnt" value="0" class="form-control input-sm">
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Sub Total</label>
       <input type="text" readonly name="nGross" id="nGross" placeholder="0.00" class="form-control input-sm">
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Discount</label>
       <input type="text" name="discount" id="discount" value="0" onKeyUp="validate_discount(this.value)" class="form-control input-sm" onkeypress="return isNumberKey(event)" >
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">TOTAL AMOUNT</label>
       <input type="text" placeholder="0.00" readonly name="total_amount" id="total_amount" class="form-control input-sm">
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Reason for Discount</label>
       <select name="reason_dicount" id="reason_dicount" class="form-control input-sm">
           <option value="">- Reason for Discount -</option>
           <option value="64">Student</option>
           <option value="65">Senior Citizen</option>
           <option value="66">Sample Reason here</option>
           <option value="67">Person with Disablities</option>
           <option value="68">Management Decision</option>
           <option value="69">Below Poverty Line</option>
           <option value="70">Employee</option>
           <option value="71">Member</option>
       </select>
   </div>

   <div class="form-group">
       <label for="exampleInputEmail1">Remarks</label>
       <textarea placeholder="Remarks" class="form-control input-sm" name="remarks" id="remarks" rows="5"></textarea>
   </div>
</div>
</div>
</div>

<div class="col-md-9">
   <div class="nav-tabs-custom">
       <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1" data-toggle="tab"><strong>Billing List</strong></a></li>
    </ul>
    <div class="tab-content">
       <div class="tab-pane active" id="tab_1">

           <div class="alt2" dir="ltr" style="
           margin: 0px;
           padding: 0px;
           border: 0px solid #919b9c;
           width: 100%;
           height: 390px;
           text-align: left;
           overflow: auto">
           <table id="myTable" width="100%" cellpadding="2" cellspacing="2">
            <thead>
               <tr style="border-bottom:1px #999 solid; border-collapse:collapse">
                   <th width="3%">No.</th>
                   <th width="42%">Particular Name</th>
                   <th width="7%">Qty</th>
                   <th width="10%">Rate</th>
                   <th width="10%">Amount</th>
                   <th width="25%">Note</th>
                   <th width="3%"></th>
               </tr>
           </thead>
       </table>


   </div>
</div>

</div>
</div>
</div>

<div class="col-md-9">
   <div class="box box-primary">
       <div class="box-body">
           <a class="btn btn-app" href="http://demo-hms.eu5.org/app/pos/"><i class="fa fa-refresh"></i> Refresh</a>
           <a class="btn btn-app" data-toggle="modal" data-target="#doctorListModal"><i class="fa fa-user-md"></i> Doctor's Fee</a>
           <a class="btn btn-app" data-toggle="modal" data-target="#patientListModal"><i class="fa fa-user"></i> Patient</a>
           <a class="btn btn-app" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Item</a>
           <a href="#" class="btn btn-app" onClick="return getPatientMedication()"><i class="fa fa-hand-o-down"></i> 1-Click Billed</a>
           <button type="submit" class="btn btn-app"><i class="fa fa-save"></i> Save</button>
           <a class="btn btn-app" onClick="alert('Please save current transaction to make Payment');"><i class="fa fa-credit-card"></i> Payment</a>
           <!--<a class="btn btn-app" data-toggle="modal" data-target="#paymentModal"><i class="fa fa-credit-card"></i> Payment</a>-->
           <a class="btn btn-app" onClick="alert('Please save current transaction to print Invoice');"><i class="fa fa-print"></i> Print Invoice</a>
           <a class="btn btn-app" onClick="alert('Please save current transaction to print Receipt');"><i class="fa fa-print"></i> Print Receipt</a>


       </div>
   </div>
</div>
</div>
</section><!-- /.content -->
</form>

<script src="http://demo-hms.eu5.org/public/js/jquery.min.js"></script>
<script src="http://demo-hms.eu5.org/public/js/bootstrap.min.js" type="text/javascript"></script>     
<script src="http://demo-hms.eu5.org/public/js/AdminLTE/app.js" type="text/javascript"></script>

<!-- BDAY -->
<script src="http://demo-hms.eu5.org/public/datepicker/js/jquery-1.9.1.min.js"></script>
<script src="http://demo-hms.eu5.org/public/datepicker/js/bootstrap-datepicker.js"></script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Add Item</h4>
            </div>


            <div class="modal-body">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                           <td>Type</td>
                           <td>
                            <select name="bill_category" onChange="showBills(this.value);" id="bill_category" class="form-control input-sm" style="width: 100%;">
                               <option value="particular">Particular Bills</option>
                               <option value="medicine">Medicine Bills</option>
                           </select>	
                       </td>
                   </tr>
                   <tr>
                       <td>
                        <span id="particular">Paricular Category</span>
                        <span id="medicine" style="display: none">Medicine Category</span>
                    </td>
                    <td>
                        <select name="category" onChange="showDrugName(this.value);" id="category" class="form-control input-sm" style="width: 100%;" required>
                           <option value="">- Paricular Category -</option>
                           <option value="20">CARDIAC</option>
                           <option value="10">CLINICAL PATHOLOGY</option>
                           <option value="2">CONSULTANT</option>
                           <option value="17">CT SCAN</option>
                           <option value="27">DENTAL TREATMENT</option>
                           <option value="31">DHANU</option>
                           <option value="6">DRESSING</option>
                           <option value="8">HAEMATOLOGY</option>
                           <option value="15">HISTOPATHOLOGY</option>
                           <option value="5">INJECTIONS</option>
                           <option value="11">MICROBIOLOGY</option>
                           <option value="3">MISCELLANEOUS</option>
                           <option value="26">NEUROLOGY</option>
                           <option value="23">ONCOLOGY</option>
                           <option value="30">OPERATION THEATER</option>
                           <option value="28">PHYSIOTHERAPY</option>
                           <option value="29">PLASTIC SURGICAL PRO</option>
                           <option value="24">PROCEDURE CHARGES</option>
                           <option value="32">PSD</option>
                           <option value="21">PSYCHOLOGY TEST</option>
                           <option value="12">SEROLOGY</option>
                           <option value="22">SKIN & VD</option>
                           <option value="14">SPECIAL TESTS</option>
                           <option value="7">SURGICAL ASSISTANT</option>
                           <option value="13">TRANSFUSION MEDICINE</option>
                           <option value="18">ULTRASONOGRAPHY</option>
                           <option value="19">UROLOGY</option>
                           <option value="25">WARD SERVICES</option>
                           <option value="16">X -RAYS</option>
                       </select>

                       <select name="medicine_cat" onChange="showDrugList(this.value);" id="medicine_cat" class="form-control input-sm" style="width: 100%; display: none;" required>
                           <option value="">- Medicine Category -</option>
                           <option value="1">ANTI-ALLERGIC</option>
                           <option value="2">ANTI-ANXIETY</option>
                           <option value="4">ANTI-ARRHYTHMIA</option>
                           <option value="5">ANTI-ASTHMATIC</option>
                           <option value="6">ANTI-BACTERIAL</option>
                           <option value="7">ANTI-CHOLINERGICS</option>
                           <option value="8">ANTI-CHOLINESTERASES</option>
                           <option value="9">ANTI-HIV</option>
                           <option value="10">ANTI-INFECTIVE</option>
                           <option value="12">SDFGH</option>
                           <option value="13">THTHTYUYU</option>
                           <option value="14">CATEGORY</option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td>
                    <span id="particular_item">Paricular Item</span>
                    <span id="drug_name" style="display: none">Drug Name</span>
                </td>
                <td>
                    <span id="showCategories">
                       <select name="item" id="item" class="form-control input-sm" style="width: 100%;" required>
                          <option value="">- Paricular Item -</option>
                      </select>
                  </span>

                  <span id="showDrugListItem" style="display: none;">
                   <select name="item2" id="item2" class="form-control input-sm" style="width: 100%;" required>
                      <option value="">- Drug Name List -</option>
                  </select>
              </span>
          </td>
      </tr>
      <tr>
       <td>Qty</td>
       <td><input type="text" onkeypress="return isNumberKey(event)" name="qty" id="qty" value="1" placeholder="Qty" class="form-control input-sm" style="width: 100%;" required></td>
   </tr>
   <tr>
       <td>Rate</td>
       <td>
        <label id="showRate">
            <input type="text" onkeypress="return isNumberKey(event)" name="rate" id="rate" placeholder="rate" class="form-control input-sm" style="width: 100%;" required>
        </label>

        <label id="showDrugRate" style="display:none">
            <input type="text" onkeypress="return isNumberKey(event)" name="drugrate" id="drugrate" placeholder="rate" class="form-control input-sm" style="width: 100%;" required>
        </label>
    </td>
</tr>
<tr>
   <td>Note</td>
   <td><textarea name="note" id="note" placeholder="note" class="form-control input-sm" style="width: 100%;"></textarea></td>
</tr>

<tr>
   <td></td>
   <td>
   </td>
</tr>
</tbody>
</table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary" onClick="return addItem()">Add</button>
</div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.modal -->   

</body>
</html>