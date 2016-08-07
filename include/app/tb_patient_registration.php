<?php
require('hidden_right.php');
?>

<section class="content-header" >
  <h1>TB Patient Registration</h1> 
</section>

<style>
.tb_patient_registration{
  display: block;
}
</style>

<div class="tb_patient_registration">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <form role="form" method="post" action="" onsubmit="return validate()">
          <div class="box">

            <div class="box-footer clearfix">

              <a href="?cancel" class="btn btn-default">Cancel</a>
              <button class="btn btn-primary" name="submit" id="submit" type="submit"><i class="fa fa-save"></i> Save</button>        
            </div>
            <div class="box-body table-responsive">
              <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                <li><a href="#tab_3" data-toggle="tab">TB Information</a></li>
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
               <input type="hidden" name="userID2" value="60">
               <tr>
                 <td width="12%">Patient ID</td>
                 <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 100px;" required readonly value="19"></td>
               </tr>
               <tr>
                 <td width="12%">NIC</td>
                 <td width="88%"><input class="form-control input-sm" name="nic" id="nic" type="text" style="width: 100px;" placeholder="NIC" value=""></td>
               </tr>
               <tr>
                 <td width="12%">Title <font color="#FF0000">*</font></td>
                 <td width="88%">
                   <select name="title" id="title" class="form-control input-sm" style="width: 100px;" required>
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
                  <input type="text" name="birthday" value="" id="cFrom" class="form-control input-sm" placeholder="mm/dd/yyyy" style="width: 150px;" required /> 
                </td>
              </tr>
              <tr>
               <td width="12%">Gender</td>
               <td width="88%">
                 <select name="gender" id="gender" class="form-control input-sm" style="width: 100px;">
                   <option value="">- Gender -</option>
                   <option value="2" >Female</option>
                   <option value="1" >Male</option>
                 </select>
               </td>
             </tr>
             <tr>
               <td width="12%">Civil Status</td>
               <td width="88%">
                 <select name="civil_status" id="civil_status" class="form-control input-sm" style="width: 140px;">
                   <option value="">- Civil Status -</option>
                   <option value="6" >Divorced</option>
                   <option value="5" >Legal Seperated</option>
                   <option value="4" >Married</option>
                   <option value="3" >Single</option>
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
      <!--Start Of Tab3-->
      <div class="tab-pane" id="tab_3">
      <table cellpadding="3" cellspacing="3" width="100%">
        <tr>
          <td width="14%">Central Tb Reg. No.</td>
          <td width="86%"> 
            <input type="text" name="tbNo" value="" id="fileNo" class="form-control input-sm" placeholder="Central  TB No" style="width: 250px;" /></td>
          </tr>
          <tr>
           <td width="14%">File No.</td>
           <td width="86%"> 
            <input type="text" name="fileNo" value="" id="fileNo" class="form-control input-sm" placeholder="File No" style="width: 250px;" /></td>
          </tr>
          <tr>
           <td width="14%">Date Of Notification</td>
           <td width="86%"> 
            <input type="text" name="don" value="" id="don" class="form-control input-sm" placeholder="mm/dd/yyyy" style="width: 250px;" /></td>
          </tr>
          <tr>
           <td width="14%">Nature Of Case</td>
           <td width="88%">
             <select name="noc" id="noc" class="form-control input-sm" style="width: 140px;">
               <option value="">- Nature Of Case-</option>
               <option value="1" >New Case</option>
               <option value="2" >Relapse</option>
             </select>
           </td>
         </tr>
         <tr>
           <td width="14%">Type Of TB</td>
           <td width="88%">
             <select name="tob" id="tob" class="form-control input-sm" style="width: 150px;">
               <option value="">- Type Of TB -</option>
               <option value="1" >Pulmonary Tuberculosis</option>
               <option value="2" >Extrapulmonary Tuberculosis</option>
             </select>
           </td>
         </tr>
         <tr>
           <td width="14%">TB Treatement Started On</td>
           <td width="86%"> 
            <input type="text" name="startedOn" value="" id="startedOn" class="form-control input-sm" placeholder="mm/dd/yyyy" style="width: 250px;" /></td>
          </tr>
          <tr>
           <td width="14%">Tb Treatment Completed On</td>
           <td width="86%"> 
            <input type="text" name="completedOn" value="" id="completedOn" class="form-control input-sm" placeholder="mm/dd/yyyy" style="width: 250px;" /></td>
          </tr>
       </table>
     </div>
     <!--End Of Tab3-->


   </div>
 </div>
</div>
</div>
</div>
</form>
</div>
</section><!-- /.content -->
</div>