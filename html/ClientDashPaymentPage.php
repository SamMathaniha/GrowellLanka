<?php

// Include config.php and establish database connection
@include 'config.php';

if (isset($_POST['submit'])) {
    // Get values from other input fields
    $refNo = mysqli_real_escape_string($conn, $_POST['refNo']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    // Check if an image was uploaded
    if (isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK) {
        // Handle image upload
        $image = $_FILES['Image'];

        $uploadDir = 'F:/z Software download/Xammp/1/htdocs/GrowellFinal/html/uploadImage/';
        $imageFileName = basename($image['name']);
        $imageFilePath = $uploadDir . $imageFileName;

        if (move_uploaded_file($image['tmp_name'], $imageFilePath)) {
            // Image uploaded successfully
            $insert = "INSERT INTO payment_slip (Image, refNo, email, date, amount) VALUES ('$imageFileName', '$refNo', '$email', '$date', '$amount')";
            mysqli_query($conn, $insert);
            echo '<script>alert("Inserted successfully!");</script>';
        } else {
            echo '<script>alert("Error uploading image.");</script>';
        }
    } else {
        echo '<script>alert("No image uploaded or an error occurred.");</script>';
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
  <style>
    body, html {
  margin: 0;
  padding: 0;
  height: 100%;
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}

.left-side, .right-side {
  flex: 1;
  padding: 20px;
  box-sizing: border-box;
}

.left-side {
  border-right: 2px solid #000; 
  text-align: center;
}

.right-side {
  text-align: center;
}

.divider {
  width: 2px;
  background-color: #000; /* Color of the dividing line */
}






/* ===== QR CSS ======*/ 

.AccNoQR {
  display: inline-block;
  perspective: 1000px;
  margin: 20px;
  position: relative;
}

.AccNoQR img {
  width: 250px;
  border-radius: 10px;
  transition: transform 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.AccNoQR:hover img {
  transform: rotateY(15deg) rotateX(-15deg) translateZ(30px);
}

.AccNoQR::before {
  content: "";
  position: absolute;
  top: -8px;
  left: -8px;
  right: -8px;
  bottom: -8px;
  background: linear-gradient(135deg, rgba(255, 255, 255, 0.8) 0%, rgba(173, 216, 230, 0.8) 100%);
  border-radius: 20px;
  opacity: 0;
  transition: opacity 0.5s;
}

.AccNoQR:hover::before {
  opacity: 1;
}

/* =====QR Download Button======*/ 
.QRDownloadBtn {
  background-color: #0074D9; 
  color: white; 
  border: none;
  border-radius: 4px;
  padding: 10px 20px;
  cursor: pointer;
  transition: background-color 0.3s, transform 0.2s;
}

.QRDownloadBtn:hover {
  background-color: #0056b3; /* Darker blue background color on hover */
  transform: scale(1.05); /* Slight scale-up on hover */
}




.QRText {
  font-size: 18px;
  font-weight: bold;
  color: #333; /* Text color */
  background-color: transparent; /* Transparent background */
  padding: 10px; /* Add some padding around the text */
  border-radius: 5px; /* Rounded corners */
  text-align: center; /* Center the text */
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
}

.QRText:hover {
  background-color: #f0f0f0; /* Light background color on hover */
  transform: scale(1.05); /* Slightly increase size on hover for a subtle effect */
}




/* ======== payment slip upload here heading ======== */

.UploadSlipText {
  font-weight: bold;
  font-family: "Arial", sans-serif; /* You can replace "Arial" with the desired font family */
  text-shadow: 2px 2px 4px #00eaff; /* Bright shadow effect */
}






/* ========== form style =============== */

/* Styling for the entire form container */
.form-container {
  margin: 10px;
}

/* Style for form labels */
.form-label {
  display: block;
  font-weight: bold;
  text-align: left;
}

/* Style for form inputs */
.form-input input[type="text"],
.form-input input[type="email"],
.form-input input[type="date"],
.form-input input[type="file"] {
  width: 95%;
  padding: 8px;
  margin-top: 2px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

/* Style for submit button */
.button {
  background-color: green;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Style for clear button */
.form-input button[type="reset"] {
  background-color: blue;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* Style for error messages */
.error-msg {
  color: red;
}

/* Set transparent background for the form */
form {
  background-color: transparent;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  max-width: 400px;
  margin: 0 auto;
}





/*======================= Add a media query for screens with a max width of 600px =======================*/
@media (max-width: 700px) {
  .container {
    flex-direction: column; /* Stack flex items vertically */
    align-items: stretch; /* Stretch items to full width */
  }

  .left-side, .right-side {
    flex: none; /* Reset flex property to default (no flex) */
    padding: 10px; /* Reduce padding for smaller screens */
    border: none; /* Remove borders for smaller screens */
  }

  .left-side {
    border-bottom: 2px solid #000; /* Add border at the bottom for separation */
  }

  /* Modify other styles as needed for smaller screens */
  .AccNoQR {
    margin: 10px;
  }

  .QRDownloadBtn,
  .QRText {
    font-size: 16px;
    padding: 8px 16px;
  }

  .UploadSlipText {
    font-size: 24px;
  }

  /* Style adjustments for form inputs and buttons */
  .form-input input[type="text"],
  .form-input input[type="email"],
  .form-input input[type="date"],
  .form-input input[type="file"] {
    width: 100%;
  }

  .button,
  .form-input button[type="reset"] {
    padding: 8px 16px;
  }

  form {
    max-width: 100%;
  }
}

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
                    <input type="radio" name="radio"  onclick="window.location.href='ClientDashServicePage.php'"  >
                    <span class="name">Service</span>
                  </label>
                  <label class="radio">
                    <input type="radio" name="radio" checked="" onclick="window.location.href='LoginStaff.php'">
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
        <div class="container">
    <div class="left-side">
      <!-- ============Content for the left side ============ -->
      <div class="AccNoQR">  <!--QR code image-->
        <img src="images/QR_AccNo.png" alt="QR Code">
      </div> <br>
      <P class="QRText"> Scan the QR Code to Get our bank Details </p>
      <br>
      <a href="images/QR_AccNo.png" download>  <!--QR code image download-->
        <button class="QRDownloadBtn">Download the QR Code</button>
      </a>
    </div>
    <div class="divider"></div>
    <div class="right-side">
      <!-- ================= Content for the right side ==============-->
      <P class="UploadSlipText" > Upload your payment Slip Here </p>

      <form action="#" method="POST" enctype="multipart/form-data" >

    
<?php
  if(isset($error)){
     foreach($error as $error){
        echo '<span class="error-msg">'.$error.'</span>';
     };
  };
  ?>


<div class="form-container">
<label class="form-label" for="refNo">Reference No:</label>
<div class="form-input">
  <input type="text" id="refNo" name="refNo"><br>
</div>
</div>

<div class="form-container">
<label class="form-label" for="email">Email:</label>
<div class="form-input">
  <input type="email" id="email" name="email"><br>
</div>
</div>

<div class="form-container">
<label class="form-label" for="date">Date:</label>
<div class="form-input">
  <input type="date" id="date" name="date"><br>
</div>
</div>

<div class="form-container">
<label class="form-label" for="amount">Amount:</label>
<div class="form-input">
  <input type="text" id="amount" name="amount"><br>
</div>
</div>

<div class="form-container">
<label class="form-label" for="Image">Upload Photo / screenshot: <br> <span style="Color:red; font-size:12px;"> * Only Image | maximum 40MB | Only .png/ .jpeg/ .jpg format *</span></label>
<div class="form-input">
  <input type="file" id="Image" name="Image"><br>
</div>
</div>

<div class="form-container">
<div class="form-label"></div>
<div class="form-input">
  <button class="button" type="submit" name="submit">Submit</button>
  <button type="reset">Clear</button>
</div>
</div>
</form>


    </div>
  </div>

</div>
        

   </div>
 </div>
  
     
  
</body>
</html>
