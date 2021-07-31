<?php
include 'connection.php';
$conn = connectMysql();
$userName = $_POST['username'];
$passWord = $_POST['password'];
$passWord_hashed = password_hash($passWord, PASSWORD_DEFAULT);

function query_addUser($conn, $uid, $upass) {
    $sql = "INSERT INTO account(C_ID,C_Password) VALUES( ? , ? )";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        return null;
    }

    mysqli_stmt_bind_param($stmt, "ss", $uid, $upass);
    mysqli_stmt_execute($stmt);

    $error = mysqli_stmt_errno($stmt);
    mysqli_stmt_close($stmt);
    return $error;
}


// $query = "INSERT INTO account(C_ID,C_Password) VALUES('$userName','$passWord')";
if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) { 
     
        $secretKey   = "6LdDrc8bAAAAAGhP99aDPJ2_6O7yrwIUc8yJLaQU";
        $responseKey = $_POST['g-recaptcha-response'];
        $userIP      = $_SERVER['REMOTE_ADDR'];
        $url         = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
        $response    = file_get_contents($url);
        $response    = json_decode($response);
     
        if($response->success){
            echo "Verification success.";
            $error = query_addUser($conn, $userName, $passWord_hashed);
		    if ($error === 0) {
                echo "<script> alert('New account created successfully!');location.href='../index.php'; </script>"; 
            } else {
                echo "<script> alert('Username already exists.');location.href='../index.php'; </script>"; 
            }
        } else {
            echo "<script> alert('reCAPTHCA verification failed, please try again.');location.href='../index.php'; </script>";
            return;
        }
     
} else {
    echo "<script> alert('Please click reCAPTHCA to verify.');location.href='../index.php'; </script>";
    return;
}

$conn->close();
?>