<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "nunuk_panca_wulan_311910260";

    $conn = mysqli_connect($host,$user,$pass,$db);
    if ($conn == false) {
        echo "connetion failed.";
        die();
    } else #echo "koneksi berhasi
?>