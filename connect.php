<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "baitaplon";

    $conn = mysqli_connect($servername,$username,$password,$db);

    if(!$conn)
        echo "lỗi kết nối " . mysqli_connect_error();
    echo "<h1 style='color:red'></h1>"
?>