<?php
include "connection.php";
$jabatan = mysqli_real_escape_string($con,$_POST['jabatan']);
$jabatan2 = mysqli_real_escape_string($con,$_POST['jabatan2']);
$namapengurus = mysqli_real_escape_string($con,$_POST['namapengurus']);
$linkedin = mysqli_real_escape_string($con,$_POST['linkedin']);
$instagram = mysqli_real_escape_string($con,$_POST['instagram']);
$periode = mysqli_real_escape_string($con,$_POST['periode']);
$jabatan = $_POST['jabatan'];

$foto = "";
$foto_cek = $_FILES['foto']['name'];
if($foto_cek != "")
{
    $folder = "../bdb_13/images/pengurus"; // Ganti dengan path absolut direktori yang benar
    $tmp_name = $_FILES['foto']['tmp_name']; //file yg diupload
    $name = md5(date("YmdHis"));
    $split = explode(".",$foto_cek); //membagi nama string berdasarkan titik
    $ext_file = end($split); //nama ekstensi file, cth: jpg atau png
    $foto = $name.".".$ext_file; //gabungkan nama foto baru dengan extensi
    move_uploaded_file($tmp_name, "$folder/$foto");
}
$sql = "INSERT INTO pengurus
            (jabatan,jabatan2,namapengurus,linkedin,instagram,periode,foto)
        VALUES ('$jabatan','$jabatan2','$namapengurus','$linkedin','$instagram','$periode','$foto')";
$query = mysqli_query($con,$sql);

$url = "index.php?menu=pengurus";
$pesan = "Data berhasil disimpan";

echo "<script>alert('$pesan'); location='$url'; </script>";
?>