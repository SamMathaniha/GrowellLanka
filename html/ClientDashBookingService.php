<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $date = mysqli_real_escape_string($conn, $_POST['date']);
   $service = mysqli_real_escape_string($conn,$_POST['service']);
   $Q1 = mysqli_real_escape_string($conn,$_POST['Q1']);
   $Q2 = mysqli_real_escape_string($conn,$_POST['Q2']);
   $Q3 = mysqli_real_escape_string($conn,$_POST['Q3']);
   $Q4 = mysqli_real_escape_string($conn,$_POST['Q4']);


   $select = " SELECT * FROM service_request WHERE name = '$name' && date = '$date' && service = '$service' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'The service Already added !';

   }else{
         $insert = "INSERT INTO service_request(name,date,service,Q1,Q2,Q3,Q4) VALUES('$name','$date','$service','$Q1','$Q2','$Q3','$Q4')";
         mysqli_query($conn, $insert);
         echo '<script>alert("Inserted successful! We will contact you soon");</script>';
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
                    <input type="radio" name="radio" checked="" onclick="window.location.href='ClientDashServicePage.php'"  >
                    <span class="name">Service</span>
                  </label>
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashPaymentPage.php'">
                    <span class="name">Payment</span>
                  </label>  
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashComplainPage.php'">
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
      

           <form action="#" method="POST">

    
    <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
  <h3> Answer the Following Questions </h3>

  <div class="form-container">
    <label class="form-label" for="name">Name:</label>
    <div class="form-input">
      <input type="text" id="name" name="name"><br>
    </div>
  </div>

  <div class="form-container">
    <label class="form-label" for="date">Date:</label>
    <div class="form-input">
      <input type="date" id="date" name="date"><br>
    </div>
  </div>

  <div class="form-container">
    <label class="form-label" for="service">Service :</label>
    <div class="form-input">
      <input type="text" id="service" name="service"><br>
    </div>
  </div>

  <div class="form-container">
    <label class="form-label" for="Q1"> Q1:</label>
    <div class="form-input">
      <input type="Q1" id="Q1" name="Q1"><br>
    </div>
  </div>

  <div class="form-container">
    <label class="form-label" for="Q2">Q2:</label>
    <div class="form-input">
      <textarea type="Q2" id="Q2" name="Q2" rows="4" cols="50"></textarea><br>
    </div>
  </div>

  <div class="form-container">
    <label class="form-label" for="Q3">Q3:</label>
    <div class="form-input">
      <textarea id="Q3" name="Q3" rows="4" cols="50"></textarea><br>
    </div>
  </div>

  <div class="form-container">
    <label class="form-label" for="Q4">Q4:</label>
    <div class="form-input">
      <textarea id="Q4" name="Q4" rows="4" cols="50"></textarea><br>
    </div>
  </div>

  <div class="form-container">
    <div class="form-label"></div>
    <div class="form-input">
      <button class="button" type="submit" name="submit">Add New Client</button>
      <button type="reset">Clear</button>
    </div>
  </div>
</form>
    
        </div>
        

   </div>
 </div>
  
     
  
</body>
</html>
