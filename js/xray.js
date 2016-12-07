var id;
function checkAvailability() {
	id = $("#keyword").val().trim();
	$.ajax({
		type: "GET",
     	url: "../patient/xray/get_data/"+id,
		success: function( data, textStatus, jQxhr ){
			try{
				applyData(JSON.parse(data));
			} catch(err) {
				$('#err_msg').html("No requests at the moment");
				$("#alert").attr("class", "alert alert-danger alert-dismissable");
				$("#alert").show(1000).delay(5000).hide(1000);
			}	
		},
		error: function( jqXhr, textStatus, errorThrown ){
			
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
				$('#err_msg').html("Operation Successful");
				$("#alert").attr("class", "alert alert-success alert-dismissable");
				$("#alert").show(1000).delay(5000).hide(1000);
			},
			error: function(jqXHR, textStatus, errorThrown)
			{

			}
		});
	} else {
	}
}