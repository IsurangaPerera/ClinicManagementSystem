<?php

class Connection
{ 
	private $host;
	private $user;
	private $pass;
	private $database;
	
	private $db;

	public function __construct(connection $con) {
        $this->db = new mysqli($host, $user, $pass, $database);
		
		if($this->db->connect_errno > 0)
			die('Unable to connect to database [' . $db->connect_error . ']');
    }

    public function getDB(){
    	return $this->db;
    }
}