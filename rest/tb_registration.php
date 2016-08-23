<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->post('/register',function(Request $request, Response $response){
	$person = $request->getBody();

	$jsonIterator = new RecursiveIteratorIterator(
		new RecursiveArrayIterator(json_decode($person, TRUE)),
		RecursiveIteratorIterator::SELF_FIRST);

	$curTable = "";
	$query = "";
	$query2 = "VALUES (";
	$a = array();
	$curKey = 0;

	foreach ($jsonIterator as $key => $val) {

		if(is_array($val)) {
			if(!is_numeric($key)){
				$tableName = $key;
				if($tableName != $curTable){
					
					$curTable = $key;
					if($query != ""){
						$query .= ")";
						$query2 .= ")";
						$temp = $query." ".$query2;
						addPatient($temp, $a);
						$a = array();
						$curKey = 0;
					}
					
					$query = "";
					$query2 = "";
					$query2 = "VALUES (";
					$query .= "INSERT INTO $tableName (";
				}

			} elseif($key > 0 && $curKey != $key) {
				$curKey = $key;
				$query .= ")";
				$query2 .= ")";
				$temp = $query." ".$query2;
				addPatient($temp, $a);
				$a = array();
				$query = "";
				$query2 = "";
				$query2 = "VALUES (";
				$query .= "INSERT INTO $tableName (";
			}
		}

		else {
			
			if($query != "INSERT INTO $tableName ("){
				$query = $query.", ";
				$query2 = $query2.", ";
			}
			
			$query = $query."$key";
			$query2 = $query2."?";
			$a[] = $val;
		}
	}

	$query .= ")";
	$query2 .= ")";
	$temp = $query." ".$query2;
	addPatient($temp, $a);
});
$app->run();

function addPatient($sql_data, $a_bind_params){
	require_once 'db_connection.php';
    $db = db_connect();
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}
	
	$a_params = array();

	$param_type = '';
	$n = count($a_bind_params);
	for($i = 0; $i < $n; $i++) {
		$param_type .= 's';
	}

	$a_params[] = & $param_type;

	for($i = 0; $i < $n; $i++) {
		$a_params[] = & $a_bind_params[$i];
	}

	call_user_func_array(array($stmt, 'bind_param'), $a_params);

	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
	
}

?>