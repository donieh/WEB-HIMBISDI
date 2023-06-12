<?php 
include "connection.php";
$id   = $_GET['id'];

$sql   = "DELETE FROM admin WHERE id='$id' ";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=admin";
$pesan = "Admin berhasil dihapus";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>