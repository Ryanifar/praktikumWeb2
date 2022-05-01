<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <form method="post">
        Panjang: <input type="number" name="pjg" value="<?=isset($_POST['pjg']) ? $_POST['pjg']: ''?>"> <br>
        Lebar: <input type="number" name="lbr" value="<?=isset($_POST['lbr']) ? $_POST['lbr']: ''?>"> <br>
        Nilai: <input type="text" name="n" value="<?=isset($_POST['n']) ? $_POST['n']: ''?>"> <br>
        <input type="submit" name="cetak" value="Cetak"> <br>
    </form>
    <?php
        if(isset($_POST['cetak'])){
            $panjang = $_POST['pjg'];
            $lebar = $_POST['lbr'];
            $nilai = $_POST['n'];
            if(empty($_POST['pjg']) && empty($_POST['lbr']) && empty($_POST['n'])){
                echo "Anda Belum menginput data panjang, lebar dan nilai";
            }
            else{
                $matrix = $panjang*$lebar;
                $nilai2 = explode(" ", $nilai);
                if(count($nilai2)==$matrix){
                    $new = array_chunk($nilai2, $lebar);
                    echo "<table border=1 cellspacing=0>";
                    for($i=0;$i<$panjang;$i++){
                        echo"<tr>";
                        for($j=0;$j<$lebar;$j++){
                            echo "<td width=40 height=40>" . $new[$i][$j] . "</td>";
                        }
                        echo"</tr>";
                    }
                    echo "</table>";
                }
                else {
                    echo "Panjang nilai tidak sesuai dengan ukuran matriks";
                }
            }
        }
    ?>
</body>
</html>