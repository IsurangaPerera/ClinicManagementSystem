$(function(){
	$('#btn_complaints').click(function(){
		$('#complaints').modal({backdrop: "static"});
		return false;
	})

	$('#btn_investigations').click(function(){
		$('#investigations').modal({backdrop: "static"});
		return false;
	})

	$('#btn_medications').click(function(){
		$('#medications').modal({backdrop: "static"});
		return false;
	})

	$('#btn_observations').click(function(){
		$('#observations').modal({backdrop: "static"});
		return false;
	})

	$('#in00').change(function(){
    	$('#in01').prop("disabled", false).focus();
    	$('#in02').prop("disabled", false).focus();
    
	});
})

function addRow(){
	var table = document.getElementById("tble1");
	var row = table.insertRow(table.rows.length);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);

	var newElement1 = '<input list="complaints1" id="in00" name="complaint" class="form-control input-sm"'
							+ 'style="height: 100%; cursor:pointer;" autofocus placeholder="Cough">';

	var newElement2 = '<input type="text" id="in01" class="form-control input-sm" style="height: 100%;'
							+ 'cursor:pointer;" placeholder="24">';

	var newElement3 = '<input list="days" id="in02" name="complaint" class="form-control input-sm"'
							+ 'style="height: 100%; cursor:pointer;" placeholder="Days">';

	cell1.innerHTML = newElement1 + cell1.innerHTML;
	cell2.innerHTML = newElement2 + cell2.innerHTML;
	cell3.innerHTML = newElement3 + cell3.innerHTML;
}
