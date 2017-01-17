var ALL = {};
var IN  = {};
var OUT = {};

/**
 * Retrieve all data related to
 * doctors including name, address etc.
 * @param {}
 */
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

/**
 * Store all user information an an array
 * @param {user data}
 * @return {}
 */ 
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

/**
 * Retrieve all data associated with users
 * @param {}
 * @return {}
 */
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

/**
 * Seperate Users online
 * @param {}
 * @ return {}
 */
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

/**
 * Seperate Users offline
 * @param {}
 * @ return {}
 */
function loadDoctorsOUT(){
	var arr = OUT;
	var al = ALL

	for(var key in al){
		if(!(key in IN))
			arr[key] = al[key];
	}
	addRowOUT();
}

/**
 * Create table of online users
 * @param {}
 * @return {}
 */
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

/**
 * Create table of offline users
 * @param {}
 * @return {}
 */
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