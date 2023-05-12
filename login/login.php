<?php
include "config.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $admin = array(
        'email' => 'admin@gmail.com',
        'password' => 'test'
    );

    if ($email === $admin['email'] && password_verify($password, $admin['password'])) {
        $_SESSION['loggedin'] = true;
        echo 'Login berhasil!';
        header('Location: admin/index.php');
        exit;
    } else {
        $error = 'Email atau password yang dimasukkan salah!';
    }
}
?>


<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin HIMBISDI</title>
  <link rel="stylesheet" href="../assets/css/admin_style.css">
</head>
<body>
  <div class="container">
    <h2>Halaman Login Admin HIMBISDI</h2>

    <?php if (isset($error)) { ?>
      <p class="error"><?php echo $error; ?></p>
    <?php } ?>

    <?php if (isset($message)) { ?>
      <p class="message"><?php echo $message; ?></p>
    <?php } ?>

    <form method="post" action="login.php">
      <div class="form-group">
        <label for="email">Masukkan email:</label>
        <input type="email" id="email" name="email" placeholder="E-mail" required>
      </div>
      <div class="form-group">
        <label for="password">Masukkan password:</label>
        <input type="password" id="password" name="password" placeholder="Password" required>
      </div>
      <div class="submit">
        <input type="submit" class="btn-login" name="login" value="LOGIN">
      </div>
      <div class="register">
       <p> Belum punya akun? <a href="register.php"> Buat akun sekarang </a> </p>
      </div>
    </form>
  </div>
</body>
</html>
