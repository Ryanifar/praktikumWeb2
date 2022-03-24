<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        $namaErr = $nimErr = $jkErr = "";
        $nama = $nim = $jk = "";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST['nama'])){
                $namaErr="<font color='red'> nama tidak boleh kosong</font>";
            } else {
                $nama = $_POST["nama"];
            }
            if(empty($_POST['nim'])){
                $nimErr="<font color='red'> nim tidak boleh kosong</font>";
            } else {
                $nim = $_POST["nim"];
            }
            if(empty($_POST['jk'])){
                $jkErr="<font color='red'> jenis kelamin tidak boleh kosong</font>";
            } else {
                $jk = $_POST["jk"];
            }
        }
    ?>
    <form method="post">
        Nama : <input type="text" name="nama" value="<?php echo $nama ?>"><font color="red">*</font>
        <?php echo $namaErr; ?>
        <br><br>
        NIM : <input type="text" name="nim" value="<?php echo $nim ?>"><font color="red">*</font>
        <?php echo $nimErr; ?>
        <br><br>
        Jenis Kelamin : <font color="red">*</font>
        <?php echo $jkErr; ?>
        <br>
        <input type="radio" name="jk"
            <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?>
            value="Laki-Laki">Laki-Laki
        <br>
        <input type="radio" name="jk"
            <?php if (isset($jk) && $jk == "Laki-Laki") echo "checked"; ?>
            value="Perempuan">Perempuan
        <br><br>
        <button type="submit" name="submit"> Submit </button>
        <br>
    </form>
    <?php
        if (!empty($_POST["nama"]) && !empty($_POST["nim"]) && !empty($_POST["jk"])) {
            echo "<h2> Hasil Input : </h2>";
            echo $nama . "<br>";
            echo $nim . "<br>";
            echo $jk . "<br>";
        }
    ?>
</body>
</html>