<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        <!-- <?php $nilai=""; ?> -->
        Nilai : <input type="number" name="nilai" value="<?=isset($_POST['nilai']) ? $_POST['nilai'] : ''?>"> <br><br>
        <button type="submit" name="submit"> Konversi </button>
    </form>
    <?php
    if (isset($_POST["submit"])) {
        $nilai = $_POST["nilai"];
        if ($nilai >= 0 && $nilai < 1000) {
            if ($nilai == 0) {
                echo "<h3> Hasil: Nol </h3>";
            } else if ($nilai > 0 && $nilai < 10) {
                echo "<h3> Hasil: Satuan </h3>";
            } else if ($nilai > 10 && $nilai < 20) {
                echo "<h3> Hasil: Belasan </h3>";
            } else if (($nilai >= 20 && $nilai < 100)  || $nilai == 10  ) {
                echo "<h3> Hasil: Puluhan </h3>";
            } else if ($nilai >= 100) {
                echo "<h3> Hasil: Ratusan </h3>";
            }
        } else {
            echo "Anda menginput melebihi limit bilangan";
        } 
    }
    ?>
</body>
</html>