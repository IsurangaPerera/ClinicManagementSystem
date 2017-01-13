
/**
 * Update profile picture of the user
 */
function addProfilePic() {
	var formData = new FormData();

	if($("#prodd_image")[0].files[0] !== null) {
		formData.append('file', $("#prodd_image")[0].files[0]);
		$cat = $("#xray_cat option:selected").html();
		$notes = $("#note").val();

		$.ajax({
			url: "../users/add_data",
			type: 'POST',
			data: formData,
			cache: false,
			processData: false,
			contentType: false,
			success: function(data, textStatus, jqXHR)
			{
				$('#err_msg').html("Operation Successful");
				$("#alert").attr("class", "alert alert-success alert-dismissable");
				$("#alert").show(1000).delay(5000).hide(1000);
			},
			error: function(jqXHR, textStatus, errorThrown)
			{
				alert(jqXHR.status);
			}
		});
	} else {
	}
}