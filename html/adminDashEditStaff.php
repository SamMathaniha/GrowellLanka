<?php
@include 'config.php';

if (isset($_GET['staff_ID'])) {
    $staffIdToEdit = $_GET['staff_ID'];
    
    // Retrieve staff details from the database
    $selectQuery = "SELECT * FROM staff WHERE staff_ID = $staffIdToEdit";
    $result = mysqli_query($conn, $selectQuery);
    
    $clientData = mysqli_fetch_assoc($result);
    
    if (!$clientData) {
        // Redirect to the staff details page if staff not found
        header("Location: adminDashStaffDetailsView.php");
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $DOB = $_POST['DOB'];
    $Department = $_POST['Department'];
    $Team_No = $_POST['Team_No'];
    $PhoneNo1 = $_POST['PhoneNo1'];
    $PhoneNo2 = $_POST['PhoneNo2'];
    $Gender = $_POST['Gender'];
    $JoinedDate = $_POST['JoinedDate'];
    $LeftDate = $_POST['LeftDate'];
 
    
    // Update staff details in the database
    $updateQuery = "UPDATE staff SET
                    name = '$name',
                    email = '$email',
                    DOB = '$DOB',
                    Department = '$Department',
                    Team_No = '$Team_No',
                    PhoneNo1 = '$PhoneNo1',
                    PhoneNo2 = '$PhoneNo2',
                    Gender = '$Gender',
                    JoinedDate = '$JoinedDate',
                    LeftDate = '$LeftDate'
                    WHERE staff_ID = $staffIdToEdit";
    
    if (mysqli_query($conn, $updateQuery)) {
        // Redirect to the staff details page after successful update
        header("Location: adminDashStaffDetailsView.php");
        exit;
    } else {
        $error = "Error updating staff details: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard Edit staff</title>
  
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
       <h3>Update staff Details</h3>

        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $clientData['name']; ?>" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $clientData['email']; ?>" ><br><br>

        <label>DOB:</label>
        <input type="date" name="DOB" value="<?php echo $clientData['DOB']; ?>" required><br><br>

        <label>Department:</label>
        <input type="text" name="Department" value="<?php echo $clientData['Department']; ?>" required><br><br>

        <label>Team_No:</label>
        <input type="number" name="Team_No" value="<?php echo $clientData['Team_No']; ?>" required><br><br>

        <label>Phone No 01:</label>
        <input type="number" name="PhoneNo1" value="<?php echo $clientData['PhoneNo1']; ?>" required><br><br>

        <label>Phone No 02:</label>
        <input type="number" name="PhoneNo2" value="<?php echo $clientData['PhoneNo2']; ?>"><br><br>

        <label>Gender:</label>
        <input type="text" name="Gender" value="<?php echo $clientData['Gender']; ?>" required><br><br>

        <label>JoinedDate:</label>
        <input type="date" name="JoinedDate" value="<?php echo $clientData['JoinedDate']; ?>" required><br><br>

        <label>LeftDate:</label>
        <input type="date" name="LeftDate" value="<?php echo $clientData['LeftDate']; ?>" ><br><br>

       

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
    </div>
  </div>
</body>
</html>
