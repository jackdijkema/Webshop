<?php
//Database
class Databases {

	private $host;
	private $user;
	private $pass;
	private $db;
	
// Making connection to database.
	protected function conjnect() {
		$this->host = "localhost"; 
		$this->user = "root";
		$this->pass = "";
		$this->db   = "database";
		
	 	$conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		return $conn;
	}







?>
