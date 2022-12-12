<?php
include("Connect.php");
error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Book My Ride :: Suzuki Motorcycles India Private Limited</title>  
<link rel="stylesheet" href="BMR.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-----navigationBar----->
    <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.html"><img src="Images/suzuki-logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-left">
      <li class="nav-item active">
        <a class="nav-link" href="motorcycles.html">MOTORCYCLES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="scooters.html">SCOOTERS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="bigbikes.html">BIG BIKES</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="offroad.html">OFF ROAD</a>
      </li>
         <li class="nav-item">
       <a class="nav-link" href="ContactUs.html">CONTACT US</a>
      </li>
         <li class="nav-item">
        <a class="nav-link" href="BookMyRide.php">BOOK ONLINE</a>
      </li>
            <ul>
                <a href="https://www.facebook.com/Suzuki2Wheelers"><li><i class="fa fa-facebook"></i></li></a>
                 <a href="https://twitter.com/suzuki2wheelers"><li><i class="fa fa-twitter"></i></li></a>
                 <a href="https://www.youtube.com/user/Suzuki2Wheeler"><li><i class="fa fa-youtube"></i></li></a>
                <a href="https://www.instagram.com/suzuki2wheelers/"><li><i class="fa fa-instagram"></i></li></a>
            </ul>
    </ul>
  </div>
</nav>
    </section>
<section id="form"> 
<h1>FILL THE FORM BELOW</h1><br><br>
    <div class="booking-form">
	<form name="booking" action="" method="GET"><b>
		Name :<input type="text" name="username"><br><br>
		Email :<input type="email" name="useremail"><br><br>
		Mobile Number :<input type="number" name="mobileno"><br><br>
		Select Product :
		<select name="product">
			<OPTION value="">Select Your Vehicle</OPTION>
            <OPTION value="G">GIXXER</OPTION>
			<OPTION value="SF">2019 GIXXER SF</OPTION>
			<OPTION value="I">INTRUDER</OPTION>
			<OPTION value="A">ACCESS 125</OPTION>
			<OPTION value="B">BURGMAN STREET</OPTION>
			<OPTION value="H">HAYABUSA</OPTION>
			<OPTION value="G750">GSX S-750</OPTION>
			<OPTION value="V">V-STORM 750XT</OPTION>
			<OPTION value="G1000">GSX R-1000</OPTION>
			<OPTION value="R250">RM-Z250</OPTION>
			<OPTION value="R450">R,-Z450</OPTION>
			<OPTION value="D50">DR-Z50</OPTION>
		</select><br><br>
		Address :
		<br>
		<input type="text" name="address">
		<br><br>
        Pin Code :<input type="number" name="pincode"></b><br><br>
		<br><br>
		<input type="submit" name="submit" value="BOOK">
		<input type="reset" value="Clear"/><br><br><hr>
        <?php
        if($_GET['submit']){
           // echo"Fill the above Form ";
            $username = $_GET['username'];
            $email = $_GET['useremail'];
            $mob = $_GET['mobileno'];
            $product = $_GET['product'];
            $address = $_GET['address'];
            $pin = $_GET['pincode'];
            $q="INSERT INTO userdata VALUES('$username','$email','$mob','$pin','$product','$address')";
            $data=mysqli_query($conn,$q);
            if($data){
                echo"Congratulations!!! Booking Done";
            }
            else{
                echo"Something Went Wrong :( Booking Not Done";
            }
        }
        ?>
	</form>  
    </div>    
</section>
    <!-----Footer----->
<section id="footer">
        <div class="container">
        <div class="row">
            <div class="col-md-3 footer-text text-center">
                <div class="img-box">    
                </div>
            <h2>About SMIPL</h2>    
             <ul>
                 <li><a href="Introduction.html">Introduction</a></li>
                 <li><a href="#">Facilities</a></li>                
            </ul>
            </div>
            <div class="col-md-3 footer-text text-center">
                <div class="img-box">
                </div>
            <h2>PRODUCTS</h2>    
            <ul>
                <li><a href="motorcycles.html">Bikes</a></li>
                <li><a href="scooters.html">Scooters</a></li>
                <li><a href="bigbikes.html">Big Bikes</a></li>
                <li><a href="offroad.html">Off Road</a></li>
            </ul>
            </div>
            <div class="col-md-3 footer-text text-center">
                <div class="img-box">
                </div>
            <h2>MEDIA</h2>
            <ul>
                <li><a href="Awards.html">Awards</a></li>
                <li><a href="Gallery.html">Gallery</a></li>
            </ul>
            </div>
            <div class="col-md-3 footer-text text-center">
                <div class="img-box">         
                </div>
            <h2>CONTACT</h2>  
             <ul>
                <li><a href="ContactUs.html">Contact Us</a></li>
                <li><a href="TermsofUse.html">Terms of Use</a></li>              
            </ul>
            </div>
        </div>
    </div>
</section>
<section id="credits">
    <div class="container text-center">
    <p> Made By Mintu Sharma using HTML and CSS</p>
    </div>
</section>
</body>
</html>