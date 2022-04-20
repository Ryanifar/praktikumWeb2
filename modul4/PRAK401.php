<!DOCTYPE html>
<html>
<head>
    <title>Soal 1</title>
</head>
<body>
    <form method="post">
        Panjang: <input type="number" name="pjg" id=""> <br>
        Lebar: <input type="number" name="lbr" id=""> <br>
        Nilai: <input type="text" name="n" id=""> <br>
        <input type="submit" name="cetak" value="Cetak"> <br>
    </form>
    <?php
        if(isset($_POST['cetak'])){
            $panjang = $_POST['pjg'];
            $lebar = $_POST['lbr'];
            $masukan = $_POST['n'];
            if(empty($_POST['pjg']) && empty($_POST['lbr']) && empty($_POST['n'])){
                echo "Anda Belum menginput data panjang, lebar dan nilai";
            }
            else{
                $matrix = $panjang*$lebar;
                $nilai = explode(" ", $masukan);
                if(count($nilai)==$matrix){
                    $new = array_chunk($nilai, $lebar);
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