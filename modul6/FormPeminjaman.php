<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Update Data | Peminjaman</title>" : "<title>Tambah Data | Peminjaman</title>" ?>
    <style>
        a{
            text-decoration: none;
            color:white;
            padding: 3px;
            background-color: lightsalmon;
            border-radius: 8px;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <h2>Form Peminjaman</h2>
    <form method="post">
        <table>
            <tr>
                <td>
                    Tanggal Peminjaman
                </td>
                <td>
                    <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Kembali
                </td>
                <td>
                    <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                    }
                    ?>
                    &nbsp&nbsp&nbsp
                    <a href="peminjaman.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {

        tambahdatapeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    if (isset($_POST['update'])) {
        updatepeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    ?>
</body>
</html>