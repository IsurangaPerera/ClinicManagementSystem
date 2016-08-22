<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/fbs/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getFbsData($id);

});

function getFbsData(){
	$server_name = "localhost";
	$user_name = "root";
	$password = "Tally456";
	$db_name = "chestclinic";

	$db = new mysqli($server_name, $user_name, $password, $db_name);
	if($db->connect_errno > 0)
		die('Unable to connect to database [' . $db->connect_error . ']');

	$sql_data = ""
}


$app->run();

?>