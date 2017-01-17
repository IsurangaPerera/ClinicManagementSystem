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
            <h3>&nbsp&nbspAdd Stock</h3>
          </div>

          <div class="box-content" style="text-align=center;">  
          </div>
          <div class="box-footer" id="tble_add_stock">

           <div class="form-group">
             <label for="p_code">Product Code</label>
             <input type="text" id="p_code" placeholder="Product Code" class="form-control input-sm"
             onchange="makeChange();"
                onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
           </div>

           <div class="form-group">
             <label for="p_name">Product Name</label>
             <input type="text" id="p_name" placeholder="Product Name" class="form-control input-sm">
           </div>

           <div class="form-group">
             <label for="exampleInputEmail1">Formulation</label>
             <input type="text" id="formula" placeholder="Formulation" class="form-control input-sm">
           </div>

           <div class="form-group">
             <label for="batch_no">Batch No.</label>
             <input type="text" placeholder="Batch No." id="batch_no" class="form-control input-sm">
           </div>

           <div class="form-group">
             <label for="quantity">Quantity</label>
             <input type="text" placeholder="Quantity" id="quantity" class="form-control input-sm">
           </div>

           <div class="form-group">
             <label for="expiry">Expiry Date</label>
             <input type="text" placeholder="Expiry" id="expiry" class="form-control input-sm">
           </div>

           <div class="form-group" hidden="true">
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
        <li class=""><a href="#tab_3" data-toggle="tab"><strong>Product Management</strong></a></li>
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
         <table id="myTable" width="100%" cellpadding="2" cellspacing="2" class="table table-striped">
          <thead>
           <tr style="border-bottom:1px #999 solid; border-collapse:collapse">
             <th>Date</th>
             <th>Product Code</th>
             <th>Product Name</th>
             <th>Formulation</th>
             <th>Batch No</th>
             <th>Quantity</th>
             <th>Expiry Date</th>
             <th hidden>Action</th>
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
     <table id="myTable" width="100%" cellpadding="2" cellspacing="2" class="table table-striped">
      <thead>
       <tr style="border-bottom:1px #999 solid; border-collapse:collapse">
         <th>Date</th>
         <th>Product Code</th>
         <th>Product Name</th>
         <th>Formulation</th>
         <th>Batch No</th>
         <th>Quantity</th>
         <th>Expiry Date</th>
         <th hidden>Action</th>
       </tr>
     </thead>
     <tbody id="expire_stock"></tbody>
   </table>
 </div>
</div>

<div class="tab-pane" id="tab_3">
 <div class="alt2" dir="ltr" style="
 margin: 0px;
 padding: 0px;
 border: 0px solid #919b9c;
 width: 100%;
 height: 390px;
 text-align: left;
 overflow: auto">
 <table id="myTable" width="100%" cellpadding="2" cellspacing="2" class="table table-striped">
  <thead>
   <tr style="border-bottom:1px #999 solid; border-collapse:collapse">
     <th>Product Code</th>
     <th>Product Name</th>
     <th>Brand Name</th>
     <th>Formulation</th>
     <th hidden>Action</th>
   </tr>
 </thead>
 <tbody id="product_item"></tbody>
</table>
</div>
</div>

</div>
</div>
</div>

<div class="col-md-9">
 <div class="box box-primary">
   <div class="box-body">
     <!--<a class="btn btn-app" href="#" onclick="refreshAll();"><i class="fa fa-refresh"></i> Refresh</a>-->
     <a class="btn btn-app" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Add Item</a>
     <a class="btn btn-app" data-toggle="modal" data-target="#myModalView"><i class="fa fa-hand-o-down"></i> View Item</a>
     <a class="btn btn-app" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i> Edit Stock</a>
     <!--<a class="btn btn-app" onclick="window.print()"><i class="fa fa-print"></i> Print</a>-->

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
        <div class='alert alert-success alert-dismissable' id="alert2" hidden><i class='fa fa-check'></i>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <span id="err_msg2"></span>
        </div>
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

<!-- START OF VIEW PRODUCT MODAL -->
<div class="modal fade" id="myModalView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">    

      <div class="modal-header">

        <div class='alert alert-success alert-dismissable' id="alert3" hidden><i class='fa fa-check'></i>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <span id="err_msg3"></span>
        </div>
        
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <br/>
        
        <table cell-padding="10px">
          <tr>
            <td>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Product Code" aria-describedby="addon" id="product_search">
                <span class="input-group-addon glyphicon glyphicon-search" id="addon"></span>
              </div>
            </td>
            <td>
              <button type="button" class="btn btn-primary" onClick="searchProduct()">Search</button>
            </td>
          </tr>
        </table>
      
      </div>

      <div class="modal-body">
        <table class="table table-hover">
          <tbody>
            <tr>
             <td>Product Name</td>
             <td>
              <input type="text" id="prod_names" class="form-control input-sm" style="width: 100%;" readonly>
            </td>
          </tr>
          <tr>
           <td>Product Code</td>
           <td>
            <input type="text" id="prod_codes" class="form-control input-sm" style="width: 100%;" readonly>
          </td>
        </tr>
        <tr>
         <td>Formulation</td>
         <td>
          <input type="text" id="prod_forms" class="form-control input-sm" style="width: 100%;" readonly>
        </td>
      </tr>
      <tr>
       <td>
        <span id="particular">Category</span>
      </td>
      <td>
       <input type="text" id="medicine_cats" class="form-control input-sm" style="width: 100%;" readonly>
     </td>
   </tr>
   <tr>
     <td>Note</td>
     <td><textarea name="note" id="notes" class="form-control input-sm" style="width: 100%;" readonly></textarea></td>
   </tr>

  <tr>
    <div class="col-xs-18 col-sm-6 col-md-4">
      <div class="thumbnail" align="middle">
        <div id="pimage" align="middle">
          <img src="http://placehold.it/140x100" alt="" align="middle">   
        </div>    
      </div>
    </div>
  </tr>

</tbody>
</table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- END OF VIEW PRODUCT MODAL -->  

<!--START OF STOCK EDIT MODAL-->
<div class="modal fade" id="myModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Update Stock</h4>
      </div>

      <div class="modal-body">
        <div class='alert alert-success alert-dismissable' id="alert2" hidden><i class='fa fa-check'></i>
          <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
          <span id="err_msg2"></span>
        </div>
        <table class="table table-hover">
          <tbody>
            <tr>
             <td>Product Name</td>
             <td>
              <input type="text" id="edit_name" placeholder="Name" class="form-control input-sm" style="width: 100%;">
            </td>
          </tr>
          <tr>
           <td>Product Code</td>
           <td>
            <input type="text" id="edit_code" placeholder="Code" class="form-control input-sm" style="width: 100%;">
          </td>
        </tr>
        <tr>
         <td>Batch NO</td>
         <td>
          <input type="text" id="edit_batch" placeholder="Batch No" class="form-control input-sm" style="width: 100%;" 
          onchange="makeChange2();"
                onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();">
        </td>
      </tr>
      <tr>
         <td>Quantity Used</td>
         <td>
          <input type="text" id="edit_quantity" placeholder="Quantity" class="form-control input-sm" style="width: 100%;">
        </td>
      </tr>
   <tr>
     <td>Note</td>
     <td><textarea name="note" id="edit_note" placeholder="note" class="form-control input-sm" style="width: 100%;"></textarea></td>
   </tr>
</tbody>
</table>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  <button type="button" class="btn btn-primary" onClick="updateProduct()">Save</button>
</div>

</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- END OF STOCK EDIT MODAL -->

<script type="text/javascript">
$(document).ready(function(){
  loadStock();
  loadExpiryStock();
  loadProductItem();
});

$( function() {
 $( "#expiry" ).datepicker({
  dateFormat: "yy-mm-dd"
});
});

</script>
<script type="text/javascript" src="../js/add_stock.js"></script>
<script type="text/javascript" src="../js/search_product.js"></script>