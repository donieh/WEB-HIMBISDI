<?php
include "config/session.php";

echo "Hello, ".$_SESSION['fname'];
?>
<br>
<button onclick="javascript:location.href = 'logout.php'">Logout</button>