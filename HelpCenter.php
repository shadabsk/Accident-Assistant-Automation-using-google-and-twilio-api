<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Help Center</title>
	<link rel="stylesheet" type="text/css" href="Css/bootstrap.css">
	<script src="Js/jquery-3.3.1.min.js"></script>
	<script src="Js/FetchDet.js"></script>
	 <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/help.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="Css/style.css" rel="stylesheet">
  	<style>
  		#header{
  			background-color: #000000;
  		}
  textarea#addcheck{
    font-size: 16px;
    resize: none;
    height: 5em;
    transition: height .3s ease-out;
  }
    textarea:focus#addcheck{
    height: 9em;
  }
	.container{
	top: 15em;
	border-radius: 20px;
	position: relative;
	background-color: white;
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	margin-bottom: 30pt;

	}

	.security{
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

	#submit:hover{
		cursor:pointer;
	}

	#camera_wrapper, #show_saved_img{float:left; width: 650px;}
	#abcwata{
	top: 5em;
	
	box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
	margin-bottom: 10pt;
	}

	#abcwata .form-control{
	border-right: 0;
	border-left: 0;
	border-top: 0;
	}
	img
	 	{
		  	background-repeat: none;
		  	width: 100%;
		  	height: 100%;
		  	position: fixed;
		  	border-radius: 0px;
	 	 }
  </style>
  <script src="Js/jquery-2.2.4.min.js"></script>
  <button onclick="getLocation()"></button>
  <div id="output"></div>
  <!--Script For Getting Current Langitude & Latitude-->
  <script type="text/javascript">
    var x = document.getElementById('output');
    var m1="";
    function getLocation()
    {
      if(navigator.geolocation)
      {
        navigator.geolocation.getCurrentPosition(showPosition);
      }
      else
      {
        x.innerHTML = "Browse Not Supporting";
      }
    }
    function showPosition(position)
    {
      var locAPI = "https://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true"+"&key=Enter api key here";

      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      document.getElementById("latitude").value = latitude;
      document.getElementById("longitude").value = longitude;
      $.get({
        url : locAPI,
        success: function(data){
          console.log(data);
            m1=x.innerHTML = data.results[1].address_components[0].long_name+", "
            m1+=x.innerHTML += data.results[2].address_components[0].long_name+", "
            m1+=x.innerHTML += data.results[3].address_components[0].long_name+", "
            m1+=x.innerHTML += data.results[4].address_components[0].long_name+", "
            m1+=x.innerHTML += data.results[5].address_components[0].long_name+", ";
            m1+=x.innerHTML += data.results[6].address_components[0].long_name+", ";
            m1+=x.innerHTML += data.results[7].address_components[0].long_name+", ";
            m1+=x.innerHTML += data.results[8].address_components[0].long_name;
        }
      });
    }
  </script>
</head>
<body onPageShow="getLocation()">
  <!--==========================
    Header
  ============================-->
  	<div class="back">
		<img src="img/help-center.jpg">
  <header id="header">
    <div class="container-fluid">
      <?php
      $variable= "<script>document.writeln(m1);</script>";
      ?>
      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">Accident Assistant Automation</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">Home</a></li>
          <li class="menu-active"><a href="Helpcenter.php">Help Center</a></li>
          <li><a href="Register.php">Registration</a></li>
          <li><a href="index.php">About Us</a></li>
          <li><a href="index.php">Contact</a></li>

        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
	<div class="container col-lg-6 col-md-4 col-sm-4 ">
		<form method="post" id="sign" action="" enctype="multipart/form-data">
			<fieldset class="col-lg-12 col-md-6 col-sm-6">
				<center>
					<legend><br>
						Help A Needy , Save Life And Become Hero
					</legend>
				</center>
				<div class="form-inline" >
            <input type="text" name="currentloc" value="<?php echo"".$_SESSION['vehreg']."";?>" hidden="">
            <input type="text" name="latitude" id="latitude" hidden="">
            <input type="text" name="longitude" id="longitude" hidden="">
    				<input type="text" id="VehicleNo" name="VehicleNo" style='width:60%; margin-left: 30pt;'class="form-control" required=""  placeholder="Please Enter the Vehicle Number" />
    				<input type='submit' id='subm' class="btn btn-success" value="Submit" style='width:100pt; margin-left:10pt; background-color: #18d26e;' />
  				</div>
          <a href="without.php" class="ref1 btn btn-link" style="margin-left: 30px;">No Vehicle?</a>
  				<span id="regmsg"></span>
  				<br>
  			</fieldset>
  			<div id="result" style="display:none;">			
			</div>
  		</form>
  	</div>
</div>
</body>
</html>
