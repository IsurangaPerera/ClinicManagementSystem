var dataLength; 
var baseURL = "../patient/investigations/sputum";
var patientId;

/*
 * Get requests related to sputum tests
 * if requests available for a particular patient
 * data is inserted into the modal to be shown
 * @param {}
 * @return {}
 */
function process(id){
    if(id === undefined || id === null)
        patientId = $('#patient_no').val();
    else
        patientId = id;
	uri = baseURL + "/" + patientId;	
	
    $.ajax({
    type: "GET",
    url: uri,
    success: function (data) {
    	data = JSON.parse(data);
        dataLength = data.length;
        if(data.length > 0){
        	for(i = 0; i < 4; i++){
                id1 = "#investg_raw" + (i+1);
                id2 = "#inv_raw" + (i+1) + "_cell1";
                id3 = "#inv_raw" + (i+1) + "_cell2";
                id4 = "#inv_raw" + (i+1) + "_cell3 option:selected";
                if(i < dataLength){
        		    $(id1).prop("hidden", false);
        		    $(id2).html(data[i]);
                } else{
                    $(id1).prop("hidden", true);
                    $(id2).html("");
                    $(id3).val("");
                    $(id4).val("");
                }
        	}
        	$("#modal_sputum").modal({backdrop: "static"});   
        }
    }
	});
}

/**
 * If not any requests available 
 * check if patient Id is valid and 
 * generate relevant messages
 * @param {user id}
 * @return {}
 */
function save(){
    for(i = 0; i < dataLength; i++){
        id2 = "#inv_raw" + (i+1) + "_cell1";
        spec1 = $(id2).html();
        id3 = "#inv_raw" + (i+1) + "_cell2";
        sample_index = $(id3).val();
        id4 = "#inv_raw" + (i+1) + "_cell3 option:selected";
        status = $(id4).val();

        if(sample_index !== "" && status !== "Pending"){
            objecto = {
                "patientId"    : patientId,
                "spec1"        : spec1,
                "sample_index" : sample_index,
                "status"       : status
            };

            $.ajax({
                type: "POST",
                url: baseURL,
                data : JSON.stringify(objecto),
                success : function(data){
                    patientId = undefined;
                }
            });
        }
    }
    $('#patient_no').val("");
    $('#patient_no').focus();
    $('#modal_sputum').modal('hide');
}

