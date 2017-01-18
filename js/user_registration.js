var objecto = {
	"user_name"    : [],
	"user_address" : [],
	"user_contact" : [],
	"user_data"    : [],
	"user_login"   : []
};

/**
 * Save data 
 * @param {}
 * @return {}
 */
function saveData(){
	if(!validate()){
		$('#alert').show('slow');
		return;
	} else
		$('#alert').hide('slow');
		
	nic = $('#nic').val();
	firstname = $('#firstname').val();
	lastname = $('#lastname').val();
	department = $('#department option:selected').html();
	role = $("#user_role option:selected").html();

	if(nic === "" || firstname === "" || lastname === "" || department === "-Department-" || role === "-User Role-"){
		alertify.error("Please Fill Required Fields");
		return;
	}

	objecto.user_name.push({
		"nic"       : nic,
		"firstname" : firstname,
		"middlename": $('#middlename').val(),
		"lastname"  : lastname
	});

	objecto.user_address.push({
		"nic"       : nic,
		"address1"  : $('#address1').val(),
		"address2"  : $('#address2').val(),
		"city"      : $('#city').val()
	});

	objecto.user_contact.push({
		"nic"       : nic,
		"phone_mobile" : $('#mobile').val(),
		"phone_home"   : $('#phone').val(),
		"email"		   : $('#email').val()
	});

	objecto.user_data.push({
		"nic"         : nic,
		"title"       : $('#title option:selected').html(),
		"birthdate"    : $('#birthday').val(),
		"gender"      : $('#gender option:selected').html(),
		"civilstatus" : $('#civil_status option:selected').html(),
		"department"  : department,
		"designation" : role
	});

	objecto.user_login.push({
		"nic"         : nic,
		"type"        : $("#user_role option:selected").html(),
		"username"    : $("#username").val(),
		"password"    : $("#password").val(),
		"status"	  : "Active"
	});

	postData();
}

/**
 * post data to database
 * @param {}
 * @return {}
 */
function postData(){
	$.ajax({
		type: "POST",
		url: "../patient/tb/register",
		data: JSON.stringify(objecto),
		success: function( data, textStatus, jQxhr ){
			$("#err_msg").html("Patient registered successfully");
			$("#alert").attr("class", "alert alert-success alert-dismissable");
			$("table tr").each(function () {

				$('td', this).each(function () {
					$(this).find(":input").val("");
				});
			});
			$("#alert").show(1000).delay(5000).hide(1000);
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.success("An Error Occurred");
		}
	});
}

/**
 * Validate information
 * @param {}
 * @return {}
 */
function validate(){
	phone_home   = $('#phone').val();
	phone_mobile = $('#phone').val();
	email = $('#email').val();
	nic = $('#nic').val();
	flag = true;

	if(!checkEmail(email)){
		$('#err_msg').html("Email not valid");
		flag = false;
	}

	if(!checkPhone(phone_home)){
		msg = $('#err_msg').html() + '<br>' + 'Phone(Home) not valid';
		$('#err_msg').html(msg);
		flag = false;
	}

	if(!checkPhone(phone_mobile)){
		msg = $('#err_msg').html() + '<br>' + 'Phone(Mobile) not valid';
		$('#err_msg').html(msg);
		flag = false;
	}

	return flag;
}

/**
 * Validate email
 * @param {email}
 * @return {}
 */
function checkEmail(mail) {
	if (mail == "" || /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
		return (true);   
	return (false);
}

/**
 * Validate phone number
 * @param {phone number}
 * @return {}
 */
function checkPhone(phone){
	if(phone == "" || /^\d{10}$/.test(phone))
		return true;
	return false;
}