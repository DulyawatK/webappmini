<?php 
  require_once 'conn.php';
  require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="css/sidebar.css">
</head>
<body>
  <!-- Sidebar -->
  <div class="w3-sidebar w3-bar-block w3-border-right w3-black"  id="mySidebar">
      <a href="allproduct.php" class="w3-bar-item w3-xlarge w3-button w3-hover-red" > <img src="logoxm.png" alt="Your logo description"></a>
      <a href="allproduct.php" class="w3-bar-item w3-button w3-large w3-hover-red">Product</a>
      <a href="alluser.php" class="w3-bar-item w3-button w3-large w3-hover-red">User</a>
      <a href="logout.php" class="w3-bar-item w3-button w3-large w3-hover-red">Logout</a>
    </div>
  <!-- Page Content -->
  <div class="w3-red">
    <button class="w3-button w3-red w3-xlarge" onclick="w3_open()">☰</button>
    <div class="w3-container">
    </div>
  </div>
    
</body>
</html>