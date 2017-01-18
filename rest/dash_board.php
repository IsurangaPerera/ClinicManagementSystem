<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all doctors' infrmation
 */
$app->get('/get_data',function(Request $request, Response $response){
	getDoctorsData();
});

/**
 * Get all user information
 */
$app->get('/get_all_data',function(Request $request, Response $response){
	getAllData();
});

require "dash_board_modules.php";

$app->run();

?>