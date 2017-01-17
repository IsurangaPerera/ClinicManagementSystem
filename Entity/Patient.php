<?php
include_once 'Connection.php';

class Patient 
{
	private $patientId;

	private $db;

	function __construct( $par1, $par2 ) {
		$conn = new Connection();
   		$this->db = $conn->getDB();
	}
	
	public function createPatient($data)
	{
		createPatientName($data['patient_name']);
		createPatientAddress($data['patient_address']);
	}
	
	private function createPatientName($data)
	{
		$sql_data = "INSERT INTO patient_name (patientId, firstname, middlename, lastname) ".
	   	   			"VALUES (?, ?, ?, ?)";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		$nic = $data['patientId'];
		$firstname = $data['firstname'];
		$middlename = $data['middlename'];
		$lastname = $data['lastname'];

		if(!$stmt->bind_param('ssss',$patientId, $firstname, $middlename, $lastname)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}

	private function createPatientAddress($data)
	{
		$sql_data = "INSERT INTO user_address (patientId, address1, address2, city) ".
	   	   			"VALUES (?, ?, ?, ?)";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		$nic = $data['patientId'];
		$address1 = $data['address1'];
		$address2 = $data['address2'];
		$city = $data['city'];

		if(!$stmt->bind_param('ssss',$patientId, $address1, $address2, $city)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}

	public function deletePatient($patientId)
	{
		$sql_data = "DELETE FROM user_login ".
	   	   			"WHERE patientId = ?";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		if(!$stmt->bind_param('s',$patientId)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}

	public function modifyUser()
	{

	}

	public function getObservations($patientId)
	{
		$sql_data = "SELECT observation.*, observation_type.* ".
				    "FROM observation ".
				    "LEFT JOIN observation_type ".
				    "ON observation.patientId = observation_type.patientId ".
				    "WHERE patientId = ?";
	
		$stmt = $this>db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);
		}

		if(!$stmt->bind_param('s', $patientId)) {
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
        	$results[] = $val;
    	}

		$stmt->close();

		return $results;
	}

	public function getTreatmentPlan($patientId)
	{
		$sql_data = "SELECT * ".
				    "FROM treatmentplan ";
	
		$stmt = $this>db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);
		}

		if(!$stmt->bind_param('s', $patientId)) {
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
        	$results[] = $val;
    	}

		$stmt->close();

		return $results;
	}

	public function getHistory($patientId) 
	{
		$history = array();
		$history[] = getObservations($patientId);
		$history[] = getTreatmentPlan($patientId);

		return $history;
	}

	public function setPatientId($id)
	{
		$this->patientId = $id;
	}

	public function setPatientId()
	{
		return $this->patientId;
	}
}

?>