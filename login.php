<!DOCTYPE html>
<html lang="en">


<head>
   
    
    <?php
    session_start();
    ?>

	<title>Jofawebdev - LOGIN </title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
	<!-- The above meta tags *must* come first in the head; any other head content must come *after* these tags -->


<!-- Open Graph Metatags --> 
  	      <link rel = "icon" type = "image/jpg" href = "https://www.jofawebdev.com/images/web-design-development-blog.jpg">

          <meta property="og:title" content="Jofawebdev: Website Development | IT Consulting | Digital Marketing">

            <meta property="og:type" content="website" />
            
         
          <meta property="og:description" content="Because every business is unique, we provide specialized website development and digital marketing services to meet your requirements.
           Finding new and better solutions to business challenges fascinates and motivates us.">

          <meta property="og:image" content="https://www.jofawebdev.com/images/web-design-development-blog.jpg"> 
          
          <link rel="shortcut icon" href="https://www.jofawebdev.com/images/web-design-development-blog.jpg" type="image/x-icon">
  

	<!-- Create Database  -->
<?php
//connection
$host = "localhost";
$username = "root";
$password = "";
$database="jofawebdev";
// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

	
	//check if can login again
	if(isset($_SESSION['attempt_again'])){
		$now = time();
		if($now >= $_SESSION['attempt_again']){
			unset($_SESSION['attempt']);
			unset($_SESSION['attempt_again']);
		}
	}

	//set disable if three login attempts has been made
	$disable = '';
	if(isset($_SESSION['attempt']) && $_SESSION['attempt'] >= 3){
		$disable = 'disabled';
	}
	
?>


	<!-- Navbar on Top -->
  <div class="w3-top">
            <div class="w3-bar w3-white w3-wide w3-padding w3-card" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-white w3-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i></a>
            
                <a href="index" class="w3-bar-item w3-button w3-large"><b><span class="w3-text-theme">JOFAWEB</span><span class="w3-text-red">DEV</b></a>

                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right">
                    <a href="index" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Home</b></a>
                    <a href="About" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>About</b></a>
                    
                    <div class="w3-dropdown-hover w3-hide-small w3-hide-medium">
                        <a href="Services"><button class="w3-button"> <b>Services</b> <i class="fa fa-caret-down"></i></button></a>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-black">
                            <a href="web design & development" class="w3-bar-item w3-button">Web Design & Development</a>
                            <a href="e-commerce website development" class="w3-bar-item w3-button">E-commerce Website</a>
                            <a href="digital marketing" class="w3-bar-item w3-button">Digital Marketing</a>
                            <a href="search engine optimization" class="w3-bar-item w3-button">Search Engine Optimization</a>
                            <a href="wordpress development" class="w3-bar-item w3-button">WordPress Development</a>
                            <a href="ui & ux design" class="w3-bar-item w3-button"> UI & UX Design</a>
                        </div> 
                    </div>

                    <a href="portfolio" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Portfolio</b></a>
                    <a href="Contact" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Contact</b></a>
                    <a href="forum" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Forum</b></a>
                    <a href="blog" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Blog</b></a>

                    <a href="reg" target="_blank" class="w3-bar-item w3-button w3-text-red"><i class="fa fa-user-circle-o w3-hover-opacity"></i></a>
                    <a href="login" target="_blank" class="w3-bar-item w3-button w3-text-theme"><i class="fa fa-user-o w3-hover-opacity"></i></a>
                </div>
            </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
      
      <a href="index" class="w3-bar-item w3-button w3-hover-white"> <b>Home</b></a><hr>
      
    <a href="About" class="w3-bar-item w3-button w3-hover-white"> <b>About Us</b></a><hr>
   
    <div class="w3-dropdown-click">
      <button class="w3-button w3-hover-white" onclick="myFunction()">
        <b>Services</b> <i class="fa fa-caret-down"></i>
      </button>
      <div id="demo" class="w3-dropdown-content w3-bar-block w3-card">
        <a href="web design & development" class="w3-bar-item w3-button">Web Design & Development</a>
        <a href="e-commerce website development" class="w3-bar-item w3-button">E-commerce Website Development</a>
        <a href="digital marketing" class="w3-bar-item w3-button"> Digital Marketing</a>
        <a href="search engine optimization" class="w3-bar-item w3-button"> Search Engine Optimization</a>
        <a href="wordpress development" class="w3-bar-item w3-button">Wordpress Development</a>
        <a href="ui & ux design" class="w3-bar-item w3-button">UI / UX Design</a>
      </div>
    </div>
  <hr>
   
    <a href="Portfolio" class="w3-bar-item w3-button w3-hover-white"> <b>Portfolio</b></a><hr>
    <a href="Contact" class="w3-bar-item w3-button w3-hover-white"> <b>Contact</b></a><hr>
    <a href="forum" class="w3-bar-item w3-button w3-hover-white"> <b>Review</b></a><hr>
    <a href="blog" class="w3-bar-item w3-button w3-hover-white"> <b>Blog</b></a><hr>
    </div>
</div>

</head>
<br>

	<!-- /NAVIGATION -->
	
<body>
    
    <!-- !PAGE CONTENT! -->
<div class="w3-main w3-center" style="max-width:100%;">
<br>

    
  <div class="w3-content w3-padding-32">
<div class="w3-container">
	
	<div class="row-padding">
		<div class="col-sm-4 col-sm-offset-4 panel panel-default" style="padding:20px;">
			<form method="POST" action="includes/login.inc.php">
				<p class="text-center" style="font-size:25px;"><b>Login</b></p>
				<hr>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" name="username" id="username" class="form-control" >
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control" >
				</div>
				<button type="submit" name="login" class="btn btn-primary" <?php echo $disable; ?>><span class="fa fa-user"></span> Login</button>
			</form>

			<br>
			
			<p> <span>Forgot Your Password?</span><a href="reg.php">  <span class="w3-text-black"><b>Register</span></a></p>


			<?php
				if(isset($_SESSION['error'])){
					?>
					<div class="alert alert-danger text-center" style="margin-top:20px;">
						<?php echo $_SESSION['error']; ?>
					</div>
					<?php

					unset($_SESSION['error']);
				}

				if(isset($_SESSION['success'])){
					?>
					<div class="alert alert-success text-center" style="margin-top:20px;">
						<?php echo $_SESSION['success']; ?>
					</div>
					<?php

					unset($_SESSION['success']);
				}
			?>


		</div>
    

	</div>
</div>
</div>
<hr>
      


<!-- Footer Section -->
<footer class="w3-black w3-padding-24 w3-small w3-center" id="footer">
  <div class="w3-row-padding">
  
  <!-- footer social -->
  <div class="col-md-3 col-sm-6 col-xs-6">      
  <h6 class="footer-header w3-text-theme"><b>FOLLOW US</b></h6>

<p>You can follow us on:</p>

 <div class="footer-social">
  <a href="https://github.com/jofawebdev/" target="_blank"><i class="fa fa-github"></i></a>
  <a href="https://twitter.com/jofawebdev?t=jQDsP6tBn_-jooxh8zV1CQ&s" target="_blank"><i class="fa fa-twitter"></i></a>
  <a href="https://www.instagram.com/jofawebdev/" target="_blank"><i class="fa fa-instagram"></i></a>
  <a href="https://www.pinterest.com/jofawebdev/" target="_blank"><i class="fa fa-pinterest"></i></a>
  <a href="https://www.linkedin.com/in/geoffrey-mbungi-86a6411ba/" target="_blank"><i class="fa fa-linkedin"></i></a>

  
  </div>

</div>
<!-- /footer social -->
    

<!-- Footer Contact -->
    <div class="col-md-3 col-sm-6 col-xs-6">
      <h6 class="w3-text-theme"><b>CONTACT</b></h6>
      <p><a href="Contact">QUESTIONS</a></p>
      <p><a href="forum">HELP</a></p>
      <p><i class="fa fa-fw fa-map-marker"></i>
        <a href="https://www.google.com/maps?client=firefox-b-d&um=1&ie=UTF-8&fb=1&gl=ke&sa=X&geocode=KQPuJ7ykPy8YMTkbEPu3y6M0&daddr=Utawala+Cres+Ct,+Nairobi" target="_blank">
         JOFAWEBDEV </a></p>

        <p><i class="fa fa-fw fa-phone"></i>
        <a href="tel:+254-793-004-632"> +254-793-004-632</a></p>
        
        <p><i class="fa fa-fw fa-envelope"></i>
        <a href="mailto:info@jofawebdev.com" target="_blank">
         info@jofawebdev.com </a></p>
         
      </div>
      <!-- /Footer Contact -->


      <!-- Footer Menu -->
      <div class="col-md-3 col-sm-6 col-xs-6">
      <h6 class="w3-text-theme"><b>QUICK LINKS</b></h6>
      <p><a href="index">Home</a></p>
      <p><a href="About">About Us</a></p>
      <p><a href="Services">Services</a></p>
      <p><a href="Portfolio">Portfolio</a></p>
      <p><a href="Contact">Contact</a></p>
      <p><a href="forum">Review</a></p>
      <p><a href="reg">Register</a></p>     
      </div>
      <!-- /Footer Menu -->


      <!-- Footer Services -->
      <div class="col-md-3 col-sm-6 col-xs-6">
      <h6 class="w3-text-theme"><b>SERVICES</b></h6>
      <p><a href="web design & development"> Web Design & Development</a></p>
      <p><a href="e-commerce website development"> E-commerce Website Development</a></p>
      <p><a href="digital marketing"> Digital Marketing</a></p>
      <p><a href="search engine optimization">Search Engine Optimization</a></p>
      <p><a href="wordpress development"> Wordpress Development</a></p>
      <p><a href="ui & ux design"> UI / UX Design</a></p>
    </div>
    <!-- /Footer Services -->

  </div>

  <!-- To the Top button-->
  <div class="w3-container w3-center">
  <a href="#" button class="w3-button w3-orange">
    <i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</div>
<!-- /To the Top button -->


</footer>
<!-- /Footer Section -->


<!-- Copyright -->
<div class="w3-copyright w3-center w3-small w3-padding w3-theme w3-container">
  &copy;2019 - 2024 Jofawebdev. All Rights Reserved.
</div>
<!-- /Copyright -->


<!--end main-->
</div>

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>





	<script>          
  // Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
var navbar = document.getElementById("myNavbar");
if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
} else {
navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
}
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
var x = document.getElementById("navDemo");
if (x.className.indexOf("w3-show") == -1) {
x.className += " w3-show";
} else {
x.className = x.className.replace(" w3-show", "");
}
}
</script>

<!--dropdown-->
<script>
  function myFunction() {
    var x = document.getElementById("demo");
    if (x.className.indexOf("w3-show") == -1) {
      x.className += " w3-show";
    } else { 
      x.className = x.className.replace(" w3-show", "");
    }
  }
  </script>

</body>
</html>