<?php
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $alamat = $_POST['address'];
    $negara = $_POST['country'];
    $email = $_POST['email'];
    $foto = $_POST['photo'];
    $komentar = $_POST['comment'];
    $sandi = $_POST['password'];
    $hobi1 = $_POST['hobi1'] ?? '';
    $hobi2 = $_POST['hobi2'] ?? '';
    $hobi3 = $_POST['hobi3'] ?? '';

    echo "Nama : ".$name."<br>";
    echo "Jenis Kelamin : ".$gender. "<br>";
    echo "Alamat : ".$alamat. "<br>";
    echo "Negara : ".$negara. "<br>";
    echo "Email : ".$email."<br>";
    echo "Foto : ".$foto."<br>";
    echo "Komentar : ".$komentar."<br>";
    echo "Sandi : ".$sandi."<br>";
    echo "Hobi :" .$hobi1.", ".$hobi2.", ".$hobi3;
    ?>