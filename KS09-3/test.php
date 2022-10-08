<?php
    $conn = mysqli_connect("192.168.230.132", "root", "kisa123", "KISA");
    if(!$conn) {
        echo "Error Unable to connect to Mariadb";
        exit;
    }

    $check = "SELECT * FROM login";
    $result = mysqli_query($conn, $check);
    $re_cnt = mysqli_num_rows($result);
    if($re_cnt > 0) {
        while($row = mysqli_fetch_array($result)) {
            echo "Num .", $row['idx'], "<br>ID : ", $row['id'], "<br>Password : ", $row['pw'], "<br>";
        }
    }
    else {
        echo "Not Found Result!";
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>