<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/get_data',function(Request $request, Response $response){
	getDoctorsData();
});

$app->get('/get_all_data',function(Request $request, Response $response){
	getAllData();
});


function getDoctorsData(){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT user_name.*, user_data.department, user_data.designation '.
				'FROM user_name '.
				'LEFT JOIN user_data '.
				'ON user_name.nic = user_data.nic '.
				'WHERE user_name.nic IN '.
				'(SELECT cookie_id FROM session)';
				
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
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

function getAllData(){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT user_name.*, user_data.department, user_data.designation '.
				'FROM user_name '.
				'LEFT JOIN user_data '.
				'ON user_name.nic = user_data.nic '.
				'WHERE user_data.designation IN (?,?,?,?)';	
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}
	
	$sp1 = "OPD Doctor";
	$sp2 = "Specialist";
	$sp3 = "Consultant";
	$sp4 = "Radiologist";

	if(!$stmt->bind_param('ssss',$sp1,$sp2,$sp3,$sp4)) {
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