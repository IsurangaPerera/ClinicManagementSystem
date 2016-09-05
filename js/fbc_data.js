var baseUrl = "../report/fbc/";
var dataO;
function loadFbcData(){
	$.ajax({
		type: "GET",
     	url: baseUrl + sessionStorage.getItem("patientId"),
		success: function( data, textStatus, jQxhr ){
			dataO = JSON.parse(data);
			handleData(dataO);
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("An error occurred");
		}
	});
}

function handleData(data){
	var result = "";

	for(i = 0; i < data.length; i++){
		element = '<div class="panel panel-info"><div class="panel-heading"><span>';
		heading = data[i].date + '</span><button onclick="handleModal(this.id)" style="padding: 0px;" class="fa pull-right btn btn-primary"id="'+i
					+'"><i class="ion-android-exit"></i></button>' + '</div>';
		body = "";
		end = '</div>';
		result += element + heading + body + end;
	}
	$('#fbc_panel').html(result);
}

function handleModal(id){
	for(val in dataO[id]){
		if(val === 'date')
			continue;
		else{
			temp = '#' + val;
			$(temp).html(dataO[id][val]);
		}
	}
	$('#dataModal').modal('show');
}