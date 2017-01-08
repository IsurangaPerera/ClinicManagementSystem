<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\FigRequestCookies;
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

    saveCookieData($value, $type);
    
    $base = "../../../../";
    $url = $base . $URL_SET[$type];
	
	return $response->withRedirect($url);
});

$app->get('/', function (Request $request, Response $response) {
	
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

	$cookie = FigRequestCookies::get($request, 'USERID');

	$base = "../../../../";
    $nSuccessURL = $base . 'index.php';

	if($cookie == null){
		echo "not_logged";
		return;
	}
		
	
	$cookieVal = $cookie->getValue();
	$cookieType = getCookieType($cookieVal)[0]['type'];

	if($URL_SET[$cookieType] == null || $URL_SET[$cookieType] == ""){
		echo "not_logged";
		return;
	}

	$url = $base . $URL_SET[$cookieType];
	
	echo $url;
	//return $response->withRedirect($url);
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

function saveCookieData($cookieId, $type){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'INSERT INTO session(cookie_id, type) '.
				'VALUES (?,?)';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$cid = $cookieId;
	$type = $type;

	if(!$stmt->bind_param('ss', $cid, $type)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}

function getCookieType($value){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT type FROM session '.
				'WHERE cookie_id = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('s', $value)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$meta = $stmt->result_metadata();
    while ( $field = $meta->fetch_field() )
    	$parameters[] = &$row[$field->name]; 
 
    call_user_func_array(array($stmt, 'bind_result'), $parameters);

    while ( $stmt->fetch() ) {
        $x = array();
        foreach( $row as $key => $val )
        	$x[$key] = $val;
        $results[] = $x;
    }

	$stmt->close();

	return $results;
}

$app->run();

?>