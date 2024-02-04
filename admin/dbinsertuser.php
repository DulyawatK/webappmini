<?php
require 'conn.php';

$sql_update="INSERT INTO users(uid,username,email,password,urole) VALUES ('$_POST[uid]','$_POST[username]','$_POST[email]','$_POST[password]','$_POST[urole]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=alluser.php");
}

?>