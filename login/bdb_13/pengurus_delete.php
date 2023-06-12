<?php
include "connection.php";

$idpengurus = isset($_GET['idpengurus']) ? $_GET['idpengurus'] : "";
$idpengurus = mysqli_real_escape_string($con, $idpengurus);

if (!empty($idpengurus)) {
    $sql   = "DELETE FROM pengurus WHERE idpengurus='$idpengurus'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        $url   = "index.php?menu=pengurus";
        $pesan = "Pengurus berhasil dihapus";
        echo "<script>alert('$pesan'); location='$url'; </script>";
    } else {
        echo "Terjadi kesalahan dalam menghapus pengurus";
    }
} else {
    echo "Idpengurus tidak tersedia";
}
?>
