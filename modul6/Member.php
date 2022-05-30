<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Member</title>
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
        <h3>Data Member</h3>
        <a href="FormMember.php">Tambah Data</a>
        <br><br>
        <table border="1" cellpadding=10>
            <tr>
                <th>Nama</th>
                <th>Nomor Member</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
            <?= tampildata("member") ?>
        </table>
    </center>
</body>
</html>