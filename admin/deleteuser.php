<?php
require 'conn.php';

// Corrected: Store the query result in the correct variable
$result = $conn->query("DELETE FROM users WHERE uid = {$_POST['uid']} LIMIT 1");

if (!$result) {
    die("Delete Failed: " . $conn->error);
} else {
    echo "Delete Success!<br>";
    header("refresh: 1; url=alluser.php"); // Corrected redirect URL
}

?>