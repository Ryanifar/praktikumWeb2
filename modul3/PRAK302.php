<!DOCTYPE html> 
<html> 
<head>
    <title>SOAL 2</title> 
</head> 
<body> 
    <form method="post"> 
        Tinggi : 
        <input type="text" name="tinggi" value="<?=isset($_POST['tinggi']) ? $_POST['tinggi'] : ''?>">
        <br> 
        Alamat Gambar : 
        <input type=" text" name="url" value="<?=isset($_POST['url']) ? $_POST['url'] : ''?>"> 
        <br> 
        <button type="submit" name="submit"> Cetak </button> 
    </form> 
    <?php
    echo "<br>";
    if (isset($_POST['submit'])) {
        $tinggi = $_POST['tinggi']; 
        $url = $_POST['url']; 
        $a = 1;          
        while ($a <= $tinggi) { 
            $b = 1; 
            while ($b <= $a) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;"; 
                $b++; 
            } 
            $c = $tinggi;
            while ($c >= $a) { 
                echo "<img src='$url' width='20px' height='20px'>";
                $c--;
            }    
            echo "<br>"; 
            $a++; 
        } 
    } 
    ?> 
</body> 
</html> 