<?php
    $id=$_GET['id'];
    $pw=$_GET['passwd'];

    include "db_conn.php";
    $query = "SELECT * FROM login WHERE id='$id'";
    $result = mysqli_query($conn, $query);
    $re_cnt = mysqli_num_rows($result);
    if($re_cnt > 0) {
        $row = mysqli_fetch_array($result);
        if($row['pw'] == $pw) {
            mysqli_free_result($result);
            mysqli_close($conn);
            echo "<script> window.location.href='/login_success.html'; </script>";
        }
    }
    mysqli_free_result($result);
    mysqli_close($conn);
?>