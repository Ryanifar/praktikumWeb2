<!DOCTYPE html>
<head>
    <title>Soal 5</title>
</head>
<body>
    <form method="post">
        <input type="text" name="teks">
        <button type="submit">submit</button>
    </form>
    <?php 
        if(isset($_POST['teks'])) {
            $teks = $_POST['teks'];
            $a = 0;
            $b = 0;
            while($a < strlen($teks)){
                while($b < strlen($teks)){
                    if($b == 0) {
                        echo strtoupper($teks[$a]);
                    }else {
                        echo strtolower($teks[$a]);
                    }
                    $b++;
                }
                $b = 0;
                $a++;
            }
        }
    ?>
</body>
</html>