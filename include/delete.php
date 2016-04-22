<div class="my_profile">
    <section class="content">


     <div class="row">
      <div class="col-md-12">
        <form role="form" method="post" action="http://demo-hms.eu5.org/app/user/edit" onSubmit="return confirm('Are you sure you want to save?');">    
          <div class="box">

            <div class="box-footer clearfix">

                <a href="http://demo-hms.eu5.org/app/user" class="btn btn-default">Back</a>

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
                         <td colspan="2"></td>

                     </tr>
                     <tR>
                         <td colspan="2">

                         </td>
                     </tR>
                     <tr>
                         <td width="18%">User ID</td>
                         <td width="41%"><input class="form-control input-sm" name="userid" id="userid" type="text" style="width: 100px;" required readonly value="00001"></td>
                         <td width="41%" rowspan="4" valign="top" align="center">
                            <img src="http://demo-hms.eu5.org/public/user_picture/jayson1.png" class="img-rounded" width="150" height="150">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>             
                    </tr>
                    <tr>
                     <td width="18%">Title</td>
                     <td width="41%">
                         <input type="text" name="title" value="" id="title" class="form-control input-sm" placeholder="Title" style="width: 100px;" required readonly>          
                     </td>
                 </tr>
                 <tr>
                     <td width="18%">Last Name</td>
                     <td width="41%">
                        <input type="text" name="lastname" value="Administration" readonly id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 250px;" required />                                                        </td>
                    </tr>
                    <tr>
                     <td>First Name</td>
                     <td>
                        <input type="text" name="firstname" value="Admin" readonly id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 250px;" required />                                                        </td>
                    </tr>
                    <tr>
                     <td>Middle Name</td>
                     <td>
                        <input type="text" name="middlename" value="A." readonly id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 250px;" required />                                                        </td>
                    </tr>
                    <tr>
                     <td>Birthday</td>
                     <td>
                        <input type="text" name="birthday" value="1989-09-27" readonly id="birthday" class="form-control input-sm" placeholder="Birthday" style="width: 150px;" required /> 
                    </td>
                </tr>
                <tr>
                 <td>Birth Place</td>
                 <td>
                    <input type="text" name="birthplace" value="" readonly id="birthplace" class="form-control input-sm" placeholder="Birth Place" style="width: 380px;" />                                                        </td>
                </td>
            </tr>

            <tr>
             <td width="18%">Gender</td>
             <td width="41%">
                <input type="text" name="gender" value="" id="gender" class="form-control input-sm" placeholder="Gender" style="width: 100px;" readonly>       
            </td>
        </tr>
        <tr>
         <td width="18%">Civil Status</td>
         <td width="41%">
             <input type="text" name="civil_status" value="" id="civil_status" class="form-control input-sm" placeholder="Civil Status" style="width: 140px;" readonly>         
         </td>
     </tr>
     <tr>
         <td width="18%">Department</td>
         <td width="41%">
             <input type="text" name="department" value="" id="department" class="form-control input-sm" style="width: 200px;" placeholder="Department" required readonly>          
         </td>
     </tr>
     <tr>
         <td width="18%">Designation</td>
         <td width="41%">
             <input type="text" name="designation" value="" id="designation" class="form-control input-sm" placeholder="Designation" style="width: 200px;" required readonly>         
         </td>
     </tr>
     <tr>
         <td width="18%">User Role</td>
         <td width="41%">
             <input type="text" name="user_role" value="" id="user_role" class="form-control input-sm" placeholder="User Role" style="width: 200px;" required readonly>          
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
     <td width="14%">No. of House</td>
     <td width="86%">
        <input type="text" name="noofhouse" value="Blk69 Lot16" readonly id="noofhouse" class="form-control input-sm" placeholder="No. of House" style="width: 250px;" />                                                        </td>
    </tr>
    <tr>
     <td width="14%">Brgy./Subd.</td>
     <td width="86%"> 
        <input type="text" name="brgy" value="Buklod Bahayan Subd. Tartaria" readonly id="brgy" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;" />                                                        </td>
    </tr>
    <tr>
     <td width="14%">City/Province</td>
     <td width="86%"> 
        <input type="text" name="province" value="Silang Cavite" readonly id="province" class="form-control input-sm" placeholder="City/Province" style="width: 250px;" />                                                        </td>
    </tr>
    <tr>
     <td width="14%">Mobile No.</td>
     <td width="86%"> 
        <input type="text" name="mobile" value="09124682414" readonly id="mobile" class="form-control input-sm" placeholder="Mobile No" style="width: 250px;" />                                                        </td>
    </tr>
    <tr>
     <td width="14%">Phone No.</td>
     <td width="86%">
        <input type="text" name="phone" value="049-3020-499" readonly id="phone" class="form-control input-sm" placeholder="Phone No." style="width: 250px;" />                                                        </td>
    </tr>
    <tr>
     <td width="14%">Email Address</td>
     <td width="86%"> 
        <input type="text" name="email" value="adminadmin@yahoo.com" readonly id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;" required />                                                        </td>
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