var baseURL = "../../users/all";
var dataO = null;

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

function setValues(data){
	var table = document.getElementById("u_list");
	for(i = 0; i < data.length; i++){
		var row = table.insertRow(table.rows.length);
		cell1 = row.insertCell(0);
		cell2 = row.insertCell(1);
		cell3 = row.insertCell(2);
		cell4 = row.insertCell(3);
		cell5 = row.insertCell(4);
		cell6 = row.insertCell(5);
		cell7 = row.insertCell(6);

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

		cell6.innerHTML = data[i]['status'] + cell6.innerHTML;

		url2 = '../../users/edit/' + data[i]['nic'];
		url3 = '../../users/inactive' + data[i]['nic'];
		id2 = '<a href="' + url2 + '">Edit</a>&nbsp|&nbsp;<a href="' + url3 + 
			  ' class="delete">InActive</a>';
		cell7.innerHTML =  id2 + cell7.innerHTML;
	}
}
