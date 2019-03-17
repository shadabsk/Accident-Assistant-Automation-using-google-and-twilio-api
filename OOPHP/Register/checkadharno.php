<?php
require_once 'DB.php';

class CheckAdhar extends Database{

	function __construct()
	{
		$this->connect_db();
		$this->chkadhar();
	}

	function chkadhar(){
		if($_POST)
		{
			if(isset($_POST['adno']))
			{
				$adno=$_POST['adno'];
				$query="SELECT * FROM Users WHERE AdharNo='$adno'";
				$result=mysqli_query($this->connection,$query);
				while ($row=mysqli_fetch_array($result)) {
					$dbadno=$row['AdharNo'];
				}
				if($adno==$dbadno)
					echo 'false';
				else
					echo "true";
			}
		}
	}
}
$CheckAdhar=new CheckAdhar();
?>