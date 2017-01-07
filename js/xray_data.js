var baseUrl2 = "../patient/xray/get_completed_data/";
var dataO2;
function loadXRayData(){
	$.ajax({
		type: "GET",
     	url: baseUrl + sessionStorage.getItem("patientId"),
		success: function( data, textStatus, jQxhr ){
			dataO2 = JSON.parse(data);
			handleXRayData(dataO2);
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("An error occurred");
		}
	});
}

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

function handleXRayModal(id){
	for(val in dataO2[id]){
		if(val === 'date')
			continue;
		else{
			temp = '#' + val;
			$(temp).html(dataO[id][val]);
		}
	}
	$('#dataModal').modal('show');
}