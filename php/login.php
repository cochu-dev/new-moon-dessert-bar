<?php
include 'connection.php';
$conn = connectMysql();
session_start();
$userName = $_POST['username'];
$passWord_user = $_POST['password'];

function query_username($conn, $uid) {
    $sql = "Select * From account Where C_ID= ? ";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return null;
    }

    mysqli_stmt_bind_param($stmt, "s", $uid);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    mysqli_stmt_close($stmt);
    return $resultData;
}

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