<?php
@include 'config.php';

// Fetching vacancy details from the database
$select = "SELECT * FROM vacancy";
$result = mysqli_query($conn, $select);

// Initialize vacancy array
$vacancy = array();

if ($result) {
    // Store the fetched data in the vacancy array
    while ($row = mysqli_fetch_assoc($result)) {
        $vacancy[] = $row;
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
   .customer-container {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    color: white;
    font-size: 18px;
    justify-content: center; /* Center items horizontally */
}

.customer-box {
    border: 1px solid #ccc;
    padding: 10px;
    width: calc(40% - 20px);
}

.customer-details {
    margin-top: 10px;
    text-align: center; /* Center align text */
}

.customer-details p {
    margin: 5px 0;
}

.customer-details strong {
    color: red;
}

.customer-details .button-2d {
    display: inline-block;
    padding: 7px 10px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 5px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.customer-details .button-2d:hover {
    background-color: #45a049;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    transform: translateY(-2px);
}

.customer-details .button-2d::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.15);
    transform: skewX(-45deg);
    transition: all 0.3s ease;
    z-index: -1;
}

.customer-details .button-2d:hover::before {
    left: 0;
}

/* Media queries for responsiveness */
@media (max-width: 900px) {
    .customer-container {
        margin-left: 0; 
    }

    .customer-box {
        width: 100%;
    }
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
    <h1>APPLY FOR OUR <span> JOB OPENINGS </span></h1>
    <hr>
     
    <br>
     <!-- Main Content Area -->
   <div class="main" >
    <div class="mainarea">
        <form action="#" method="POST">
    <?php
    if (isset($error)) {
        foreach ($error as $error) {
            echo '<span class="error-msg">' . $error . '</span>';
        }
    }
    ?>
          <div class="customer-container">
            <?php foreach ($vacancy as $Job): ?>
               <div class="customer-box">
                 <div class="customer-details">
                    <p style="color:orange; text-align:center; font-size:25px; text-decoration-line: underline; text-decoration-style: double; text-transform: uppercase;"><?php echo isset($Job['title']) ? $Job['title'] : 'N/A'; ?></p>
                    <p><strong style="color:yellow;">Department :</strong> <?php echo isset($Job['department']) ? $Job['department'] : 'N/A'; ?></p>
                    <p><strong style="color:red; text-align:center;">Description :</strong><br> <?php echo isset($Job['description']) ? $Job['description'] : 'N/A'; ?></p>
                    <a href="CareersVacancyRequest.php" type="button" class="button-2d" onclick="openModal('modal1')">Apply Now | අයදුම් කරන්න | விண்ணப்பியுங்கள்</a>
                  </div>
               </div>
            <?php endforeach; ?>
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
    