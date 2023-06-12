<?php
include "connection.php";

$id = mysqli_real_escape_string($con, $_POST['id']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$nama = mysqli_real_escape_string($con, $_POST['nama']);
$password = mysqli_real_escape_string($con, $_POST['password']);

// Ambil password saat ini dari database
$sql_password = "SELECT password FROM admin WHERE id='$id'";
$query_password = mysqli_query($con, $sql_password);
$row = mysqli_fetch_assoc($query_password);
$existing_password = $row['password'];

// Periksa apakah password baru diinput atau tidak
if (!empty($password)) {
    // Jika password baru diinput, hash password tersebut
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
} else {
    // Jika password baru tidak diinput, gunakan password yang ada sebelumnya
    $hashed_password = $existing_password;
}

// Update data admin
$sql = "UPDATE admin SET email='$email',
                        nama='$nama',
                        password='$hashed_password'
                        WHERE id='$id'";
$query = mysqli_query($con, $sql);

$url = "index.php?menu=admin";
$pesan = "Admin berhasil diubah";

echo "<script>alert('$pesan'); window.location.href='$url'; </script>";
?>
