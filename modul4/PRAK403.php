<?php
    $nilai = [
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
<!DOCTYPE html>
<html>
<head>
    <style>
        table{
            border: 1px solid black;
        }
        tr, td, th {
            border: 1px solid black;
            padding: 8px;
        }
        .npast{
            background-color: #ff3333;
        }
        .past{
            background-color: #33ff33;
        }
        .bgcolor{
            background-color: #BCBABA;
        }
        .bold{
            font-weight: bold;
        }
    </style>
    <title>Soal 3</title>
</head>
<body>
    <table>
        <tr class="bgcolor && bold">
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>Keterangan</td>
        </tr>
        <?php
            for ($i=0; $i < count($nilai); $i++) {
                $jumlah = 0;
                for ($j=0; $j < count($nilai[$i]["mk"]); $j++) { 
                    $jumlah += $nilai[$i]["mk"][$j]["sks"];
                }
                $nilai[$i]["jumlah"] = $jumlah;
                if ($nilai[$i]["jumlah"] <= 6) {
                    $nilai[$i]["keterangan"] = "<td class='npast'>Revisi KRS</td>";
                } else {
                    $nilai[$i]["keterangan"] = "<td class='past'>Tidak Revisi</td>";
                }
            }
            for ($i=0; $i < count($nilai); $i++) {
                for ($j=0; $j < count($nilai[$i]["mk"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$nilai[$i]["no"]."</td>";
                        echo "<td>".$nilai[$i]["nama"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["sks"]."</td>";
                        echo "<td>".$nilai[$i]["jumlah"]."</td>";
                        echo $nilai[$i]["keterangan"];
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["mataKuliah"]."</td>";
                        echo "<td>".$nilai[$i]["mk"][$j]["sks"]."</td>";
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