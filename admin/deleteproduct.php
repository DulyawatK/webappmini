<?php
require 'conn.php';

// Corrected: Store the query result in the correct variable
$result = $conn->query("DELETE FROM product WHERE p_id = {$_POST['p_id']} LIMIT 1");

if (!$result) {
    die("Delete Failed: " . $conn->error);
} else {
    echo "Delete Success!<br>";
    header("refresh: 1; url=allproduct.php"); // Corrected redirect URL
}

?>