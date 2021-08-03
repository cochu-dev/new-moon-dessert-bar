<?php
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

    function query_addUserInfo($conn, $uid) {
        $sql = "INSERT INTO userInfo(C_ID,C_EMAIL,C_PHONE,C_ADDRESS,C_UNIT,C_CITY,C_COUNTRY,C_ZIP) VALUES( ? , '' , '' , '' , '' , '' , '' , '')";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return null;
        }

        mysqli_stmt_bind_param($stmt, "s", $uid);
        mysqli_stmt_execute($stmt);

        $error = mysqli_stmt_errno($stmt);
        mysqli_stmt_close($stmt);
        return $error;
    }

    function qeury_updateUserInfo($conn, $uid, $email, $phone, $address, $unit, $city, $country, $zip) {
        $sql = "UPDATE userInfo SET C_EMAIL = ? ,C_PHONE = ? ,C_ADDRESS = ? ,C_UNIT = ? ,C_CITY = ? ,C_COUNTRY = ? ,C_ZIP = ?  WHERE C_ID = ? ";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return null;
        }

        mysqli_stmt_bind_param($stmt, "ssssssss", $email, $phone, $address, $unit, $city, $country, $zip, $uid);
        mysqli_stmt_execute($stmt);

        $error = mysqli_stmt_errno($stmt);
        mysqli_stmt_close($stmt);
        return $error;
    }
?>