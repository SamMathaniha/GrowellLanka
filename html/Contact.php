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

     <!-- Style Css Link that for this page-->
     <link rel="stylesheet" href="../Css/aboutStyle.css">

    <!-- Media buttons link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

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
          <a href="login.php">Login</a> 
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
  <div class="aboutHome" style="background-image: url(./images/contactBgs.jpg); height:50vh; ">
    <div >
      <h1 class="glow" style="padding: 60px; "> Contact Us</h1>
      
  </div>
</div>

<section class="contact" id="contact" style="background: linear-gradient(110deg, #000000 60%, #00e1ff 60%);">
  <div class="content-text">
      <h5 style="color: aliceblue;">CONTANCT DETAILS; </h5>
      <p style="color: aliceblue;"> ☎️ 0112-589102 / 076-0950481</p>
      <p style="color: aliceblue;"> 📧 info@growelllanka.com </p>
      <p style="color: aliceblue;"> 📍 Level 02, Deanston House, Level 02, Deanston Place, Colombo 03.  </pre>
      
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