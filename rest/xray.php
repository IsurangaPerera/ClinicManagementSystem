<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/get_data/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getXRayData($id);
});

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

$app->post('/sputum',function(Request $request, Response $response){
	$json = $request->getBody();
	$json = json_decode($json, TRUE);
	updateSputumData($json);
});

function getXRayData($id) {
	
	require_once 'db_connection.php';
 	$db = db_connect();

	$sql_data = 'SELECT * FROM investigation_type WHERE '.
				'patientId = ? AND investigation = ? AND status = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$sp = "Chest X-Ray";
	$status = "pending";

	if(!$stmt->bind_param('sss',$id, $sp, $status)) {
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

    echo json_encode($results);
	$stmt->close();
}

function addXRayData($id, $file, $cat, $notes){
	require_once 'db_connection.php';
  	$db = db_connect();

  	print_r($data);

	$sql_data = 'UPDATE investigation_type '.
				'SET status = ?,'.
				'sample_index = ?,'.
				'note = ? '.
				'WHERE patientId = ? '.
				'AND investigation = ? '.
				'AND spec1 = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$sp = "Chest X-Ray";
	$status = "completed";

	if(!$stmt->bind_param('ssssss', $status, $file, $notes, $id, $sp, $cat)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}
$app->run();

?>