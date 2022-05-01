<!DOCTYPE html>
<html>
<head>
    <style>
        tr,th,td{
            padding: 7px;
        }
        th{
            font-weight: bold;
            background-color: #BCBABA;
        }
        .npast{
            background-color: #ff3333;
        }
        .past{
            background-color: #33ff33;
        }
    </style>
    <title>Soal 3</title>
</head>
<body>
    <?php
        $tabel = [
            ["no" => 1, "nama" => "Ridho", 
            "mk" => [
                ["mataKuliah" =>"Pemrograman I", "sks" => 2], 
                ["mataKuliah" => "Praktikum Pemrograman I", "sks" => 1],
                ["mataKuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
                ["mataKuliah" => "Arsitektur Komputer", "sks" => 3]
            ]
            ],

            ["no" => 2, "nama" => "Ratna", 
            "mk" => [
                ["mataKuliah" =>"Basis Data I", "sks" => 2], 
                ["mataKuliah" => "Praktikum Basis Data I", "sks" => 1],
                ["mataKuliah" => "Kalkulus", "sks" => 3]
            ]
            ],

            ["no" => 3, "nama" => "Tono", 
            "mk" => [
                ["mataKuliah" => "Rekayasa Perangkat Lunak", "sks" => 3], 
                ["mataKuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
                ["mataKuliah" => "Komputasi Awan", "sks" => 3], 
                ["mataKuliah" => "Kecerdasan Bisnis", "sks" => 3]
            ]
            ]
        ];
    ?>
    <table border=1 cellspacing=0>
        <tr class="bgcolor && bold">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
            for ($i=0; $i < count($tabel); $i++) {
                $totalSKS = 0;
                for ($j=0; $j < count($tabel[$i]["mk"]); $j++) { 
                    $totalSKS += $tabel[$i]["mk"][$j]["sks"];
                }
                $tabel[$i]["totalSKS"] = $totalSKS;
                if ($tabel[$i]["totalSKS"] <= 6) {
                    $tabel[$i]["keterangan"] = "<td class='npast'>Revisi KRS</td>";
                } else {
                    $tabel[$i]["keterangan"] = "<td class='past'>Tidak Revisi</td>";
                }
            }
            for ($i=0; $i < count($tabel); $i++) {
                for ($j=0; $j < count($tabel[$i]["mk"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$tabel[$i]["no"]."</td>";
                        echo "<td>".$tabel[$i]["nama"]."</td>";
                        echo "<td>".$tabel[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$tabel[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td>".$tabel[$i]["totalSKS"]."</td>";
                        echo $tabel[$i]["keterangan"];
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$tabel[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$tabel[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>