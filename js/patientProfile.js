var patientId;
var baseURL = "../../patient/profile/";

/**
 * Get all results related to a particular
 * patient
 * @param {}
 * @return {}
 */
function getResult(){
	if(sessionStorage.getItem("patientId") === null || sessionStorage.getItem("patientId") === ""){
		pid = $('#patient_no').val();
		sessionStorage.setItem("patientId", pid);
	}
	
	patientId = sessionStorage.getItem("patientId");


	if(patientId !== "" && patientId !== null){
		$.ajax({
            type: "GET",
            url: baseURL + "general/" + patientId,
            success : function(data){
            	data = JSON.parse(data);
            	if(data.name[0] == null){
            		sessionStorage.setItem("patientId", "");
            		alertify.error("Patient Doesn't Exist");
            		$("#myModal3").modal('show');
            	}
            	else
            		setValues(data);
            	if(data.medication.length > 0)       	
                	setPrescriptionHistory(data);
                if(data.treatmentplan.length > 0)
                	setTreatmentPlan(data);
            },
            error: function(jqXHR, textStatus, errorThrown){
				alert(jqXHR.status);
			}  
        });
	}
}

/**
 * Set values of the modal
 * @param {data set}
 * @return {}
 */
function setValues(data){
	$("#myModal3").modal('hide');

		name = data.name[0]['firstname']+' '+
			   data.name[0]['middlename']+' '+
		       data.name[0]['lastname'];
		address = data.address[0]['address1']+"<br>"+
				  data.address[0]['address2']+"<br>"+
				  data.address[0]['city'];
		gender = data.data[0]['gender'];
		dob = data.data[0]['dob'];
		pid = data.data[0]['patientId'];
		nic = data.data[0]['nic'];
		religion = data.data[0]['religion'];
		blood = data.data[0]['blood_group'];
		phone = data.contact[0]['phone_office']+'<br>'+
				data.contact[0]['phone_home']+'<br>'+
				data.contact[0]['phone_mobile'];

		$('#pname').html(name);
		$('#pdob').html(dob);
		$('#paddress').html(address);
		$('#pgender').html(gender);
		$('#pid').html(pid);
		$('#nic').html(nic);
		$('#religion').html(religion);
		$('#blood').html(blood);
		$('#phone').html(phone);
}

/**
 * Set prescription history  table
 * @param {data}
 * @return {}
 */
function setPrescriptionHistory(data){
	try{
		var tble = ["tblePres", "tblePres2"];
		for(i = 0; i < tble.length; i++){
			var table = document.getElementById(tble[i]);
			if(table === null)
				continue;
			for(i = 0; i < data.medication.length; i++){
				var row = table.insertRow(table.rows.length);
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);

				cell1.innerHTML = data.medication[i]['date'] + cell1.innerHTML;
				cell2.innerHTML = data.medication[i]['drug'] + cell2.innerHTML;
				cell3.innerHTML = data.medication[i]['dosage'] + cell3.innerHTML;
				cell4.innerHTML = data.medication[i]['prepared'] + cell4.innerHTML;
			}
		}
	} catch(err){

	}
}

/**
 * Set treatmentplan table
 * @param {data}
 * @return {}
 */
function setTreatmentPlan(data){
	try{
		var tbt = ["tblePlan", "tblePlan2"];
		for(i = 0; i < tbt.length; i++){
			var table = document.getElementById(tbt[i]);
			if(table === null)
				continue;
			for(i = 0; i < data.treatmentplan.length; i++){
				var row = table.insertRow(table.rows.length);
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);
				var cell6 = row.insertCell(5);

				cell1.innerHTML = data.treatmentplan[i]['date'] + cell1.innerHTML;
				cell2.innerHTML = data.treatmentplan[i]['impression'] + cell2.innerHTML;
				cell3.innerHTML = data.treatmentplan[i]['plan_from_opd'] + cell3.innerHTML;
				cell4.innerHTML = data.treatmentplan[i]['consultant'] + cell4.innerHTML;
				cell5.innerHTML = data.treatmentplan[i]['comment'] + cell5.innerHTML;
				cell6.innerHTML = data.treatmentplan[i]['prepared'] + cell6.innerHTML;
			}
		}

	} catch(err){

	}
}
