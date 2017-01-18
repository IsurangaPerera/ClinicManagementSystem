<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all requests related to blood samples
 */
$app->get('/blood/{id}',function(Request $request, Response $response){
	header('Content-type: application/json');
	$id = $request->getAttribute('id');
	getBloodData($id);
});

/**
 * Get all information related to blood samples
 */
$app->get('/blood',function(Request $request, Response $response){
	getAllData();
});

/**
 * Post data related to blood samples
 */
$app->post('/blood',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateBloodData($json);
});

require "blood_collection_modules.php";

$app->run();

?>