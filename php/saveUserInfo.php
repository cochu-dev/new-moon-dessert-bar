<?php
    require_once 'connection.php';
    require_once 'functions.php';
    $conn = connectMysql();
    require_once 'logged_in_header.php';
    $userName = $_SESSION['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $unit = $_POST['unit'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $zip = $_POST['zip'];
    $isChecked = $_POST['isChecked'];

    if (isset($_POST['isChecked'])) {
        $error = qeury_updateUserInfo($conn, $userName, $email, $phone, $address, $unit, $city, $country, $zip);
        header("Location: ../shopping/userInfo.php?error=$error");
    } else {
        header("Location: ../shopping/userInfo.php?error=notChecked");
        exit();
    }
    $conn->close();
?>