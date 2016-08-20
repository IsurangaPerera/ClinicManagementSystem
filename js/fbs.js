var objecto = {
	"report_details": [],
	"fbs"           : []
};

function save(){
	report_id = $('#report_id').val();
	sample_index = $('#sample_index').val();
	result = $('#result_fbs').val();

	flag = true;

	if(report_id === ""){
		alertify.error("Report Id is required");
		flag = false;
	}

	if(sample_index === ""){
		alertify.error("Sample Index is required");
		flag = false;
	}

	if(result === ""){
		alertify.error("Result field can't be empty");
		flag = false;
	}

	if(flag)
		postData(report_id, sample_index, result);
}

function postData(id, index, result){
	objecto.report_details.push({
		"sample_index" : index,
		"report_id"    : id,
		"date"         : getDate()
	});

	objecto.fbs.push({
		"report_id"    : id,
		"result"       : result
	});

	$.ajax({
		type: "POST",
     	url: "../report/fbs/register",
		data: JSON.stringify(objecto),
		success: function( data, textStatus, jQxhr ){
			alertify.success("Operation Successful");
			$('#report_id').val("");
			$('#sample_index').val("");
			$('#result_fbs').val("");
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("Try Again");
		}
	});
}
