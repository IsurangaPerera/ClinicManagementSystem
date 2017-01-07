<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getAllData($id);
});

function getAllData($id) {
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = "SELECT fbs.*, investigation_type.date ".
				"FROM fbs ".
				"LEFT JOIN report_details ".
				"ON fbs.report_id = report_details.report_id ".
				"LEFT JOIN investigation_type ".
				"ON report_details.sample_index = investigation_type.sample_index ".
				"WHERE investigation_type.patientId = ? ".
				"AND !(investigation_type.sample_index = ?)";
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$nn = "NULL";
	if(!$stmt->bind_param('ss', $id, $nn)) {
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