<?php
function setCookies($name, $value){
	$setCookie = SetCookie::create($name)
    ->withValue($value)
    ->withPath('/')
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


function deleteCookieData($value){
	require_once 'db_connection.php';
    $db = db_connect();

	$sql_data = 'DELETE FROM session '.
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
?>