<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Jofawebdev - Blog</title>

        <!-- Add open graph images -->
        <link rel="icon" type="image/jpg" href="https://www.jofawebdev.com/images/web-design-development-blog.jpg">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Jofawebdev: Website Development | IT Consulting | Digital Marketing">

        <meta property="og:type" content="website" />

        <meta property="og:description" content="Because every business is unique, we provide specialized website development and digital marketing services to meet your requirements.
        Finding new and better solutions to business challenges facinates and motivates us.">

        <meta property="og:image" content="https://www.jofawebdev.com/images/web-design-development-blog.jpg">

        <link rel="shortcut icon" href="https://www.jofawebdev.com/images/web-design-development-blog.jpg" type="image/x-icon">
        
        <link rel="stylesheet" type="text/css" href="css/blog.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">


        <!-- Navbar on Top -->
        <div class="w3-top">
            <div class="w3-bar w3-theme w3-wide w3-padding w3-card" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-white w3-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i></a>
            
                <a href="index" class="w3-bar-item w3-button"><b>Jofaweb</b>Dev</a>

                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right w3-hide-small">
                    <a href="index" class="w3-bar-item w3-button"><b>Home</b></a>
                    <a href="About" class="w3-bar-item w3-button"><b>About</b></a>
                    
                    <div class="w3-dropdown-hover w3-hide-small">
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

                    <a href="Portfolio" class="w3-bar-item w3-button"><b>Portfolio</b></a>
                    <a href="Contact" class="w3-bar-item w3-button"><b>Contact</b></a>
                    <a href="forum" class="w3-bar-item w3-button"><b>Forum</b></a>
                    <a href="blog" class="w3-bar-item w3-button"><b>Blog</b></a>

                    <a href="reg" target="_blank" class="w3-bar-item w3-button w3-text-white"><i class="fa fa-user-circle-o w3-hover-opacity"></i></a>
                    <a href="login" target="_blank" class="w3-bar-item w3-button w3-text-white"><i class="fa fa-user-o w3-hover-opacity"></i></a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navsmall" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
                <a href="index" class="w3-bar-item w3-button w3-hover-white"><b>Home</b></a><hr>
                <a href="About" class="w3-bar-item w3-button w3-hover-white"><b>About Us</b></a><hr>
                <a href="Services" class="w3-bar-item w3-button w3-hover-white"><b>Services</b></a><hr>
                <a href="Portfolio" class="w3-bar-item w3-button w3-hover-white"><b>Portfolio</b></a><hr>
                <a href="Contact" class="w3-bar-item w3-button w3-hover-white"><b>Contact</b></a><hr>
                <a href="forum" class="w3-bar-item w3-button w3-hover-white"><b>Forum</b></a><hr>
                <a href="reg" class="w3-bar-item w3-button w3-hover-white"><b>Register</b></a><hr>
            </div>
        </div>

        
    </head>
    <br>


    <!-- Page Content -->
    <body>
        <div class="w3-main w3-center" style="max-width: 100%;">

        <!-- End page Content -->
        </div>

        <!--Start Javascript-->
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
var x = document.getElementById("navsmall");
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
<!-- end dropdown script -->

    </body>
</html>
