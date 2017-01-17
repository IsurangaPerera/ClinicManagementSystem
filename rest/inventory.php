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

$app->get('/getdata/product/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getProductById($id);
});

$app->get('/getdata/sim_product/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getSimProductById($id);
});

$app->get('/getdata/allbyname/{name}',function(Request $request, Response $response){
    $name = $request->getAttribute('name');
    getAllByName($name);
});

$app->get('/getdata/sim_name/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getSimProductByName($id);
});

$app->get('/getdata/batch_name/{id}',function(Request $request, Response $response){
    $id = $request->getAttribute('id');
    getProductByBatch($id);
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

    $file1 = "uploads/$file0";

    $file0 = $_SERVER['DOCUMENT_ROOT']."/uploads/$file0";

    try{
    	$files['file']->moveTo($file0);
    } catch(Exception $e){
    
    }

    echo($file1);
    
});

function getProductData() {
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT * ".
                "FROM inventory_product ".
                "GROUP BY code";

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

function getProductById($id) {
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT * ".
                "FROM inventory_product ".
                "WHERE code = ?";

    $stmt = $db->prepare($sql_data);
    if($stmt === false) {       
        trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
    }

    if(!$stmt->bind_param('s',$id)) 
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

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

function getSimProductById($id) {
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT * ".
                "FROM inventory_product ".
                "WHERE code LIKE ?";

    $stmt = $db->prepare($sql_data);
    if($stmt === false) {       
        trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
    }

    $id = "$id%";
    if(!$stmt->bind_param('s',$id)) 
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

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

function getSimProductByName($id) {
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT SUM(quantity) AS total ".
                "FROM inventory_data ".
                "WHERE p_name = ? OR p_code = ? OR formula = ?";

    $stmt = $db->prepare($sql_data);
    if($stmt === false) {       
        trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
    }

    if(!$stmt->bind_param('sss',$id,$id,$id)) 
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

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

    echo json_encode($results[0]['total']);
    $stmt->close();
}

function getAllByName($name) {
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT name ".
                "FROM inventory_product ".
                "WHERE name LIKE ? ".
                "OR code LIKE ? ".
                "OR formulation LIKE ?";

    $stmt = $db->prepare($sql_data);
    if($stmt === false) {       
        trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
    }

    $id = "$name%";
    if(!$stmt->bind_param('sss',$id,$id,$id)) 
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

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
            $results[] = $val;
    }

    echo json_encode($results);
    $stmt->close();
}

function getProductByBatch($id){
    require_once 'db_connection.php';
    $db = db_connect();

    $sql_data = "SELECT * ".
                "FROM inventory_data ".
                "WHERE batch_no LIKE ?";

    $stmt = $db->prepare($sql_data);
    if($stmt === false) {       
        trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
    }

    $id = "$id%";
    if(!$stmt->bind_param('s',$id)) 
        echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;

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