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

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  
  <!-- css file link -->
  <link rel="stylesheet" href="clientDashStyle.css">
     <!-- Media buttons link -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
    // JavaScript for handling the toggling of subtopics
    function toggleSubnav(element) {
      const subnav = element.nextElementSibling;
      subnav.style.display = subnav.style.display === "block" ? "none" : "block";
    }
  </script>

  <style>

body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  
}

.left-side, .right-side {
  flex: 1;
  padding: 20px;
  box-sizing: border-box;
  margin-top:100px;
}

.left-side {
  border-right: 2px solid #000; 
  text-align: center;
  
}

.right-side {
  text-align: center;
}








    .cube-container {
  width: 200px;
  height: 200px;
  perspective: 800px;
  margin: 50px auto;
}

.cube {
  position: relative;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d;
  animation: rotate 25s infinite linear;
}

.face {
  position: absolute;
  width: 200px;
  height: 200px;
  color: rgb(214, 21, 21);
  font-size: 18px;
  text-align: center;
  line-height: 200px;
  background: transparent;
  opacity: 0.9;
  border: 2px solid;
  border-image: linear-gradient(to right, green, green, green, green, green) 1;
  box-shadow: 0 0 100px green;
}

.front {
  transform: translateZ(100px);
}

.back {
  transform: rotateY(180deg) translateZ(100px);
}

.right {
  transform: rotateY(90deg) translateZ(100px);
}

.left {
  transform: rotateY(-90deg) translateZ(100px);
}

.top {
  transform: rotateX(90deg) translateZ(100px);
}

.bottom {
  transform: rotateX(-90deg) translateZ(100px);
}

.cube-container:hover .cube {
  animation-play-state: paused;
}

@keyframes rotate {
  0% {
    transform: rotateX(0) rotateY(0) rotateZ(0);
  }

  100% {
    transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
  }
}














/* Style for the contact form */
.contact-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background: rgba(255, 255, 255, 0.2);
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
}

/* Style for form headings */
.contact-form h5 {
  color: rgb(237, 255, 123);
  margin-bottom: 20px;
}

/* Style for labels */
.contact-form label {
  color: rgb(111, 255, 0);
  display: block;
  margin-bottom: 5px;
}

/* Style for input fields */
.contact-form input[type="name"],
.contact-form input[type="number"],
.contact-form input[type="email"],
.contact-form textarea {
  width: 90%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  background-color: rgba(255, 255, 255, 0.8);
}

/* Style for email note */
.contact-form span {
  color: red;
  font-size: 15px;
  margin-left: 60%;
}

/* Style for the submit button */
.contact-form button[type="submit"] {
  background-color: rgb(111, 255, 0);
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

/* Hover effect on submit button */
.contact-form button[type="submit"]:hover {
  background-color: rgb(80, 200, 0);
}

/* Style for error messages */
.error-msg {
  display: block;
  color: red;
  margin-top: 5px;
}

/* Style for textarea */
.contact-form textarea {
  resize: vertical;
}

/* Center form on smaller screens */
@media screen and (max-width: 600px) {
  .contact-form {
    max-width: 100%;
  }
}





    </style>
</head>
<body style="background-image: url(./images/ClientdashBg.jpg);">
  <!-- Header Contant Details -->
  <div class="headerContantDetails">
    <p>For any issues 📞 077-1579711 || 📧 mathanihasam@gmail.com</p>
  </div>

  <!-- Top Navigation Bar -->
  <div class="topnav">
    <div class="left-nav">
        <a href="login.php">Logout <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
      </div>
    
    <div class="center-nav">
      <p>GROWELL LANKA </p>
    </div>

    <div class="right-nav">
      <a href="ClientDashMain.html" class="selected">Main Page <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
    </div>
  </div>
</div>


  
  
  <!-- Main Content Area -->
  <div class="main" >
    <div class="mainarea">
        <div class="content">
            
               <div class="radio-inputs">
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashServicePage.php'"  >
                    <span class="name">Service</span>
                  </label>
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashPaymentPage.php'">
                    <span class="name">Payment</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" checked="" onclick="window.location.href='ClientDashComplainPage.php'">
                    <span class="name">Complains/Quries</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashFoodPage.php'">
                    <span class="name">Food&Bevarages</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashReviewPage.php'">
                    <span class="name">Review</span>
                  </label>  
                </div>
        </div>
    
        <div class="WelcomeWithName" style="text-align: center;" >



        <div class="container">
    <div class="left-side">
      <!-- ============Content for the left side ============ -->
      <div class="cube-container">
  <div class="cube">
    <div class="face front">Growell Lanka</div>
    <div class="face back">We are here for you</div>
    <div class="face right">We provide best </div>
    <div class="face left">Growell Lanka</div>
    <div class="face top">Growell</div>
    <div class="face bottom">Growell Lanka</div>
  </div>
</div>
      <br>
      
    </div>
        <div class="right-side">
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


         </div>
    </div>


        

   
   


</div>
        

   </div>
 </div>
  
     
  
</body>
</html>
