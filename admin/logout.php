<?php 
    session_start();
    if(session_destroy()){
        header("location: http://localhost/kiraku/login.php");
    }
?>