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

})

function addRow(){
	var table = document.getElementById("tble1");
	var row = table.insertRow(table.rows.length);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);

	ide1 = 'in' + addRow.curId + '0';
	ide2 = 'in' + addRow.curId + '1';
	ide3 = 'in' + addRow.curId + '2';

	var newElement1 = '<input list="complaints1" id="'+ide1+'" name="complaint" class="form-control input-sm"'
							+ 'onchange="setEnable(this.id)" style="height: 100%; cursor:pointer;" autofocus placeholder="Cough">';

	var newElement2 = '<input type="text" id="'+ide2+'" class="form-control input-sm" style="height: 100%;'
							+ 'cursor:pointer;" placeholder="24" disabled>';

	var newElement3 = '<input list="days" id="'+ide3+'" name="complaint" class="form-control input-sm"'
							+ 'style="height: 100%; cursor:pointer;" placeholder="Days" disabled>';

	cell1.innerHTML = newElement1 + cell1.innerHTML;
	cell2.innerHTML = newElement2 + cell2.innerHTML;
	cell3.innerHTML = newElement3 + cell3.innerHTML;

	addRow.curId += 1;
}

function setEnable(id){
	var id1 = '#'+id.substring(0, id.length-1)+'1';
	var id2 = '#'+id.substring(0, id.length-1)+'2';
	$(id1).prop("disabled", false).focus();
    $(id2).prop("disabled", false);
}

addRow.curId = 1;
