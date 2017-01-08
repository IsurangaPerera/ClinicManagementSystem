<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\SetCookie;


require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/id/{type}/{id}', function (Request $request, Response $response) {
	
	$URL_SET = array(
		"Receptionist" => "include/Receptionist.php",
		"OPD Doctor" => "include/opd_doctor.php",
		"TB Nurse" => "include/tb_nurse.php",
		"Pharmacist" => "include/pharmacist.php",
		"Laboratory Assistant" => "include/laboratory_assistant.php",
		"Radiologist" => "include/radiologist.php",
		"Sputum Room Clerk" => "include/sputum_room_clerk.php",
		"Bleeding Room Nurse" => "include/bleeding_nurse.php",
		"Administrator" => "include/administrator.php"
	);

	$type = $request->getAttribute('type');
	$value = $request->getAttribute('id');

	$setCookie = setCookies("USERID", $value);
    $response = FigResponseCookies::set($response, $setCookie);
    
    $base = "../../../../";
    $url = $base . $URL_SET[$type];
	
	return $response->withRedirect($url);
});

$app->get('/', function (Request $request, Response $response) {

	

	return $response;
});

function setCookies($name, $value){
	$setCookie = SetCookie::create($name)
    ->withValue($value)
    ->withPath('/')
    ->withDomain('localhost')
    ->withSecure(false)
    ->withHttpOnly(false);

    return $setCookie;
}


$app->run();

?>