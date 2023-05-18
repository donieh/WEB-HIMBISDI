<?php
$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "himbisdi";

$conn = mysqli_connect($server,$user,$pass,$db);

if(!$conn) {
    die("gagal koneksi ke database");
}

?>