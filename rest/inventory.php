<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all data associated with stocks
 */
$app->get('/getdata',function(Request $request, Response $response){
	getAllData();
});

/**
 * Get all data associated with expired stocks
 */
$app->get('/getdata/expiry',function(Request $request, Response $response){
	getExpiryData();
});

/**
 * Get all data associated with products
 */
$app->get('/getdata/product',function(Request $request, Response $response){
    getProductData();
});

/**
 * Get all data of a particular product
 */
$app->get('/getdata/product/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getProductById($id);
});

/**
 * Get all data associated with products
 */
$app->get('/getdata/sim_product/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getSimProductById($id);
});

/**
 * Get all data associated with products bu name
 */
$app->get('/getdata/allbyname/{name}',function(Request $request, Response $response){
    $name = $request->getAttribute('name');
    getAllByName($name);
});

/**
 * Get all data associated with products by id
 */
$app->get('/getdata/sim_name/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getSimProductByName($id);
});

$app->get('/getdata/batch_name/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getProductByBatch($id);
});

/**
 * Add an image of a product
 */
$app->post('/product',function(Request $request, Response $response){
	$uploads_dir = '/uploads';

	$files = $request->getUploadedFiles();
	if (empty($files)) {
        echo('Expected a newfile');
    }

    $file = $files['file']->{'file'};
    $file0 = $files['file']->getClientFileName();
    $file0 = uniqid().$file0;

    $file1 = "uploads/$file0";

    $file0 = $_SERVER['DOCUMENT_ROOT']."/uploads/$file0";

    try{
    	$files['file']->moveTo($file0);
    } catch(Exception $e){
    
    }

    echo($file1);
    
});

require "inventory_modules.php";

$app->run();

?>