<?php
require_once 'DB.php';
require_once 'C:/Users/SHADAB/vendor/autoload.php';
use Twilio\Rest\Client;
class Fetchdet extends Database{

	function __construct()
	{

		session_start();
		$this->connect_db();
		$this->checkvno();
	}

	function checkvno(){
		$cno=$_POST['contactno'];
		$name=$_POST['name'];
		echo $name;
		$latitude=$_POST['latitude'];
		$longitude=$_POST['longitude'];
		$sql = "INSERT INTO `helper_info`(`Contact_No`, `Name`, `Vehicle_Regno`) VALUES ('$cno','name',NULL)";
		$sql2="SELECT contact, 111.045 * DEGREES(ACOS(COS(RADIANS(70.891648))* COS(RADIANS(lat))* COS(RADIANS(lng) - RADIANS('19.071090'))+ SIN(RADIANS('73.023331'))* SIN(RADIANS(lat))))AS distance_in_km FROM police_records ORDER BY distance_in_km ASC LIMIT 0,1";	
		$res=mysqli_query($this->connection,$sql);
		$res2=mysqli_query($this->connection,$sql2);
		if($res2)
		{
			while ($row1=mysqli_fetch_array($res2)) {
				$police=$row1['contact'];
			}
		}
		if($res){
			// shadab
			$account_sid = 'enter twilio ssid here';
			$auth_token = 'enter auth token here';
			$twilio_number = "enter twilio number here";
			$to_number2 = "enter to number here"; //hospital
			$messages="HelloAccidenthasoccuredat".$_SESSION['vehreg'];
			$client = new Client($account_sid, $auth_token);
			try{
				$client->account->calls->create(  
					    $to_number2,
					    $twilio_number,
					   	array(
					        "url" => "generate url and paste it here=".$messages
					    )
				);
			}
			catch (exception $e){
				$client->account->calls->create(  
				    $to_number2,
				    $twilio_number,
				   	array(
				        "url" => "generate url and paste it here=".$messages
				    )
				);
			}
	
		}
		else{
			echo "false";
		}
	}
}
$checkvno=new Fetchdet();
?>
