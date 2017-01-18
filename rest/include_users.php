<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\FigRequestCookies;
use \Dflydev\FigCookies\SetCookie;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Get all data associated with all users
 */
$app->get('/all',function(Request $request, Response $response){
	getGeneralData();

});

/**
 * Set an account temporarily blocked
 */
$app->get('/inactive/{id}/{status}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	$status = $request->getAttribute('status');
	userInactive($id, $status);

});

/**
 * Check whether an account is currently blocked
 */
$app->get('/ifactive/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getStatus($id);

});

/**
 * Suspend an account by id
 */
$app->get('/suspend/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	deleteProfile($id);

});

/**
 * Add a profile picture
 */
$app->post('/add_data',function(Request $request, Response $response){

	$cookie = FigRequestCookies::get($request, 'USERID');
	$id = $cookie->getValue();

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

	addProfilePicture($id, "uploads/$file0");
});

require "include_users_modules.php";

$app->run();

?>