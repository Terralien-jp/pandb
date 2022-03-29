<?php
    $DBSERVER = "localhost";
    $DBUSER = "root";
    $DBPASSWORD = "";
    $DBNAME = "stock";

    $conn = mysqli_connect($DBSERVER, $DBUSER, $DBPASSWORD, $DBNAME);

    if(mysqli_connect_error())
    {
        echo mysqli_connect_error();
    }
    else {
        echo "connect OK";
    }

// $sql ="INSERT INTO stockUser (user_number, user_name, user_password, enable)";
// $sql ="VALUES ('A13', '毘沙門太郎', '111', 1)";
//     if($result = mysqli_query($conn, $sql)){
//         echo "insert OK<br>";
//     }
//     else {
//         echo "insert NG<br>";
//     }

$sql = "SELECT * FROM stockUser";

    if($result = mysqli_query($conn, $sql)){
        echo "select OK<br>";
        echo "レコード件数" . mysqli_num_rows($result) . "<br>";
    }
    else {
        echo "select NG";
    }
while($row = mysqli_fetch_assoc($result)){
    echo $row['user_id'] . "," .$row['user_number'] . "," .$row['user_name'] . "," . $row["user_password"] . "<br>";
}
    mysqli_close($conn);
    ?>
    finish