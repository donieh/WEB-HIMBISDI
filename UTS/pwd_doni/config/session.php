<?php
session_start();

if(!isset($_SESSION['uname'])) {
?>
    <script>
        alert("kamu belum login! Silahkan login dulu!");
        location.href = "login.php";
    </script>
<?php
}
?>