<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/getdata',function(Request $request, Response $response){
	getAllData();
});

$app->get('/getdata/expiry',function(Request $request, Response $response){
	getExpiryData();
});

$app->get('/getdata/product',function(Request $request, Response $response){
    getProductData();
});

$app->post('/product',function(Request $request, Response $response){
	$uploads_dir = '/uploads';

	$files = $request->getUploadedFiles();
	if (empty($files)) {
        echo('Expected a newfile');
    }

    $file = $files['file']->{'file'};
    $file0 = $files['file']->getClientFileName();
    $file0 = uniqid().$file0;

    $file0 = $_SERVER['DOCUMENT_ROOT']."/uploads/$file0";

    try{
    	$files['file']->moveTo($file0);
    } catch(Exception $e){
    }

    echo($file0);
    
});

function getProductData() {
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT p_code,p_name,formula,brand_name ".
                "FROM inventory_data ".
                "GROUP BY p_code";

    $stmt = $db->prepare($sql_data);
    if($stmt === false) {       
        trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
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

    echo json_encode($results);
    $stmt->close();
}


function getAllData() {
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = "SELECT * FROM inventory_data ".
				"WHERE expiry > CURRENT_DATE()";

	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
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

    echo json_encode($results);
	$stmt->close();
}

function getExpiryData() {
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = "SELECT * FROM inventory_data ".
				"WHERE expiry <= CURRENT_DATE()";

	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
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

    echo json_encode($results);
	$stmt->close();
}

$app->run();

?>