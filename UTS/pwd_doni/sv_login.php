<?php
session_start();
include "config/connection.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$sql = "select * from tb_user where username='$username' and password='$password'";
$query = mysqli_query($conn, $sql);
$num = mysqli_num_rows($query); //mengambil jumlah data yang muncul
$result = mysqli_fetch_array($query); //mengambil array data
// while($result = mysqli_fetch_array($query)){
//     // echo $result['id']. "<br>";
//     // echo $result['username']. "<br>";
//     // echo $result['fullname']. "<br>";
// }

if($num == 0){
    ?>
    <script>
        alert("otentikasi gagal");
        location.href="login.php";
    </script>
    <?php
}else{
    $_SESSION['uname'] = $username;
    $_SESSION['fname'] = $result['fullname'];
    ?>
    <script>
        location.href="home.php" ;  
    </script>
    <?php
}

    ?>