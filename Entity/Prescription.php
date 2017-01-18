<?php
include_once 'Connection.php';
include_once 'PrescriptionItem.php';

class Prescription
{
	private $pId;
	private $prescriptionItem;
	private $date;

	private $db;

	function __construct( $par1, $par2 ) {
		$conn = new Connection();
   		$this->db = $conn->getDB();
	}
	
	public function getPrescriptionId()
	{
		return $this->pId;
	}

	public function setPrescriptionId($id)
	{
		$this->pId = $id;
	}

	public function getDate()
	{
		return $this->date;
	}

	public function setDate($date)
	{
		$this->date = $date;
	}

}

?>