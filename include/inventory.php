
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Central Chest Clinic</title>
  <meta name="robots" content="noindex">
  <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

  <link rel="stylesheet"href="../css/bootstrap/dist/css/bootstrap.min.css" type="text/css"/>
  <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../css/ionicons.css" type="text/css" />
  <link rel="stylesheet" href="../css/AdminLTE.css" type="text/css" />
  <link rel="stylesheet" href="../css/style.css" type="text/css" />
  <link rel="stylesheet" href="../css/dataTables.bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="../css/alertify.min.css"/>
  <link rel="stylesheet" href="../css/default.min.css"/>
  <link rel="stylesheet" href="../css/morris.css">
  <link rel="stylesheet" href="../css/jquery-ui.css">
  
  <script type="text/javascript" src="../jquery/alertify.min.js"></script>
  <script type="text/javascript" src="../js/barcode.min.js"></script>
  <script type="text/javascript" src="../jquery/jquery.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../css/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../jquery/raphael-min.js"></script>
  <script type="text/javascript" src="../jquery/morris.min.js"></script>    
  <script type="text/javascript" src="../js/app.js"></script>
  <script type="text/javascript" src="../js/date.js"></script>
  <script type="text/javascript" src="../js/mouseover_popup.js"></script>
  <script type="text/javascript" src="../jquery/jquery-ui.js"></script>

</head>   		
<body>

  <header class="header" style="background: url('../images/header_bar.jpg') repeat-x; background-size: 100% 100%; border-bottom:1px solid #CCC">
    <a href="#" class="logo">
      <!-- Add the class icon to your logo image or logo icon to add the margining -->
      <div class="logo-pms"><img src="../images/logo.png" height="40"></div>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation" style="background: url('../images/header_bar_02.jpg') repeat-x; background-size: 100% 100%; border-bottom:1px solid #CCC">
      <!-- Sidebar toggle button-->
      <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="logo2"> Healthcare Management System</div>

</header>  

<form method="post" action="http://demo-hms.eu5.org/app/billing/save_invoice" onSubmit="return validate_form();">
    <input type="hidden" name="patient" id="patient">

    <section class="content">

       <div class="row">
          <div class="col-md-3">
           <div class="box box-primary">
            <div class="box-header">
                <h3>Add Stock</h3>
            </div>

            <div class="box-content" style="text-align=center;">  
           </div>
           <div class="box-footer">

               <div class="form-group">
                   <label for="p_code">Product Code</label>
                   <input type="text" id="p_code" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="p_name">Product Name</label>
                   <input type="text" id="p_name" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="exampleInputEmail1">Formulation</label>
                   <input type="text" id="formula" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="dose">Dosage</label>
                   <input type="text" id="dose" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="batch_no">Batch No.</label>
                   <input type="text" placeholder="6789LO" id="batch_no" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="quantity">Quantity</label>
                   <input type="text" placeholder="6789LO" id="quantity" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="expiry">Expiry</label>
                   <input type="text" placeholder="6789LO" id="expiry" class="form-control input-sm">
               </div>

               <div class="form-group">
                   <label for="exampleInputEmail1">Remarks</label>
                   <textarea placeholder="Remarks" class="form-control input-sm" name="remarks" id="remarks" rows="5"></textarea>
               </div>
           </div>

           <div class="box-footer">
            <button type="button" class="btn btn-default" style="width:100px;">Reset</button>
            <button type="button" class="btn btn-primary" style="width:100px;" onclick="saveStock()">Save</button>
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
                   <th>Date</th>
                   <th>Product Code</th>
                   <th>Product Name</th>
                   <th>Dosage</th>
                   <th>Batch No</th>
                   <th>Quantity</th>
                   <th>Expiry</th>
                   <th>Action</th>
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

<script type="text/javascript">
  /*$(document).ready(function(){
    loadStock();
});*/

$( function() {
 $( "#expiry" ).datepicker({
    dateFormat: "yy-mm-dd"
});
});

</script>

</body>
</html>