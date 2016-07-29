$(function(){
	$('#btn_complaints').click(function(){
		$('#complaints').modal({backdrop: "static"});
		return false;
	})

	$('#btn_investigations').click(function(){
		$('#investigations').modal({backdrop: "static"});
		return false;
	})

	$('#btn_medications').click(function(){
		$('#medications').modal({backdrop: "static"});
		return false;
	})

	$('#btn_observations').click(function(){
		$('#observations').modal({backdrop: "static"});
		return false;
	})
})