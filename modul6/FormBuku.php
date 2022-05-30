<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}
require('./Model.php');
if (isset($_GET['id_buku'])) {
    editbuku();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php echo (isset($_GET['id_buku'])) ? "<title>Update Data | Buku</title>" : "<title>Tambah Data | Buku</title>" ?>
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
    <h2>Form Buku</h2>
    <form method="post">
        <table>
            <tr>
                <td>
                    Judul Buku
                </td>
                <td>
                    <input type="text" name="judul" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["judul_buku"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Nama Penulis
                </td>
                <td>
                    <input type="text" name="penulis" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penulis"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Penerbit
                </td>
                <td>

                    <input type="text" name="penerbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["penerbit"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Tahun Terbit
                </td>
                <td>
                    <input type="text" name="thnterbit" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["tahun_terbit"] . "" : "value = '' "; ?> required> <br>

                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_buku'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                    }
                    ?>
                    &nbsp&nbsp&nbsp
                    <a href="buku.php">Kembali</a>
                </td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        tambahdatabuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    if (isset($_POST['update'])) {
        updatebuku($_GET['id_buku'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['thnterbit']);
    }
    ?>
</body>
</html>