<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get patient information by name
 */
$app->get('/name/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "name");
});

/**
 * Get patient information by phone
 */
$app->get('/phone/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "phone");
});

/**
 * Get patient information by id
 */
$app->get('/id/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "patientId");
});

/**
 * Get patient information by nic
 */
$app->get('/nic/{keyword}',function(Request $request, Response $response){
	$keyword = $request->getAttribute('keyword');
	getAllData($keyword, "nic");
});

require "search_m_patient_modules.php";

$app->run();

?>