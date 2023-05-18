<?php
    $user = "root";
    $server = "localhost";
    $password = "";
    $db = "database_doni_pwd";

    $conn = mysqli_connect($server, $user, $password, $db);

    if(!$conn) {
        die("gagal koneksi ke database");
    }

    // echo "koneksi berhasil";

    // mysqli_close($conn);
?>