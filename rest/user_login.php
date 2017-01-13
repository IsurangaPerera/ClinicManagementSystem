<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\FigRequestCookies;
use \Dflydev\FigCookies\SetCookie;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Route to handle login credentials
 * and redirect to relevant profiles
 */
$app->post("/login/init", function(Request $request, Response $response) {
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	$username = $json['user_name'];
	$pass = $json['password'];

	$result = initUser($username, $pass);

	if(!$result)
		echo "denied";
	elseif($result[0]['status'] === 'Inactive')
		echo "inactive";
	else{
		$type = $result[0]['type'];
		$id = $result[0]['nic'];
		$url = "../../../login/id/$type/$id";
		echo $url;
	}
});

$app->get("/data/{id}", function(Request $request, Response $response) {
	$id = $request->getAttribute('id');
	getData($id);
});

$app->get("/header/data", function(Request $request, Response $response) {
	$cookie = FigRequestCookies::get($request, 'USERID');
	$id = $cookie->getValue();
	getHeaderData($id);
});

function initUser($user, $pass){
	require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT type, status, nic ".
	   			"FROM user_login ".
	   			"WHERE username = ? AND password = ?";

	$stmt = $db->prepare($sql_data);
	if($stmt === false)	
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);

	if(!$stmt->bind_param('ss',$user, $pass)) 
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
	if (!$stmt->execute())
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;

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
  	$stmt->close();
  	return $results;
}

function getUserData($user, $pass){
	require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT user_login.type, user_login.nic, user_name.firstname, user_name.lastname ".
	   			"FROM user_name ".
	   			"JOIN user_login ".
	   			"ON user_name.nic = user_login.nic ".
	   			"WHERE user_login.username = ? AND user_login.password = ?";

	$stmt = $db->prepare($sql_data);
	if($stmt === false)	
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);

	if(!$stmt->bind_param('ss',$user, $pass)) 
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
	if (!$stmt->execute())
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;

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

  	$stmt->close();
	return $results;
}

function getData($id){
  require_once 'db_connection.php';
  $db = db_connect();

    $tables = array("user_name", "user_address", "user_contact", "user_data");
    $results = array("user_name"=> array(), "user_address"=> array(), "user_contact"=> array(), "user_data"=> array());

    foreach($tables as $table){
    	
    	$sql_data = 'SELECT * FROM '.$table.
    				' WHERE nic = ?';

    	$stmt = $db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);

		if(!$stmt->bind_param('s',$id)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;

		$meta = $stmt->result_metadata();
    	while ( $field = $meta->fetch_field() )
    		$parameters[] = &$row[$field->name]; 
 
   		call_user_func_array(array($stmt, 'bind_result'), $parameters);


    	while ( $stmt->fetch() ) {
        	$x = array();
        	foreach( $row as $key => $val )
        		$x[$key] = $val;
		array_push($results[$table], $x);
  	    }
  	    $parameters = array();
  	    $row = array();
  	    $stmt->close();
    }
	echo(json_encode($results));
}

function getHeaderData($id){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = "SELECT user_name.*, user_login.type, user_data.pic_path ".
				"FROM user_name ".
				"INNER JOIN user_login ".
				"ON user_name.nic = user_login.nic ".
				"INNER JOIN user_data ".
				"ON user_name.nic = user_data.nic ".
				"WHERE user_name.nic = ?";
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('s', $id)) {
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