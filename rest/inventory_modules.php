<?php
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
?>