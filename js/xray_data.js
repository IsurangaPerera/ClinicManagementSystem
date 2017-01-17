var baseUrl2 = "../patient/xray/get_completed_data/";
var dataO2;

/**
 * Get all xray request for a user
 * with a unique id
 * id is retrieved from sessionStorage
 * @param {}
 * @return {}
 */
function loadXRayData(){
	$.ajax({
		type: "GET",
     	url: baseUrl2 + sessionStorage.getItem("patientId"),
		success: function( data, textStatus, jQxhr ){
			dataO2 = JSON.parse(data);
			handleXRayData(dataO2);
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("An error occurred");
		}
	});
}

/**
 * Create xray modal using data retrieved
 * @param {}
 * @return {}
 */
function handleXRayData(data){
	var result = "";

	for(i = 0; i < data.length; i++){
		element = '<div class="panel panel-info"><div class="panel-heading"><span>';
		heading = data[i].date + '</span><button onclick="handleXRayModal(this.id)" style="padding: 0px;" class="fa pull-right btn btn-primary"id="'+i
					+'"><i class="ion-android-exit"></i></button>' + '</div>';
		body = "";
		end = '</div>';
		result += element + heading + body + end;
	}
	$('#xray_panel').html(result);
}

/**
 * Create pdf using the xray
 * to be viewed by the doctor
 * @param {patient id}
 * @param {}
 */
function handleXRayModal(id){
	url = "../"+dataO2[id]['sample_index'];
	getImageFromUrl(url, createPDF,id);
}

var getImageFromUrl = function(url, callback,id) {
    var img = new Image();

    img.onError = function() {
        alert('Cannot load image: "'+url+'"');
    };
    img.onload = function() {
        callback(img,id);
    };
    img.src = url;
}

var createPDF = function(imgData,id) {
    var doc = new jsPDF();
    var width = doc.internal.pageSize.width;    
	var height = doc.internal.pageSize.height;
    doc.addImage(imgData, 'JPEG', 0, 0);
    str = dataO2[id]['patientId'] + " " + dataO2[id]['date']+ " " + dataO2[id]['investigation']+ " " + dataO2[id]['spec1'];
    doc.save(str);
}