<?php
include("koneksi.php");
	session_start();
	if(isset($_POST['login'])){
		$noMember = $_POST['nomor_member'];
		$password = $_POST['passwd'];
		$query = "select*from member where nomor_member='$noMember' and password='$password'";
		if($result= mysqli_query($koneksi,$query)){
			while ($data = mysqli_fetch_array($result)){
                $_SESSION['nomor_member'] = $data[0];
                $_SESSION['nama_member'] = $data[1];
                echo "<script>alert('Login Berhasil');
                window.location = 'index.php'</script>";
            }
            mysqli_free_result($result);
		} else {
			echo "<script>alert('nomor member dan password anda salah!');</script>";
		}
	}
?>