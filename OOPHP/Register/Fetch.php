<?php
require_once('DB.php');
	
	class Fetch extends Database{

		function __construct()
		{
			$this->connect_db();

		}

		 public function bgroup(){
			
			$sql = "SELECT BLDGRPLabel FROM `bloodgroup`";
			$res = mysqli_query($this->connection, $sql);
			return $res;
		}
		
	}
$Fetch=new Fetch();
?>