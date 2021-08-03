<?php
require_once 'connection.php';
require_once 'functions.php';
$conn = connectMysql();
session_start();
$userName = $_POST['username'];
$passWord_user = $_POST['password'];

$result = query_username($conn, $userName);


if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();

    $passWord_hashed = $row["C_Password"];
    $passWord_correct = password_verify($passWord_user, $passWord_hashed);
    if ($passWord_correct === false) {
        echo "<script> alert('Wrong password!');location.href='../index.php'; </script>";
        exit();
    } else {

        if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) { 
     
            $secretKey   = "6LdDrc8bAAAAAGhP99aDPJ2_6O7yrwIUc8yJLaQU";
            $responseKey = $_POST['g-recaptcha-response'];
            $userIP      = $_SERVER['REMOTE_ADDR'];
            $url         = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
            $response    = file_get_contents($url);
            $response    = json_decode($response);
         
            if($response->success){
                echo "Verification success.";
                $_SESSION['username'] = $userName;
                header("Location: ../shopping/shopping.php");
            } else {
                echo "<script> alert('reCAPTHCA verification failed, please try again.');location.href='login.php'; </script>";
                return;
            }
         
        } else {
            echo "<script> alert('Please click reCAPTHCA to verify.');location.href='../index.php'; </script>";
            return;
        }

    }

} else {

		// echo "<script> alert('Username dosen't exist.Please sign up first.');location.href='../index.php'; </script>";
        header("Location: ../index.php");
        exit();

}

$conn->close();
?>