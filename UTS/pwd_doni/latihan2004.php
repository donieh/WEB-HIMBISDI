<form action="" method="post">
    <table>
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" id="nim"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>
                <select name="kelas" id="kelas">
                    <option value="stia">STI A</option>
                    <option value="stib">STI B</option>
                    <option value="bda">BD A</option>
                    <option value="bdb">BD B</option>
                    <option value="kua">KU A</option>
                    <option value="kub">KU B</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <button type="submit" value="cek">CEK</button>
            </td>
        </tr>
    </table>
</form>

<?php
    if(isset($_POST['nim'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $kode_prodi = substr($nim, 0, 1);

        if($kode_prodi == "1"){
            $prodi = "Bisnis Digital";
        } else if($kode_prodi == "2"){
            $prodi = "Sistem dan Teknologi Informasi";
        } else if($kode_prodi == "3"){
            $prodi = "Kewirausahaan";
    }

    echo "Hello, " $.nama. "! Selamat datang di prodi ".$prodi;
}

?>