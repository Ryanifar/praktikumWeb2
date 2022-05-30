<?php
session_start();
include 'Koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <table>
        <form action="Login.php" method="POST">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" autofocus required></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="passwd" required></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="login">Submit</button></td>
            </tr>
        </form>
    </table>
</body>
</html>