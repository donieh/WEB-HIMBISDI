<html>
    <head><title>Latihan PHP</title></head>
    <body>
        <?php
            echo "selamat pagi sunshine. Hari ini tanggal ".date("d/m/Y")."<br>";
            echo "selamat pagi sunshine. Hari ini tanggal ".date("D M Y")."<br>";
            echo "selamat pagi sunshine. Hari ini tanggal ".date("d-mm-y")."<br>";

            $namalengkap = "Doni Purnama";
            echo $namalengkap. "<br>";

            $angka1 = 10;
            $angka2 = 10;
            echo $angka1 + $angka2. "<br>";

            $angka1 = 20;
            $angka1 += 2;
            $angka1 *= 40;
            $angka2 = 20;
            echo $angka1 + $angka2."<br>";

            $hari_ini = date("D");

            switch($hari_ini) {
                case "Mon" :
                    echo "Senin";
                    break;
                case "Tue" :
                    echo "Selasa";
                    break;
                case "Wed" :
                    echo "Rabu";
                    break;
                case "Fri" :
                    echo "Jumat";
                    break;
                default:
                    echo "unknown";
                    break;
            }   

            include("about.php");

            echo "<br>";

            $arrays = ["hello1", "hello2", "hello3"];

            for($i = 0; $i < count($arrays); $i++){
                echo $arrays[$i]."<br>";
            }

            $kalimat = "Institut Teknologi Sabda Setia Pontianak";
            echo substr($kalimat, 10, 3)."<br>";
            echo substr($kalimat, 0, 10)."<br>";
            echo strlen($kalimat)."<br>";
            echo str_replace(" ", "//", $kalimat)."<br>";

            function showHello( $name )
            {
                return "Hola! ".$name;
            }

            echo showHello("Christina")."<br>";

            function showSalutation ( $name, $type )
            {
                if($type == "F"){
                    return "Ms. ".$name;
                }else{
                    return "Mr. ".$name;
                }
            }

            echo showSalutation("Billy", "M")."<br>";
            echo showSalutation("Ivana", "F")."<br>";
            echo showHello( showSalutation("Jessica", "F"))."<br>";
        ?>
    </body>
</html>