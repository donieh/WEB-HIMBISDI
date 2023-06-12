<?php
include "connection.php";

$jabatan = mysqli_real_escape_string($con, $_POST['jabatan']);
$jabatan2 = mysqli_real_escape_string($con, $_POST['jabatan2']);
$idpengurus = mysqli_real_escape_string($con, $_POST['idpengurus']);
$namapengurus = mysqli_real_escape_string($con, $_POST['namapengurus']);
$linkedin = mysqli_real_escape_string($con, $_POST['linkedin']);
$instagram = mysqli_real_escape_string($con, $_POST['instagram']);
$periode = mysqli_real_escape_string($con, $_POST['periode']);
$foto = "";
$foto_cek = $_FILES['foto']['name'];

if ($foto_cek != "") {
    $folder = "C:/xampp/htdocs/UTS/login/bdb_13/images/pengurus"; // Ganti dengan path absolut direktori yang benar
    $tmp_name = $_FILES['foto']['tmp_name']; // File yang diupload
    $name = md5(date("YmdHis"));
    $split = explode(".", $foto_cek); // Membagi nama string berdasarkan titik
    $ext_file = end($split); // Nama ekstensi file, contoh: jpg atau png
    $foto = $name . "." . $ext_file; // Menggabungkan nama foto baru dengan ekstensi
    move_uploaded_file($tmp_name, "$folder/$foto");

    //hapus foto lama
    $sql = "SELECT * FROM pengurus WHERE idpengurus='$idpengurus' ";
    $query = mysqli_query($con, $sql);
    $data = mysqli_fetch_array($query);

    if (!empty($data['foto'])) {
        unlink("C:/xampp/htdocs/UTS/login/bdb_13/images/pengurus/$data[foto]"); // Menghapus foto pengurus yang dihapus
    }

    $sql = "UPDATE pengurus SET foto='$foto' WHERE idpengurus='$idpengurus'";
    $query = mysqli_query($con, $sql);
}

$sql = "UPDATE pengurus SET jabatan='$jabatan', jabatan2='$jabatan2', namapengurus='$namapengurus', linkedin='$linkedin', instagram='$instagram', periode='$periode' WHERE idpengurus='$idpengurus'";
$query = mysqli_query($con, $sql);

if ($query) {
    $url = "index.php?menu=pengurus";
    $pesan = "Data berhasil diubah";
} else {
    $pesan = "Terjadi kesalahan saat mengubah data";
}

echo "<script>alert('$pesan'); window.location.href='$url';</script>";
?>
