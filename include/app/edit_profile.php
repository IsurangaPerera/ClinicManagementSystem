<?php
require('hidden_right.php');
?>

<style>
.edit_profile{
  display: block;
}
</style>

<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/include/config/query.php");
$make_query = new Query();
$row = $make_query->getUserDetails();
$title = $row['title'];
$firstname = $row['firstname'];
$middlename =  $row['middlename'];
$lastname = $row['lastname'];
$gender = $row['gender'];
$civilstatus = $row['civilstatus'];
$designation = $row['designation'];
$department = $row['department'];
$birthdate = $row['birthdate'];
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$email = $row['email'];
$phone_mobile = $row['phone_mobile'];
$phone_home = $row['phone_home'];
$nic = $row['NIC'];
?>

<div class="edit_profile">
  <section class="content">
   <div class="row">
    <div class="col-md-12">
      <form role="form" method="post" action="config/user_profile_update.php" onSubmit="return confirm('Are you sure you want to save?');">    
        <input class="form-control input-sm" name="userid" id="userid" type="hidden" style="width: 100px;" required readonly value="00010">
        <div class="box">

         <div class="box-footer clearfix">

          <button class="btn btn-primary" name="btnSubmit" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>

        </div>


        <div class="box-body table-responsive">


          <div class="nav-tabs-custom">
           <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Personal Information</a></li>
            <li><a href="#tab_2" data-toggle="tab">Contact Information</a></li>
            <li><a href="#tab_3" data-toggle="tab">Profile Picture</a></li>
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
               <td width="18%">National ID</td>
               <td width="41%"><input class="form-control input-sm" name="userid" id="userid" type="text" style="width: 100px;" readonly required value="<?php echo $nic; ?>" /></td>
               <td width="41%" rowspan="4" valign="top" align="center">
                <img src="<?php echo "../../images/$nic"; ?>" class="img-rounded" width="150" height="150" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </td>             
            </tr>
            <tr>
             <td width="18%">title</td>
             <td width="41%">
               <input type="text" name="title" value="<?php echo $title; ?>" id="title" class="form-control input-sm" placeholder="Title" style="width: 100px;" required />          
             </td>
           </tr>
           <tr>
             <td width="18%">First Name</td>
             <td width="41%">
               <input type="text" name="firstname" value="<?php echo $firstname; ?>" id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 200px;" required />          
             </td>
           </tr>
           <tr>
             <td width="18%">Middle Name</td>
             <td width="41%">
               <input type="text" name="middlename" value="<?php echo $middlename; ?>" id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 200px;" required />          
             </td>
           </tr>
           <tr>
             <td width="18%">Last Name</td>
             <td width="41%">
               <input type="text" name="lastname" value="<?php echo $lastname; ?>" id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 200px;" required />          
             </td>
           </tr>
           <tr>
             <td>Birthdate</td>
             <td>
              <input type="text" name="birthdate" value="<?php echo $birthdate; ?>" id="birthdate" class="form-control input-sm" placeholder="Birthday" style="width: 100px;" required /> 
            </td>
          </tr>
          <tr>
           <td width="18%">Gender</td>
           <td width="41%">
            <input type="text" name="gender" id="gender" value="<?php echo $gender; ?>" class="form-control input-sm" placeholder="Gender" style="width: 100px;" />       
          </td>
        </tr>
        <tr>
         <td width="18%">Civil Status</td>
         <td width="41%">
           <input type="text" name="civilstatus" id="civilstatus" value="<?php echo $civilstatus; ?>" class="form-control input-sm" placeholder="Civil Status" style="width: 100px;" />         
         </td>
       </tr>
       <tr>
         <td width="18%">Department</td>
         <td width="41%">
           <input type="text" name="department" id="department" value="<?php echo $department; ?>" class="form-control input-sm" style="width: 200px;" placeholder="Department" required />          
         </td>
       </tr>
       <tr>
         <td width="18%">Designation</td>
         <td width="41%">
           <input type="text" name="designation" id="designation" value="<?php echo $designation; ?>" class="form-control input-sm" placeholder="Designation" style="width: 200px;" required />         
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
       <td width="14%">Street 1</td>
       <td width="86%">
        <input type="text" name="address1" value="<?php echo $address1; ?>" id="address1" class="form-control input-sm" placeholder="No. of House" style="width: 250px;" />                                                        </td> 
      </tr>
      <tr>
       <td width="14%">Street 2</td>
       <td width="86%"> 
        <input type="text" name="address2" value="<?php echo $address2; ?>" id="address2" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;" />                                                        </td>
      </tr>
      <tr>
       <td width="14%">City/Province</td>
       <td width="86%"> 
        <input type="text" name="city" value="<?php echo $city; ?>" id="city" class="form-control input-sm" placeholder="City/Province" style="width: 250px;" />                                                        </td>
      </tr>
      <tr>
       <td width="14%">Mobile No.</td>
       <td width="86%"> 
        <input type="text" name="mobile" value="<?php echo $phone_mobile; ?>" id="mobile" class="form-control input-sm" placeholder="Mobile No" style="width: 250px;" />                                                        </td>
      </tr>
      <tr>
       <td width="14%">Phone No.</td>
       <td width="86%">
        <input type="text" name="phone" value="<?php echo $phone_home; ?>" id="phone" class="form-control input-sm" placeholder="Phone No." style="width: 250px;" />                                                        </td>
      </tr>
      <tr>
       <td width="14%">Email Address</td>
       <td width="86%"> 
        <input type="text" name="email" value="<?php echo $email; ?>" id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;" required />                                                        </td>
      </tr>
    </table>
  </div>
  <div class="tab-pane" id="tab_3">
    <iframe width="100%" frameborder="0" height="400" src="app/profile_pic.php"></iframe>
  </div>
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
