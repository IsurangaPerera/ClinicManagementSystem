var baseURL = "../../users/all";
var dataO = null;

/**
 * get details of all system users
 */
function getResult(){
	if(dataO === null){
		$.ajax({
			type: "GET",
			url: baseURL,
			success : function(data){
				dataO = JSON.parse(data);
				setValues(dataO);		
			},
			error: function(jqXHR, textStatus, errorThrown){
				alert(jqXHR.status);
			}  
		});
	} else{
		setValues(dataO);
	}
}

/**
 * Insert user details into table
 * @param {data} user detals
 */
function setValues(data){
	var table = document.getElementById("u_list");
	for(i = 0; i < data.length; i++){
		var row = table.insertRow(table.rows.length);
		row.setAttribute('id', ('r'+data[i]['nic']));
		cell1 = row.insertCell(0);
		cell2 = row.insertCell(1);
		cell3 = row.insertCell(2);
		cell4 = row.insertCell(3);
		cell5 = row.insertCell(4);
		cell7 = row.insertCell(5);

		url1 = '../../users/' + data[i]['nic'];
		id1 = '<a href="' + url1 + '">' + data[i]['nic'] + '</a>';
		cell1.innerHTML = id1 + cell1.innerHTML;

		name = data[i]['firstname'] + ' ' + data[i]['lastname'];
		cell2.innerHTML = name + cell2.innerHTML;

		cell3.innerHTML = data[i]['type'] + cell3.innerHTML;

		if(data[i]['department'] === null || data[i]['department'] === '')
			data[i]['department'] = 'NOT ASSIGNED';
		cell4.innerHTML = data[i]['department'] + cell4.innerHTML;

		if(data[i]['email'] === null || data[i]['email'] === '')
			data[i]['email'] = 'NOT ASSIGNED';
		cell5.innerHTML = data[i]['email'] + cell5.innerHTML;

		sid = 's'+ data[i]['nic'];
		id2 = '<a href="#" onclick="suspend(this.id);" id="'+sid+'">Suspend</a>&nbsp|&nbsp;'+
		'<a href="#" onclick="setInactive(this.id);" class="delete" id="'+data[i]['nic']+'"></a>';
		cell7.innerHTML =  id2 + cell7.innerHTML;

		checkIfActive(data[i]['nic']);
	}
}

/**
 * Check if a user is currently active or not
 * @param {id} NIC of the user
 */
function checkIfActive(id){
	uri = '../../users/ifactive/' + id;
	im = '#'+id;
	$.ajax({
		type: "GET",
		url: uri,
		async: false,
		success : function(data){
			d = JSON.parse(data);
			$(im).html(d[0]['status'])
		},
		error: function(jqXHR, textStatus, errorThrown){
			console.log(jqXHR.status);
		}  
	});
}

/**
 * Temporary disable user profiles
 * @param {id} NIC of the user
 */
function setInactive(id){
	if(!confirm("Are you sure?"))
		return;
	uri = '../../users/inactive/' + id + '/';
	i = '#'+id;
	status = $(i).html();
	
	if(status == 'Inactive')
		status = 'Active';
	else
		status = 'Inactive';

	uri = uri + status;
	
	$.ajax({
		type: "GET",
		url: uri,
		success : function(){
			$(i).html(status);
		},
		error: function(jqXHR, textStatus, errorThrown){
			console.log(jqXHR.status);
		}  
	});
}

/**
 * Permanatly disable user profiles
 * @param {id} NIC of the user
 */
function suspend(id){
	if(!confirm("Are you sure?"))
		return;
	id2 = id.substring(1);
	uri = '../../users/suspend/' + id2 ;
	rid = '#r'+id2;
	$.ajax({
		type: "GET",
		url: uri,
		success : function(){
			$(rid).hide(500);
		},
		error: function(jqXHR, textStatus, errorThrown){
			console.log(jqXHR.status);
		}  
	});
}
