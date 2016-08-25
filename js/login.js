var baseUrl = 'user/login/opddoctor/opddoctor';

function logIn(){
	user = $('#username').val();
	pass = $('#password').val();

	$.ajax({
		type: "GET",
		url: baseUrl,
		success : function(data){
			alert(JSON.parse(data));
		}
	});
}