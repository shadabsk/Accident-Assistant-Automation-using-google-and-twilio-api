<?php
require_once 'DB.php';

class CheckUser extends Database{

	function __construct()
	{
		$this->connect_db();
		$this->chkuser();
	}

	function chkuser(){
		if($_POST)
		{
			if(isset($_POST['user']))
			{
				$user=$_POST['user'];
				$query="SELECT * FROM users WHERE Username='$user'";
				$result=mysqli_query($this->connection,$query);
				while ($row=mysqli_fetch_array($result)) {
					$dbuser=$row['Username'];
				}
				if($user==$dbuser)
					echo 'false';
				else
					echo "true";
			}
		}
	}
}
$CheckUser=new CheckUser();
?>