<?php
@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   
   $select = "SELECT * FROM clientlogin WHERE email = '$email' && password = '$pass'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      
      // Store the client's name in the session
      $_SESSION['name'] = $row['name'];
      header('location: ClientDashMain.php');
      exit();
   } else {
      $error[] = '!!! Incorrect Email or Password !!!';
   }
}
?>

<html>
    <head>
        <title>Login Now</title>

        <!-- LoginStyle Css Link -->
    <link rel="stylesheet" href="../Css/LoginStyle.css">
          <!-- fa fa icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
   </head>
    <body>
        <div class="content">
            <div class="text">
               Login
            </div>
            <div class="Whotext">
               <p class="whoAreYou">Who are you ??? </p>
            
               <div class="radio-inputs">
                  <label class="radio">
                    <input type="radio" name="radio"  checked="" >
                    <span class="name">Client</span>
                  </label>
                  <label class="radio">
                    <input type="radio" name="radio" onclick="window.location.href='LoginStaff.php'">
                    <span class="name">Staff</span>
                  </label>  
                </div>
                
      
            </div>
            <form action="#" method="POST">

            <?php
if(isset($error)){
    foreach($error as $error){
        echo '<span class="error-msg" style="color: white;">'.$error.'</span>';
    }
};
?>

               <div class="field">
                  <input required="" type="text" name="email" class="input">
                   <label class="label">Email ID</label>
               </div>
               <div class="field">  
                  <input required="" type="password" name="password" class="input">
                  <label class="label">Password</label>
               </div>
               <div class="forgot-pass">
                  <a href="#">Forgot Password?</a>
               </div>
               <button class="button" type="submit" name="submit">Sign in</button>
               <div class="sign-up">
                  Not a Client?
                  <a href="registerLoginClient.php">Register Now</a>  
               </div>
               <div class="homeIcon">  
                  <a href="index.html">  <i class="fa fa-home" style="font-size:36px"></i> </a>
              </div>
              
              
            </form>
         </div>
         <DIV>
    </body>
</html>