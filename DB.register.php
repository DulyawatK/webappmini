<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $urole = 'user';

        require 'conn.php';
        $cheack_email_query = "SELECT * FROM users WHERE email='$email'";
        $cheack_email_result = $conn->query($cheack_email_query);
        
        if ($cheack_email_result->num_rows > 0) {
            echo '<script>alert("Email already ttaken. Please choose a different email.");</script>';
            header("refresh : 1; url= register.php");
            echo '<script>window.history.back();</script>';

        } else {
            if ($password !== $c_password) {
                echo '<script>alert("Passwords do not match. Pleae try again.");</script>';
                header("refresh : 1; url= register.php");
                echo '<script>window.history.back();</script>';

            } else {
                $sql_insert = "INSERT INTO users (username, email, password, urole)
                                VALUES ('$username', '$email', '$password', '$urole')";
                                
                $insert_result = $conn->query($sql_insert);

                if (!$insert_result) {
                    die ("Error: ". $conn->error);

                } else {
                    echo '<script>alert("Registration successfull");</script>';
                    header("refresh: 1; url= login.php");
                }
            }
        }
    }
?>