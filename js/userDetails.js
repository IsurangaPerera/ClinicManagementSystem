var nic;

/**
 * Get data related to all tb patients
 * @param {}
 * @return {}
 */
function getData(){
	nic = $('#nicc').html().trim();

	$.ajax({
		type: "GET",
     	url: "../../user/data/"+nic,
		success: function( data, textStatus, jQxhr ){
			handleData(JSON.parse(data));
		},
		error: function( jqXhr, textStatus, errorThrown ){
			alertify.error("An error occurred");
		}
	});
}

/**
 * Insert acquired data into relevant fields
 * @param {data}
 * @return {}
 */
function handleData(data){
	try{
		name2 = data['user_name'][0];
		address = data['user_address'][0];
		contact = data['user_contact'][0];
		dt = data['user_data'][0];
		$('#uid').val(name2['nic']);
		$('#title').val(dt['title']);
		$('#designation').val(dt['designation']);
		$('#firstname').val(name2['firstname']);
		$('#middlename').val(name2['middlename']);
		$('#lastname').val(name2['lastname']);
		$('#birthdate').val(dt['birthdate']);
		$('#gender').val(dt['gender']);
		$('#civilstatus').val(dt['civilstatus']);
		$('#department').val(dt['department']);
		$('#address1').val(address['address1']);
		$('#address2').val(address['address2']);
		$('#city').val(address['city']);
		$('#phone').val(contact['phone_home']);
		$('#mobile').val(contact['phone_mobile']);
		$('#email').val(contact['email']);
	} catch(err){
	}
}