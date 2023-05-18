<?php
include "session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Selamat datang, <?php echo $_SESSION['nama']; ?></h1>
	<div class="register">
	    <button onclick="javascript:location.href='register.php'"> Tambah Admin </button>
	</div>
	<br>
	<button onclick="javascript:location.href = 'logout.php'">Logout</button>
</body>
</html>
