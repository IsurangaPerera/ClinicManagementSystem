<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all information related to a particular patient
 */
$app->get('/general/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getGeneralData($id);
});

/**
 * Check if patient exists
 */
$app->get('/general/check_exist/{id}',function(Request $request, Response $response){
  $id = $request->getAttribute('id');
  checkExist($id);
});

require "patient_profile_modules.php";

$app->run();

?>
