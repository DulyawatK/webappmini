<?php

    session_start(); 

    require 'conn.php';
        $sql_update="UPDATE users SET username='$_POST[username]',email='$_POST[email]' WHERE uid='$_SESSION[uid]' ";

        $result= $conn->query($sql_update); 

        if(!$result) {
            die("Error God Damn it : ". $conn->error);
        } else {

        $_SESSION['username'] = $_POST['username'] ;
        $_SESSION['email'] = $_POST['email'] ;

        echo "Edit Success <br>";
    header("refresh: 1; url= editpfp.php");
    }
?>