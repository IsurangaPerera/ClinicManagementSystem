<?php
include_once 'Connection.php';

class User 
{
	private $code;
	private $name;

	private $db;

	function __construct( $par1, $par2 ) {
		$conn = new Connection();
   		$this->db = $conn->getDB();
	}
	
	public function createUser($data)
	{
		createUserLogin($data['user_login']);
		createUserName($data['user_name']);
		createUserAddress($data['user_address']);
	}

	private function createUserLogin($data)
	{
		$sql_data = "INSERT INTO user_login (nic, type, username, password, status) ".
	   	   			"VALUES (?, ?, ?, ?, ?)";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		$nic = $data['nic'];
		$type = $data['type'];
		$username = $data['username'];
		$password = $data['password'];
		$status = $data['status'];

		if(!$stmt->bind_param('sssss',$nic, $type, $username, $password, $status)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}
	
	private function createUserName($data)
	{
		$sql_data = "INSERT INTO user_name (nic, firstname, middlename, lastname) ".
	   	   			"VALUES (?, ?, ?, ?)";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		$nic = $data['nic'];
		$firstname = $data['firstname'];
		$middlename = $data['middlename'];
		$lastname = $data['lastname'];

		if(!$stmt->bind_param('ssss',$nic, $firstname, $middlename, $lastname)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}

	private function createUserAddress($data)
	{
		$sql_data = "INSERT INTO user_address (nic, address1, address2, city) ".
	   	   			"VALUES (?, ?, ?, ?)";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		$nic = $data['nic'];
		$address1 = $data['address1'];
		$address2 = $data['address2'];
		$city = $data['city'];

		if(!$stmt->bind_param('ssss',$nic, $address1, $address2, $city)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}

	public function deleteUser($nic)
	{
		$sql_data = "DELETE FROM user_login ".
	   	   			"WHERE nic = ?";

		$stmt = $this->db->prepare($sql_data);
		if($stmt === false)	
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);

		if(!$stmt->bind_param('s',$nic)) 
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	
		if (!$stmt->execute())
			echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		}

		$stmt->close();
	}

	public function modifyUser()
	{

	}

	public function getRole($nic)
	{
		$sql_data = "SELECT type ".
				    "FROM user_login ".
				    "WHERE nic = ?";
	
		$stmt = $this>db->prepare($sql_data);
		if($stmt === false) {		
			trigger_error('Wrong SQL: ' . $sql_data . ' Error: ' . $this->db->error, E_USER_ERROR);
		}

		if(!$stmt->bind_param('s', $nic)) {
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
        		$results[] = $val;
    		}

		$stmt->close();

		return $results;
	}
}

?>