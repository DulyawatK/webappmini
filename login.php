<?php 
   session_start();
   require_once 'conn.php';
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="css/login_and_signup.css">
   </head>
   <body style="background-image : url(img/background/background.png); background-size: cover">
      <div class="wrapper">
         <div class="title">
            Login 
         </div>
         <form action="DB.login.php" method="POST">
            <div class="field">
               <input type="text" name="email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
               Not a member? <a href="register.php">Register now</a>
            </div>
         </form>
      </div>
   </body>
</html>