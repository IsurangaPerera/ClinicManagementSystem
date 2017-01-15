var baseURL ="../../patient/medication/prescription";
var dataO;
var pid;

/*
 * Get requests related to prescriptions
 * if requests available for a particular patient
 * data is inserted into the modal to be shown
 * @param {}
 * @return {}
 */
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
					process2(pid);
				else
					setModal(data);
			},
			error: function( jqXhr, textStatus, errorThrown ){
				console.log( errorThrown );
			}
		});
	}
}

/**
 * If not any requests available 
 * check if patient Id is valid and 
 * generate relevant messages
 * @param {user id}
 * @return {}
 */
function process2(id){
	url = "../../patient/profile/general/check_exist/" + id;
	$.ajax({
		type: "GET",
		url: url,
		success: function( data, textStatus, jQxhr ){
			if(data == '1'){
				$("#err_msg").html("No requests at the moment");
                $("#alert").attr('class', 'alert alert-danger alert-dismissable');
                $("#alert").show(1000).delay(5000).hide(1000);
            }
			else{
				$("#err_msg").html("Invalid Patient ID");
                $("#alert").attr('class', 'alert alert-danger alert-dismissable');
                $("#alert").show(1000).delay(5000).hide(1000);
            }
		},
		error: function( jqXhr, textStatus, errorThrown ){
			console.log( errorThrown );
		}
	});
}

/**
 * Insert data into to modal to be displayed 
 * @param {data}
 * @return {}
 */
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
		var cell6 = row.insertCell(5);
	
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

        uri = "../../inventory/getdata/sim_name/" + data[i]['drug'];
        $.ajax({
            type: "GET",
            url: uri,
            async: false,
            success : function(data){
            	data = JSON.parse(data);
            	if(data == null || parseInt(data) <= 0){
            		//dd = '#e1'+i;
            		//$(dd).prop('readonly', 'true');
            		element2alt = '<span class="label label-danger">Out Of Stock</span>';
					cell5.innerHTML = element2alt + cell5.innerHTML;
					element3 = '<input type="text" value="true" id="hidimp'+i+'" hidden/>';
        			cell6.innerHTML = element3 + cell6.innerHTML;
            	} else{
            		//dd = '#e1'+i;
            		//$(dd).prop('readonly', 'false');
            		cell5.innerHTML = element2 + cell5.innerHTML;
            		element3 = '<input type="text" value="false" id="hidimp'+i+'" hidden/>';
        			cell6.innerHTML = element3 + cell6.innerHTML;
            	}
            }
        });   
	}
	$('#modal_med').modal({backdrop: "static"});
}

/**
 * Save prescription information
 * Print a slip in case of "out of stock" situations
 * @param {}
 * @return {}
 */
function save(){
	table = document.getElementById("tble_med");
	tblLength = dataO.length;
	var doc = new jsPDF();
	doc.setFontSize(12);

	for(i = 0; i < tblLength; i++){
		dt = "#hidimp"+i;
		flag = $(dt).val();
		if(flag == 'true'){
			doc.text(20, 20, dataO[i]['drug']+"\n"+dataO[i]['dosage']+"\n");

			date = dataO[i]['date'];
			drug = dataO[i]['drug'];

			json = {
				"patientId"   : pid,
				"drug"        : drug,
				"date"        : date,
				"instruction" : 'NONE',
				"status"      : 'CANCELED'
			};

			$.ajax({
                type: "POST",
                url: baseURL,
                data : JSON.stringify(json),
                success : function(data){
                	$("#err_msg").html("Operation Completed Successfully");
                    $("#alert").attr('class', 'alert alert-success alert-dismissable');
                    $("#alert").show(1000).delay(5000).hide(1000);               
                }
        	});


		} else{
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
                	$("#err_msg").html("Operation Completed Successfully");
                    $("#alert").attr('class', 'alert alert-success alert-dismissable');
                    $("#alert").show(1000).delay(5000).hide(1000);               
                }
        	});
		}
	}
	$('#modal_med').modal('hide');
	$("#tble_med").html("");
	doc.save(pid);
}
