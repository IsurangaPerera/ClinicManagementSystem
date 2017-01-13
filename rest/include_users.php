<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Dflydev\FigCookies\FigResponseCookies;
use \Dflydev\FigCookies\FigRequestCookies;
use \Dflydev\FigCookies\SetCookie;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/all',function(Request $request, Response $response){
	getGeneralData();

});

$app->get('/inactive/{id}/{status}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	$status = $request->getAttribute('status');
	userInactive($id, $status);

});

$app->get('/ifactive/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getStatus($id);

});

$app->get('/suspend/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	deleteProfile($id);

});

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

function getGeneralData(){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT user_login.nic, user_login.type, user_login.status, user_name.*, '.
				'user_contact.email, user_data.designation, user_data.department '.
				'FROM user_login '.
				'LEFT JOIN user_name '.
				'ON user_login.nic = user_name.nic '.
				'LEFT JOIN user_contact '.
				'ON user_login.nic = user_contact.nic '.
				'LEFT JOIN user_data '.
				'ON user_login.nic = user_data.nic';
	
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

function userInactive($id, $status){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'UPDATE user_login '.
				'SET status = ? '.
				'WHERE nic = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('ss', $status, $id)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}

function getStatus($id){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'SELECT user_login.status '.
				'FROM user_login '.
				'WHERE nic = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('s', $id)) {
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

function deleteProfile($id){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'DELETE FROM user_login '.
				'WHERE nic = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('s', $id)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}

function addProfilePicture($id, $file){
	require_once 'db_connection.php';
  	$db = db_connect();

	$sql_data = 'UPDATE user_data '.
				'SET pic_path = ? '.
				'WHERE nic = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	if(!$stmt->bind_param('ss', $file, $id)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}
	
	if (!$stmt->execute()) {
		echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	$stmt->close();
}

$app->run();

?>