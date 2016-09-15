var objecto = {
	"patient_name"    : [],
	"patient_address" : [],
	"patient_contact" : [],
	"patient_data"    : []
};

function saveData(){
	if(!validate()){
		$('#alert').show('slow');
		return;
	} else
		$('#alert').hide('slow');
		
	patientId = $('#patientID').val();
	firstname = $('#firstname').val();
	gender = $('#gender option:selected').html();

	if(patientId === "" || firstname === "" || gender === ""){
		alertify.error("Please Fill Required Fields");
		return;
	}

	objecto.patient_name.push({
		"patientId" : patientId,
		"firstname" : firstname,
		"middlename": $('#middlename').val(),
		"lastname"  : $('#lastname').val()
	});

	objecto.patient_address.push({
		"patientId" : patientId,
		"address1"  : $('#address1').val(),
		"address2"  : $('#address2').val(),
		"city"      : $('#city').val()
	});

	objecto.patient_contact.push({
		"patientId"    : patientId,
		"phone_office" : $('#phone_office').val(),
		"phone_home"   : $('#phone_home').val(),
		"phone_mobile" : $('#phone_mobile').val(),
		"email"		   : $('#email').val()
	});

	objecto.patient_data.push({
		"nic"         : $('#nic').val(),
		"patientId"   : patientId,
		"dob"         : $('#cFrom').val(),
		"title"       : $('#title option:selected').html(),
		"birth_place" : $('#birthplace').val(),
		"gender"      : gender,
		"civilstatus" : $('#civil_status option:selected').html(),
		"religion"    : $('#religion').val(),
		"blood_group" : $('#bloodGroup option:selected').html()
	});

	postData();
}

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
			$("#code128").hide("1000");
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.success("An Error Occurred");
		}
	});
}

function validate(){
	phone_office = $('#phone_office').val();
	phone_home   = $('#phone_home').val();
	phone_mobile = $('#phone_mobile').val();
	email = $('#email').val();
	nic = $('#nic').val();
	flag = true;

	if(!checkEmail(email)){
		$('#err_msg').html("Email not valid");
		flag = false;
	}

	if(!checkPhone(phone_office)){
		msg = $('#err_msg').html() + '<br>' + 'Phone(office) not valid';
		$('#err_msg').html(msg);
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