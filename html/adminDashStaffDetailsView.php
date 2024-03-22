<?php
@include 'config.php';

// Fetching staff details from the database
$select = "SELECT * FROM staff";
$result = mysqli_query($conn, $select);

// Initialize staff details array
$staffDetails = array();

if ($result) {
    // Store the fetched data in the staffDetails array
    while ($row = mysqli_fetch_assoc($result)) {
        $staffDetails[] = $row;
    }
}

// Delete staff record if the delete button is clicked
if (isset($_POST['delete_staff'])) {
    $staffIdToDelete = $_POST['delete_staff'];
    $deleteQuery = "DELETE FROM staff WHERE staff_ID = $staffIdToDelete";
    mysqli_query($conn, $deleteQuery);
    // After deleting, redirect to the same page to refresh the staff details
    header("Location: $_SERVER[PHP_SELF]");
    exit;
}

// Edit staff record if the edit button is clicked
if (isset($_POST['edit_staff'])) {
    $staffIdToEdit = $_POST['edit_staff'];
    // Redirect to the edit staff page with the staff ID as a parameter
    header("Location: adminDashEditStaff.php?staff_ID=$staffIdToEdit");
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
        .staff-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    
    .staff-box {
        border: 1px solid #ccc;
        padding: 10px;
        width: calc(33.33% - 20px);
    }
    
    .staff-details {
        margin-top: 10px;
    }
    
    .staff-details p {
        margin: 5px 0;
    }
    .mainarea h3{
  text-align:center;
  color:blue;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  margin-top:20px;
  margin-bottom:10px;
}
    /* Apply styles to the table */
.staff-table {
    width: 85%;
    border-collapse: collapse;
    margin-top: 20px;
    
    
    
}

.staff-table th,
.staff-table td {
    margin-right:10px;
    padding: 10px;
    border: 2px solid #ccc;
    text-align: left;
    font-size: 12px;
}

.staff-table th {
    background-color: #f2f2f2;
}

.staff-table td button {
    padding: 5px 10px;
    background-color: #3498db;
    color: #fff;
    border: none;
    cursor: pointer;
    font-size: 12px;
}

.staff-table td button:hover {
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
.staff-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.staff-box {
    width: 48%;
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #ccc;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
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
    <h3> View Staff Details </h3>

    <table class="staff-table">
        <thead>
            <tr>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Department</th>
                <th>Team_No</th>
                <th>Phone No 01</th>
                <th>Phone No 02</th>
                <th>Gender</th>
                <th>JoinedDate</th>
                <th>LeftDate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($staffDetails as $staff): ?>
                <tr>
                    <td><?php echo isset($staff['staff_ID']) ? $staff['staff_ID'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['name']) ? $staff['name'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['email']) ? $staff['email'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['DOB']) ? $staff['DOB'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['Department']) ? $staff['Department'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['Team_No']) ? $staff['Team_No'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['PhoneNo1']) ? $staff['PhoneNo1'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['PhoneNo2']) ? $staff['PhoneNo2'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['Gender']) ? $staff['Gender'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['JoinedDate']) ? $staff['JoinedDate'] : 'N/A'; ?></td>
                    <td><?php echo isset($staff['LeftDate']) ? $staff['LeftDate'] : 'N/A'; ?></td>
                    <td>
                        <form action="#" method="POST">
                            <button type="submit" name="edit_staff" value="<?php echo $staff['staff_ID']; ?>">Edit</button>
                            <button type="submit" name="delete_staff" value="<?php echo $staff['staff_ID']; ?>" style="background-color: red; color: white;">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</form>


   
              
    </div>
  </div>
</body>
</html>
