var baseURL ="../patient/medication/prescription";
var dataO;
var pid;

function process(){
	pid = $('#patient_no').val();
	if(pid === "")
		alertify.error("Patient Id field is empty");
	else {
		$.ajax({
			type: "GET",
			url: baseURL+'/'+pid,
			success: function( data, textStatus, jQxhr ){
				if((data = JSON.parse(data)) === null)
					alertify.error("Invlaid Patient Id");
				else
					setModal(data);
			},
			error: function( jqXhr, textStatus, errorThrown ){
				alert( errorThrown );
			}
		});
	}
}

function setModal(data){
	dataO = data;
	table = document.getElementById("tble_med");

	for(i = 0; i < data.length; i++){
		var row = table.insertRow(table.rows.length);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
	
		cell1.innerHTML = data[i]['date'] + cell1.innerHTML;
		cell2.innerHTML = data[i]['drug'] + cell2.innerHTML;
		cell3.innerHTML = data[i]['dosage'] + cell3.innerHTML;
		element1 = '<input class="form-control input-sm" type="text" style="width: 100px;" id="e1'+ i +'">';
		cell4.innerHTML = element1 + cell4.innerHTML;
		element2 = '<select class="form-control input-sm" style="width: 100px;" id="e2'+ i +'">'
                       + '<option>NOT ISSUED</option>'
                       + '<option>ISSUED</option>'
                       + '<option>CANCELED</option>'
                       + '</select>';

		cell5.innerHTML = element2 + cell5.innerHTML;
	}
	$('#modal_med').modal({backdrop: "static"});
}

function save(){
	table = document.getElementById("tble_med");
	tblLength = dataO.length;

	for(i = 0; i < tblLength; i++){
		date = dataO[i]['date'];
		drug = dataO[i]['drug'];
		id1 = '#e1' + i;
		id2 = '#e2' + i + ' option:selected';
		instruction = $(id1).val().trim();
		status = $(id2).val();

		json = {
			"patientId"   : pid,
			"drug"        : drug,
			"date"        : date,
			"instruction" : instruction,
			"status"      : status
		};

		$.ajax({
                type: "POST",
                url: baseURL,
                data : JSON.stringify(json),
                success : function(data){               
                }
        });
	}
	$('#modal_med').modal('hide');
	for(i = 0; i < tblLength; i++){
		x = document.getElementById("tble_med").rows[i].cells;
		for(j = 0; j < 5; j++)
			cells[i].innerHTML = "";
	}
}
