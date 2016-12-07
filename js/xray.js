var id;
function checkAvailability() {
	id = $("#keyword").val().trim();
	$.ajax({
		type: "GET",
     	url: "../patient/xray/get_data/"+id,
		success: function( data, textStatus, jQxhr ){
			if(data !== null)
				applyData(JSON.parse(data));
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alert( errorThrown );
		}
	});
}

function applyData(data) {
	options = "";
	for(i = 0; i < data.length; i++)
		options += '<option value="' + i + '">' + data[i]['spec1'] + '</option>';
	$("#xray_cat").html(options);
	$('#myModal').modal({backdrop: "static"});
}

function addXRay() {
	alert(id);
	var formData = new FormData();

	if($("#prod_image")[0].files[0] !== null) {
		formData.append('file', $("#prod_image")[0].files[0]);
		$cat = $("#xray_cat option:selected").html();
		$notes = $("#note").val();

		$.ajax({
			url: "../patient/xray/add_data/"+id + '/' + $cat + '/' + $notes,
			type: 'POST',
			data: formData,
			cache: false,
			processData: false,
			contentType: false,
			success: function(data, textStatus, jqXHR)
			{
				$('#myModal').modal({backdrop: "hide"});
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert("Failure");
				alert(jqXHR);
				alert(textStatus);
				alert(errorThrown);
			}
		});
	} else {
	}
}