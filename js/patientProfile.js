var patientId;
var baseURL = "../patient/profile/"

function getResult(){
	if(sessionStorage.getItem("patientId") === null || sessionStorage.getItem("patientId") === ""){
		pid = $('#patient_no').val();
		sessionStorage.setItem("patientId", pid);
	}
	
	patientId = sessionStorage.getItem("patientId");


	if(patientId !== "" || patientId !== null){
		$.ajax({
            type: "GET",
            url: baseURL + "general/" + patientId,
            success : function(data){
            	data = JSON.parse(data);
            	if(data == null){
            		sessionStorage.setItem("patientId", "");
            		$("#myModal3").modal('show');
            	}
            	else{            	
                	setValues(data);
                	setTreatmentPlan(data);
                }
            }
        });
	}
}

function setValues(data){
	$("#myModal3").modal('hide');

	try{
		name = data.name['firstname']+' '+
			   data.name['middlename']+' '+
		       data.name['lastname'];
		address = data.address['address1']+"<br>"+
				  data.address['address2']+"<br>"+
				  data.address['city'];
		gender = data.data['gender'];
		dob = data.data['dob'];
		pid = data.data['patientId'];
		nic = data.data['nic'];
		religion = data.data['religion'];
		blood = data.data['blood_group'];
		phone = data.contact['phone_office']+'<br>'+
				data.contact['phone_home']+'<br>'+
				data.contact['phone_mobile'];

		$('#pname').html(name);
		$('#pdob').html(dob);
		$('#paddress').html(address);
		$('#pgender').html(gender);
		$('#pid').html(pid);
		$('#nic').html(nic);
		$('#religion').html(religion);
		$('#blood').html(blood);
		$('#phone').html(phone);

		var tble = ["tblePres", "tblePres2"];
		for(i = 0; i < tble.length; i++){
			var table = document.getElementById(tble[i]);
			var row = table.insertRow(table.rows.length);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);

			cell1.innerHTML = data.medication['date'] + cell1.innerHTML;
			cell2.innerHTML = data.medication['drug'] + cell2.innerHTML;
			cell3.innerHTML = data.medication['dosage'] + cell3.innerHTML;
			cell4.innerHTML = data.medication['prepared'] + cell4.innerHTML;
		}
	} catch(err){

	}
}

function setTreatmentPlan(data){
	try{

		var tbt = ["tblePlan", "tblePlan2"];
		for(i = 0; i < tbt.length; i++){
			var table = document.getElementById(tbt[i]);
			var row = table.insertRow(table.rows.length);
			var cell1 = row.insertCell(0);
			var cell2 = row.insertCell(1);
			var cell3 = row.insertCell(2);
			var cell4 = row.insertCell(3);
			var cell5 = row.insertCell(4);
			var cell6 = row.insertCell(5);

			cell1.innerHTML = data.treatmentplan['date'] + cell1.innerHTML;
			cell2.innerHTML = data.treatmentplan['impression'] + cell2.innerHTML;
			cell3.innerHTML = data.treatmentplan['plan_from_opd'] + cell3.innerHTML;
			cell4.innerHTML = data.treatmentplan['consultant'] + cell4.innerHTML;
			cell5.innerHTML = data.treatmentplan['comment'] + cell5.innerHTML;
			cell6.innerHTML = data.treatmentplan['prepared'] + cell6.innerHTML;
		}

	} catch(err){

	}
}