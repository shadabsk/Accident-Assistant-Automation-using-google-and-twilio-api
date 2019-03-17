<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<meta content="" name="keywords">
  	<meta content="" name="description">
  	<link href="img/favicon.png" rel="icon">
  	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  	<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="Css/style.css" rel="stylesheet">
  	<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<link href="lib/animate/animate.min.css" rel="stylesheet">
  	<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
 	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
 	<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
	<link href="img/favicon-register.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="Css/slide2.css">
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
	<script src="Js/jquery-3.3.1.min.js"></script>
	<script src="Js/register.js"></script>
  	<script src="Js/misc.js"></script>
	<style>
		header
		{
			background-color: #000000;
			
		}
		img
	 	{
		  	background-repeat: none;
		  	width: 100%;
		  	height: 100%;
		  	position: fixed;
		  	border-radius: 0px;
	 	 }
	  	textarea#addcheck{
		    font-size: 16px;
		    resize: none;
		    height: 5em;
		    transition: height .3s ease-out;
	  	}
	    textarea:focus#addcheck
	    {
	   		 height: 9em;
	 	}
		.container
		{
			top: 5em;
			position: relative;
			border-radius: 10px;
			background-color: white;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			margin-bottom: 9%;
		}

		.security
		{
			background: url(Images/Registration/bk_Reg.jpg);
			height: 620px;
			position: fixed;
			background-size: 100%;
			left: 0;
			right: 0;
			top: 0;
			z-index: -1;
			opacity: 0.7;
			background-repeat: no-repeat;
		}

		#submit:hover
		{
			cursor:pointer;
		}

		#camera_wrapper, #show_saved_img{float:left; width: 650px;}
		#abcwata
		{
			top: 5em;
			border-radius: 10px;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			margin-bottom: 10pt;
		}

		#abcwata .form-control
		{
			border-right: 0;
			border-left: 0;
			border-top: 0;
		}
		.btn-bs-file{
  			  position:relative;
		}
		.btn-bs-file input[type="file"]{
  			position: absolute;
		    top: -9999999;
		    filter: alpha(opacity=0);
		    opacity: 0.9;
		    width:0;
		    height:0;
		    outline: none;
		    cursor: inherit;
		    background-color: #18d26e;
		}
		.btn btn-success
		{
			margin-left: 20%;	
			width: 100%;
		}
		.btn-bs-file btn btn-lg btn-success
		{
			background-color: #18d26e;
		}
	</style>
</head>
<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Accident Assistant Automation</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">Home</a></li>
          <li><a href="Helpcenter.php">Help Center</a></li>
          <li class="menu-active"><a href="Register.php">Registration</a></li>
          <li><a href="index.php">About Us</a></li>
          <li><a href="index.php">Contact</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
	<div class="back">
		<img src="img/register-form.png">
	<div class='security'>

	</div><br>
	<div class="container col-lg-9 col-md-6 col-sm-4 ">
		<form method="post" id="sign2" action="" enctype="multipart/form-data">
			<fieldset class="col-lg-12 col-md-6 col-sm-6">
				<center>
					<legend>
						Registration
					</legend>
				</center>
				<div class="form-group" >
    				<input type="text" id="user" name="user"  class="form-control" required=""  placeholder="Username">
    				<br>
    				<span id="usererr"></span>
  				</div>
  				<div class="form-group">
					<input type="password" id="pass" name="pass"   class="form-control"	required="" placeholder="Password" onkeyup="return passwordChanged();"/>
					<span id="strength"></span>
    				
				</div>
  				<div class="form-group">
					<input type="password" id="cpass"   class="form-control" required="" placeholder="Confirm Password" />
					<br>
					<span id="cpasserr"></span>
				</div>	
				<div class="form-inline">
					<input type="text" name="fname"  class="form-control " style="width:32%;" required="" placeholder="First Name" />
					<input type="text" name="mname" class="form-control" style="margin-left: 2%;width: 32%;"  placeholder="Middle Name">
					<input type="text" name="lname" class="form-control" style="margin-left: 2%;width: 32%;" placeholder="Last Name">
				</div><br>
				<div class="form-group">
					<label for="dob">&nbspDate Of Birth</label>
					<input type="date" name="dob" class="form-control"></input>
				</div>
				<div class="form-group">
					<input type="tel" name="adno" class="form-control" style="margin-top: 2%;" required="" placeholder="Enter Adhar Number"  maxlength="12" id="adno">
					<br>
					<span id="adnomsg" ></span>
				</div>
				<div class="form-group">
					<input type="tel" name="contactno" class="form-control"  required="" placeholder="Contact Number" pattern="^[789]\d{9}$" title="Contact Number is invalid">
				</div>
				<div class="form-group">
					<textarea  name="address" id="textrem" placeholder="Address" class="form-control noresize" style="margin-top:2%;"></textarea>
					<h6 id="count_message" style="text-align: right;" ></h6>
				</div>
				<div class="form-group">
					<label for="pp">Profile Picture</label>
					<input type="file" name="uploadimage"  class="btn-bs-file btn btn-lg btn-success">
					<br><br><br>
				</div>
				<div class="form-group">
					<?php
					error_reporting(0);
					session_start();
					require_once 'OOPHP/Register/Fetch.php';
					$res1 = $Fetch->bgroup();
					if($res1)
					{
						echo "<select name='bgrp' class='form-control'>";
						echo "<option>Select Blood Group</option>";
						while($r = mysqli_fetch_assoc($res1)){
							echo "<option value= ". $r['BLDGRPLabel'] .">".$r['BLDGRPLabel']."</option>";
						}
						echo "</select>"."<br>";
					}
					?>
				</div>
				<div style="width: 100%;border-bottom: 04px dotted black;">
		</div>
		<br>
			<div id='abcwata'>
				<legend style="text-align: center;">Vehicle and Emergency Details</legend>
				<div class="form-group">
					<input type="text" name="VehicleNo" placeholder="Enter vehicle number" class="form-control">
				</div>
				<div class="form-inline">
					<input type="text" name="fname1"  class="form-control " style="width:23%;" required="" placeholder="First Name" />
					<input type="text" name="mname1" class="form-control" style="margin-left: 2%;width: 23%;"  placeholder="Middle Name">
					<input type="text" name="lname1" class="form-control" style="margin-left: 2%;width: 23%;" placeholder="Last Name">
					<input type="tel" name="contactno1" class="form-control" style="margin-left: 2%;width: 23%;" required="" placeholder="Contact Number" pattern="^[789]\d{9}$" title="Contact Number is invalid">
				</div><br>
				<div class="form-inline">
					<input type="text" name="fname2"  class="form-control " style="width:23%;" required="" placeholder="First Name" />
					<input type="text" name="mname2" class="form-control" style="margin-left: 2%;width: 23%;"  placeholder="Middle Name">
					<input type="text" name="lname2" class="form-control" style="margin-left: 2%;width: 23%;" placeholder="Last Name">
					<input type="tel" name="contactno2" class="form-control" style="margin-left: 2%;width: 23%;" placeholder="Contact Number" pattern="^[789]\d{9}$" title="Contact Number is invalid">
				</div>				
				<br>
			</div>
				<input type="submit" id="submit" class="btn btn-success" value="Register">
				<div id="regmsg"></div>
				<br>
			</fieldset>
		</form>
	</div>
	<script type="text/javascript">
		function passwordChanged() {
			var strength = document.getElementById('strength');
			var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
			var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
			var enoughRegex = new RegExp("(?=.{6,}).*", "g");
			var pwd = document.getElementById("pass");
			if (pwd.value.length==0) {
				strength.innerHTML = 'Type Password';
			} 
			else if (false == enoughRegex.test(pwd.value)) {
				strength.innerHTML = 'More Characters';
			} 
			else if (strongRegex.test(pwd.value)) {
				strength.innerHTML = '<span style="color:green">Strong!</span>';
			} 
			else if (mediumRegex.test(pwd.value)) {
				strength.innerHTML = '<span style="color:orange">Medium!</span>';
			} 
			else {
			strength.innerHTML = '<span style="color:red">Weak!</span>';
			}
		}
	</script>
	</div>
	<script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="Js/main.js"></script>
</body>
</html>
