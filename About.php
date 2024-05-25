<!DOCTYPE html>
<html lang="en">
<head>
  
<!-- Search Console HTML meta tag -->
<meta name="google-site-verification" content="eN14aG8BMT9Go2qlYqYhVFA5m36O0LPlXUwyDBxIsGo" />
<!-- /Search Console HTML meta tag -->

  <title> About Us - JOFAWEBDEV </title>
<!-- This is how you add your image below --> 
  	      <link rel = "icon" type = "image/jpg" href = "https://www.jofawebdev.com/images/web-design-development-blog.jpg">

          <meta property="og:title" content="Jofawebdev: Website Development | IT Consulting | Digital Marketing">

            <meta property="og:type" content="website" />
            
         
          <meta property="og:description" content="Because every business is unique, we provide specialized website development and digital marketing services to meet your requirements.
           Finding new and better solutions to business challenges fascinates and motivates us.">

          <meta property="og:image" content="https://www.jofawebdev.com/images/web-design-development-blog.jpg"> 
          
          <link rel="shortcut icon" href="https://www.jofawebdev.com/images/web-design-development-blog.jpg" type="image/x-icon">
        

          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" type="text/css" href="css/about.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
          <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">


   <!-- Navbar on Top -->
   <div class="w3-top">
            <div class="w3-bar w3-black w3-wide w3-padding w3-card" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-white w3-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i></a>
            
                <a href="index" class="w3-bar-item w3-button"><b><span class="w3-text-theme">JOFAWEB<span class="w3-text-red">DEV</span></b></a>

                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right">
                    <a href="index" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Home</b></a>
                    <a href="About" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-text-theme"><b>About</b></a>
                    
                    <div class="w3-dropdown-hover w3-hide-small w3-hide-medium">
                        <a href="Services"><button class="w3-button"> <b>Services</b> <i class="fa fa-caret-down"></i></button></a>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-black">
                            <a href="web design & development" class="w3-bar-item w3-button">Web Design & Development</a>
                            <a href="e-commerce website development" class="w3-bar-item w3-button">E-commerce Website Development</a>
                            <a href="digital marketing" class="w3-bar-item w3-button">Digital Marketing</a>
                            <a href="search engine optimization" class="w3-bar-item w3-button">Search Engine Optimization</a>
                            <a href="wordpress development" class="w3-bar-item w3-button">WordPress Development</a>
                            <a href="ui & ux design" class="w3-bar-item w3-button"> UI & UX Design</a>
                        </div> 
                    </div>

                    <a href="Portfolio" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Portfolio</b></a>
                    <a href="Contact" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Contact</b></a>
                    <a href="forum" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Forum</b></a>
                    <a href="blog" class="w3-bar-item w3-button w3-hide-small w3-hide-medium"><b>Blog</b></a>

                    <a href="reg" target="_blank" class="w3-bar-item w3-button w3-text-red"><i class="fa fa-user-circle-o w3-hover-opacity"></i></a>
                    <a href="login" target="_blank" class="w3-bar-item w3-button w3-text-theme"><i class="fa fa-user-o w3-hover-opacity"></i></a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navsmall" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
                <a href="index" class="w3-bar-item w3-button w3-hover-white"><b>Home</b></a><hr>
                <a href="About" class="w3-bar-item w3-button w3-white"><b>About Us</b></a><hr>
                
                <div class="w3-dropdown-click">
                  <button class="w3-button w3-hover-white" onclick="myFunction()">
                    <b>Services</b> <i class="fa fa-caret-down"></i>
                  </button>
                  <div id="demo" class="w3-dropdown-content w3-bar-block w3-card">
                    <a href="web design & development" class="w3-bar-item w3-button">Web Design & Development</a>
                    <a href="e-commerce website development" class="w3-bar-item w3-button">E-commerce Website Development</a>
                    <a href="digital marketing" class="w3-bar-item w3-button">Digital Marketing</a>
                    <a href="search engine optimization" class="w3-bar-item w3-button">Search Engine Optimization</a>
                    <a href="wordpress development" class="w3-bar-item w3-button">WordPress Development</a>
                    <a href="ui & ux design" class="w3-bar-item w3-button">UI & UX Design</a>
                  </div>
                </div>
                <hr>

                <a href="Portfolio" class="w3-bar-item w3-button w3-hover-white"><b>Portfolio</b></a><hr>
                <a href="Contact" class="w3-bar-item w3-button w3-hover-white"><b>Contact</b></a><hr>
                <a href="forum" class="w3-bar-item w3-button w3-hover-white"><b>Forum</b></a><hr>
                <a href="blog" class="w3-bar-item w3-button w3-hover-white"><b>Blog</b></a><hr>
            </div>
        </div>


</head>
<br><br>

<!-- !PAGE CONTENT! -->
<body>

<div class="w3-main w3-center" style="max-width:100%;">
<br>

<!--About Us-->
<header class="w3-display-container w3-wide w3-animate-opacity" id="home">
    <img class="w3-image" src="images/web-design-top-banner.jpg" alt="3713461" width="100%">
    <div class="w3-display-middle w3-margin-top w3-text-white">
      <h1 class="w3-small"><i class="fa fa-question-circle w3-text-black w3-opacity-min"></i>
      <span class="w3-padding w3-black w3-opacity-min"><b>ABOUT US</b></span>
        </h1>
        </div>
  </header>

<div class="w3-content w3-padding-32">
  <div class="w3-container w3-padding-small">
  <h3 class="w3-center w3-text-theme"> <b>Conversion-Driven Digital Marketing Agency</b> </h3>

    <p><b>Professional Website Design Tailored Specifically To You And Your Company's Needs</b> </p>

    <div class="w3-row-padding">

      <div class="w3-half">
<img src="images/dig.jpg" alt="" style="width:100%">
</div>

<div class="w3-half">
<p style="text-align:center">Our professional web design services can help you to increase traffic and conversions by making your website appear and feel better to your visitors.
   In addition to providing regular website maintenance and search engine optimization (including ecommerce SEO), we also provide a wide variety of additional services to help your
    website function smoothly.</p>
    <p style="text-align:center">Given that each company is different, there is no universal approach to website development. Because of this, we provide specialized website design services to accommodate
       your company's specific needs. To help you turn site visitors into paying customers, our team of seasoned web developers and designers will first learn about your company
        and its target demographic before designing and building a unique, fully responsive website. </p>

  </div>

</div>
</div>
</div>
    <hr>
<!-- /About Us -->


<!-- Mission Vision & Core Values-->
<div class="w3-black w3-padding-small">
  <div class="w3-content w3-padding-32">

  <div class="w3-row-padding">
    <div class="w3-third">
      <h3 class="w3-text-theme"><b> MISSION </b></h3>
      <p> Our goal as an agency is to give our customers the best Digital Marketing and Website Development services and enable them to succeed online. We strive to create visual
         impact with our user-friendly website design strategy and guarantee highly impactful, lasting results. </p>
</div>

<div class="w3-third">
  <h3><b> VISION </b></h3>
  <P> Our vision is to become the world's leading data-driven agency that delivers results. We aim to enrich the digital marketing experience and be a reliable leading internet
     marketing solutions provider. </P>
</div>

<div class="w3-third">
  <h3 class="w3-text-orange"><b> CORE VALUES </b></h3>
<p> We are committed to offering the best values for our clients. Our main Values include:</p>
<ul class="w3-justify">
  <li>Integrity & Accountability</li>
  <li>Innovation </li>
  <li> Clarity & Transparency </li>
  <li> Results Driven</li>

</ul>
</div>

</div>
</div>
</div>
<hr>
<!-- /Mission Vision & Core Values -->


<!-- How We Work -->
<div class="w3-content w3-center w3-container">
  <h3 class="w3-text-black"><b>How <span class="w3-text-theme">Do We</span> Work?</b></h3>
 
  <p>While developing websites and blogs, we optimize pictures for faster load, do internal linking to
     keep users engaged on the site and label and caption images for search engines and users.
      We also use Meta tags and descriptions to make the website searchable, keep the layout simple
       and easy to navigate for web spiders and minimize popups, web frames, queries, and scripts </p>
</br>

   <p>Significant search engines such as Chrome, Yahoo and Google provide the best results for every search,
     and that's why most people find them trustworthy. Today big brands dominate their area of the business;
      hence it's difficult for startups and small-scale entrepreneurs to make the mark in this field as the competition
       is very high. But by investing in the right SEO firm, effective SEO strategy, and good rankings,
        even these tiny firms can attract more customers.</p>
  </div>

  <hr>
<!-- /How We Work -->
  

<!-- SEO Optimization -->
  <div style="background-image: url(images/20191112054904-FotoJet32.jpeg); background-attachment: fixed;  
  background-size: cover; background-repeat: no-repeat;" style="width: 100%;">
<div class="w3-container w3-content w3-padding-32">
  <h4 class="w3-text-orange"><b>SEO SERVICES THAT GROW TRAFFIC AND INCREASE REVENUE</b></h4>
  <div class="w3-row-padding">
    
  <div class="w3-third">
    <div class="w3-panel w3-pale-yellow w3-topbar w3-bottombar w3-border-yellow">
      <h4><b>On-Page Optimization</b></h4>
    <p> On-page SEO is the practice of optimizing web pages to improve a website's search engine rankings and earn organic traffic. In addition to publishing relevant,
       high-quality content, on-page SEO includes optimizing your headlines, HTML tags (title, meta, and header), and images. Doing On-page SEO is important as it helps search
        engines understand your website and its content, and identify whether it is relevant to search queries. 
        On-page optimization not only improves your website visibility to search engines but also makes it easier and more enjoyable for users to navigate your site.</p>
    </div>
</div>

<div class="w3-third">
    <div class="w3-panel w3-pale-green w3-topbar w3-bottombar w3-border-green">
      <h4><b>Ecommerce SEO</b></h4>
    <P> For any business to improve their online visibility and drive traffic to their website, they will need to leverage SEO services. Ecommerce SEO is basically optimizing website
       structure, product listing and description. Our company offers SEO including keyword research, on-page optimization and link building. When doing eCommerce SEO our experts use
        analytics and conversion rate optimization to track performance and make data-driven decisions. Our agency offers comprehensive local SEO services to help businesses boost
         their visibility and rankings in local organic search results.</P>

    </div>
</div>

<div class="w3-third">
    <div class="w3-panel w3-pale-red w3-topbar w3-bottombar w3-border-red">
  <h4><b>Keyword Research</b></h4>
  <p>Before starting SEO campaign, keyword research has always been the foundation and the guide to the next steps. Our team of SEO specialists will gain insights on your target audience's search behavior and from there,
      we will create content that matches their needs. Our approach to keyword research is data-driven, and we utilize advanced techniques to uncover most valuable keywords
       for your business. We also keep a close eye on the latest SEO trends and algorithms, to ensuring that your website is always optimized for the latest search engine standards
        and follows webmasters guidelines. </p>
  </div>
</div>

</div>
</div>
</div>
<hr>
<!-- /SEO Optimization -->


<!-- Need for Marketing strategies -->
<div class="w3-light-grey w3-padding-small">
  <div class="w3-content w3-padding-32">
<h3><b>THE NEED FOR DATA-DRIVEN DIGITAL MARKETING STRATEGIES</b></h3>
<p class="w3-text-theme">Every client interaction allows you to gather and evaluate consumer data</p>
    <div class="w3-row-padding">

      <div class="w3-half">
        <img src="images/pin80.jpg" alt="" style="width:100%">
</div>

<div class="w3-half">
  <p style="text-align:center">If you sell things online, we may leverage consumer data from your sales system and social media sites to target people who are likely to purchase. We discover gaps and
     opportunities in your sales and marketing plan using data and analytics. We help you streamline the customer experience and enhance operations by using the insights gained
      from that process. This solution is designed for enterprises who wish to grow. You've come to the perfect spot if you're a company in need of growth hacking skills to help you
       expand.</p>
</div>


</div>
</div>
</div>
<hr>
<!-- /Need for marketing strategies -->


    <!-- Start Pagination -->
<div class="w3-container w3-small w3-content text-center">
  <ul class="pagination">
    <li><a href="index">1</a></li>
    <li class="active"><a href="About">2</a></li>
    <li><a href="Services">3</a></li>
    <li><a href="Portfolio">4</a></li>
    <li><a href="Contact">5</a></li>
    <li><a href="forum">6</a></li>
    <li><a href="reg">7</a></li>
    
  </ul>
</div>
<!-- /End Pagination -->

  
<!-- Begin Footer Section -->
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
      <h6 class="w3-text-theme"><b>CONTACT US</b></h6>
      <p><a href="Contact">QUESTIONS</a></p>
      <p><a href="forum">HELP</a></p>
      <p><i class="fa fa-fw fa-map-marker"></i>
        <a href="https://www.google.com/maps?client=firefox-b-d&um=1&ie=UTF-8&fb=1&gl=ke&sa=X&geocode=KQPuJ7ykPy8YMTkbEPu3y6M0&daddr=Utawala+Cres+Ct,+Nairobi" target="_blank">
         JOFAWEBDEV </a></p>

        <p><i class="fa fa-fw fa-phone"></i>
        <a href="tel:+254-793-004-632"> +254-793-004-632</a></p>
        
        <p><i class="fa fa-fw fa-envelope"></i>
        <a href="mailto:info@jofawebdev.com" target="_blank">
         info@jofawebdev.com  </a></p>
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
      <p><a href="web design & development"> Web Design & Development </a></p>
      <p><a href="e-commerce website development"> E-commerce Website Development </a></p>
      <p><a href="digital marketing"> Digital Marketing </a></p>
      <p><a href="search engine optimization"> Search Engine Optimization </a></p>
      <p><a href="wordpress development"> Wordpress Development </a></p>
      <p><a href="ui & ux design"> UI / UX Design </a></p>
      
    </div>
<!-- /Footer Services -->

  </div>

  <!--To the Top button-->
  <div class="w3-container w3-center">
  <a href="#" button class="w3-button w3-orange">
    <i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</div>

</footer>
<!-- /End Footer Section -->


<div class="w3-copyright w3-container w3-padding w3-theme w3-center w3-small">
  &copy;2019 - 2024 Jofawebdev. All Rights Reserved.
</div>


  <!-- /END MAIN SECTION -->
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

        