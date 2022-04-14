<!DOCTYPE html>
<head>
    <title>Soal 2</title>
</head>
<body>
    <form method="post">
        Tinggi : <input type="text" name="tinggi"><br>
        Alamat Gambar : <input type="text" name="gambar"><br>
        <button type="submit">Cetak</button>
    </form>
    <?php 
        if(isset($_POST['tinggi']) && isset($_POST['gambar'])) {
            $i = 0;
            $j = 0;
            $tinggi = $_POST['tinggi'];
            $gambar = $_POST['gambar'];
            while($i < $tinggi) {
                $i++;
                while($j < $tinggi) {
                    $j++;
                    if($i <= $j) {
                        echo "<img src='$gambar' width='50' height='50'></img>";
                    }else {
                        echo "<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOAAAADgCAMAAAAt85rTAAAAA1BMVEX///+nxBvIAAAASElEQVR4nO3BMQEAAADCoPVPbQo/oAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAICXAcTgAAG6EJuyAAAAAElFTkSuQmCC' width='50' height='50'></img>";
                    }
                }
                echo "<br>";
                $j = 0;
            }
        }
    ?>
</body>
</html>