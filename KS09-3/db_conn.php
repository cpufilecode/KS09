<?php
    $conn = mysqli_connect("192.168.230.132", "root", "kisa123", "KISA");
    if(!$conn) {
        echo "Error Unable to connect to Mariadb";
        exit;
    }
    mysqli_query($conn, "SET NAMES utf8");
?>