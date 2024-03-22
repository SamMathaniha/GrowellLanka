<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);


   $select = " SELECT * FROM clientlogin WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO clientlogin(name, email, password) VALUES('$name','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:login.php');
         echo '<script>alert("Registered successfully, Now you can Login!");</script>';
      }
   }

};


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
               Register
            </div>
            
            <form action="#" method="POST">

            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>



               <div class="field">
                  <input required="" type="text" name="name" class="input">
                   <label class="label"> Enter Your Name / Company Name</label>
               </div><br>
               <div class="field">
                  <input required="" type="text" name="email" class="input">
                   <label class="label"> Enter Your Email / Company Email</label>
             </div><br>
               <div class="field">  
                  <input required="" type="password" name="password" class="input">
                  <label class="label">Password</label>
               </div><br>
               <div class="field">  
                <input required="" type="password" name="cpassword" class="input">
                <label class="label">Confirm Password</label>
             </div><br>
             

               <button class="button" type="submit" name="submit">Register</button>
               <div class="sign-up">
                already have an account?
                  <a href="login.php">Register Now</a>  
               </div>
               <div class="homeIcon">  
                  <a href="index.html">  <i class="fa fa-home" style="font-size:36px"></i> </a>
              </div>
              
              
            </form>
         </div>
    </body>
</html>