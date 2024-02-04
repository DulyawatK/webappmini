<?php
    require 'conn.php';

    $sql_update="INSERT INTO product(p_id,p_name,p_descrip,p_price,p_img) VALUES ('$_POST[p_id]','$_POST[p_name]','$_POST[p_descrip]','$_POST[p_price]','$_POST[p_img]')";

    $result= $conn->query($sql_update);

    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {

    echo "Insert Success <br>";
    header("refresh: 1; url=allproduct.php");
    }

?>