<?php
session_start();  // เริ่มต้นเซสชัน

$conn = new mysqli('localhost','root','','album');
$conn->query("SET NAMES utf8");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
        
            // เช็คว่า username และ password ถูกต้อง
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = $conn->query($sql);
        
            if ($result && $result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $role = $row['urole'];
        
                if ($role == 'user') {

                    // ผู้ใช้ทั่วไป
                    $_SESSION['uid'] = $row['uid'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['profile'] = $row['profile'];

                    header('Location: http://localhost/kiraku/index.php');

                } elseif ($role == 'admin') {
                    // ผู้ดูแลระบบ
                    $_SESSION['email'] = $row['email'];
                    header('Location: http://localhost/kiraku/admin/allproduct.php');

                } else {
                    $_SESSION['email_input'] = $email;  // เก็บ email ที่กรอก
                    $_SESSION['password_input'] = $password;  // เก็บ password ที่กรอก
                    
                echo '<script>alert("Login failed. Invalid username or password!");</script>';
                echo '<script>window.history.back();</script>';
                exit();
            }
        }
    }
?>