<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <form method="post">
        Nama : 1 <input type="text" name="nama1" value="<?=isset($_POST['nama1']) ? $_POST['nama1'] : ''?>"> <br>
        Nama : 2 <input type="text" name="nama2" value="<?=isset($_POST['nama2']) ? $_POST['nama2'] : ''?>"> <br>
        Nama : 3 <input type="text" name="nama3" value="<?=isset($_POST['nama3']) ? $_POST['nama3'] : ''?>"> <br>
        <button type="submit" name="submit"> Submit </button>
    </form>
    <?php
        function urutan($nama) {
            $nm = 0;
            for($i = 0; $i < count($nama); $i++) {
                for($j = $i + 1; $j < count($nama); $j++) {
                    if($nama[$i] > $nama[$j]) {
                    $nm = $nama[$i];
                    $nama[$i] = $nama[$j];
                    $nama[$j] = $nm;
                    }
                }
            }
            return $nama;
        } 
        if(isset($_POST["submit"])) {
            $data = array();
            $data[] = $_POST["nama1"] . "<br>";
            $data[] = $_POST["nama2"] . "<br>";
            $data[] = $_POST["nama3"] . "<br>";	

            foreach(urutan($data) as $value) {
                echo $value;
            }
        }
    ?>
</body>

</html>