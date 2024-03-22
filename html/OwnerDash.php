<!DOCTYPE html>
<html>
<head>
  <title>Director Dashboard</title>
  
  <!-- css file link -->
  <link rel="stylesheet" href="OwnerDashStyle.css">
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
<body >
  <!-- Header Contant Details -->
  <div class="headerContantDetails">
    <p>For any issues 📞 077-1579711 || 📧 mathanihasam@gmail.com</p>
  </div>

  <!-- Top Navigation Bar -->
  <div class="topnav">
    <div class="left-nav">
        <a href="LoginStaff.php">Logout <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
      </div>
     
    

    <div class="center-nav">
      <p>GROWELL Lanka </p>
    </div>

    <div class="right-nav">
      <a href="OwnerDash.html" class="selected">Main Page <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
    </div>
  </div>
</div>
  <!-- Left Navigation Bar -->
  <div class="sidenav">
    <a href="OwnerDashClient.html" id="box">Client </a>
    <a href="#" id="box">Staff </a>
    <a href="#" id="box">Suppliers </a>
    <a href="#" id="box">Equipment </a>
    <a href="#" id="box">Vacancy </a>
    <a href="#" id="box">Payment</a>
    <a href="#" id="box">Accident Report</a>
    <a href="#" id="box">Order Report</a>
    <a href="#" id="box">Help Desk</a>
    <a href="#" id="box">Email</a>
  </div>
  
  
  <!-- Main Content Area -->
  <div class="main" >
    <div class="mainarea">
    <div class="WelcomeWithName" style="text-align: center;" >
        <?php
        session_start();
        if (isset($_SESSION['name'])) {
            $clientName = $_SESSION['name'];
            echo "<p>Hello <br> Welcome Admin <br> $clientName</p>";
        } else {
            echo "<p>Hello</p>";
        }
        ?>
    
    
    </div>

    </div>
  </div>
</body>
</html>
