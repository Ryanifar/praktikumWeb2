<!DOCTYPE html>
<html>
<head>
    <title>Soal 2</title>
    <style>
        tr, td {
            padding: 12px;
        }
        th{
            font-weight: bold;
            background-color: #BCBABA;
            padding: 12px;
        }
    </style>
</head>
<body>
    <?php
        $tabel = [
            ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
            ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
            ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
            ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75],
        ];
    ?>
    <table border="1" cellspacing=0>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>
        <?php
        for ($i=0; $i < count($tabel); $i++) { 
            $tabel[$i]["nilaiAkhir"] = $tabel[$i]["uts"] * 0.4 + $tabel[$i]["uas"] * 0.6;
            if($tabel[$i]["nilaiAkhir"] >= 80){
                $tabel[$i]["huruf"] = "A";
            }elseif($tabel[$i]["nilaiAkhir"] > 70){
                $tabel[$i]["huruf"] = "B";
            }elseif($tabel[$i]["nilaiAkhir"] > 60){
                $tabel[$i]["huruf"] = "C";
            }elseif($tabel[$i]["nilaiAkhir"] > 50){
                $tabel[$i]["huruf"] = "D";
            }elseif($tabel[$i]["nilaiAkhir"] < 50){
                $tabel[$i]["huruf"] = "E";
            }
        }
        for ($i=0; $i < count($tabel); $i++) { 
            echo "<tr>";
            echo "<td padding = 10px>".$tabel[$i]["nama"]."</td>";
            echo "<td>".$tabel[$i]["nim"]."</td>";
            echo "<td>".$tabel[$i]["uts"]."</td>";
            echo "<td>".$tabel[$i]["uas"]."</td>";
            echo "<td>".$tabel[$i]["nilaiAkhir"]."</td>";
            echo "<td>".$tabel[$i]["huruf"]."</td>";
            echo "</tr>";
        }       
        ?>
    </table>
</body>
</html>