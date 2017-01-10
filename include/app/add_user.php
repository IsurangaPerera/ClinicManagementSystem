<section class="content-header">
    <h1>Add User</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">User Management</a></li>
        <li class="active">Add User</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
   <div class="row">
      <div class="col-md-12">
        <div>    
          <div class="box">

            <div class="box-footer clearfix">

                <a href="" class="btn btn-default">Cancel</a>
                <button class="btn btn-primary" onclick="saveData()" data-toggle="tooltip" title="add new patient"><i class="fa fa-save"></i> Save</button>

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
                       <td colspan="2">Required fields <font color="#FF0000">*</font></td>
                   </tr>
                   <tR>
                       <td colspan="2">

                       </td>
                   </tR>
                   <tr>
                       <td width="12%">NIC <font color="#FF0000">*</font></td>
                       <td width="88%"><input class="form-control input-sm" id="nic" type="text" style="width: 250px;" placeholder="National Identity Card" required ></td>
                   </tr>
                   <tr>
                       <td width="12%">Title </td>
                       <td width="88%">
                           <select id="title" class="form-control input-sm" style="width: 250px;" required>
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
                       <td width="12%">Last Name <font color="#FF0000">*</font></td>
                       <td width="88%">
                        <input type="text" id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" required />                                                        </td>
                    </tr>
                    <tr>
                       <td>First Name <font color="#FF0000">*</font></td>
                       <td>
                        <input type="text" id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 250px;" required />                                                        </td>
                    </tr>
                    <tr>
                       <td>Middle Name </td>
                       <td>
                        <input type="text" id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 250px;" required />                                                        </td>
                    </tr>
                    <tr>
                       <td>Birthday </td>
                       <td>
                        <input type="text" id="birthday" class="form-control input-sm" placeholder="Birthday" style="width: 250px;" required /> 
                    </td>
                </tr>
                <tr>
                   <td width="12%">Gender</td>
                   <td width="88%">
                       <select id="gender" class="form-control input-sm" style="width: 250px;">
                           <option value="">- Gender -</option>
                           <option value="Male"> Male </option>
                           <option value="Female"> Female </option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td width="12%">Civil Status </td>
                   <td width="88%">
                       <select id="civil_status" class="form-control input-sm" style="width: 250px;">
                           <option value="">- Civil Status -</option>
                           <option value="6" >Divorced</option>
                           <option value="5" >Legal Seperated</option>
                           <option value="4" >Married</option>
                           <option value="3" >Single</option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td width="12%">Department <font color="#FF0000">*</font></td>
                   <td width="88%">
                       <select id="department" class="form-control input-sm" style="width: 250px;" required>
                           <option value="">- Department -</option>
                           <option value="5" >OPD</option>
                           <option value="38" >TB</option>
                       </select>
                   </td>
               </tr>
               <tr>
                   <td width="12%">User Role <font color="#FF0000">*</font></td>
                   <td width="88%">
                       <select id="user_role" class="form-control input-sm" style="width: 250px;" required>
                           <option>- User Role -</option>
                           <option>Administrator</option>
                           <option>Laboratory Assistant</option>
                           <option>Sputum Room Clerk</option>
                           <option>TB Nurse</option>
                           <option>OPD Doctor</option>
                           <option>Receptionist</option>
                           <option>Pharmacist</option>
                           <option>Bleeding Room Nurse</option>
                           <option>Radiologist</option>
                           <option>Consultant</option>
                           <option>Specialist</option>
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
                <input type="text" id="address1" class="form-control input-sm" placeholder="Address1" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
               <td width="14%">Address2</td>
               <td width="86%"> 
                <input type="text" id="address2" class="form-control input-sm" placeholder="Address2" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
               <td width="14%">City</td>
               <td width="86%"> 
                <input type="text" id="city" class="form-control input-sm" placeholder="City" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
               <td width="14%">Mobile No.</td>
               <td width="86%"> 
                <input type="text" id="mobile" class="form-control input-sm" placeholder="Mobile No" style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
               <td width="14%">Phone No.</td>
               <td width="86%">
                <input type="text" id="phone" class="form-control input-sm" placeholder="Phone No." style="width: 250px;" />                                                        </td>
            </tr>
            <tr>
               <td width="14%">Email Address </td>
               <td width="86%"> 
                <input type="text" id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;" required />                                                        </td>
            </tr>
            <tr>
               <td width="14%">Username <font color="#FF0000">*</font></td>
               <td width="86%"> 
                   <input type="text" id="username" class="form-control input-sm" placeholder="Username" style="width: 250px;" required>
               </td>
           </tr>
           <tr>
            <td width="14%">Password <font color="#FF0000">*</font></td>
               <td width="86%"> 
                   <input type="text" id="password" class="form-control input-sm" placeholder="Password" style="width: 250px;" required>
               </td>
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