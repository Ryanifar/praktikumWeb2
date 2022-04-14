<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <form method="post">
        Jumlah Peserta:
        <input type="text" name="jumlah"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $jumlah = $_POST['jumlah'];
        $perulagan = 1;
        while ($perulagan <= $jumlah) {
            if ($perulagan % 2 == 0) {
                echo "<h1 style=\"color:green\">Peserta ke-$perulagan</h1>";
            } else {
                echo "<h1 style=\"color:red\">Peserta ke-$perulagan</h1>";
            }
            $perulagan++;
        }
    }
    ?>
</body>
</html>