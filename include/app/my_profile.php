<?php
require('hidden_right.php');
?>

<style>
.my_profile{
    display: block;
}
</style>

<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
require("$root/include/config/query.php");

$make_query = new Query();
$row = $make_query->getUserDetails();

$title = $row['title'];
$name = $row['title']." ".$row['firstname']." ".$row['middlename']." ".$row['lastname'];
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

<div class="my_profile">
    <section class="content">


       <div class="row">
          <div class="col-md-12">
            <form role="form" method="post" action="" onSubmit="return confirm('Are you sure you want to save?');">    
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
                           <td width="18%">National ID</td>
                           <td width="41%"><input class="form-control input-sm" name="userid" id="userid" type="text" style="width: 100px;" required readonly value="<?php echo $nic ?>"></td>
                           <td width="41%" rowspan="4" valign="top" align="center">
                            <img src="<?php echo "../../images/$nic"; ?>" class="img-rounded" width="150" height="150">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </td>             
                    </tr>
                    <tr>
                       <td width="18%">Name</td>
                       <td width="41%">
                           <input type="text" name="name" value="<?php echo $name; ?>" id="name" class="form-control input-sm" placeholder="Name" style="width: 200px;" required readonly>          
                       </td>
                   </tr>

                   <tr>
                       <td>Birthday</td>
                       <td>
                        <input type="text" name="birthday" value="<?php echo $birthdate; ?>" readonly id="birthday" class="form-control input-sm" placeholder="Birthday" style="width: 100px;" required /> 
                    </td>
                </tr>

                <tr>
                   <td width="18%">Gender</td>
                   <td width="41%">
                    <input type="text" name="gender" id="gender" value="<?php echo $gender; ?>" class="form-control input-sm" placeholder="Gender" style="width: 100px;" readonly>       
                </td>
            </tr>
            <tr>
               <td width="18%">Civil Status</td>
               <td width="41%">
                   <input type="text" name="civilstatus" id="civilstatus" value="<?php echo $civilstatus; ?>" class="form-control input-sm" placeholder="Civil Status" style="width: 100px;" readonly>         
               </td>
           </tr>
           <tr>
               <td width="18%">Department</td>
               <td width="41%">
                   <input type="text" name="department" id="department" value="<?php echo $department; ?>" class="form-control input-sm" style="width: 200px;" placeholder="Department" required readonly>          
               </td>
           </tr>
           <tr>
               <td width="18%">Designation</td>
               <td width="41%">
                   <input type="text" name="designation" id="designation" value="<?php echo $designation; ?>" class="form-control input-sm" placeholder="Designation" style="width: 200px;" required readonly>         
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
           <td width="66%">
            <input type="text" name="noofhouse" value="<?php echo $address1; ?>" readonly id="noofhouse" class="form-control input-sm" placeholder="No. of House" style="width: 250px;" />                                                        </td> 
        </tr>
        <tr>
           <td width="14%">Street 2</td>
           <td width="86%"> 
            <input type="text" name="brgy" value="<?php echo $address2; ?>" readonly id="brgy" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;" />                                                        </td>
        </tr>
        <tr>
           <td width="14%">City/Province</td>
           <td width="86%"> 
            <input type="text" name="province" value="<?php echo $city; ?>" readonly id="province" class="form-control input-sm" placeholder="City/Province" style="width: 250px;" />                                                        </td>
        </tr>
        <tr>
           <td width="14%">Mobile No.</td>
           <td width="86%"> 
            <input type="text" name="mobile" value="<?php echo $phone_mobile; ?>" readonly id="mobile" class="form-control input-sm" placeholder="Mobile No" style="width: 250px;" />                                                        </td>
        </tr>
        <tr>
           <td width="14%">Phone No.</td>
           <td width="86%">
            <input type="text" name="phone" value="<?php echo $phone_home; ?>" readonly id="phone" class="form-control input-sm" placeholder="Phone No." style="width: 250px;" />                                                        </td>
        </tr>
        <tr>
           <td width="14%">Email Address</td>
           <td width="86%"> 
            <input type="text" name="email" value="<?php echo $email; ?>" readonly id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;" required />                                                        </td>
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