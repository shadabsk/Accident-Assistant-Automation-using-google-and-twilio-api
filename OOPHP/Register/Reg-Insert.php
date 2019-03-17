<?php
require_once'DB.php';

class Register extends Database{

	function __construct()
	{
		$this->connect_db();
		$this->sregister();
	}

	function sregister(){
		if($_POST)
		{
			$uname=$_POST['user'];
			$upass=$_POST['pass'];
			$fname=$_POST['fname'];
			$mname=$_POST['mname'];
			$lname=$_POST['lname'];
			$dob=$_POST['dob'];
			$adno=$_POST['adno'];
			$phno=$_POST['contactno'];
			$add=$_POST['address'];
			$bgrp=$_POST['bgrp'];
			$VehicleNo=$_POST['VehicleNo'];
			$fname1=$_POST['fname1'];
			$mname1=$_POST['mname1'];
			$lname1=$_POST['lname1'];
			$phno1=$_POST['contactno1'];
			$fname2=$_POST['fname2'];
			$mname2=$_POST['mname2'];
			$lname2=$_POST['lname2'];
			$phno2=$_POST['contactno2'];
			
			//Age Logic
			$ndob=substr($_POST['dob'],0,4);
			$cdate=date('Y-m-d');
			$today=substr($cdate,0,4);
			$age=$today-$ndob;


			//Images
			date_default_timezone_set('Asia/Kolkata');
			$file_name=$_FILES["uploadimage"]["name"];
			$temp_name=$_FILES["uploadimage"]["tmp_name"];
			$imgtype=$_FILES["uploadimage"]["type"];
			$imagename=$uname.'_'.date("d-m-y");
			$directory="../../Images/User/". $uname ."/";
			if(!is_dir($directory)) {
		    	mkdir($directory,"0777",true);
			}

			//bloodgrp
			$sqlf="SELECT BLDGRPID from bloodgroup where BLDGRPLabel='$bgrp'";	
			$res=mysqli_query($this->connection,$sqlf);
			while ($row=mysqli_fetch_array($res)) {
				$bgrpid=$row['BLDGRPID'];
			}

			$directory2="Images/User/". $uname ."/";
			$target_path = $directory.$imagename.image_type_to_extension(IMAGETYPE_PNG);
			if(move_uploaded_file($temp_name, $target_path))
			{
				$target_path2=$directory2.$imagename.image_type_to_extension(IMAGETYPE_PNG);
				$sql="INSERT INTO `users` (`Username`,`Password`,`Fname`,`Mname`,`Lname`,`DOB`,`Age`,`AdharNo`,`Contact`,`Address`,`User_Image`,`BLDGRPID`) VALUES ('$uname','$upass','$fname','$mname','$lname','$dob','$age','$adno','$phno','$add','$target_path2','$bgrpid')";

				$sql1="INSERT INTO `user_reg` (`Vehicle_Regno`,`Emergency_Fname1`,`Emergency_Mname1`,`Emergency_Lname1`,`Emergency_Contact1`,`Emergency_Fname2`,`Emergency_Mname2`,`Emergency_Lname2`,`Emergency_Contact2`,`Username`) VALUES ('$VehicleNo','$fname1','$mname1','$lname1','$phno1','$fname2','$mname2','$lname2','$phno2','$uname')";

				$res=mysqli_query($this->connection,$sql);
				$res1=mysqli_query($this->connection,$sql1);
				if($res)
				{
					echo 'true';
				}
				else 
				{
					echo 'false';
				}
			}
			else
			{
				echo "false";
			}
		}
		else
		{
			echo 'false';
		}
	}
}
$Register=new Register();
?>