<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get sputum requests by Id
 */
$app->get('/sputum/{id}',function(Request $request, Response $response){
	header('Content-type: application/json');
	$id = $request->getAttribute('id');
	getSputumData($id);
});

/**
 * Get all sputum information
 */
$app->get('/sputum/all/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getAllSputumData($id);
});

/**
 * Get all data
 */
$app->get('/sputum',function(Request $request, Response $response){
	getAllData();
});

/**
 * Update Sputum details
 */
$app->post('/sputum',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateSputumData($json);
});

require "sputum_collection_modules.php";

$app->run();

?>