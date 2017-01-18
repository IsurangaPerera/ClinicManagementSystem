<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get FBS requests by patient Id
 */
$app->get('/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getAllData($id);
});

require "fbs_data_handler_modules.php";

$app->run();

?>