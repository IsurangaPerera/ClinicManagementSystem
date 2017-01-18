<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all data related to a xray request
 */
$app->get('/get_data/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getXRayData($id);
});

/**
 * Post an xray with its image
 */
$app->post('/add_data/{id}/{cat}/{notes}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	$cat = $request->getAttribute('cat');
	$notes = $request->getAttribute('notes');

	$uploads_dir = '/uploads';

	$files = $request->getUploadedFiles();
	if (empty($files)) {
        echo('Expected a newfile');
    }

    $file = $files['file']->{'file'};
    $file0 = $files['file']->getClientFileName();
    $file0 = uniqid().$file0;

    $file1 = $_SERVER['DOCUMENT_ROOT']."/uploads/$file0";

    try{
    	$files['file']->moveTo($file1);
    } catch(Exception $e){
    }

	addXRayData($id, "uploads/$file0", $cat, $notes);
});

/**
 * Get all sputum information
 */
$app->post('/sputum',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateSputumData($json);
});

/**
 * Get completed xray information
 */
$app->get('/get_completed_data/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getCompletedData($id);
});

require "xray_modules.php";

$app->run();

?>