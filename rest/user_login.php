<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\FigRequestCookies;
use \Dflydev\FigCookies\SetCookie;

require '../vendor/autoload.php';

$app = new \Slim\App;

session_start();

$app->get("/login/{user}/{pass}", function(Request $request, Response $response) {
	$username = $request->getAttribute('user');
	$password = $request->getAttribute('pass');

	try 
	{
		if ($username && $password) 
		{
			$user = getUserData($username, $password);
			session_start();

			$_SESSION['user_id'] =  $user[0]['nic'];
			$_SESSION['user_name'] =  $user[0]['firstname']." ".$user[0]['lastname'];
			$_SESSION['user_type'] =  $user[0]['type'];		

			$status = 'success';
			$message = 'Logged in successfully.';
		} 
		else
		{
			$status = false;
			$message = 'Could not log you in. Please try again.';
		}

	}
	catch (Exception $e) 
	{
		$status = 'danger';
		$message = $e->getMessage();
	}
	$response = array(
		'status' => $status,
		'message' => $message,
		'user_id' => $_SESSION['user_id'],
		'user_name' => $_SESSION['user_name'],
		'user_type' => $_SESSION['user_type']
	);
	header("location: /include/opd_doctor.php");
	echo json_encode($response);
	

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

	$sql_data = "SELECT user_name.*, user_login.type ".
				"FROM user_name ".
				"LEFT JOIN user_login ".
				"ON user_name.nic = user_login.nic ".
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