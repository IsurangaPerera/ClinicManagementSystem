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
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = ""
}


$app->run();

?>