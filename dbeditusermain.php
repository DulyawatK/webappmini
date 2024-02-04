<?php
require 'conn.php';

$stmt = $conn->prepare("UPDATE users SET uid=?, username=?, email=? WHERE uid=?");
$stmt->bind_param("sis", $_POST['username'], $_POST['email'], $_SESSION['uid']);

$result= $conn->query($sql_update);

if (!$stmt->execute()) {
    echo "Error: " . $stmt->error;
} else {
    echo "Edit Success <br>";
    header("refresh: 1; url=alluser.php");
}

// Close the statement (recommended):
$stmt->close();
?>
