<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    $confirmed_password = $_POST['confirmed_password'];

    $sql_cek = "SELECT * FROM admin WHERE email = '$email'";
    $query_cek = mysqli_query($conn, $sql_cek);
    $num_cek = mysqli_num_rows($query_cek);

    if ($num_cek == 0) {
        if ($password === $confirmed_password) {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO admin (email, nama, password) VALUES ('$email', '$nama', '$hashed_password')";
            $query = mysqli_query($conn, $sql);

            if ($query) {
                ?>
                <script>
                    alert("Data berhasil diregister");
                    location.href = "login.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("Terjadi kesalahan saat menyimpan data: <?php echo mysqli_error($conn); ?>");
                    location.href = "register.php";
                </script>
                <?php
            }
        } else {
            ?>
            <script>
                alert("Password dan konfirmasi password tidak cocok!");
                location.href = "register.php";
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("Email sudah digunakan!");
            location.href = "register.php";
        </script>
        <?php
    }
}

mysqli_close($conn);
?>

<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../assets/css/admin_style.css">
    </head>
    <body>
    <div class="container">
    <h2>Halaman Register Admin<br>HIMBISDI</h2>
        <form action="register.php" method="post" class="form-group">
            <table>
                <tr>
                    <td><input type="email" name="email" id="email" placeholder="E-mail" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="nama" id="nama" placeholder="Nama" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="password" id="password" onkeyup="cek_password()" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="confirmed_password" id="confirmed_password" onkeyup="cek_password()" placeholder="Confirm Password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Daftar" id="button_submit" class="button_submit" disabled></td>
                </tr>
                
            </table>
        </form>
    </div>
    </body>

    <script>
        function cek_password()
        {
            var password = document.getElementById("password").value;
            var confirmed_password = document.getElementById("confirmed_password").value;

            if( password == confirmed_password ) {
                document.getElementById("button_submit").disabled = false;
            } else {
                document.getElementById("button_submit").disabled = true;
            }
        }
    </script>
</html>
