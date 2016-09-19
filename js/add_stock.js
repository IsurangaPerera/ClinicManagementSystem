var warning = false;
var objecto = {
	"inventory_data"    : []
};
var table;
function saveStock(){
	p_code   = $("#p_code").val();
	p_name   = $("#p_name").val();
	formula  = $("#formula").val();
	dose     = $("#dose").val();
	batch_no = $("#batch_no").val();
	quantity = $("#quantity").val();
	expiry   = $("#expiry").val();

	if(p_code === "")
		showMessage("Product Code Required");
	
	if(p_name === "")
		showMessage("Product Name Required");

	if(batch_no === "")
		showMessage("Batch Number Required");

	if(quantity === "")
		showMessage("Quantity Required");

	if(expiry === "")
		showMessage("Expiry Date Required");

	if(warning){
		$("#alert").attr("class", "alert alert-danger alert-dismissable");
		$("#alert").show(1000).delay(5000).hide(1000);
		return;
	} else{
		objecto.inventory_data.push({
			"date"     : getDate(),
			"p_code"   : p_code,
			"p_name"   : p_name,
			"formula"  : formula,
			"dose"     : dose,
			"batch_no" : batch_no,
			"quantity" : quantity,
			"expiry"   : expiry
		});

		$.ajax({
			type: "POST",
			url: "../patient/tb/register",
			data: JSON.stringify(objecto),
			success: function( data, textStatus, jQxhr ){
				$("#err_msg").html("Stock added successfully");
				$("#alert").attr("class", "alert alert-success alert-dismissable");
				$("#tble_add_stock tr").each(function () {
					$('td', this).each(function () {
						$(this).find(":input").val("");
					});
				});
				$("#alert").show(1000).delay(5000).hide(1000);
				$('#modal_stock').modal('hide');
				addToTable(objecto.inventory_data);
				objecto.inventory_data = [];
			},
			error: function( jqXhr, textStatus, errorThrown ){
				$("#err_msg").html("An Error Occurred");
				$("#alert").attr("class", "alert alert-danger alert-dismissable");
			}
		});
	}
}

function showMessage(message){
	msg = $('#err_msg').html() + message + '<br>';
	$('#err_msg').html(msg);
	warning = true;
}

function addToTable(arr){
	table = document.getElementById('tble_stock');

	var row   = table.insertRow(table.rows.length);
	var cell1 = row.insertCell(0);
	var cell2 = row.insertCell(1);
	var cell3 = row.insertCell(2);
	var cell4 = row.insertCell(3);
	var cell5 = row.insertCell(4);
	var cell6 = row.insertCell(5);
	var cell7 = row.insertCell(6);
	var cell8 = row.insertCell(7);
	var cell9 = row.insertCell(8);

	cell1.innerHTML = arr[0]['date'] + cell1.innerHTML;
	cell2.innerHTML = arr[0]['p_code'] + cell2.innerHTML;
	cell3.innerHTML = arr[0]['p_name'] + cell3.innerHTML;
	cell4.innerHTML = arr[0]['formula'] + cell4.innerHTML;
	cell5.innerHTML = arr[0]['dose'] + cell5.innerHTML;
	cell6.innerHTML = arr[0]['batch_no'] + cell6.innerHTML;
	cell7.innerHTML = arr[0]['quantity'] + cell7.innerHTML;
	cell8.innerHTML = arr[0]['expiry'] + cell8.innerHTML;
	id2 = '<a href="#">Edit</a>&nbsp|&nbsp;<a href="#" class="delete">Remove</a>';
	cell9.innerHTML = id2 + cell9.innerHTML;
}