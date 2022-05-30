<?php
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    hapuspeminjaman($_GET['id_peminjaman']);
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Peminjaman</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <br>
        <nav>
            <a href="index.php">Home</a>
            <a href="Member.php">Data Member</a>
            <a href="Buku.php">Data Buku</a>
            <a href="Peminjaman.php">Data Peminjaman</a>
        </nav>
        <h3>Data Peminjaman</h3>
        <a href="FormPeminjaman.php">Tambah Data</a>
        <br><br>
        <table border="1" cellpadding=10>
            <tr>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("peminjaman") ?>
        </table>
    </center>
</body>
</html>