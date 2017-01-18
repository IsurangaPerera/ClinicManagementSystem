var dataO;
/**
 * Generate required uri
 * @param {}
 * @return {}
 */
function callSearch(){
	keyword = $("#keyword").val().trim();
	len = keyword.length;

	if(len == 10 && !isNaN(keyword))
		url = "../patient/search/phone/"+keyword;	
	else if((len == 10 || len == 12) && isNaN(keyword))
		url = "../patient/search/nic/"+keyword;
	else if(len == 13 && !isNaN(keyword))
		url = "../patient/search/id/"+keyword;
	else
		url = "../patient/search/name/"+keyword;
	getInformation(url);
}

/**
 * Get information related to patients
 * @param {uri}
 * @return {}
 */
function getInformation(url){
	$.ajax({
		type: "GET",
     	url: url,
		success: function( data, textStatus, jQxhr ){
			dataO = JSON.parse(data)
			if(dataO == null){
				$("#err_msg").html("Patient doesn't exist");
                $("#alert").attr('class', 'alert alert-danger alert-dismissable');
                $("#alert").show(1000).delay(5000).hide(1000);
			}
			else
				organizeData();
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});
}

/**
 * Print id as a barcode
 * @param {user id}
 * @return {}
 */
function printm(id){
	var mywindow = window.open('', 'PRINT', 'height=400,width=600');
	$("#code128").html("");
	JsBarcode("#code128", id);
	mywindow.document.write('<html><body>');

	mywindow.document.write($("#sample2").html());
	mywindow.document.write('</body></html>');

	mywindow.document.close();
	mywindow.focus();

	mywindow.print();
	mywindow.close();

	$("#barimg").show().printElement();
}

/**
 * Organize data into the table
 * @param {}
 * @return {}
 */
function organizeData(){
	table = document.getElementById('tbleSearch');
	$("#tbleSearch").html("");
	
	for(i = 0; i < dataO.length; i++){
		var row = table.insertRow(table.rows.length);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);

		cell1.innerHTML = dataO[i]["patientId"];
		cell2.innerHTML = dataO[i]["firstname"] + " " + dataO[i]["lastname"];
		cell3.innerHTML = dataO[i]["dob"];
		cell4.innerHTML = dataO[i]["nic"];
		cell5.innerHTML = "<a href='#' onclick='printm("+ dataO[i]["patientId"] + ")'>SELECT</a>";
	}

	$("#patientListModal").modal("show");
}

