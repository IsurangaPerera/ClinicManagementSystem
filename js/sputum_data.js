var baseUrlS = "../patient/investigations/sputum/all/";
var dataOS;
/**
 * Get all sputum data of a patient
 * @param {}
 * @return {}
 */
function loadSputumData(){
	$.ajax({
		type: "GET",
     	url: baseUrlS + sessionStorage.getItem("patientId"),
		success: function( data, textStatus, jQxhr ){
			dataOS = JSON.parse(data);
			handleDataS(dataOS);
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("An error occurred");
		}
	});
}

/**
 * Create composnents based on data acquired
 * @param {data}
 * @return {}
 */
function handleDataS(data){
	var result = "";

	for(i = 0; i < data.length; i++){
		element = '<div class="panel panel-info"><div class="panel-heading"><span>';
		heading = data[i].date + '</span><button onclick="handleModalSputum(this.id)" style="padding: 0px;" class="fa pull-right btn btn-primary"id="'+i
					+'"><i class="ion-android-exit"></i></button>' + '</div>';
		body = "";
		end = '</div>';
		result += element + heading + body + end;
	}
	$('#sputum_panel').html(result);
}

/**
 * Insert data into relevant fields
 * @param {patient Id}
 * @return {}
 */
function handleModalSputum(id){
	d = dataOS[id];

	$("#reports_id").html(d['report_id']);
	
	$("#pcp").html(d['polygenic_culture_positive']);
	$("#pcn").html(d['polygenic_culture_negative']);
	$("#asmp").html(d['afb_smear_morning_positive']);
	$("#asmn").html(d['afb_smear_morning_negative']);
	$("#fcp").html(d['fungal_culture_positive']);
	$("#fcn").html(d['fungal_culture_positive']);
	$("#asp").html(d['afb_smear_positive']);
	$("#asn").html(d['afb_smear_negative']);
	
	$('#dataModalSputum').modal('show');
}