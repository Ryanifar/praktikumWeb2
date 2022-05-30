<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
?>
<!DOCTYPE html>
<html>
<head>
   <title>Data Perpustakaan</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h2>Selamat Datang : <?= $_SESSION["nama_member"] ?></h2>
        <br>
        <nav>
            <a href="Member.php">Data Member</a>
            <a href="Buku.php">Data Buku</a>
            <a href="Peminjaman.php">Data Peminjaman</a>
        </nav>
        <a href="Logout.php">Logout</a>
    </center>
</body>
</html>