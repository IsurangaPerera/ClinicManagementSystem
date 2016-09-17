<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/blood/{id}',function(Request $request, Response $response){
	header('Content-type: application/json');
	$id = $request->getAttribute('id');
	getBloodData($id);
});

$app->get('/blood',function(Request $request, Response $response){
	getAllData();
});

$app->post('/blood',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateBloodData($json);
});

function getBloodData($id) {
	$json = array();
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT * FROM investigation_type WHERE '.
				'patientId = ? AND investigation = ? '.
				'AND sample_index IS NULL';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$sp = "Blood";

	if(!$stmt->bind_param('ss',$id, $sp)) {
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
    $fbc = false;
    $esr = false;

    if(sizeof($results) > 2){
    	for($x = sizeof($results)-1; $x > -1; $x--){
			if($results[$x]['spec1'] == "FBC" && $fbc == false)
    			$fbc = true;
    		elseif($results[$x]['spec1'] == "ESR" && $esr == false)
    			$esr = true;
    		else
    			unset($results[$x]);
    	}
    	$results = array_values($results);
    }

    echo json_encode($results);
	$stmt->close();
}

function updateBloodData($json){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'UPDATE investigation_type '.
				'SET status = ?,'.
				'sample_index = ? '.
				'WHERE patientId = ? '.
				'AND investigation = ? '.
				'AND spec1 = ? '.
				'AND date = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$sp = "Blood";

	if(!$stmt->bind_param('ssssss', $json['status'], $json['sample_index'], $json['patientId'], $sp, $json['spec1'], $json['date'])) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}

function getAllData() {
	$json = array();
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT * '.
				'FROM investigation '.
				'WHERE patientId in ('.
				'SELECT patientId FROM investigation_type '.
				'WHERE status = ?) '.
				'AND investigation = ? '.		
				'GROUP BY patientId DESC';
				
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$pending = "Pending";
	$invest = "Blood";

	if(!$stmt->bind_param('ss', $pending, $invest)) {
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