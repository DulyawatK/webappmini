<?php 
   session_start();
   require_once 'conn.php';
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Register</title>
      <link rel="stylesheet" href="css/login_and_signup.css">
   </head>

   <body style="background-image : url(img/background/background.png); background-size: cover">
      <div class="wrapper">
         <div class="title">
            Register
         </div>
         <form action="DB.register.php" method="POST">
            <div class="field">
               <input name="username" type="username" required>
               <label for="username">Username</label>
            </div>
            <div class="field">
               <input name="email" type="email" required>
               <label for="email">Email Address</label>
            </div>
            <div class="field">
               <input name="password" type="password" required>
               <label for="password">Password</label>
            </div>
            <div class="field">
                <input name="c_password" type="password" required>
                <label for="Confrim Password">Confrim Password</label>
             </div><br>
            <div class="field">
               <input type="submit" value="Sign up" name="Signup">
            </div>
            <div class="signup-link">
               Already a member? <a href="login.php" name="reg_user">login</a>
            </div>
         </form>
      </div>
   </body>
</html>