<?php
include "config/connection.php";

$username = $_POST['username'];
$fullname = $_POST['fullname'];
$password = md5($_POST['password']);
$confirmed_password = $_POST['confirmed_password'];

//cek usn ad yg pakai atau blm
$sql_cek = "select * from tb_user where username='$username'";
$query_cek = mysqli_query($conn, $sql_cek);
$num_cek = mysqli_num_rows($query_cek);

if($num_cek == 0){
    $sql = "insert into tb_user (username, fullname, password) values('$username', '$fullname', '$password')";
    $query = mysqli_query($conn, $sql);
    ?>
    <script>
        alert("data berhasil diregister");
        location.href = "login.php";
    </script>
    <?php
}else{
    ?>
    <script>
    alert("username sudah ada!");
    location.href = "register.php";
    </script>
    <?php
}
?>