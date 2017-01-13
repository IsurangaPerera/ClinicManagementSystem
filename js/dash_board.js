var ALL = {};
var IN  = {};
var OUT = {};


function getAllData(){
	$.ajax({
		type: "GET",
     	url: "../doctors/get_all_data",
		success: function( data, textStatus, jQxhr ){
			data = JSON.parse(data);
			setData(data);	
		},
		error: function( jqXhr, textStatus, errorThrown ){
		}
	});
}

function setData(data){
	getDoctorsData();
	if(!data) return;
	var arr = ALL;
	for(i = 0; i < data.length; i++){
		nic = data[i]['nic'];
		arr[nic] = data[i];
		//alert(arr['932790092V']);
	}
}

function getDoctorsData(){
	$.ajax({
		type: "GET",
     	url: "../doctors/get_data",
		success: function( data, textStatus, jQxhr ){
			data = JSON.parse(data);
			loadDoctorsIn(data);
		},
		error: function( jqXhr, textStatus, errorThrown ){
		}
	});
}

function loadDoctorsIn(data){
	if(!data) return;
	var arr = IN;
	for(i = 0; i < data.length; i++){
		nic = data[i]['nic'];
		arr[nic] = data[i];
		//alert(arr['932790092V']);
	}
	addRowIN();
}

function loadDoctorsOUT(){
	var arr = OUT;
	var al = ALL

	for(var key in al){
		if(!(key in IN))
			arr[key] = al[key];
	}
	addRowOUT();
}

function addRowIN(){
	var table = document.getElementById("docin");

	for(var key in IN){
		var row = table.insertRow(table.rows.length);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);

		cell1.innerHTML = IN[key]['firstname'] + IN[key]['lastname'];
		cell2.innerHTML = IN[key]['department'];
		cell3.innerHTML = IN[key]['designation'];
	}
	loadDoctorsOUT();
}

function addRowOUT(){
	var table = document.getElementById("docout");

	for(var key in OUT){
		var row = table.insertRow(table.rows.length);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);

		cell1.innerHTML = OUT[key]['firstname'] + OUT[key]['lastname'];
		cell2.innerHTML = OUT[key]['department'];
		cell3.innerHTML = OUT[key]['designation'];
	}
}