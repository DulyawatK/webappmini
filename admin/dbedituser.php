<?php
require 'conn.php';

// Sanitize and escape potential special characters (optional)
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$urole = mysqli_real_escape_string($conn, $_POST['urole']);

$sql_update = "UPDATE users SET uid='$uid', username='$username', email='$email' WHERE uid = '$_SESSION['uid']'";

$result = $conn->query($sql_update);

if (!$result) {
    die("Error: " . $conn->error);
} else {
    echo "Edit Success <br>";
    header("refresh: 1; url=alluser.php");
}
?>
