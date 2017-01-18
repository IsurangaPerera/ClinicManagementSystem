<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all data associated with a prescription by Id
 */
$app->get('/prescription/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getPrescriptionData($id);
});

/**
 * Get all prescription information
 */
$app->get('/prescription',function(Request $request, Response $response){
	getAllData();
});

/**
 * Update a prescription
 */
$app->post('/prescription',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateMedicationData($json);
});

require "medications_modules.php";

$app->run();

?>