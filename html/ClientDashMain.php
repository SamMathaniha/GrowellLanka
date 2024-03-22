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
                    <input type="radio" name="radio" onclick="window.location.href='ClientDashServicePage.php'"  >
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
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        $clientName = $_SESSION['name'];
        echo "<p>Hello <br> Welcome <br> $clientName</p>";
    } else {
        echo "<p>Hello</p>";
    }
    ?>

<a href ="login.php">   <button style="background-color: blue; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer; color:white; "> Back to Home </button> </a> 
</div>
        

   </div>
 </div>
  
     
  
</body>
</html>
