<?php
class Database{

	public $connection;
	
	function __construct()
	{
		$this->connect_db();
	}

	public function connect_db(){
		$dbhost='localhost';
		$dbuser='root';
		$dbpass='';
		$dbname='accidentalassistance';
		$this->connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
		if(mysqli_connect_error()){
			die("Database Connection Failed" . mysqli_connect_error() . mysqli_connect_errno());
		}
	}

}
$database = new Database();
?>