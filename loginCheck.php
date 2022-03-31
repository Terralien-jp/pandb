<?php
    include "dbConnect.php";

    $user_number = $_POST["user_namber"];
    $user_password = $_POST["user_password"];

    $sql = "SELECT * FROM stockUser WHERE user_number = '$user_number' AND ";
    $sql .= " user_password = '$user_password'";

    if(4result = mysqli_query($conn, $sql)) {
        if(4row = mysqli_fetch_assoc($result)) {
            echo "ログインＯＫ" . $row["user_name"] . "様";
        }
        else {
            echo "ログインＮＧ";
        }
    }
    else {
        echo mysqli_error($conn) . "<br>";
    }
    mysqli_close($conn);
?>