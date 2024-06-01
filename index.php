<!DOCTYPE html>
<html lang="en">
<head>


     
           <title> JOFAWEBDEV - Website Development | IT Consulting | Digital Marketing </title>
        <!-- This is how you add your image below --> 
  	      <link rel = "icon" type = "image/jpg" href = "https://www.jofawebdev.com/images/web-design-development-blog.jpg">


          <meta name="viewport" content="width=device-width, initial-scale=1">
          
          <meta property="og:title" content="Jofawebdev: Website Development | IT Consulting | Digital Marketing">

            <meta property="og:type" content="website" />
            
         
          <meta property="og:description" content="Because every business is unique, we provide specialized website development and digital marketing services to meet your requirements.
           Finding new and better solutions to business challenges fascinates and motivates us.">

          <meta property="og:image" content="https://www.jofawebdev.com/images/web-design-development-blog.jpg"> 
          
          <link rel="shortcut icon" href="https://www.jofawebdev.com/images/web-design-development-blog.jpg" type="image/x-icon">
          
          
          <link rel="stylesheet" type="text/css" href="css/index.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
 
          

          <!-- Navbar on Top -->
        <div class="w3-top">
            <div class="w3-bar w3-black w3-wide w3-padding w3-card" id="myNavbar">
                <a class="w3-bar-item w3-button w3-hover-white w3-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i></a>
            
                <a href="index" class="w3-bar-item w3-button w3-hover-white"><b><span class="w3-text-theme">JOFA</span>WEB<span class="w3-text-red">DEV</span></b></a>

                <!-- Float links to the right. Hide them on small screens -->
                <div class="w3-right">
                    <a href="index" class="w3-bar-item w3-button w3-hover-white w3-text-theme w3-hide-small w3-hide-medium"><b>Home</b></a>
                    <a href="About" class="w3-bar-item w3-button w3-hover-white w3-hide-small w3-hide-medium"><b>About</b></a>
                    
                    <div class="w3-dropdown-hover w3-hide-small w3-hide-medium">
                        <a href="Services"><button class="w3-button w3-hover-white"> <b>Services</b> <i class="fa fa-caret-down"></i></button></a>
                        <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-black">
                            <a href="web design & development" class="w3-bar-item w3-button w3-hover-white">Web Design & Development</a>
                            <a href="e-commerce website development" class="w3-bar-item w3-button w3-hover-white">E-commerce Website Development</a>
                            <a href="digital marketing" class="w3-bar-item w3-button w3-hover-white">Digital Marketing</a>
                            <a href="search engine optimization" class="w3-bar-item w3-button w3-hover-white">Search Engine Optimization</a>
                            <a href="wordpress development" class="w3-bar-item w3-button w3-hover-white">WordPress Development</a>
                            <a href="ui & ux design" class="w3-bar-item w3-button w3-hover-white"> UI & UX Design</a>
                        </div> 
                    </div>

                    <a href="Portfolio" class="w3-bar-item w3-button w3-hover-white w3-hide-small w3-hide-medium"><b>Portfolio</b></a>
                    <a href="blog" class="w3-bar-item w3-button w3-hover-white w3-hide-small w3-hide-medium"><b>Blog</b></a>

                    <a href="reg" target="_blank" class="w3-bar-item w3-button w3-hover-white w3-text-theme"><i class="fa fa-user-circle-o w3-hover-opacity"></i></a>
                    <a href="login" target="_blank" class="w3-bar-item w3-button w3-hover-white w3-text-white w3-hide-large"><i class="fa fa-users w3-hover-opacity"></i></a>
                    
                    <a href="Contact" target="_blank"><button class="w3-button w3-red w3-round-xxlarge w3-small w3-hover-white w3-hide-medium w3-hide-small" title="Get in Touch"> CONTACT US </button></a>
                </div>
            </div>

            <!-- Navbar on small screens -->
            <div id="navsmall" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium">
                <a href="index" class="w3-bar-item w3-button w3-theme"><b>Home</b></a><hr>
                <a href="About" class="w3-bar-item w3-button w3-hover-white"><b>About Us</b></a><hr>
                
                <div class="w3-dropdown-click">
                  <button class="w3-button w3-hover-white" onclick="myFunction()">
                    <b>Services</b> <i class="fa fa-caret-down"></i>
                  </button>
                  <div id="demo" class="w3-dropdown-content w3-bar-block w3-card">
                    <a href="web design & development" class="w3-bar-item w3-button w3-hover-black">Web Design & Development</a>
                    <a href="e-commerce website development" class="w3-bar-item w3-button w3-hover-black">E-commerce Website Development</a>
                    <a href="digital marketing" class="w3-bar-item w3-button w3-hover-black">Digital Marketing</a>
                    <a href="search engine optimization" class="w3-bar-item w3-button w3-hover-black">Search Engine Optimization</a>
                    <a href="wordpress development" class="w3-bar-item w3-button w3-hover-black">WordPress Development</a>
                    <a href="ui & ux design" class="w3-bar-item w3-button w3-hover-black"> UI & UX Design</a>
                  </div>
                </div>
                <hr>
                
                <a href="Portfolio" class="w3-bar-item w3-button w3-hover-white"><b>Portfolio</b></a><hr>
                <a href="Contact" class="w3-bar-item w3-button w3-hover-white"><b>Contact</b></a><hr>
                <a href="blog" class="w3-bar-item w3-button w3-hover-white"><b>Blog</b></a><hr>
            </div>

        </div>


</head>
<br>


<!-- !PAGE CONTENT! -->
<body>

<div class="w3-main w3-center" style="max-width:100%;">     
<br>

  <!--Page slideshow Container--> 
  
  <div class="w3-section" style="width:100%">
    <img class="mySlides" src="images/digital-marketing-banner.png" alt="" style="width:100%">
    <img class="mySlides" src="images/make-digital-banner.jpg" alt="" style="width:100%">
    <img class="mySlides" src="images/upqode-services-web-design.jpeg" alt="" style="width:100%">
    <img class="mySlides" src="images/Web-Design-and-Development-Banner-1030x359.jpg" alt="" style="width:100%">
    <img class="mySlides" src="images/internet-marketing2.jpg" alt="" style="width:100%">
</div>

 
 <!--welcome-->
      <div class="w3-content w3-padding">
     <h4><b> DIGITAL MARKETING <span class="w3-text-red">SERVICES FOR YOUR</span> BUSINESS SUCCESS</b></h4>
     <h5 class="w3-text-theme"><b>Elevate Your Online Presence</b></h5>

     <div class="w3-row-padding">
    <div class="w3-half">
       <div class="w3-container">
         <img src="images/pin81.jpg" style="display:inline" 
          alt="Marketing Strategy" width="100%">
         
          <div class="w3-center w3-padding-16">
      <a href="About" target=""><button class="w3-button w3-round-xxlarge w3-red w3-hover-black" title="click here for more"> Learn More </button></a>
      </div>
      
          </div>
    </div>
    
          
      <div class="w3-half">
  <div class="w3-container">
  <p style="text-align: left;">We are a full-service digital marketing agency located in Nairobi. Jofawebdev was founded with the intention of aiding businesses in Kenya and
   throughout the world to achieve online success by using edge-crossing strategies. We have a wealth of experience working with our diverse public and private sector clients,
    which includes both small and large businesses.</p>

  <p style="text-align: left;">We adopt a strategy-first approach to deliver meaningful results to our consumers. Our team of digital marketing specialists,
   with a wide range of talents and specialities, is dedicated to aiding our clients in accomplishing their goals.</p>
      
      
      </div>
</div>

</div>
      </div>
      <hr>

      <!-- paragraph section-->
      <div class="w3-light-grey">
      <div class="w3-content w3-padding">
      <h2><b>Quality Website Design Tailored To Your<span class="w3-text-theme"> Demands And Those Of Your Business</span></b></h2>  
      <div class="tab-content w3-container">
          <p>As a leading Web Development firm, we know what it takes to boost the growth of your business.
                We will help you choose the right platform, create an intuitive design to convert sales visits and write code that offers standard security for your online shop.
                What is setting us apart is our commitment to excellence and our ability to turn complex e-commerce challenges into seamless solutions. Our approach has always
                been centered around understanding your unique business needs and goals and delivering customized solutions that will at the end of the day drive results.</p>
                
              <p>If you're looking to launch a new online store or upgrade existing website, we have the experience and expertise to help you get the desired outcome.
                We create e-Commerce websites using major platforms & CMS, including Wordpress, Woocommerce, Magento, Shopify, Drupal, etc. Our developers will choose the
                right plaftform, CMS or Framework depending on your business. </p>
                  

</div>
</div>

<div class="w3-container w3-padding-16">
<a href="Contact" target=""><button class="w3-button w3-round-xxlarge w3-red w3-hover-black w3-center" title="click here for more"> GET IN TOUCH </button></a>
</div>

</div>
<hr>

<!-- /End Paragraph -->


<div style="background-image: url(images/backgroundWEB.jpg); background-attachment: fixed;  
  background-size: cover; background-repeat: no-repeat;" style="width: 100%;">
<div class="w3-content w3-padding-24">
<h4 class="w3-text-white"><b> We have developed a straightforward website design & development process to ensure that we fulfill and even exceed
     our clients' expectations</b></h4>

<div class="w3-row-padding">
  <div class="w3-half">
    <div class="w3-tab-content w3-container">
<a href="https://jofawebdev.com/web%20design%20&%20development" target="">
  <img src="images/web-design-development-blog.jpg" alt="" style="width:100%"></a>
</div>
<hr>
</div>


<div class="w3-half">
     
  <div class="w3-container w3-text-white">
      <p style="text-align: left;">Responsive and Customized Website Design.</p>
      <p style="text-align: left;">Content Management System (CMS) Integration.</p>
      <p style="text-align: left;">Secure Integration of Hosting and Payment Gateways.</p>
      <p style="text-align: left;">Quick Page Loading and Browser Compatibility.</p>
      <p style="text-align: left;">Improved Call To Action (CTA) and User Experience (UX) Design.</p>
      <p style="text-align: left;">Social Media Marketing and Search Engine Optimization (SEO) Integration.</p>

</div>
</div>

</div>
</div>
</div>
<hr>


<!-- Container (Services Section) -->
<div style="background-image: url(images/digital-marketing.jpg); background-attachment: fixed;  
  background-size: cover; background-repeat: no-repeat;" style="width: 100%;">
<div class=" w3-content w3-padding-32">

<div class="w3-container">

  <h2 class="w3-center w3-bold" class="vc_custom_heading"><span class="w3-text-black"><b>OUR SERVICES </b></span></h2>
  <h4 class="w3-center"><b>We Handle All Aspects of Digital Marketing Services in Kenya</b></h4>

  <div class="w3-row-padding">
    
  <div class="w3-third">
      <div class="w3-card-4 w3-white">
        <img src="images/webdesign-coimbatore.jpg" style="width:100%" alt="">
     <h5 class="w3-text-red w3-center"><b>Custom Website Design & <span class="w3-text-black">Development</span></b></h5>
      
      <p>Custom web design tailors websites to specific business needs, ensuring uniqueness in reflecting each brand's identity. We also improve existing online applications' visual appeal, functionality, and usability, resulting in enhanced ROI with streamlined processes, increased conversion rates, and reduced maintenance costs.</p>

      <div class="w3-center w3-padding">
        <a href="web design & development">
          <button class="w3-button w3-theme w3-hover-black" title="click here for more"> Read more <i class="fa fa-arrow-right"></i></button></a>
      </div>

</div>
<hr>
</div>
    

    <div class="w3-third">
<div class="w3-card-4 w3-white">
  <img src="images/webdesign-coimbatore.jpg" style="width:100%" alt="">
    <h5><b> E-commerce <span class="w3-text-red"> Website Development </span></b></h5>
      <p>As Kenya-based eCommerce developers, we craft online business platforms for your business, reaching customers beyond your physical store's limits. Our e-commerce solutions blend sleek design with affordability, addressing both aesthetic and functional needs for a secure, tailored shopping experience.</p>

      <div class="w3-center w3-padding">
        <a href="e-commerce website development">
          <button class="w3-button w3-theme w3-hover-black" title="click here for more"> Read more <i class="fa fa-arrow-right"></i></button></a>
        </div>

    </div>
    <hr>
</div>


    <div class="w3-third">
      <div class="w3-card-4 w3-white">
        <img src="images/webdesign-coimbatore.jpg" style="width:100%">
      <h5><b><span class="w3-text-red">Digital Growth</span> | Marketing Services</b></h5>
      <p>We employ data-driven strategies and cutting-edge technology to keep your business relevant. Our aim is to foster your business growth and unlock its full potential. Our team of seasoned digital marketing experts is dedicated to enhancing brand visibility, boosting sales, generating leads, and optimizing search engine rankings.</p>
<div class="w3-center w3-padding">
  <a href="digital marketing" target="">
    <button class="w3-button w3-theme w3-hover-black" title="click here for more"> Read more <i class="fa fa-arrow-right"></i></button></a>
  </div>

    </div>
    <hr>
  </div>

</div>
<!-- end first row-->

</div>




<!-- second services row section -->
<div class="w3-container">
<div class="w3-row-padding">
    
<div class="w3-third">
      <div class="w3-card-4 w3-white">
        <img src="images/webdesign-coimbatore.jpg" style="width:100%" alt="">
     <h5><b>Search Engine <span class="w3-text-red">Optimization</span></b></h5>
      
      <p>To enhance online visibility and website traffic, businesses must utilize SEO services, including eCommerce SEO for website structure, product listing, and description optimization. Our SEO solutions cover keyword research, on-page optimization, and link building to boost search engine rankings and organic traffic, crucial for benefiting from first-page clicks.</p>

      <div class="w3-center w3-padding">
        <a href="search engine optimization">
          <button class="w3-button w3-theme w3-hover-black" title="click here for more"> Read more <i class="fa fa-arrow-right"></i></button></a>
      </div>

</div>
<hr>
</div>
    

    <div class="w3-third">
<div class="w3-card-4 w3-white">
  <img src="images/webdesign-coimbatore.jpg" style="width:100%" alt="">
    <h5><b><span class="w3-text-red">WordPress</span> Development</b></h5>

    <p>We offer extensive WordPress services such as design, WooCommerce solutions, maintenance/support, optimization, security, integration, mobile-friendly layouts, speed, SEO, content management, and migrations. Our expertise lies in e-Commerce development, emphasizing WordPress's security, flexibility, and plugin functionality.</p>

      <div class="w3-center w3-padding">
        <a href="wordpress development">
          <button class="w3-button w3-theme w3-hover-black" title="click here for more"> Read more <i class="fa fa-arrow-right"></i></button></a>
        </div>

    </div>
    <hr>
</div>


    <div class="w3-third">
      <div class="w3-card-4 w3-white">
        <img src="images/webdesign-coimbatore.jpg" style="width:100%">
      <h5><b>UI & <span class="w3-text-red">UX DESIGN</span></b></h5>
      <p>Boost user engagement with our top-tier UX/UI design. If your website or app frustrates users or hinders retention, our specialized UX researchers and expert designers can help. Through consultation and market research, we tailor solutions aligned with your business objectives, optimizing every element for a seamless user experience.</p>

<div class="w3-center w3-padding">
  <a href="ui & ux design" target="">
    <button class="w3-button w3-theme w3-hover-black" title="click here for more"> Read more <i class="fa fa-arrow-right"></i></button></a>
  </div>

    </div>
    <hr>
  </div>

</div>
  
</div>
  
</div>


</div>
<!-- /Services Section -->



<!--Projects Section-->
<div class="w3-content w3-padding-24">
  <div class="w3-container">
     <h2 class="w3-text-theme"><b>Case Studies</b></h2>
     <p class="w3-text-black">Your website should be user-friendly and convey your unique selling point. We help you accelerate growth through the design and development of revenue-generating websites.</p>

     <div class="w3-row-padding">

    <div class="w3-half">
       <div class="w3-container">
         <img src="images/UX-UI-Design.jpg" style="display:inline" 
          alt="" width="100%">
        
          </div>
    </div>
    
          
      <div class="w3-half">
  <div class="tab-content w3-container">
  <p style="text-align: left;">A well-crafted and engaging website is vital to elevate your online presence. We are committed to designing a website that ranks top on search engines and
   becomes a source of new leads and conversions. As a web copywriting agency, we have assembled a team of experienced copywriters to create website content that effectively communicates your
    message and resonates with your audience.</p><br>
  
      <a href="web design & development" target="_blank"><button class="w3-button w3-left w3-red w3-round-xxlarge w3-hover-black" title="click here for more"> GET A QUOTE </button></a>

   </div>
</div>

     </div>
</div>
</div>
<hr>

<div class="w3-content w3-container w3-padding">
      <p style="text-align: center;">From landing pages to product descriptions and blog posts, our writers will craft a compelling copy that accurately represents your brand and drives conversions.
   We have the skills and experience to deliver high-quality websites that drive results. Please work with us and get well-written, engaging web content optimized for success. We shall train
    your team with website management skills to make changes whenever possible.</p>
</div>

<!-- /projects header -->
<!-- First Photo Grid-->
<div class="w3-content w3-padding-32">
            <div class="w3-row-padding">
              <div class="w3-third w3-hover-opacity">
                <div class="w3-container w3-padding-small">
                <a href="https://sinepowerelectrics.com/" target="_blank">
                  <img src="images/Screenshot (1).png" style="width:100%" alt=""></a>
                  <div class="w3-container w3-small w3-center w3-black">
                  <p><b>Sinepower Electrics Ltd</b></p>
                </div>
                <hr>
              </div>
                  </div>

              
              <div class="w3-third w3-hover-opacity">
                <div class="w3-container w3-padding-small">
                      <a href="https://niacreation.com/" target="_blank">
                        <img src="images/Screenshot (2).png" style="width:100%" alt=""></a>
                <div class="w3-container w3-small w3-center w3-black">
                  <p><b>Nia Creation Ltd</b></p>
                </div>
              <hr>
              </div>
                  </div>

                  <div class="w3-third w3-hover-opacity">
                <div class="w3-container w3-padding-small">
                      <a href="https://www.nilababyshop.com" target="_blank">
                        <img src="images/Screenshot (3).png" style="width:100%" alt=""></a>
                <div class="w3-container w3-small w3-center w3-black">
                  <p><b>Nila Baby Shop Ltd</b></p>
                </div>
              <hr>
              </div>
                  </div>
              
                
        </div>
          
                  </div>
                  <!-- /First Photo Grid -->


                
        </div>
           </div>
           
          <div class="w3-center w3-container">
        <a href="Portfolio">
          <button class="w3-button w3-red w3-hover-black w3-round-xxlarge" title="click here for more"> View More Projects </button></a>
      </div>

        <hr>
        <!-- /Projects Section -->


<!-- Work Process -->  
<div class="w3-padding-32 w3-black">
<div class="w3-content w3-container">
  <h3 class="w3-text-theme w3-center"><b>OUR <span class="w3-text-white">WORK</span> PROCESS</b></h3>

  <p class="w3-center">We know that a clear strategy must be in place for every project to guarantee quality control successfully. For this reason, our digital marketing company has created a
     successful project method</P>
  
  <div class="w3-row-padding">
  <div class="w3-third w3-container w3-hover-opacity">
<div class="w3-border w3-card w3-white w3-center">
  <i class="fa fa-sitemap w3-jumbo w3-text-red"></i>
  <h4 class="w3-text-theme"><b> CONSULTATION </b></h4>
<p>As a web design agency, we're always open and ready to understand your unique website needs. Our team will schedule a consultation with you after
   you contact us. The discussion will be centred around your current marketing efforts. This will help us analyze your competitors, target audience, and business goals.
    After consultations with you, our team of web developers will then design a stunning website that is user-friendly and fast loading on all devices.</p>
    
  </div>
  <br>
</div>


<div class="w3-third w3-container w3-hover-opacity">
  <div class="w3-border w3-card w3-white w3-center">
    <i class="fa fa-arrow-up w3-jumbo w3-text-red"></i>
    <h4><b>STRATEGY <span class="w3-text-theme">DEVELOPMENT</span></b></h4>
    <p>After the initial consultation phase, our web experts will develop a comprehensive digital marketing strategy such as Web esign, SEO, PPC, social media,
       content marketing and more. As a client, this will be communicated to you to approve our strategy before we start working on your project. 
       We use data-driven approaches and have invested a lot in the latest technology and tools to help your business stay up-to date with the latest trends and best practices.</p>

</div>
<br>
</div>


<div class="w3-third w3-container w3-hover-opacity">
  <div class="w3-border w3-card w3-white w3-center">
<i class="fa fa-line-chart w3-jumbo w3-text-red"></i>
<h5 class="w3-text-theme"><b>IMPLEMENTATION</b></h5>
  <p> After the client has approved our strategy, we can start designing content, optimizing your website for search engines and testing it for quality assurance.
     As a client, your engagement in this process will also be required. Once your website has been developed, our company will launch the website by updating
      the DNS settings and making it go live. We will also perform final testing to ensure that the website functions and meets all project requirements. </p>

</div>
<br>
</div>

</div>


</div>
  </div>
<hr>
<!-- /Work process -->


<div class="w3-container w3-center">
<h2><b>PLANNING A PROJECT?<span class="w3-text-red"> LET'S TALK!</span></b></h2>
</div>
  <!-- Pricing Tables -->
  <div style="background-image: url(images/Best-UI-UX-Design-Software.jpg); background-attachment: fixed;  
  background-size: cover; background-repeat: no-repeat;" style="width: 100%;">

  <div class="w3-content w3-padding-64">
  <div class="w3-container text-center">

  <div class="w3-row-padding" style="margin:0 -16px">
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-white w3-center w3-hover-black">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">Web Design & Development</li>
        <li class="w3-padding-16">Brand Marketing</li>
        <li class="w3-padding-16">Digital Marketing</li>
        <li class="w3-padding-16">Database Management</li>
        <li class="w3-padding-16">Search Engine Optimization</li>
        <li class="w3-padding-16">
          <h2>$ 280</h2>
          <span class="w3-opacity">per project</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="Contact"><button class="w3-button w3-red w3-hover-black">Sign Up</button></a>
        </li>
      </ul>
    </div>
    
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-white w3-center w3-hover-theme">
        <li class="w3-theme w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16">Web Design & Development</li>
        <li class="w3-padding-16">Brand Marketing</li>
        <li class="w3-padding-16">Digital Marketing</li>
        <li class="w3-padding-16">Database Management</li>
        <li class="w3-padding-16">Search Engine Optimization</li>
        <li class="w3-padding-16">Email Marketing</li>
        <li class="w3-padding-16">Social Media Marketing</li>
        <li class="w3-padding-16">
          <h2>$ 350</h2>
          <span class="w3-opacity">per project</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="Contact"><button class="w3-button w3-red w3-hover-black">Sign Up</button></a>
        </li>
      </ul>
    </div>

    <div class="w3-third">
      <ul class="w3-ul w3-border w3-white w3-center w3-hover-red">
        <li class="w3-red w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16">Web Design & Development</li>
        <li class="w3-padding-16">Brand Marketing</li>
        <li class="w3-padding-16">Digital Marketing</li>
        <li class="w3-padding-16">Database Management</li>
        <li class="w3-padding-16">Search Engine Optimizatiion</li>
        <li class="w3-padding-16">Email Marketing</li>
        <li class="w3-padding-16">Social Media Marketing</li>
        <li class="w3-padding-16">Website Monetization</li>
        <li class="w3-padding-16">Search Engine Marketing</li>
        <li class="w3-padding-16">Endless Support</li>
        <li class="w3-padding-16">
          <h2>$ 400</h2>
          <span class="w3-opacity">per project</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <a href="Contact"><button class="w3-button w3-red w3-hover-black">Sign Up</button></a>
        </li>
      </ul>
    </div>
  </div>
</div>
</div>

</div> 
<hr>
<!-- /Pricing Tables-->
 


 <!-- Contact Section -->
              <div class="w3-container w3-center">
              <h2 class="w3-text-theme"><b>Make an Enquiry</b></h2>
              <h5><b>Do you have any questions concerning our services? Get in Touch.</b></h5>
              <p> We may be reached via phone and chat at (+254 793004632) from Monday through Saturday, 8:00 a.m. to 6:00 p.m. You may contact us via email at info@jofawebdev.com as well.
                 You may anticipate a response in two business hours. Sundays and federal holidays are our only days off.</p>
      
              
</div>
            <!-- /Contact Section-->

         
<!-- Start Pagination -->
<div class="w3-container text-center">
  <ul class="pagination">
    <li class="active"><a href="index">1</a></li>
    <li><a href="About">2</a></li>
    <li><a href="Services">3</a></li>
    <li><a href="Portfolio">4</a></li>
    <li><a href="Contact">5</a></li>
    <li><a href="blog">6</a></li>
    <li><a href="reg">7</a></li>
    
  </ul>
</div>
<!-- /End Pagination -->


<!-- Begin Footer Section -->
<footer class="w3-padding w3-container w3-black w3-center w3-small" id="footer">
  <div class="w3-row-padding">
  
  <!-- footer social -->
  <div class="col-md-3 col-sm-6 col-xs-6">      
  <h6 class="footer-header w3-text-theme"><b>FOLLOW US</b></h6>

<p>You can follow us on:</p>

<div class="footer-social">
  <a href="https://github.com/jofawebdev/" target="_blank"><i class="fa fa-github"></i></a>
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
      <p><a href="search engine optimization"> Search Engine Optimization</a></p>
      <p><a href="wordpress development"> Wordpress Development</a></p>
      <p><a href="ui & ux design"> UI / UX Design </a></p>
    </div>
    <!-- /Footer Services -->

  </div>

  <!-- To the Top button-->
  <div class="w3-container w3-center">
  <a href="#" button class="w3-button w3-theme w3-hover-white">
    <i class="fa fa-arrow-up w3-margin-right"></i><span class="w3-text-black">To the top</span></a>
</div>
<!-- /To the Top button -->


</footer>
<!-- /Footer Section -->


<!-- Copyright -->
<div class="w3-copyright w3-container w3-padding w3-red w3-center w3-small">
  Copyright &copy; 2019 - 2024 Jofawebdev. All Rights Reserved.
</div>
<!-- /Copyright -->


  <!-- End page content -->
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


<!-- First Slideshow Script -->
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 6000); // Change image every 3 seconds
}
</script>

<!-- End slideshow script -->
  

<script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".myNavbar a, footer a[href='#myPage']").on('click', function(event) {
  
     // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
  
      // Prevent default anchor click behavior
      event.preventDefault();
  
      // Store hash
      var hash = this.hash;
  
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
  
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
        });
      } // End if
    });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
  });
})

</script>  



</body>
</html>
 
     

