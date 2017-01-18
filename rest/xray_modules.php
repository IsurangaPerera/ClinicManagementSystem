<?php
function getCompletedData($id) {
	
	require_once 'db_connection.php';
 	$db = db_connect();

	$sql_data = 'SELECT * FROM investigation_type WHERE '.
				'patientId = ? AND investigation = ? AND status = ?';
	
	$stmt = $db->prepare($sql_data);
	if($stmt === false) {		
		trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);
	}

	$sp = "Chest X-Ray";
	$status = "completed";

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
?>