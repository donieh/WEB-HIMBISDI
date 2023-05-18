<?php
include "config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Email yang dimasukkan tidak valid';
    } elseif (empty($password)) {
        $error = 'Password tidak boleh kosong';
    } else {
        $sql = "SELECT * FROM admin WHERE email='$email'";
        $query = mysqli_query($conn, $sql);
        $result = mysqli_fetch_array($query);

        if ($result && password_verify($password, $result['password'])) {
          $_SESSION['loggedin'] = true;
          $_SESSION['nama'] = $result['nama'];
          header('Location: blank_page.php');
          exit;
        } else {
            $error = 'Email atau password yang dimasukkan salah!';
        }
    }
}
mysqli_close($conn);
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
    </form>
  </div>
</body>
</html>
