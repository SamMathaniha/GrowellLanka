<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $PhoneNo = mysqli_real_escape_string($conn,$_POST['PhoneNo']);
   $message = mysqli_real_escape_string($conn,$_POST['message']);
   
   $select = " SELECT * FROM helpdesk WHERE name = '$name' && message = '$message' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'This Message Already Sent!';

   }else{
         $insert = "INSERT INTO helpdesk(name,email,PhoneNo,message) VALUES('$name','$email','$PhoneNo','$message')";
         mysqli_query($conn, $insert);
         echo '<script>alert("Sent successful!");</script>';
}    
    }
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Growell Lanka (PVT) LTD </title>

    <!-- Style Css Link -->
    <link rel="stylesheet" href="../Css/style.css">
    <!-- Main text Animatation link -->
    <script src="../js/javascript.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700" rel="stylesheet">
    <!-- Media buttons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    

<body>




  
  <!-- Header Contant Details -->
  <div class="headerContantDetails">
     <p> 📞 112-589102 / 076-0950481  ||
         📧 info@growelllanka.com</p>
 </div>

  <!-- Navigation bar -->
   
 <header>
  <div class="container"> 
      <nav class="navbar">
        <!-- Logo -->
        <div class="logo">
          <img src="./images/logo.png" alt="asdasdasd" onclick="openIndexPage()">
       </div>
       <script>
        function openIndexPage() {
          window.location.href = "index.html";
        }
      </script>

        <ul class="nav-menu">
          <li class="nav-item">
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="aboutPageOne.html" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="Services.html" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="Careers.php" class="nav-link">Careers</a>
          </li>
          <li class="nav-item">
            <a href="Contact.html" class="nav-link">Contact</a>
          </li>
        </ul>
        <div class="login-signup">
          <a href="Login.php">Login</a> 
      </div>
      
        <div class="smallScreen">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </div>
      </nav>
   </div>
 </header>

 <!--When screen get small-->
  <script>
      const smallScreen = document.querySelector(".smallScreen");
const navMenu = document.querySelector(".nav-menu");

smallScreen.addEventListener("click", () => {
  smallScreen.classList.toggle("active");
navMenu.classList.toggle("active");
})

document.querySelectorAll(".nav-link").forEach(n => n.addEventListener("click", () => {
  smallScreen.classList.remove("active");
navMenu.classList.remove("active");
}))
      
  </script>

  <!-- Navigation bar END -->


    <!-- Home Section Start -->
    <div class="home">
        <div class="main-text">
            <h1 class="cssanimation sequence leRotateYZoomIn"> WE TAILOR OUR SERVICES TO </h1> <h1>MEET YOUR NEEDS </h1>
            <p>We are highly adaptable when it comes to our clients. Whatever the service you need from us, </p>
            <p>we are able to prove those services tailored specifically for your requirements.</p>
            <a href="Services.html"><button id="btn">View More About Our Services</button></a>
        </div>
    </div> 
    
  <!-- Home Section End -->
   <div class="allinone">
   <div class="bodyInside">

    <!-- ======= Home page welcome ======== --> 
    <div class="Greet">
    <h1>WELCOME TO <span> GROWELL LANKA (PVT) LTD!</span></h1> <br>
    <h3> - Your Trusted and leading property management company in Sri Lanka -</h3> <br>
    <hr><br>
    </div> 
<!-- ======= About Section Start ======== -->
<section class="about" id="about">
  <div class="about-img">
    <img src="images/background-img.jpg" alt="">
  </div>
  <div class="about-text">
    <h3>About us</h3>
    <p>Over the years, the company has emerged as one of the market leaders in facility management in Sri Lanka, serving local and multinational companies in several cities. Our staff, based out of our offices and on location at various sites, provide a professional and comprehensive MEP and housekeeping service as an adjunct to the total property management solution provided by us. We manage over 250 employees in varying technical disciplines as well as general administration, housekeeping, janitorial services, health and safety.</p>
    <a href="aboutPageOne.html"><button id="about-btn">Learn More About us</button></a>
  </div>
</section>
   <script>
    window.addEventListener("scroll", function () {
    var aboutSection = document.getElementById("about");
    var sectionPosition = aboutSection.getBoundingClientRect().top;
    var windowHeight = window.innerHeight;
  
    if (sectionPosition < windowHeight - 100) {
      aboutSection.classList.add("show");
    }
  });
  </script>
<br><br>

 <!-- client, employee, count -->

 <div class="cont">

  <div class="counters">
      <div class="counter-wrapper">
          <span class="counter-icon" ><img src="./images/happyClient.png"></span>
          <div class="counter-info">
              <h1 class="counter" >30+</h1>
              <p>Happy Clients</p>
          </div>
      </div>
      <div class="counter-wrapper">
          <span class="counter-icon"><img src="./images/Employee.png"></span>
          <div class="counter-info">
              <h1 class="counter" data-count="100">250+</h1>
              <p>Employees</p>
          </div>
      </div>
      <div class="counter-wrapper">
          <span class="counter-icon"><img src="./images/greenLeaf.png"></span>
          <div class="counter-info">
              <h1 class="counter" data-count="250">100%</h1>
              <p>Green Focus</p>
          </div>
      </div>
  </div>
</div>
  <!--========== About Section End =========== -->

  
   <!--========== Service Section Start ======= -->
   <section class="service" id="service">
    <div class="main-txt">
        <h3>Our <span>Services </span> </h3>
        <br><hr>
    </div>
    <div class="ServiceContainer">
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/Cleaning.jpg" alt="Image 1">
          <strong>Industrial and Commercial Cleaning Services</strong>
          <p>With a separate janitorial service division, we are able to offer professional cleaning services for all types of buildings along with several other cleaning and sanitizing services.</p>
          <a href="ServiceOneIndustrialCleaning.html"><button class="Servicebutton">LEARN MORE ⎆</button></a>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/maintanance.jpg" alt="Image 2">
          <strong>Operations & Maintenance Services</strong>
          <p>Get out professional maintenances teams to makes sure all your necessary businesses elements such as electricals telecommunication etc... are the functioning properly without any errors.</p>
          <a href="ServiceTwoMaintenance.html"><button class="Servicebutton">LEARN MORE ⎆</button></a>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/management.jpg" alt="Image 2">
          <strong>MANAGEMENT SUPPORT Services</strong>
          <p>Managing a business properly is not an easy task. With our professional management support services, you will be able to manage your business more effectively and efficiently.</p>
          <a href="ServiceThreeMANAGEMENT.html"><button class="Servicebutton">LEARN MORE ⎆</button></a>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/gardening.jpg" alt="Image 2">
          <strong>GARDENING AND LANDSCAPING Services</strong>
          <p>Gardening and landscaping take a lot of planning. Get all your gardening and landscaping tasks done right by professionals with years of experience and have that peace of mind with us.</p>
          <a href="ServiceFourLANDSCAPING.html"><button class="Servicebutton">LEARN MORE ⎆</button></a>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/hospitality.jpg" alt="Image 2">
          <strong>HOSPITALITY Services</strong>
          <p>Give the customers of your hotel, bar, or restaurant with the best hospitality services available and make them come back to your establishment with our professional food and beverage services.</p>
          <a href="ServiceFiveHOSPITALITY.html"><button class="Servicebutton">LEARN MORE ⎆</button></a>
        </div>
      </div>
      <div class="Servicebox">
        <span class="title"></span>
        <div>
          <img src="./images/servicesImg/sanitizing.jpg" alt="Image 2">
          <strong>Environmental Cleaning & Sanitizing services</strong>
          <p>Keep the environment around you clean and germ-free with our newly introduced sanitizing services that is strictly complied with Department of health guidelines.</p>
          <a href="ServiceSixSanitizing.html"><button class="Servicebutton">LEARN MORE ⎆</button></a>
        </div>
      </div>
     
    </div>

</section>
<!-- ===========   Service Section End ============= -->

     <!-- ===========   Home page some clients section start ============= -->
  <div class="wrapper">
      <h3>SOME OF <span> OUR CLIENTS </span></h3>
      <br><hr> <br>
    <div class="slider">
     <img src="./images/client1.jpg" alt="Nestle" />
  
     <img src="images/client2.jpg" alt="Hemas Hospitals" />
    
     <img src="./images/client3.jpg" alt="HCL" />
    
     <img src="images/client4.jpg" alt="Taj" />
    
     <img src="./images/client5.jpg" alt="99X" />
    
     <img src="images/client6.jpg" alt="ETIHAD" />
   
     <img src="./images/client7.jpg" alt="CIPM" />
    
     <img src="images/client8.jpg" alt="ORIONcity" />
    
    </div>
  </div>

</div> 
  <!-- ===========   Home page Content US  ============= -->  
  <br>
  <h2 class="touchWithUS">Get In <span>Touch With Us</span></h2>
  <hr><br>
  <section class="contact" id="contact">
      <div class="content-text">
          <h5>CONTANCT DETAILS; </h5>
          <p> ☎️ 0112-589102 / 076-0950481</p>
          <p> 📧 info@growelllanka.com </p>
          <p> 📍 Level 02, Deanston House, Level 02, Deanston Place, Colombo 03.  </p>
          
          <div class="googlemapLocation"> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8719685048236!2d79.84947741477279!3d6.905909895010026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2590386dbc6cf%3A0x7995656a94b64c43!2sGrowell%20Lanka%20PVT%20Ltd!5e0!3m2!1sen!2slk!4v1686201739003!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
          </div>
      </div>

      <div class="contact-form">
          <form action="#" method="POST">

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      
          <h5 style="color: rgb(237, 255, 123);">INQUIRE US / COMPLAIN</h5>

          <label style="color: rgb(111, 255, 0);">Name : </label>
          <input type="name" id="name" name="name" placeholder="Name" required>

          <label style="color: rgb(111, 255, 0);">Phone No : </label>
          <input type="number" id="PhoneNo" name="PhoneNo" placeholder="Phone" required>

          <label style="color: rgb(111, 255, 0);">Email : <span style="color: red; font-size: 15px; margin-left: 60%;"> * Not Required </span></label>
          <input type="email" id="email" name="email" placeholder="Email" >

          <label style="color: rgb(111, 255, 0);">Message : </label>
          <textarea name="message" id="message" name="message" cols="35" rows="10" placeholder="Message"></textarea>

          <button type="submit" name="submit" class="submitInsert">Send</button>

      </form>
      </div>

  </section>
  <!-- Contact Section End -->
    <!--============== review Start =================-->
    <div class="review">
      <br>
      <h3>OUR CLIENTS <span>REVIEW</span></h3> <br>
      
      <div class="sl">
        <img src="./images/review/Taj.png" alt="Nestle" />
        <img src="./images/review/hcl.png" alt="Hemas Hospitals" />
        <img src="./images/review/e.png" alt="HCL" />
      </div>
    </div>
  
<br>
<!--============== review END =================-->
   </div>
  
   <footer>
    <div class="footer">
        <div class="glow"><p>Growell Lanka (PVT) LTD</p></div>
    <div class="row">
        
   
    </div>
    
    <div class="row">
    <ul>
    <li><a href="#">Contact us</a></li>
    <li><a href="#">Our Services</a></li>
    <li><a href="#">Privacy Policy</a></li>
    <li><a href="#">Terms & Conditions</a></li>
    <li><a href="#">Career</a></li>
    </ul>
    </div>
    <div class="mediaButton">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-linkedin"></a>
    
    </div>
    
    <div class="row">
         Copyright  ©  2023 Growell Lanka (PVT) LTD - All rights reserved      || Designed By: Sam Mathaniha 
    </div>
    
    </div>
  </footer>















   
</body>

</html>