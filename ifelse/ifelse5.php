<html>
    <body>

        <?php
        $jeniskelamin ="wanita";
        $jeniskelamin ="pria";
        if ($jeniskelamin == "pria") {
            echo "Selamat Anda dinyatakan Lulus";
        } else if($jeniskelamin == "wanita") {
            echo "Selamat Anda Dinyatakan Lulus Tes Wawancara";
        } else {
            echo "Apakah Jenis Kelamin Anda?";
        }
        ?>
    </body>
    </html>