<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get Investigation details by id
 */
$app->get('/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getAllData($id);
});

require "fbc_data_handler_modules.php";

$app->run();

?>