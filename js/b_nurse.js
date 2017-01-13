var dataLength; 
var baseURL = "../patient/investigation_b/blood";
var patientId;
var dataO;

/*
 * Get requests related to FBS and FBC
 * if requests available for a particular patient
 * data is inserted into the modal to be shown
 * @param {user id}
 * @return {}
 */
function process(id){
    
    if(id == null || id == "")
        patientId = $("#patient_no").val();
    else
        patientId = id;
    uri = baseURL + "/" + patientId;	
    
    $.ajax({
        type: "GET",
        url: uri,
        success: function (data) {
            data = JSON.parse(data);
            dataO = data;
            if(data !== null){
                dataLength = data.length;
                if(data.length > 0){
                    for(i = 0; i < 2; i++){
                        id1 = "#investg_raw" + (i+1);
                        id2 = "#inv_raw" + (i+1) + "_cell1";
                        id3 = "#inv_raw" + (i+1) + "_cell2";
                        id4 = "#inv_raw" + (i+1) + "_cell3 option:selected";
                        if(i < dataLength){
                            $(id1).prop("hidden", false);
                            
                            $(id2).html(data[i]['spec1']);
                        } else{
                            $(id1).prop("hidden", true);
                            $(id2).html("");
                            $(id3).val("");
                            $(id4).val("");
                        }
                    }
                }
            $("#modal_blood").modal({backdrop: "static"});   
            }
            else
                process3(patientId); 
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
function process3(id){
    url = "../../patient/profile/general/check_exist/" + id;
    $.ajax({
        type: "GET",
        url: url,
        success: function( data, textStatus, jQxhr ){
            if(data == '1'){
                $("#err_msg").html("No requests at the moment");
                $("#alert").attr('class', 'alert alert-danger alert-dismissable');
                $("#alert").show(1000).delay(5000).hide(1000);
            }
            else{
                $("#err_msg").html("Invalid Patient ID");
                $("#alert").attr('class', 'alert alert-danger alert-dismissable');
                $("#alert").show(1000).delay(5000).hide(1000);
            }
        },
        error: function( jqXhr, textStatus, errorThrown ){
            console.log( errorThrown );
        }
    });
}

/**
 * Save sample information
 * @param {}
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
                "status"       : status,
                "date"         : dataO[i]['date']
            };

            $.ajax({
                type: "POST",
                url: baseURL,
                data : JSON.stringify(objecto),
                success : function(data){
                    patientId = undefined;
                    $("#err_msg").html("Operation Completed Successfully");
                    $("#alert").attr('class', 'alert alert-success alert-dismissable');
                    $("#alert").show(1000).delay(5000).hide(1000);
                }
            });
        }
    }

    $('#patient_no').val("");
    $('#patient_no').focus();
    $('#modal_blood').modal('hide');
    ids = "#sput" + patientId;
    $(ids).hide(1000);
}

