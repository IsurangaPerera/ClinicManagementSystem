var objecto = {
	"patient_name"    : [],
	"patient_address" : [],
	"patient_contact" : [],
	"patient_data"    : []
};

function saveData(){
	patientId = $('#patientID').val();
	firstname = $('#firstname').val();
	gender = $('#gender option:selected').html();

	if(patientId === "" || firstname === "" || gender === "")
		alertify.error("Please Fill Required Fields");

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
			alertify.success("Patient Registered Successfully");
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.success("An Error Occurred");
		}
	});
}