<?php
@include 'config.php';

if (isset($_GET['Vac_ID'])) {
    $vacancyIdToEdit = $_GET['Vac_ID'];
    
    // Retrieve vacancy details from the database
    $selectQuery = "SELECT * FROM vacancy WHERE Vac_ID = $vacancyIdToEdit";
    $result = mysqli_query($conn, $selectQuery);
    
    $vacancyData = mysqli_fetch_assoc($result);
    
    if (!$vacancyData) {
        // Redirect to the vacancy details page if vacancy not found
        header("Location: adminDashAddDeleteVacancy.php");
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $title = $_POST['title'];
    $department =  $_POST['department'];
    $description = $_POST['description'];
    
 
    
    // Update vacancy details in the database
    $updateQuery = "UPDATE vacancy SET
                    title = '$title',
                    department = '$department',
                    description = '$description'
                    WHERE Vac_ID = $vacancyIdToEdit";
                    
    
    if (mysqli_query($conn, $updateQuery)) {
        // Redirect to the vacancy details page after successful update
        header("Location: adminDashViewVacancy.php");
        exit;
    } else {
        $error = "Error updating staff details: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard Edit Vacancy</title>
  
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
    .mainarea{
      display: flex;
      margin: 10px 0;
      margin-left:45%;
      flex-basis: 30%;
      text-align: right;
      padding-right: 10px;
      font-weight: bold;
    }
    .mainarea h3{
      text-align:center;
      color:blue;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      margin-top:20px;
      margin-bottom:30px;
    }

  button {
  margin: 0;
  padding: 0;
  border: none;
  background: none;
  cursor: pointer;
  display: inline-block;
  padding: 10px 20px;
  border: none;
  background-color: green;
  margin-top:10px;
  color: black;
  font-weight: bold;
  font-size: 12px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

button:hover {
  background-color: darkgreen;
  color: white;
}

  </style>
</head>
<body >
     <!-- Header Contant Details -->
  <div class="headerContantDetails">
    <p>For any issues 📞 077-1579711 || 📧 mathanihasam@gmail.com</p>
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
    
    <?php if (isset($error)): ?>
        <span class="error-msg"><?php echo $error; ?></span>
    <?php endif; ?>

    <form method="POST" action="#">
       <h3>Update Vacancy Details</h3>

        <label>Title:</label>
        <input type="text" name="title" value="<?php echo $vacancyData['title']; ?>" required><br><br>

        <label>Email:</label>
        <input type="text" name="department" value="<?php echo $vacancyData['department']; ?>" required ><br><br>

        <label>DOB:</label>
        <input type="text" name="description" value="<?php echo $vacancyData['description']; ?>" required><br><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
    </div>
  </div>
</body>
</html>
