<!DOCTYPE html>
<html>
<head>
    <title>soal 3</title>
</head>
<body>
    <form method="post">
        Batas Bawah: <br> <input type="text" name="bawah"><br>
        Batas Atas: <br> <input type="text" name="atas"><br>
        <input type="submit" value="cetak" name="hitung">
    </form>
    <?php
        if (isset($_POST['hitung'])) {
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
            do {
                if (($bawah + 7) % 5 == 0) {
                    echo "<img src=\"star-image.png\" height=\"30\" width=\"30\">";
                } else {
                    echo "$bawah ";
                }
                $bawah++;
            } while ($bawah <= $atas);
        }
    ?>
</body>
</html>