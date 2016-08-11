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
        <form>
          <div class="box">

            <div class="box-footer clearfix">

              <a href="?cancel" class="btn btn-default">Cancel</a>
              <button class="btn btn-primary" onclick="save()"><i class="fa fa-save"></i> Save</button>        
            </div>
            <div class="box-body table-responsive">
              <div class="nav-tabs-custom">
               <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
                <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
                <li><a href="#tab_3" data-toggle="tab">Case Information</a></li>
                <li><a href="#tab_4" data-toggle="tab">Life Style Information</a></li>
                <li><a href="#tab_5" data-toggle="tab">Contact Person</a></li>
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
             <tr>
               <td width="12%">Religion <font color="#FF0000">*</font></td>
               <td width="88%">
                <input type="text" name="religion" value="" id="religion" class="form-control input-sm" placeholder="Religion" style="width: 150px;" required />                                                        </td>
              </tr>
              <tr>
               <td width="12%">Blood Group </td>
               <td width="88%">
                 <select name="bloodGroup" id="bloodGroup" class="form-control input-sm" style="width: 125px;">
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
              <input type="text" name="address1" value="" id="address1" class="form-control input-sm" placeholder="Address1" style="width: 250px;" />
            </td>
          </tr>
          <tr>
           <td width="14%">Address2</td>
           <td width="86%">
            <input type="text" name="address2" value="" id="address2" class="form-control input-sm" placeholder="Address2" style="width: 250px;" /></td>
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
              <input type="text" name="tbNo" value="" id="tbNo" class="form-control input-sm" placeholder="Central  TB No" style="width: 250px;" /></td>
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

        <!--Start Of Tab4-->
        <div class="tab-pane" id="tab_4">
          <table cellpadding="3" cellspacing="3" width="100%">
            <tr>
             <td width="14%">Weight</td>
             <td width="86%"> 
              <input type="text" name="weight" value="" id="weight" class="form-control input-sm " placeholder="Weight" style="width: 75px;"/>
            </td>
          </tr>
          <tr>
           <td width="14%">Height</td>
           <td width="86%"> 
            <input type="text" name="height" value="" id="height" class="form-control input-sm " placeholder="Height" style="width: 75px;"/>
          </td>
        </tr>
        <tr>
         <td width="14%">BMI</td>
         <td width="86%"> 
          <input type="text" name="bmi" value="" id="bmi" class="form-control input-sm " placeholder="BMI" style="width: 75px;"/>
        </td>
      </tr>
      <tr>
       <td width="14%">FBS</td>
       <td width="86%"> 
        <input type="text" name="fbs" value="" id="fbs" class="form-control input-sm " placeholder="FBS" style="width: 75px;"/>
      </td>
    </tr>
    <tr>
     <td width="14%">Smoking</td>
     <td width="88%">
       <select name="smoking" id="smoking" class="form-control input-sm" style="width: 150px;">
         <option value="">- Smoking -</option>
         <option value="1" >Past</option>
         <option value="2" >Present</option>
         <option value="3" >None</option>
       </select>
     </td>
   </tr>
   <tr>
     <td width="14%">Alcholism</td>
     <td width="88%">
       <select name="alcholism" id="alcholism" class="form-control input-sm" style="width: 150px;">
         <option value="">- Alcholism -</option>
         <option value="1" >Past</option>
         <option value="2" >Present</option>
         <option value="3" >None</option>
       </select>
     </td>
   </tr>
   <tr>
     <td width="14%">Drug Use</td>
     <td width="88%">
       <select name="drugUse" id="drugUse" class="form-control input-sm" style="width: 150px;">
         <option value="">- Drug Use -</option>
         <option value="1" >Past</option>
         <option value="2" >Present</option>
         <option value="3" >None</option>
       </select>
     </td>
   </tr>
   <tr>
     <td width="14%">Residence</td>
     <td width="88%">
       <select name="residence" id="residence" class="form-control input-sm" style="width: 150px;">
         <option value="">- Residence -</option>
         <option value="1" >Permanent</option>
         <option value="2" >Temporary</option>
       </select>
     </td>
   </tr>
   <tr>
       <td width="14%">Occupation</td>
       <td width="86%"> 
        <input type="text" id="occupation" class="form-control input-sm " placeholder="Occupation" style="width: 75px;"/>
      </td>
    </tr>
   <tr>
     <td width="14%">Education Qualification</td>
     <td width="88%">
       <select name="education" id="education" class="form-control input-sm" style="width: 250px;">
         <option value="">- Education Qualification -</option>
         <option value="1" >No Formal Education</option>
         <option value="2" >Grade 1-5</option>
         <option value="3" >Grade 6-10</option>
         <option value="3" >O/L Passed</option>
         <option value="3" >Tertiary Education & above</option>
       </select>
     </td>
   </tr>
   <tr>
     <td width="14%">Living With Family</td>
     <td width="86%"> 
      <label class="radio-inline"><input type="radio" name="optlof" id="lofy">Yes</label>
      <label class="radio-inline"><input type="radio" name="optlof" id="lofn">No</label>
    </td>
  </tr>
  <tr>
   <td width="14%">Co-morbidies</td>
   <td width="86%">
    <label class="checkbox-inline"><input type="checkbox" id="dm" value="DM">DM</label>
    <label class="checkbox-inline"><input type="checkbox" id="copd" value="COPD">COPD</label>
    <label class="checkbox-inline"><input type="checkbox" id="ba" value="BA">BA</label>
    <label class="checkbox-inline"><input type="checkbox" id="hiv" value="HIV">HIV</label>
    <label class="checkbox-inline"><input type="checkbox" id="oth" value="other" onclick="showOther()">Other</label>
  </td>
</tr>
<tr id="otherId" hidden="true">
 <td width="14%">Please Specify</td>
 <td width="86%"> 
  <input type="text" name="other" id="other" class="form-control input-sm " placeholder="Specify" style="width: 250px;"/>
</td>
</tr>
</table>
</div>
<!--End Of Tab4-->

<!--Start Of Tab5-->
<div class="tab-pane" id="tab_5">
  <table cellpadding="3" cellspacing="3" width="100%">
    <tr>
     <td width="14%">Contact Person Name</td>
     <td width="86%"> 
      <input type="text" id="contactName" class="form-control input-sm " style="width: 250px;"/>
    </td>
  </tr>
  <tr>
   <td width="14%">Contact Person Address</td>
   <td width="86%"> 
    <textarea class="form-control" rows="6" id="contactAddress" style="width: 250px;"></textarea>
  </td>
</tr>
<tr>
 <td width="14%">Contact Person NIC</td>
 <td width="86%"> 
  <input type="text" id="contactNic" class="form-control input-sm " style="width: 250px;"/>
</td>
<tr>
 <td width="14%">Contact Person Telephone</td>
 <td width="86%"> 
  <input type="text" id="contactTel" class="form-control input-sm " style="width: 250px;"/>
</td>
</tr>
<tr>
 <td width="14%">Contact Person Mobile</td>
 <td width="86%"> 
  <input type="text" id="contactMobile" class="form-control input-sm " style="width: 250px;"/>
</td>
</tr>
</table>
</div>
<!--End Of Tab5-->

</div>
</div>
</div>
</div>
</form>
</div>
</div>
</section><!-- /.content -->
</div>