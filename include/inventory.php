
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
  <link rel="stylesheet" href="../css/jasny.min.css">
  
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
  <script type="text/javascript" src="../js/jasny.min.js"></script>

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

    <form>
      <input type="hidden" name="patient" id="patient">

      <section class="content">

       <div class="row">
        <div class="col-md-3">
         <div class="box box-primary">
          <div class="box-header">
            <div class='alert alert-danger alert-dismissable' hidden="true" id="alert"><i class='fa fa-check'></i>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <span id="err_msg"></span></div>
              <h3>Add Stock</h3>
            </div>

            <div class="box-content" style="text-align=center;">  
            </div>
            <div class="box-footer" id="tble_add_stock">

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
          <li class="active"><a href="#tab_1" data-toggle="tab"><strong>Current Stock</strong></a></li>
          <li class=""><a href="#tab_2" data-toggle="tab"><strong>Expired Stock</strong></a></li>

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
               <th>Formulation</th>
               <th>Dosage</th>
               <th>Batch No</th>
               <th>Quantity</th>
               <th>Expiry</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody id="tble_stock"></tbody>
         </table>
       </div>
     </div>

     <div class="tab-pane" id="tab_2">
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
           <th>Formulation</th>
           <th>Dosage</th>
           <th>Batch No</th>
           <th>Quantity</th>
           <th>Expiry</th>
           <th>Action</th>
         </tr>
       </thead>
       <tbody id="expire_stock"></tbody>
     </table>
   </div>
 </div>

</div>
</div>
</div>

<div class="col-md-9">
 <div class="box box-primary">
   <div class="box-body">
     <a class="btn btn-app" href="#"><i class="fa fa-refresh"></i> Refresh</a>
     <a class="btn btn-app" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Item</a>
     <a href="#" class="btn btn-app"><i class="fa fa-hand-o-down"></i> View Item</a>
     <a class="btn btn-app"><i class="fa fa-print"></i> Print</a>

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
             <td>Product Name</td>
             <td>
              <input type="text" id="prod_name" placeholder="Name" class="form-control input-sm" style="width: 100%;">
            </td>
          </tr>
          <tr>
           <td>Product Code</td>
           <td>
            <input type="text" id="prod_code" placeholder="Code" class="form-control input-sm" style="width: 100%;">
          </td>
        </tr>
        <tr>
         <td>Formulation</td>
         <td>
          <input type="text" id="prod_form" placeholder="Formulation" class="form-control input-sm" style="width: 100%;">
        </td>
      </tr>
      <tr>
       <td>
        <span id="particular">Category</span>
      </td>
      <td>
       <select id="medicine_cat" class="form-control input-sm" style="width: 100%;" required>
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
     <td>Note</td>
     <td><textarea name="note" id="note" placeholder="note" class="form-control input-sm" style="width: 100%;"></textarea></td>
   </tr>

   <tr>
     <td>Image Upload</td>
     
     <td>
      <div class="fileinput fileinput-new" data-provides="fileinput">
        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
        <div>
          <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" id="prod_image" name="newfile"></span>
          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
        </div>
      </div>   
    </td>
  
  </tr>
</tbody>
</table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" onClick="addProduct()">Add</button>
</div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>

<!-- /.modal -->   

<script type="text/javascript">
$(document).ready(function(){
  loadStock();
  loadExpiryStock();
});

$( function() {
 $( "#expiry" ).datepicker({
  dateFormat: "yy-mm-dd"
});
});

</script>
<script type="text/javascript" src="../js/add_stock.js"></script>

</body>
</html>