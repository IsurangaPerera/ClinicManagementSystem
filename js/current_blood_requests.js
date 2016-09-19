var baseURL = "../patient/investigation_b/blood";
var table = document.getElementById("blood_req_table");
var patientId, date, investigation, prepared;
var arr = new Map();

function processData(){
	$.ajax({
		type: "GET",
		url: baseURL,
		success: function (data) {
			try{
				data = JSON.parse(data);
				dataLength = data.length;
				
				if(data.length > 0){
					for(i = 0; i < dataLength; i++){
						patientId = data[i]['patientId'];
						date = data[i]['date'];
						investigation = data[i]['investigation'];
						prepared = data[i]['prepared'];

						if(arr.get(patientId) != 1){
							arr.set(patientId, 1);
							createTable();
						}
					}
				}
			} catch(err){
			}
		}
	});
	setTimeout('processData()', 10000);
}

function createTable(){
	id = "sput" + patientId;
	ids = "#sput" + patientId;

	$(ids).show(1000);
	
	inHtml = '<a onclick="process(this.id)" class="btn btn-primary" id="' + patientId + '"><i class="fa fa-plus"></i> View Request </a>';
	inHtml2 = '<span class="label label-danger">  pending  </span>';
	var row = table.insertRow(table.rows.length);
	row.setAttribute('id', id);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);

	cell1.innerHTML = date + cell1.innerHTML;
	cell2.innerHTML = patientId + cell2.innerHTML;
	cell3.innerHTML = investigation + cell3.innerHTML;
	cell4.innerHTML = prepared + cell4.innerHTML;
	cell5.innerHTML = inHtml2 + cell5.innerHTML;
	cell6.innerHTML = inHtml + cell6.innerHTML;
}