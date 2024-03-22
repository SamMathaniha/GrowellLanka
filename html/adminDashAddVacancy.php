<?php
@include 'config.php';

// Inserting new vacancy
if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $department = mysqli_real_escape_string($conn, $_POST['department']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
   
    $select = "SELECT * FROM vacancy WHERE title = '$title' && department = '$department'";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $error[] = 'User already exists!';
    } else {
        $insert = "INSERT INTO vacancy(title, department, description) VALUES('$title', '$department', '$description')";
        mysqli_query($conn, $insert);
        echo '<script>alert("Inserted successfully!");</script>';
    }
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard Vacancy</title>
  
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
</head>
<style>
     /* Form styles */
.main .mainarea .form-container {
  display: flex;
  margin: 10px 0;
}

.main .mainarea .form-label {
  flex-basis: 30%;
  text-align: right;
  padding-right: 10px;
  font-weight: bold;
}

.mainarea .form-input {
  flex-basis: 70%;
}

.mainarea h3{
  text-align:center;
  color:blue;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  margin-top:20px;
  margin-bottom:50px;
}

/* Apply a reset to remove default button styles */
button {
  margin: 0;
  padding: 0;
  border: none;
  background: none;
  cursor: pointer;
}

/* Style for the "Add New Client" button */
.button {
  display: inline-block;
  padding: 10px 20px;
  border: none;
  background-color: green;
  color: black;
  font-weight: bold;
  font-size: 12px;
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

.button:hover {
  background-color: darkgreen;
  color: white;
}

/* Style for the "Clear" button */
button[type="reset"] {
  display: inline-block;
  padding: 10px 20px;
  background-color: red;
  color: black;
  font-weight: bold;
  font-size: 12px;
  text-align: center;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  transition: background-color 0.3s, color 0.3s;
}

button[type="reset"]:hover {
  background-color: darkred;
  color: white;
}

 /* Apply styles to the table */
 .customer-table {
    width: 85%;
    border-collapse: collapse;
    margin-top: 20px;
    
    
    
}

.customer-table th,
.customer-table td {
    margin-right:10px;
    padding: 10px;
    border: 2px solid #ccc;
    text-align: left;
    font-size: 12px;
}

.customer-table th {
    background-color: #f2f2f2;
}

.customer-table td button {
    padding: 5px 10px;
    background-color: #3498db;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 12px;
}

.customer-table td button:hover {
    background-color: #2980b9;
}
    
/* Apply styles to error messages */
.error-msg {
    display: block;
    color: red;
    margin-top: 10px;
}

/* Center align the heading */
h2 {
    text-align: center;
}

/* Adjust container width and alignment */
.customer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.customer-box {
    width: 48%;
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}



  </style>
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
    <form action="#" method="POST">

    
<?php
  if(isset($error)){
     foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
     };
  };
  ?>
<h3>Post New Vacancy </h3>

<div class="form-container">
<label class="form-label" for="name">Title:</label>
<div class="form-input">
  <input type="text" id="title" name="title"><br>
</div>
</div>


<div class="form-container">
<label class="form-label" for="email">Department:</label>
<div class="form-input">
  <input type="text" id="department" name="department"><br>
</div>
</div>

<div class="form-container">
    <label class="form-label" for="address">Description:</label>
    <div class="form-input">
      <textarea type="text" id="description" name="description" rows="4" cols="50"></textarea><br>
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
</body>
</html>
