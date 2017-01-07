
<section class="content-header" >
  <h1>Edit Profile</h1> 
</section>

  <section class="content">
   <div class="row">
    <div class="col-md-12">
      <form role="form" method="post" action="config/user_profile_update.php" onSubmit="return validate2()">    
        <input class="form-control input-sm" id="userid" type="hidden" style="width: 100px;" required readonly>
        <div class="box">

         <div class="box-footer clearfix">

          <button class="btn btn-primary" id="btnSubmit" type="submit"><i class="fa fa-save"></i> Save</button>

        </div>


        <div class="box-body table-responsive">
          <div class='alert alert-danger alert-dismissable' hidden="true" id="alert2"><i class='fa fa-check'></i>
            <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
            <span id="err_msg2"></span></div>

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
                 <td width="41%"><input class="form-control input-sm" id="uid" type="text" style="width: 100px;" required readonly /></td>
                 <td width="41%" rowspan="4" valign="top" align="center">
                  <img src="" class="img-rounded" width="150" height="150" />
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>             
              </tr>
              <tr>
               <td width="18%">title</td>
               <td width="41%">
                 <input type="text" id="title" class="form-control input-sm" placeholder="Title" style="width: 100px;" required />          
               </td>
             </tr>
             <tr>
               <td width="18%">First Name</td>
               <td width="41%">
                 <input type="text" id="firstname" class="form-control input-sm" placeholder="First Name" style="width: 200px;" required />          
               </td>
             </tr>
             <tr>
               <td width="18%">Middle Name</td>
               <td width="41%">
                 <input type="text" id="middlename" class="form-control input-sm" placeholder="Middle Name" style="width: 200px;"/>          
               </td>
             </tr>
             <tr>
               <td width="18%">Last Name</td>
               <td width="41%">
                 <input type="text" id="lastname" class="form-control input-sm" placeholder="Last Name" style="width: 200px;"/>          
               </td>
             </tr>
             <tr>
               <td>Birthdate</td>
               <td>
                <input type="text" id="birthdate" class="form-control input-sm" placeholder="Birthday" style="width: 100px;"/> 
              </td>
            </tr>
            <tr>
             <td width="18%">Gender</td>
             <td width="41%">
              <input type="text" id="gender" class="form-control input-sm" placeholder="Gender" style="width: 100px;" />       
            </td>
          </tr>
          <tr>
           <td width="18%">Civil Status</td>
           <td width="41%">
             <input type="text" id="civilstatus" class="form-control input-sm" placeholder="Civil Status" style="width: 100px;" />         
           </td>
         </tr>
         <tr>
           <td width="18%">Department</td>
           <td width="41%">
             <input type="text" id="department" class="form-control input-sm" style="width: 200px;" placeholder="Department"/>          
           </td>
         </tr>
         <tr>
           <td width="18%">Designation</td>
           <td width="41%">
             <input type="text" id="designation" class="form-control input-sm" placeholder="Designation" style="width: 200px;"/>         
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
          <input type="text" id="address1" class="form-control input-sm" placeholder="No. of House" style="width: 250px;" />                                                        </td> 
        </tr>
        <tr>
         <td width="14%">Street 2</td>
         <td width="86%"> 
          <input type="text" id="address2" class="form-control input-sm" placeholder="Brgy./Subd." style="width: 250px;" />                                                        </td>
        </tr>
        <tr>
         <td width="14%">City/Province</td>
         <td width="86%"> 
          <input type="text" id="city" class="form-control input-sm" placeholder="City/Province" style="width: 250px;" />                                                        </td>
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
         <td width="14%">Email Address</td>
         <td width="86%"> 
          <input type="text" id="email" class="form-control input-sm" placeholder="Email Address" style="width: 250px;"/>                                                        </td>
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
<script type="text/javascript" src="../js/userDetails.js"></script>
<script type="text/javascript">
$( function() {
    $( "#birthdate" ).datepicker({
  dateFormat: "yy-mm-dd"
  });
});

$(document).ready(function(){
  getData();
});
</script>

<script type="text/javascript">

function validate2(){
  phone = $('#phone').val();
  mobile   = $('#mobile').val();
  email = $('#email').val();
  flag = true;

  if(!checkEmail(email)){
    $('#err_msg2').html("Email not valid");
    flag = false;
  }

  if(!checkPhone(phone)){
    msg = $('#err_msg2').html() + '<br>' + 'Phone(office) not valid';
    $('#err_msg2').html(msg);
    flag = false;
  }

  if(!checkPhone(mobile)){
    msg = $('#err_msg2').html() + '<br>' + 'Phone(Home) not valid';
    $('#err_msg2').html(msg);
    flag = false;
  }

  if(!flag)
    $('#alert2').show('slow');
  else
    $('#alert2').hide('slow');

  return flag;
}

function checkEmail(mail) {
  if (mail == "" || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
    return (true);   
  return (false);
}

function checkPhone(phone){
  if(phone == "" || /^\d{10}$/.test(phone))
    return true;
  return false;
}

</script>

