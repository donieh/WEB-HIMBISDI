<?php 
include "connection.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$password = md5($_POST['password']);

$sql   = "INSERT INTO admin
			(email,nama,password) 
		  VALUES 
		    ('$email','$nama','$password')";
$query = mysqli_query($con,$sql);

$url   = "index.php?menu=admin";
$pesan = "Admin berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>
