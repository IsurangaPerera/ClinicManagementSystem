<style>
.dash_board, .dash_board_non, .search_patient, .manage_appointments{
  display: none;
}

</style>

<div class="patient_registration">
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <form role="form" method="post" action="" onsubmit="return validate()">
          <div class="box">

            <div class="box-footer clearfix">

              <a href="http://demo-hms.eu5.org/app/patient" class="btn btn-default">Cancel</a>
              <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>        
            </div>
            <div class="box-body table-responsive">
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
                 <tR>
                   <td colspan="2">

                   </td>
                 </tR>
                 <input type="hidden" name="userID2" value="60">
                 <tr>
                   <td width="12%">Patient ID</td>
                   <td width="88%"><input class="form-control input-sm" name="patientID" id="patientID" type="text" style="width: 100px;" required readonly value="000060"></td>
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
                   <td width="12%">Last Names <font color="#FF0000">*</font></td>
                   <td width="88%">
                    <input type="text" name="lastname" value="" id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" required />                                                        </td>
                  </tr>
                  <tr>
                   <td>First Name <font color="#FF0000">*</font></td>
                   <td>
                    <input type="text" name="firstname" value="" id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 250px;" required />                                                        </td>
                  </tr>
                  <tr>
                   <td>Middle Name <font color="#FF0000">*</font></td>
                   <td>
                    <input type="text" name="middlename" value="" id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 250px;" required />                                                        </td>
                  </tr>
                  <tr>
                   <td>Father's Name <font color="#FF0000">*</font></td>
                   <td>
                    <input type="text" name="fathers_name" value="" id="fathers_name" class="form-control input-sm" placeholder="Fathers Name" style="width: 250px;" required /> 
                  </td>
                </tr>
                <tr>
                 <td>Birthday <font color="#FF0000">*</font></td>
                 <td>
                  <input type="text" name="birthday" value="" id="birthday" class="form-control input-sm" placeholder="Birthday" style="width: 150px;" required /> 
                </td>
              </tr>
              <tr>
               <td>Birth Place</td>
               <td>
                <input type="text" name="birthplace" value="" id="birthplace" class="form-control input-sm" placeholder="Birth Place" style="width: 380px;" />                                                        </td>
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
              <input type="text" name="noofhouse" value="" id="noofhouse" class="form-control input-sm" placeholder="Address1" style="width: 250px;" />                                                        <input type="hidden" name="brgy" value="" />
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
            <input type="text" name="province" value="" id="province" class="form-control input-sm" placeholder="City" style="width: 250px;" />                                                        </td>
          </tr>
          <tr>
           <td width="14%">Phone No (Office)</td>
           <td width="86%">
            <input type="text" name="phone_office" value="" id="phone_office" class="form-control input-sm" placeholder="Phone No (Office)" style="width: 250px;" />                                                        </td>
          </tr>
          <tr>
           <td width="14%">Phone No (Home)</td>
           <td width="86%">
            <input type="text" name="phone" value="" id="phone" class="form-control input-sm" placeholder="Phone No (Work)" style="width: 250px;" />                                                        </td>
          </tr>
          <tr>
           <td width="14%">Phone No (Mobile)</td>
           <td width="86%"> 
            <input type="text" name="mobile" value="" id="mobile" class="form-control input-sm" placeholder="Phone No (Mobile)" style="width: 250px;" />                                                        </td>
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
</form>
</div>
</section><!-- /.content -->
</div>