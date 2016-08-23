<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/general/{id}',function(Request $request, Response $response){
	$id = $request->getAttribute('id');
	getGeneralData($id);

});

function getGeneralData($id){
  require_once 'db_connection.php';
  $db = db_connect();

    $tables = array("name", "address", "contact", "data", "medication", "treatmentplan");
    $results = array("name"=> array(), "address"=> array(), "contact"=> array(), "data"=> array(), "medication"=> array(), "treatmentplan"=> array());

    foreach($tables as $table){
    	if($table == "medication" || $table == "treatmentplan")
    		$sql_data = 'SELECT * FROM '.$table.
    				    ' WHERE patientId = ?';
    	else
    		$sql_data = 'SELECT * FROM patient_'.$table.
    					' WHERE patientId = ?';

    	$stmt = $db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $db->error, E_USER_ERROR);

		if(!$stmt->bind_param('s',$id)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;

		$meta = $stmt->result_metadata();
    	while ( $field = $meta->fetch_field() )
    		$parameters[] = &$row[$field->name]; 
 
   		call_user_func_array(array($stmt, 'bind_result'), $parameters);


    	while ( $stmt->fetch() ) {
        	$x = array();
        	foreach( $row as $key => $val )
        		$x[$key] = $val;
        	//$results[$table] = $x;
		array_push($results[$table], $x);
  	    }
  	    $parameters = array();
  	    $row = array();
  	    $stmt->close();
    }
	echo(json_encode($results));
}

$app->run();

?>
