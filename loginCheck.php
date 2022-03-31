<?php
    include "dbConnect.php";

    $user_number = $_POST["user_number"];
    $user_password = $_POST["user_password"];

    $sql = "SELECT * FROM stockUser WHERE user_number = '$user_number' AND ";
    $sql .= " user_password = '$user_password'";

    if($result = mysqli_query($conn, $sql)) {
        if($row = mysqli_fetch_assoc($result)) {
            // echo "ログインＯＫ" . $row["user_name"] . "様";
            $flag = true;
        }
        else {
            // echo "ログインＮＧ";
            $flag = false;
        }
    }
    else {
        echo mysqli_error($conn) . "<br>";
    }
    mysqli_close($conn);

    $host = $_SERVER['HTTP_HOST'];
    $uri = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    if($flag) {
        $extra = "stockList.php";
        header("Location: http://$host$uri/$extra");
        exit();
    }
    else {
        $extra = "index2.html";
        header("Location: http://$host$uri/$extra");
        exit();
    }
?>