<?php
include 'connection.php';
$conn = connectMysql();
$userName = $_POST['username'];
$passWord = $_POST['password'];


$query = "INSERT INTO account(C_ID,C_Password) VALUES('$userName','$passWord')";
// if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) { 
     
//         $secretKey   = "6LehX_4aAAAAANIoyIRIYn8QzZtwtE7ytaQ1hgmZ";
//         $responseKey = $_POST['g-recaptcha-response'];
//         $userIP      = $_SERVER['REMOTE_ADDR'];
//         $url         = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";
//         $response    = file_get_contents($url);
//         $response    = json_decode($response);
     
//         if($response->success){
//             echo "Verification success.";
// 		    if ($conn->query($query) === TRUE) {
//                 echo "<script> alert('New account created successfully!');location.href='register.php'; </script>"; 
//             } else {

//                 echo "<script> alert('Username already exists.');location.href='register.php'; </script>"; 
//             }
//         } else {
//             echo "<script> alert('reCAPTHCA verification failed, please try again.');location.href='register.php'; </script>";
//             return;
//         }
     
// } else {
//     echo "<script> alert('Please click reCAPTHCA to verify.');location.href='register.php'; </script>";
//     return;
// }

// TODO delete later
if ($conn->query($query) === TRUE) {
    echo "<script> alert('New account created successfully!');location.href='register.php'; </script>"; 
} else {

    echo "<script> alert('Username already exists.');location.href='register.php'; </script>"; 
}

$conn->close();
?>