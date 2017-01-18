var objecto = {
	"report_details": [],
	"sputum"        : []
};

/**
 * Sputum Collection data validation
 * @param {}
 * @return {}
 */
function save(){
	report_id = $('#report_id').val();
	sample_index = $('#sample_index').val();

	flag = true;

	if(report_id === ""){
		alertify.error("Report Id is required");
		flag = false;
	}

	if(sample_index === ""){
		alertify.error("Sample Index is required");
		flag = false;
	}

	if(flag)
		postData(report_id, sample_index);
}

/**
 * Send data to server
 * @param {id, index}
 * @return {}
 */
function postData(id, index){
	sp1p = $("#sp1p").val();
	sp1n = $("#sp1n").val();

	sp2p = $("#sp2p").val();
	sp2n = $("#sp2n").val();

	sp3p = $("#sp3p").val();
	sp3n = $("#sp3n").val();

	sp4p = $("#sp4p").val();
	sp4n = $("#sp4n").val();

	objecto.report_details.push({
		"sample_index" : index,
		"report_id"    : id,
		"date"         : getDate()
	});

	objecto.sputum.push({
		"report_id"                  : id,
		"polygenic_culture_positive" : sp1p,
		"polygenic_culture_negative" : sp1n,
		"afb_smear_morning_positive" : sp2p,
		"afb_smear_morning_negative" : sp2n,
		"afb_smear_positive"         : sp3p,
		"afb_smear_negative"         : sp3n,
		"fungal_culture_positive"    : sp4p,
		"fungal_culture_negative"    : sp4n
	});

	$.ajax({
		type: "POST",
     	url: "../report/fbs/register",
		data: JSON.stringify(objecto),
		success: function( data, textStatus, jQxhr ){
			alertify.success("Operation Successful");
			$('#report_id').val("");
			$('#sample_index').val("");
			for(i = 1; i < 5; i++){
				ind1 = '#sp'+i+'p'; 
				ind2 = '#sp'+i+'n';

				$(ind1).val("");
				$(ind2).val("");
			}
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("Try Again");
		}
	});
}
