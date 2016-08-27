<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/prescription/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getPrescriptionData($id);
});

$app->get('/prescription',function(Request $request, Response $response){
	getAllData();
});

$app->post('/prescription',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateMedicationData($json);
});

function getPrescriptionData($id) {
	require_once 'db_connection.php';
 	$db = db_connect();

	$sql_data = 'SELECT date, drug, dosage FROM medication WHERE '.
				'patientId = ? AND status = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$par1 = $id;
	$par2 = "NOT ISSUED";

	if(!$stmt->bind_param('ss',$par1, $par2)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
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

function updateMedicationData($json){
	require_once 'db_connection.php';
  	$db = db_connect();

	$sql_data = 'UPDATE medication '.
				'SET instruction = ?,'.
				'status = ? '.
				'WHERE patientId = ? '.
				'AND drug = ? '.
				'AND date = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('sssss', $json['instruction'], $json['status'], $json['patientId'], $json['drug'], $json['date'])) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}

function getAllData() {
	require_once 'db_connection.php';
  	$db = db_connect();

	$sql_data = 'SELECT * '.
				'FROM medication '.
				'WHERE status = ? ';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$par1 = "NOT ISSUED";

	if(!$stmt->bind_param('s', $par1)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
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