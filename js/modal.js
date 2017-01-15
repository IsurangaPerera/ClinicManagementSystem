var numComplaints = 0;
var numMedications = 0;
var numRows = 1;
var numRowMed = 1;
var numRowObs = 1;
var numRowInves = 1;
var curIdComplaints = 1;
var curIdMedications = 1;
var tempC = 0;
var prepared = getDDetails();
var tflag = true;

/**
 * Retrive details of the current user
 * @param {}
 * @return {user name}
 */
function getDDetails() {
	var name;
	$.ajax({
        type: "GET",
        async: false,
        url: "../user/header/data",
        success: function( data, textStatus, jQxhr ){
          data = JSON.parse(data);
          name = data[0]['firstname']+"  "+data[0]['lastname'];
        },
        error: function( jqXhr, textStatus, errorThrown ){
        }
    });
	return name;
}

function updateUserInput(id) {
	ido = '#'+id;
	name = $(ido).val();

	if(name){
		$.ajax({
		type: "GET",
		url: '../../inventory/getdata/allbyname/'+name,
		success: function(data){
			data = JSON.parse(data);

            $( ido ).autocomplete({
               source: data
            });
            var id1 = '#'+id.substring(0, id.length-1)+'1';
			$(id1).prop("disabled", false);
		},

		error: function( jqXhr, textStatus, errorThrown ){
			alert(jqXhr.status);
        }

		});
	}	
}

if(sessionStorage.getItem("patientId") !== null)
	var patientId = sessionStorage.getItem("patientId");

var objecto = {
	"complaint"          : [],
	"observation"        : [],
	"observation_type"   : [],
	"medication"         : [],
	"investigation"      : [],
	"investigation_type" : [],
	"treatmentplan"      : []
};

$(function(){

	$('#btn_complaints').click(function(){
		$('#complaints').modal({backdrop: "static"});
		return false;
	});

	$('#btn_investigations').click(function(){
		$('#investigations').modal({backdrop: "static"});
		return false;
	});

	$('#btn_medications').click(function(){
		$('#medications').modal({backdrop: "static"});
		return false;
	});

	$('#btn_observations').click(function(){
		$('#observations').modal({backdrop: "static"});
		return false;
	});

});

/**
 * Add a new row to the complaints modal
 */
function addRow(){
	var table = document.getElementById("tble1");
	var row = table.insertRow(table.rows.length);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);

	ide1 = 'in' + curIdComplaints + '0';
	ide2 = 'in' + curIdComplaints + '1';
	ide3 = 'in' + curIdComplaints + '2';

	var newElement1 = '<input list="complaints1" id="'+ide1+'" name="complaints1" class="form-control"'
	+ 'onchange="setEnable(this.id)" style="height: 100%; cursor:pointer;" autofocus placeholder="Complaint">';

	var newElement2 = '<input type="text" id="'+ide2+'" class="form-control input-sm" style="height: 100%;'
	+ 'cursor:pointer;" placeholder="Duration(eg.24)" disabled>';

	var newElement3 = '<input list="days" id="'+ide3+'" name="days" class="form-control input-sm"'
	+ 'style="height: 100%; cursor:pointer;" placeholder="Days/Weeks/Months/Years" disabled>';

	cell1.innerHTML = newElement1 + cell1.innerHTML;
	cell2.innerHTML = newElement2 + cell2.innerHTML;
	cell3.innerHTML = newElement3 + cell3.innerHTML;

	curIdComplaints++;
	numComplaints += 1;
}

function setEnable(id){
	var id1 = '#'+id.substring(0, id.length-1)+'1';
	var id2 = '#'+id.substring(0, id.length-1)+'2';
	$(id1).prop("disabled", false).focus();
	$(id2).prop("disabled", false);
}

function setEnable2(id){
	//updateUserInput(id);
	var id1 = '#'+id.substring(0, id.length-1)+'1';
	$(id1).prop("disabled", false).focus();
}

function addRow2(){
	var table = document.getElementById("tble3");
	var row = table.insertRow(table.rows.length);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);

	ide1 = 'im' + curIdMedications + '0';
	ide2 = 'im' + curIdMedications + '1';

	var newElement1 = '<div class="ui-widget">'
	+ '<input id="'+ide1+'" type="text" class="form-control input-sm" '
	+ 'onchange="updateUserInput(this.id);" onkeyup="updateUserInput(this.id);" onpaste="updateUserInput(this.id);" oninput="updateUserInput(this.id);"style="height: 100%; cursor:pointer;" placeholder="Medication">'
	+ '</div>';

	var newElement2 = '<div class="ui-widget">'
	+ '<input id="'+ide2+'" list="dose" name="dose" class="form-control input-sm"'
	+ 'style="height: 100%; cursor:pointer;" placeholder="Dosage" disabled></div>';

	cell1.innerHTML = newElement1 + cell1.innerHTML;
	cell2.innerHTML = newElement2 + cell2.innerHTML;

	curIdMedications++;
	numMedications++;
}

function changeOptions(id){
	var id1 = '#' + id + 'options';
	if(document.getElementById(id).checked === true){
		$(id1).prop("hidden", false).focus();
	} else {
		$(id1).prop("hidden", true).focus();
	}
}

function showText(id){
	var id1 = '#' + id;
	if($(id1).val() == "15"){
		$('#txtother').prop("hidden", false).focus();
	} else {
		$('#txtother').prop("hidden", true).focus();
	}
}

function assignConsultant(id){
	var id1 = '#' + id;
	if($(id1).val() == "3"){
		$('#consultants').prop("hidden", false).focus();
	} else {
		$('#consultants').prop("hidden", true).focus();
	}
}

function save(id) {
	if(id == "btncomplaints"){
		handleComplaints();
		$('#complaints').modal('hide');
	} else if(id == "btnmedications"){
		handleMedications();
		$('#medications').modal('hide');
	} else if(id == "plan"){
		handlePlan();
	} else if(id == "btnobservations"){
		$('#observations').modal('hide');
		handleObservations();
	} else if(id == "btninvestigations"){
		handleInvestigations();
		$('#investigations').modal('hide');
	}
}

function handleComplaints(){
	var table = document.getElementById('comtable');
	var i, ide1, ide2, ide3;
	var d = new Date();
	var t = d.getTime().toString();
	t = t.substring(t.length-4, t.length);
	var date = (d.getDate()+'-'+(d.getMonth()+1)+'-'+(d.getFullYear()));
	
	for(i = 0; i <= numComplaints; i++){
		ide1 = 'in' + i + '0';
		ide2 = 'in' + i + '1';
		ide3 = 'in' + i + '2';

		var complaint = document.getElementById(ide1).value;
		var period = document.getElementById(ide2).value
		+ "   " + document.getElementById(ide3).value;

		if(complaint != ""){
			var arr = objecto.complaint;
			var flag = true;

			for(var j = 0; j < arr.length; j++){
				var obj = arr[j];
				if(obj["complaint"] == complaint){
					flag = false;
					break;
				}
			}

			if(flag){
				objecto.complaint.push({ 
					"patientId" : patientId,
					"date" 	    : getDate(),
					"complaint" : complaint,
					"period"    : period,
					"prepared"  : prepared
				});

				var row = table.insertRow(numRows);
				row.setAttribute('id', ('row'+t+tempC));
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);

				cell1.innerHTML = getDate() + cell1.innerHTML;
				var tempId = 'rem'+ t +tempC;
				cell2.innerHTML = cell2.innerHTML + complaint;
				cell3.innerHTML = cell3.innerHTML + period;
				cell4.innerHTML = cell4.innerHTML + prepared;
				var newElement = '<a href="#" id="'+tempId+'" onClick="removeRow(this.id)">Remove</a>';
				cell5.innerHTML = cell5.innerHTML + newElement;
				numRows++;
				tempC++;
			}
		}
	}
}

function removeRow(id){
	var conf = confirm('Confirm your action!');
	var cId = 'row' + id.substring(3, id.length);
	var row = document.getElementById(cId);
	var complaintVal = row.cells[2].innerHTML;
	
	if(conf === true){
		var table = row.parentNode;
		while ( table && table.tagName != 'TABLE' )
			table = table.parentNode;
		if ( !table )
			return;
		table.deleteRow(row.rowIndex);
		if(table.id === 'obstable'){
			findAndRemove(objecto.observation, 'observation', complaintVal);
			numRowObs--;
		} else if(table.id === 'medtable'){
			findAndRemove(objecto.medication, 'drug', complaintVal);
			numRowMed--;
		} else if(table.id === 'comtable'){
			findAndRemove(objecto.complaint, 'complaint', complaintVal);
			numRows--;
		} else if(table.id === 'investable'){
			findAndRemove(objecto.investigation, 'investigation', complaintVal);
			numRowInves--;
		}
	}
}

function findAndRemove(array, property, value) {
  array.forEach(function(result, index) {
    if(result[property] === value) {
      //Remove from array
      array.splice(index, 1);
    }    
  });
}

function handleMedications(){
	var table = document.getElementById('medtable');
	var i, ide1, ide2;
	var d = new Date();
	var t = d.getTime().toString();
	t = t.substring(t.length-4, t.length);
	var date = (d.getDate()+'-'+(d.getMonth()+1)+'-'+(d.getFullYear()));
	
	for(i = 0; i <= numMedications; i++){
		ide1 = 'im' + i + '0';
		ide2 = 'im' + i + '1';

		var drug = document.getElementById(ide1).value;
		var dosage = document.getElementById(ide2).value;

		if(drug != ""){
			var arr = objecto.medication;
			var flag = true;

			for(var j = 0; j < arr.length; j++){
				var obj = arr[j];
				if(obj["drug"] == drug){
					flag = false;
					break;
				}
			}

			if(flag){
				objecto.medication.push({
					"patientId" : patientId, 
					"date" 	    : getDate(),
					"drug"      : drug,
					"dosage"    : dosage,
					"prepared"  : prepared
				});

				var row = table.insertRow(numRowMed);
				row.setAttribute('id', ('row'+t+tempC));
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);

				cell1.innerHTML = getDate() + cell1.innerHTML;
				var tempId = 'rem'+ t +tempC;
				cell2.innerHTML = cell2.innerHTML + drug;
				cell3.innerHTML = cell3.innerHTML + dosage;
				cell4.innerHTML = cell4.innerHTML + prepared;
				var newElement = '<a href="#" id="'+tempId+'" onClick="removeRow(this.id)">Remove</a>';
				cell5.innerHTML = cell5.innerHTML + newElement;
				numRowMed++;
				tempC++;
			}
		}
	}
}

function handlePlan(){
	var impressions = [
	"Non specific symptoms", "Upper respiratory tract infection",
	"Lower respiratory tract infection", "Community Acquired Pneumonia",
	"Pulmonary tuberculosis", "Extrapulmonary tuberculosis",
	"Asthma", "COPD", "Interstitial lung disease",
	"Bronchiectasis", "Lung malignancy", "Chronic cough",
	"Pleural effusion", "Pneumothorax", "Sleep disordered breathing",
	"Other"
	];

	var plans = [
	"Discharge from OPD", "Follow up OPD",
	"Referral to TB Section", "Referral to Respiratory Consultant"
	];

	var e = document.getElementById("sel1");
	var impVal = e.options[e.selectedIndex].value;
	var impression = impressions[impVal];
	if(impVal == 15){
		impression = document.getElementById('reason_admission').value.trim();
	}
	e = document.getElementById('condition');
	var popd = e.options[e.selectedIndex].value;
	var planFromOpd = plans[popd];
	var consultant = "Not Assigned";
	if(popd == 3){
		consultant = document.getElementById('consultantin').value.trim();
	}
	var comments = document.getElementById('admitting_impression').value;

	objecto.treatmentplan.push({
		"patientId"     : patientId,
		"date"          : getDate(),
		"impression"    : impression,
		"plan_from_opd" : planFromOpd,
		"consultant"    : consultant,
		"comment"      : comments,
		"prepared"      : prepared
	});
	/*if(tflag){		
		tflag = false;
	} else{
		objecto.treatmentplan.splice(0,1);
	}*/
}

function handleObservations(){
	var observation1 = [
		"cachexia", "clubbing", "lymphadenopathy", "reducedchestexpansion",
		"vbs", "rhonchi", "ic", "ap"
		];

	var observation2 = {
		"lymphadenopathy" : ["rcervical", "lcervical",
		"raxilliary", "laxilliary"],
		"reducedchestexpansion" : ["right", "left"],
		"rhonchi" : ["rlz", "rmz", "ruz", "llz", "lmz", "luz"],
		"ic" : ["rlz2", "rmz2", "ruz2", "llz2", "lmz2", "luz2"],
		"ap" : ["rlz3", "rmz3", "ruz3", "llz3", "lmz3", "luz3"]
		};

	var obs, spec1, spec2;
	var table = document.getElementById('obstable');

	for(var i = 0; i < observation1.length; i++){
		var obs = "",
		spec1 = [],
		spec2 = [];

		var ob = observation1[i];
		var opt = document.getElementById(ob);
		if(opt.checked === true){
			var id = "label[for="+ob+"]";
			obs = $(id).text();
			
			var arr2 = Object.keys(observation2);
			if(contains(arr2, ob)){
				var tempArray = observation2[ob];
				
				for(var j = 0; j < tempArray.length; j++){
					var chkId = document.getElementById(tempArray[j]);
					if(chkId.checked === true){
						var lbl = "label[for="+tempArray[j]+"]";
						spec1.push($(lbl).text());
						
						if(ob == 'rhonchi' || ob == 'ic' || ob == 'ap'){
							var tempNew = tempArray[j]+'s';
							var e = document.getElementById(tempNew);
							var spec2Var = e.options[e.selectedIndex].text;
							spec2.push(spec2Var);
						}
					}
				}
			}
		}

		if(obs != ""){
			var arr = objecto.observation;
			var flag = true;

			for(var j = 0; j < arr.length; j++){
				var obj = arr[j];
				if(obj["observation"] == obs){
					flag = false;
					break;
				}
			}
			if(flag){

				objecto.observation.push({
					"patientId"   : patientId,
					"date"        : getDate(),
					"observation" : obs,
					"prepared"    : prepared
				});

				for(var j = 0; j < spec1.length; j++){
					if(spec2.length == 0){
						objecto.observation_type.push({
							"patientId"   : patientId,
							"date"        : getDate(),
							"observation" : obs,
							"spec1"       : spec1[j],
							"spec2"       : ''	
						});
					} else{
						for(var k = 0; k < spec2.length; k++){
							objecto.observation_type.push({
								"patientId"   : patientId,
								"date"        : getDate(),
								"observation" : obs,
								"spec1"       : spec1[k],
								"spec2"       : spec2[k]		
							});
						}
					}
				}

				var d = new Date();
				var t = d.getTime().toString();
				t = t.substring(t.length-4, t.length);

				var row = table.insertRow(numRowObs);
				row.setAttribute('id', ('row'+t+tempC));
				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);
				var cell4 = row.insertCell(3);
				var cell5 = row.insertCell(4);
				var cell6 = row.insertCell(5);

				cell1.innerHTML = getDate() + cell1.innerHTML;
				var tempId = 'rem'+ t +tempC;
				cell2.innerHTML = cell2.innerHTML + obs;
				for(var j = 0; j < spec1.length; j++){
					cell3.innerHTML = cell3.innerHTML + spec1[j] + '<br/>';
				}

				for(var j = 0; j < spec2.length; j++){
					cell4.innerHTML = cell4.innerHTML + spec2[j] + '<br/>';
				}

				cell5.innerHTML = cell5.innerHTML + prepared;
				var newElement = '<a href="#" id="'+tempId+'" onClick="removeRow(this.id)">Remove</a>';
				cell6.innerHTML = cell6.innerHTML + newElement;

				numRowObs++;
				tempC++;
			}
		}
	}
}

function contains(array, element){
	for(var i = 0; i < array.length; i++){
		if(array[i] == element)
			return true;
	}
	return false;
}

function handleInvestigations(){
	var investigation1 = [
		"xray", "sputum", "blood", "lfunction", "resting",
		"walking", "mantoux", "weight"
		];

	var investigation2 = {
		"xray" : ["pa", "rl", "ll", "apical"],
		"sputum" : ["pyogenicculture", "afbsmear3",	"afbsmear", "fungalculture"],
		"blood" : ["fbc", "esr", "fbs"],
		"lfunction" : ["fev1", "fvc", "dlco"]
		};

	var inves, spec1;
	var table = document.getElementById('investable');

	for(var i = 0; i < investigation1.length; i++){
		inves = "";
		spec1 = [];

		var inv = investigation1[i];
		var opt = document.getElementById(inv);

		if(opt.checked === true){
			var id = "label[for="+inv+"]";
			inves = $(id).text();

			var arr = Object.keys(investigation2);
			if(contains(arr, inv)){
				var tempArray = investigation2[inv];
				for(var j = 0; j < tempArray.length; j++){
					var chkId = document.getElementById(tempArray[j]);
					if(chkId.checked === true){
						var lbl = "label[for="+tempArray[j]+"]";
						spec1.push($(lbl).text());
					}
				}
			}
			if(inves != ""){
				var arr = objecto.investigation;
				var flag = true;
				for(var j = 0; j < arr.length; j++){
					var obj = arr[j];
					if(obj["investigation"] == inves){
						flag = false;
						break;
					}
				}

				if(flag){

					objecto.investigation.push({
						"patientId"     : patientId,
						"date"          : getDate(),
						"investigation" : inves,
						"prepared"      : prepared
					});

					for(var j = 0; j < spec1.length; j++){
						objecto.investigation_type.push({
							"patientId"     : patientId,
							"date"          : getDate(),
							"investigation" : inves,
							"spec1"         : spec1[j]
						});
					}

					var d = new Date();
					var t = d.getTime().toString();
					t = t.substring(t.length-4, t.length);
					var row = table.insertRow(numRowInves);
					row.setAttribute('id', ('row'+t+tempC));

					var cell1 = row.insertCell(0);
					var cell2 = row.insertCell(1);
					var cell3 = row.insertCell(2);
					var cell4 = row.insertCell(3);
					var cell5 = row.insertCell(4);
					cell1.innerHTML = getDate() + cell1.innerHTML;
					var tempId = 'rem'+ t +tempC;
					cell2.innerHTML = cell2.innerHTML + inves;
					for(var j = 0; j < spec1.length; j++){
						cell3.innerHTML = cell3.innerHTML + spec1[j] + '<br/>';
					}
					cell4.innerHTML = cell4.innerHTML + prepared;
					var newElement = '<a href="#" id="'+tempId+'" onClick="removeRow(this.id)">Remove</a>';
					cell5.innerHTML = cell5.innerHTML + newElement;
					numRowInves++;
					tempC++;
				}
			}
		}			
	}
}

function postData(){
	handlePlan();
	$.ajax({
		type: "POST",
     	url: "../patient/tb/register",
		data: JSON.stringify(objecto),
		success: function( data, textStatus, jQxhr ){
			console.log("Success");
			sessionStorage.clear();
			window.location.href = "../include/patient_management.php?n=1";
		},
		error: function( jqXhr, textStatus, errorThrown ){
			console.log( errorThrown );
		}
	});
}

