if($flag) {
    include "dbConnect.php";

    $user_number = $_POST["user_number"];
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];

    $sql = "INSERT INTO stockUser (user_number, user_name, user_password, enable)";
    $sql .= "VALUES('$user_number', '$user_name', '$user_password', 1)";
    echo $sql;

    if ($result = mysqli_query($conn, $sql)){
        echo "insert OK<br>";
    }
    else {
        echo "insert NG<br>";
    }

    $sql ="select * from stockUser";
    if($result = mysqli_query($conn, $sql)){
        echo "select OK<br>";
    }
    else {
        echo "select NG<br>";
    }

    while($row = mysqli_fetch_assoc($result)) {
        echo $row['user_id'] . "," . $row['user_number'] . "," . $row['user_name'] . "," . $row['user_password'] . "<br>";
    }
    mysqli_close($conn);
}