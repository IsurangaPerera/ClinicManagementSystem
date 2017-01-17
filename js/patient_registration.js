var objecto = {
	"patient_name"    : [],
	"patient_address" : [],
	"patient_contact" : [],
	"patient_data"    : []
};

/**
 * Create object containing all patient details
 * and call postData function
 * @param {}
 * @return {}
 */
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
		$("#err_msg").html("Please fill required fields");
        $("#alert").attr('class', 'alert alert-danger alert-dismissable');
        $("#alert").show(1000).delay(5000).hide(1000);
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

/**
 * Send object containing patient details to the server
 * @param {}
 * @return {}
 */
function postData(){
	$.ajax({
		type: "POST",
		url: "../patient/tb/register",
		data: JSON.stringify(objecto),
		success: function( data, textStatus, jQxhr ){
			createCode();
			$("#err_msg").html("Patient registered successfully");
			$("#alert").attr("class", "alert alert-success alert-dismissable");
			$("table tr").each(function () {

				$('td', this).each(function () {
					$(this).find(":input").val("");
				});
			});
			$("#alert").show(1000).delay(5000).hide(1000);
			$("#barimg").hide("1000");
		},
		error: function( jqXhr, textStatus, errorThrown ){
			$("#err_msg").html("Failed to complete the operation");
        	$("#alert").attr('class', 'alert alert-danger alert-dismissable');
        	$("#alert").show(1000).delay(5000).hide(1000);
		}
	});
}

/**
 * Create a temporary bar code to be 
 * printed as a pdf
 * @param {}
 * @return {}
 */
function createCode(){
	id = $("#patientID").val();
	JsBarcode("#printbcode", id, {
        format: "CODE128",
        displayValue: true,
        margin: 10,
    }); 

    //demoFromHTML();
}

/*function demoFromHTML() {
	var pdf = new jsPDF('p', 'in', 'letter');

    source = $('#patients')[0];

    specialElementHandlers = {
        '#bypassme': function(element, renderer) {
        	return true
        }
    };
    margins = {
      	top: 80,
      	bottom: 100,
      	left: 120,
      	width: 300
    };
    pdf.fromHTML(
        source, // HTML string or DOM elem ref.

        margins.left, // x coord
        margins.top, { // y coord
        	'width': margins.width, // max width of content on PDF
        	'elementHandlers': specialElementHandlers
        },

        function(dispose) {
            pdf.save('Test2.pdf');
        }, margins
    );
}*/

/**
 * Validate user information
 * Incase of validation problem an error message
 * is displayed to the user
 * @param {}
 * @return {}
 */
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