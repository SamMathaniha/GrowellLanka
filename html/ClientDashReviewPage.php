<?php
@include 'config.php';

// Inserting new payment
if(isset($_POST['submit'])){
    $review_Note = mysqli_real_escape_string($conn, $_POST['review_Note']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $select = "SELECT * FROM review";
    
        // Insert the payment since the email doesn't exist in review table
        $insert = "INSERT INTO review(email, review_Note) VALUES('$review_Note', '$email')";
        mysqli_query($conn, $insert);
        echo '<script>alert("Inserted successfully!");</script>';
    
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
 
     <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
 <script>
    // JavaScript for handling the toggling of subtopics
    function toggleSubnav(element) {
      const subnav = element.nextElementSibling;
      subnav.style.display = subnav.style.display === "block" ? "none" : "block";
    }
  </script>

  <style>
    
  
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
      <a href="ClientDashMain.html" >Main Page <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
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
                    <input type="radio" name="radio" checked="" onclick="window.location.href='ClientDashReviewPage.php'">
                    <span class="name">Review</span>
                  </label>  
                </div>
        </div>
        
        
        <div class="WelcomeWithName" style="text-align: center;" >

        <div class="contact-form">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

          <label style="color: rgb(111, 255, 0);">Email : <span style="color: red; font-size: 15px; margin-left: 60%;"> * Not Required </span></label>
          <input type="email" id="email" name="email" placeholder="Email" >

          <label style="color: rgb(111, 255, 0);">Review Note : </label>
          <textarea name="review_Note" id="review_Note" name="review_Note" cols="35" rows="10" placeholder="Message"></textarea>

          <button type="submit" name="submit" class="submitInsert">Send</button>

      </form>
    </div>
   

      
        </div>
    </div>
  </div>
  
  
  
</body>
</html>
