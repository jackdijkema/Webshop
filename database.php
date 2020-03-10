<?php
//Database
class Databases {

	var $host = "localhost";
	var $user = "root";
	var $pass = "";
	var $db   = "Database";
	
	var $tbname = klantgegevens;

	public $con;
		
	public function connect()
	{
		$this->con - mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		
		if (!$this->con)
		{
			echo 'Database Connection error'. msqli_connect_error($this->con);
		}
		return $corn;
	}
	
}
?>
