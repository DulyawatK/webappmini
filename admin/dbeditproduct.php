<?php
require 'conn.php';
$sql_update="UPDATE p_id SET p_id='$_POST[p_id]',p_name = '$_POST[p_name]', p_descrip='$_POST[p_descrip]' ,p_price='$_POST[p_price]' WHERE p_id='$_POST[p_id]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url= allproduct.php");
}
?>