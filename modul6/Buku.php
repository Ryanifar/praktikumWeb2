<?php
session_start();
require('./Model.php');
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
        <br>
        <nav>
            <a href="Member.php">Data Member</a>
            <a href="Buku.php">Data Buku</a>
            <a href="Peminjaman.php">Data Peminjaman</a>
        </nav>
        <h3>Data Buku</h3>
        <a href="FormBuku.php">Tambah Data</a>
        <br><br>
        <table border="1" cellpadding=10>
            <tr>
                <th>Judul Buku</th>
                <th>Penulis Bukur</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("buku") ?>
        </table>
    </center>
</body>
</html>