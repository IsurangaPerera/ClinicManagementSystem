<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

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

$app->run();

?>