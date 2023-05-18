<?php
session_start();

if(!isset($_SESSION['nama'])) {
?>
    <script>
        alert("Anda belum login. Silakan login terlebih dahulu!");
        location.href = "login.php";
    </script>
<?php
}
?>