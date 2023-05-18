<html>
    <head>
        <title>Latihan April 2023</title>
    </head>

    <body>
        <form action="save.php" method="post">
            Name :
            <input type="text" name="name" id="name" class="formatting_bda" placeholder="input nama lengkap"><br>
            Gender :
            <input type="radio" name="gender" id="gender1" value="pria" checked> Man
            <input type="radio" name="gender" id="gender2" value="wanita" checked> Woman<br>
            Address:
            <input type="text" name="address" id="address" class="formatting_bda"><br>
            Country :
            <select name="country" id="country" style="color : pink">
                <option value="">Pilih Negara </option>
                <option value="IDN">Indonesia</option>
                <option value="SG">Singapura</option>
                <option value="MY" selected>Malaysia</option>
            </select><br>
            Email :
            <input type="email" name="email" id="email" placeholder="alamat email"><br>
            Photo :
            <input type="text" name="photo_name" id="photo_name">
            <input type="file" name="photo" id="photo"><br>
            Comment :
            <textarea name="comment" id="comment" class="formatting_bda"></textarea><br>
            Password :
            <input type="password" name="password" id="password"><br>
            Hobi: <br>
            <input type="checkbox" name="hobi1" value="tidur"> tidur<br>
            <input type="checkbox" name="hobi2" value="masak"> masak<br>
            <input type="checkbox" name="hobi3" value="jalan"> jalan<br>

            <button value="submit" type="submit" class="btn" onclick="tekan_tombol(this.value)" title="submit your data">submit </button>
            <button value="cancel" type="button" class="btn_cancel" onclick="tekan_tombol(this.value)" title="submit your data">cancel</button>
        </form>
    </body>
</html>