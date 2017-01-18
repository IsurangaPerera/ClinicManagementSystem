<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\FigRequestCookies;
use \Dflydev\FigCookies\SetCookie;

require '../vendor/autoload.php';

$app = new \Slim\App;

/**
 * Route to handle login credentials
 * and redirect to relevant profiles
 */
$app->post("/login/init", function(Request $request, Response $response) {
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	$username = $json['user_name'];
	$pass = $json['password'];

	$result = initUser($username, $pass);

	if(!$result)
		echo "denied";
	elseif($result[0]['status'] === 'Inactive')
		echo "inactive";
	else{
		$type = $result[0]['type'];
		$id = $result[0]['nic'];
		$url = "../../../login/id/$type/$id";
		echo $url;
	}
});

/**
 * Get data associated with a user
 */
$app->get("/data/{id}", function(Request $request, Response $response) {
	$id = $request->getAttribute('id');
	getData($id);
});

/**
 * Check session information
 */
$app->get("/header/data", function(Request $request, Response $response) {
	$cookie = FigRequestCookies::get($request, 'USERID');
	$id = $cookie->getValue();
	getHeaderData($id);
});

require "user_login_modules.php";

$app->run();

?>