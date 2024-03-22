<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $gender = mysqli_real_escape_string($conn, $_POST['gender']);
   $age = mysqli_real_escape_string($conn,$_POST['age']);
   $department = mysqli_real_escape_string($conn,$_POST['department']);
   $PhoneNo = mysqli_real_escape_string($conn,$_POST['PhoneNo']);

   $select = " SELECT * FROM vacancyrequest WHERE name = '$name' && PhoneNo = '$PhoneNo' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      echo '<script>alert("user already exist!");</script>';

   }else{
         $insert = "INSERT INTO vacancyrequest(name,gender,age,department,PhoneNo) VALUES('$name','$gender','$age','$department','$PhoneNo')";
         mysqli_query($conn, $insert);
         echo '<script>alert("Inserted successful!");</script>';
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
    
    <style>

.bodyInside h2{
  color:green;
  text-align:center;
}
form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }

  label {
    display: block;
    font-weight: bold;
    margin-bottom: 10px;
  }

  input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 26px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .radio-group {
    display: flex;
    align-items: center;
    gap: 12px;
  }

  .radio-group label {
    display: flex;
    align-items: center;
    margin-right: 15px;
    font-size:13px;
    margin-bottom: 25px;
  }

  .radio-group input[type="radio"] {
    margin-right: 5px;
  }

  .submit-button {
    text-align: center;
    margin-top: 20px;
  }

  .submit-button button {
    width: 90%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .submit-button button:hover {
    background-color: #45a049;
    transform: scale(1.05);
  }


    </style>
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
  <div class="aboutHome" style="background-image: url(./images/careersBackgd.jpg); height:50vh; ">
    <div >
        <h1 class="glow" style="padding: 60px; "> Careers</h1>
        
    </div>
</div>

    
  <!-- Home Section End -->
<div class="allinone">
  <div class="bodyInside">
    <h2>Fill this Fields | මෙම ක්ෂේත්‍ර පුරවන්න | இந்த புலங்களை நிரப்பவும் </h2>
    <hr>
     
    <br>
     <!-- Main Content Area -->
    <div class="main" >
     <div class="mainarea">
      
     <form action="#" method="POST">
     <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
    <label for="name">Name |නම|பெயர் :</label>
    <input type="text" id="name" name="name" placeholder="Enter your name">

    <label>Gender|ලිංගය|பாலினம்:</label>
    <div class="radio-group">
      <label>
        <input type="radio" name="gender" value="male">
        Male|පිරිමි|ஆண்
      </label>
      <label>
        <input type="radio" name="gender" value="female">
        Female|ගැහැණු|பெண்
      </label>
      <label>
        <input type="radio" name="gender" value="other">
        Other|අනික්|மற்றவை
      </label>
    </div>

    <label for="age">Age|වයස|வயது:</label>
    <input type="text" id="age" name="age" placeholder="Enter your age">

    <label for="department">Department|ෙදපාර්තෙම්න්තුෙව්|துறை:</label>
    <input type="text" id="department" name="department" placeholder="Enter your department">

    <label for="PhoneNo">Phone Number|දුරකථන අංකය|தொலைபேசி எண்:</label>
    <input type="text" id="PhoneNo" name="PhoneNo" placeholder="Enter your phone number">

    <div class="submit-button">
      <button type="submit" name="submit" >Submit</button>
    </div>
  </form>

     </div>
    </div>
  </div>
 </div>


                        <!--================= Footer =============-->
   
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
    