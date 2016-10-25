var dataO;
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

function getInformation(url){
	$.ajax({
		type: "GET",
     	url: url,
		success: function( data, textStatus, jQxhr ){
			dataO = JSON.parse(data)
			if(dataO == null)
				alertify.error("Invalid Input");
			else
				organizeData();
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});
}

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
		cell5.innerHTML = "<a href='#' onclick='print()'>SELECT</a>";
	}

	$("#patientListModal").modal("show");
}