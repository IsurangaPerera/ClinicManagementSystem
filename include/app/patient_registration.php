
<section class="content-header" >
  <h1>Patient Registration</h1> 
</section>

<div class="patient_registration">
  <div class='alert alert-success alert-dismissable' id="alert" hidden><i class='fa fa-check'></i>
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
    <span id="err_msg"></span>
  </div>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div>
          <div class="box">

            <div class="box-footer clearfix">

              <a href="?cancel" class="btn btn-default">Cancel</a>
              <button class="btn btn-primary" onclick="saveData()"><i class="fa fa-save"></i> Save</button>        
            </div>
            <div class="box-body table-responsive">

              <div class='alert alert-danger alert-dismissable' hidden="true" id="alert"><i class='fa fa-check'></i>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <span id="err_msg"></span></div> 

                <div class="nav-tabs-custom">
                 <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                  <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                </ul>
                <div class="tab-content">
                 <div class="tab-pane active" id="tab_1">
                   <table cellpadding="3" cellspacing="3" width="100%">
                    <tr>
                     <td colspan="2">Required fields  <font color="#FF0000">*</font></td>
                   </tr>
                   <tR9
                   <td colspan="2">

                   </td>
                 </tR>
                 <tr>
                   <td width="12%">Patient ID</td>
                   <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 250px;" required readonly></td>
                   <td rowspan="8" valign="top">
                    
                    <span id="widget" class="widget">
                    <div class="panel panel-default" style="width:100%" hidden id="barimg">
                      <div class="panel-heading" style="text-align: center; height; 80%;">
                        <h4><em>Central Chest Clinic</em></h4>
                        <h5><em>Baseline Road, Colombo 08</em></h5>
                        <svg id="code128" style="height: 80px; width: 300px;"></svg>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
                      </div>
                    </span>

                    </td>  
                  </tr>
                  <tr>
                   <td width="12%">NIC</td>
                   <td width="88%"><input class="form-control input-sm" name="nic" id="nic" type="text" style="width: 250px;" placeholder="NIC" value=""></td>
                 </tr>
                 <tr>
                   <td width="12%">Title <font color="#FF0000">*</font></td>
                   <td width="88%">
                     <select name="title" id="title" class="form-control input-sm" style="width: 250px;" required>
                       <option value="">- Title -</option>
                       <option value="10" >Dr.</option>
                       <option value="37" >Dra.</option>
                       <option value="7" >Mr.</option>
                       <option value="9" >Mrs.</option>
                       <option value="8" >Ms.</option>
                     </select>

                   </td>
                 </tr>
                 <tr>
                  <td width="12%">Last Names </td>
                  <td width="88%">
                    <input type="text" name="lastname" value="" id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" />                                                        </td>
                  </tr>
                  <tr>
                   <td>First Name <font color="#FF0000">*</font></td>
                   <td>
                    <input type="text" name="firstname" value="" id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 250px;" required />                                                        </td>
                  </tr>
                  <tr>
                   <td>Middle Name </td>
                   <td>
                    <input type="text" name="middlename" value="" id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 250px;" />                                                        </td>
                  </tr>
                  <tr>
                   <td>Birthday <font color="#FF0000">*</font></td>
                   <td>
                    <input type="text" name="birthday" value="" id="cFrom" class="form-control input-sm" placeholder="Birthday" style="width: 250px;" required /> 
                  </td>
                </tr>
                <tr>
                 <td>Birth Place</td>
                 <td>
                  <input type="text" name="birthplace" value="" id="birthplace" class="form-control input-sm" placeholder="Birth Place" style="width: 250px;" />                                                        </td>
                </tr>
                <tr>
                 <td width="12%">Gender<font color="#FF0000">*</font></td>
                 <td width="88%">
                   <select name="gender" id="gender" class="form-control input-sm" style="width: 250px;">
                     <option value="">- Gender -</option>
                     <option value="2" >Female</option>
                     <option value="1" >Male</option>
                   </select>
                 </td>
               </tr>
               <tr>
                 <td width="12%">Civil Status</td>
                 <td width="88%">
                   <select name="civil_status" id="civil_status" class="form-control input-sm" style="width: 250px;">
                     <option value="">- Civil Status -</option>
                     <option value="6" >Divorced</option>
                     <option value="5" >Legal Seperated</option>
                     <option value="4" >Married</option>
                     <option value="3" >Single</option>
                   </select>
                 </td>
               </tr>
               <tr>
                 <td width="12%">Religion</td>
                 <td width="88%">
                  <input type="text" name="religion" value="" id="religion" class="form-control input-sm" placeholder="Religion" style="width: 250px;" required />                                                        </td>
                </tr>
                <tr>
                 <td width="12%">Blood Group </td>
                 <td width="88%">
                   <select name="bloodGroup" id="bloodGroup" class="form-control input-sm" style="width: 250px;">
                     <option value="">- Blood Group -</option>
                     <option value="31" >A+</option>
                     <option value="32" >A-</option>
                     <option value="35" >AB+</option>
                     <option value="36" >AB-</option>
                     <option value="33" >B+</option>
                     <option value="34" >B-</option>
                     <option value="29" >O+</option>
                     <option value="30" >O-</option>
                   </select>
                 </td>
               </tr>
             </table>
           </div>
           <div class="tab-pane" id="tab_2">
             <table cellpadding="3" cellspacing="3" width="100%">
              <tr>
               <td colspan="2"></td>
             </tr>
             <tr>
               <td width="14%">Address1</td>
               <td width="86%">
                <input type="text" name="address1" value="" id="address1" class="form-control input-sm" placeholder="Address1" style="width: 250px;" />                                                        <input type="hidden" name="brgy" value="" />
              </td>
            </tr>
            <tr>
             <td width="14%">Address2</td>
             <td width="86%">
              <input type="text" name="address2" value="" id="address2" class="form-control input-sm" placeholder="Address2" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
             <td width="14%">City</td>
             <td width="86%"> 
              <input type="text" name="city" value="" id="city" class="form-control input-sm" placeholder="City" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
             <td width="14%">Phone No (Office)</td>
             <td width="86%">
              <input type="text" name="phone_office" value="" id="phone_office" class="form-control input-sm" placeholder="Phone No (Office)" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
             <td width="14%">Phone No (Home)</td>
             <td width="86%">
              <input type="text" name="phone_home" value="" id="phone_home" class="form-control input-sm" placeholder="Phone No (Work)" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
             <td width="14%">Phone No (Mobile)</td>
             <td width="86%"> 
              <input type="text" name="phone_mobile" value="" id="phone_mobile" class="form-control input-sm" placeholder="Phone No (Mobile)" style="width: 250px;" />                                                        </td>
            </tr>

            <tr>
             <td width="14%">Email Address</td>
             <td width="86%"> 
              <input type="text" name="email" value="" id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;" />                                                        </td>
            </tr>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</section><!-- /.content -->

<div id="patients" hidden>
  <div class="" >
    <span >Central Chest Clinic, Borella</span>
    <img id="printbcode" class="bbcode" hidden="true">
  </div>
</div>

<script type="text/javascript">
flag1 = false;
flag2 = false;

$( "#cFrom" ).change(function() {
  flag1 = true;
  checkFlag();
});
$( "#gender" ).change(function() {
  flag2 = true;
  checkFlag();
});

function checkFlag(){
  if(flag1 && flag2){
    id = $("#cFrom").val().trim();
    gender = $("#gender option:selected").html().trim();
    generateId(id, gender);
  } 
}
</script>

<script type="text/javascript">

$( function() {
  $( "#cFrom" ).datepicker({
    dateFormat: "yy-mm-dd"
  });
});

</script>
</div>