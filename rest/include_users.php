<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/all',function(Request $request, Response $response){
	getGeneralData();

});

function getGeneralData(){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT user_login.nic, user_login.type, user_login.status, user_name.*, '.
				'user_contact.email, user_data.designation, user_data.department '.
				'FROM user_login '.
				'LEFT JOIN user_name '.
				'ON user_login.nic = user_name.nic '.
				'LEFT JOIN user_contact '.
				'ON user_login.nic = user_contact.nic '.
				'LEFT JOIN user_data '.
				'ON user_login.nic = user_data.nic';
	
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

$app->run();

?>