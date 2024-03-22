<?php
@include 'config.php';

// Fetching service_request details from the database
$select = "SELECT * FROM service_request";
$result = mysqli_query($conn, $select);

// Initialize service_request array
$service_request = array();

if ($result) {
    // Store the fetched data in the service_request array
    while ($row = mysqli_fetch_assoc($result)) {
        $service_request[] = $row;
    }
}
// Delete service_request record if the delete button is clicked
if (isset($_POST['delete_service_request'])) {
  $service_requestIdToDelete = $_POST['delete_service_request'];
  $deleteQuery = "DELETE FROM service_request WHERE SerReq_ID = $service_requestIdToDelete";
  mysqli_query($conn, $deleteQuery);
  // After deleting, redirect to the same page to refresh the service_request details
  header("Location: $_SERVER[PHP_SELF]");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  
  <!-- css file link -->
  <link rel="stylesheet" href="adminDashStyle.css">
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
   .customer-container {
    margin-top:2%;
    margin-left:350px;
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    color: blue;
    font-size: 18px;
    text-align:left;/* Center items horizontally */
}

.customer-box {
    border: 4px solid #ccc;
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
    color: Black;
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

<body >
  <!-- Header Contant Details -->
  <div class="headerContantDetails">
    <p>For any issues  077-1579711 ||  mathanihasam@gmail.com</p>
  </div>

  <!-- Top Navigation Bar -->
  <div class="topnav">
    <div class="left-nav">
      <div class="dropdown">
        <button class="dropbtn">Admin <i class="fa fa-user fa-1x" aria-hidden="true"></i></button>
        <div class="dropdown-content">
          <a href="#">Profile</a>
          <a href="index.html">Logout</a>
        </div>
      </div>
     
    </div>

    <div class="center-nav">
      <div class="dropdown">  
        <button class="dropbtn">Project</button>
        <div class="dropdown-content">
          <a href="#">Attendance</a>
          <a href="#">Task Done</a>
          <a href="#">Equipment</a>
        </div>
      </div>
      <a href="#">Food & Beverages </a>
      <a href="#">Help Desk</a>
      <a href="#">Email <i class="fa fa-envelope fa-1x" aria-hidden="true"></i></a>
    </div>

    <div class="right-nav">
      <a href="adminDash.html" class="selected">Home <i class="fa fa-home fa-1x" aria-hidden="true"></i></a>
    </div>
  </div>
  
   <!-- Left Navigation Bar -->
   <div class="sidenav">
    <a href="AdminDashViewServiceRequest.php" id="box">Service Request</a>
    <div class="main-topic">
      <a onclick="toggleSubnav(this);" href="#" id="box">Client</a>
      <div class="subnav">
        <a href="adminDashAddClient.php">New Registration</a>
        <a href="adminDashViewClientDetails.php">Clients Details</a>
        <a href="adminDashClientReview.php">Clients Review</a>
      </div>
    </div>
    <div class="main-topic">
      <a onclick="toggleSubnav(this);" href="#" id="box">Staff</a>
      <div class="subnav" >
      <a href="adminDashStaffRegister.php">New Registration</a>
        <a href="adminDashStaffDetailsView.php">Staff Details</a>
        <a href="adminDashLoginStaff.php">Staff Login</a>
      </div>
    </div>
    <div class="main-topic">
      <a onclick="toggleSubnav(this);" href="#" id="box">Suppliers</a>
      <div class="subnav" >
        <a href="adminDashAddSuppliers.php">New Registration</a>
        <a href="adminDashViewSuppliersDetails.php">Suppliers Details</a>
      </div>
    </div>
    <div class="main-topic">
      <a onclick="toggleSubnav(this);" href="#" id="box">Vacancy</a>
      <div class="subnav">
        <a href="adminDashAddVacancy.php">Post New Vacancy</a>
        <a href="adminDashViewVacancy.php">Delete Vacancy</a>
        <a href="adminDashViewVacancyRequest.php">Vacancy Request</a>
      </div>
    </div>
    <div class="main-topic">
      <a onclick="toggleSubnav(this);" href="#" id="box">Payment</a>
      <div class="subnav">
        <a href="adminDashConfirmPayment.php">Confirm Payment</a>
        <a href="adminDashAddPayment.php">Add New Payment</a>
        <a href="adminDashViewPayment.php">View Payment</a>
      </div>
    </div>
    
    <a href="adminDashAccidentReportViewDelete.php" id="box">Accident Report</a>
    <a href="adminDashOrderReportViewDelete.php" id="box">Order Report</a>
    <div class="main-topic">
      <a onclick="toggleSubnav(this);" href="#" id="box">Team</a>
      <div class="subnav">
        <a href="#">Add Team</a>
        <a href="#">View Team Details</a>
      </div>
    </div>
  </div>
  
  
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
            <?php foreach ($service_request as $BookingService): ?>
               <div class="customer-box">
                 <div class="customer-details">
                    <p><strong>Name :</strong> <?php echo isset($BookingService['name']) ? $BookingService['name'] : 'N/A'; ?></p>
                    <p><strong >Date :</strong> <?php echo isset($BookingService['date']) ? $BookingService['date'] : 'N/A'; ?></p>
                    <p><strong >service :</strong> <?php echo isset($BookingService['service']) ? $BookingService['service'] : 'N/A'; ?></p>
                    <p><strong >Q1 :</strong> <?php echo isset($BookingService['Q1']) ? $BookingService['Q1'] : 'N/A'; ?></p>
                    <p><strong >Q2 :</strong> <?php echo isset($BookingService['Q2']) ? $BookingService['Q2'] : 'N/A'; ?></p>
                    <p><strong >Q3 :</strong> <?php echo isset($BookingService['Q3']) ? $BookingService['Q3'] : 'N/A'; ?></p>
                    <p><strong >Q4 :</strong> <?php echo isset($BookingService['Q4']) ? $BookingService['Q4'] : 'N/A'; ?></p>
                    
                    <a href="CareersVacancyRequest.php" type="button" class="button-2d" onclick="openModal('modal1')"> Confirm the Order Now</a><br>
                    <button class="button-2d" type="submit" name="delete_service_request" value="<?php echo $BookingService['SerReq_ID']; ?>" style="background-color: red; color: white;">Delete</button>
                  </div>
               </div>
            <?php endforeach; ?>
          </div>
        </form>


   
              
    </div>
  </div>
</body>
</html>
