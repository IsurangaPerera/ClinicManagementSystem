<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/name/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "name");
});

$app->get('/phone/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "phone");
});

$app->get('/id/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "patientId");
});

$app->get('/nic/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "nic");
});

function getAllData($keyword, $cat) {
	require_once 'db_connection.php';
    $db = db_connect();

    if($cat === "name"){
    	$sql_data = "SELECT patient_name.patientId, patient_name.firstname, patient_name.lastname, patient_data.nic, patient_data.dob ".
				"FROM patient_name ".
				"LEFT JOIN patient_data ".
				"ON patient_name.patientId = patient_data.patientId ".
				"WHERE patient_name.firstname = ? ".
				"OR patient_name.middlename = ? ".
				"OR patient_name.lastname = ?";

		$stmt = $db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
		}

		if(!$stmt->bind_param('sss', $keyword, $keyword, $keyword)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}

    } elseif($cat === "phone"){
    	$sql_data = "SELECT patient_name.patientId, patient_name.firstname, patient_name.lastname, patient_data.nic, patient_data.dob ".
				"FROM patient_name ".
				"LEFT JOIN patient_data ".
				"ON patient_name.patientId = patient_data.patientId ".
				"LEFT JOIN patient_contact ".
				"ON patient_data.patientId = patient_contact.patientId ".
				"WHERE patient_contact.phone_office = ? ".
				"OR patient_contact.phone_home = ? ".
				"OR patient_contact.phone_mobile = ?";

		$stmt = $db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
		}

		if(!$stmt->bind_param('sss', $keyword, $keyword, $keyword)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
    } else{
		$sql_data = "SELECT patient_name.patientId, patient_name.firstname, patient_name.lastname, patient_data.nic, patient_data.dob ".
					"FROM patient_name ".
					"LEFT JOIN patient_data ".
					"ON patient_name.patientId = patient_data.patientId ".
					"WHERE patient_data.".$cat." = ? ";

		$stmt = $db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
		}

		if(!$stmt->bind_param('s', $keyword)) {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
	}


	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$meta = $stmt->result_metadata();
    while ( $field = $meta->fetch_field() )
    	$parameters[] = &$row[$field->name]; 
 
    call_user_func_array(array($stmt, 'bind_result'), $parameters);

    while ( $stmt->fetch() ) {
        $x = array();
        foreach( $row as $key => $val )
        	$x[$key] = $val;
        $results[] = $x;
    }

    echo json_encode($results);
	$stmt->close();
}

$app->run();

?>