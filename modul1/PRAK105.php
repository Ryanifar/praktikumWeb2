<html>
    <head>
        <style type = "text/css">
            table th{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <?php
            $smartphone = [2 => 'Samsung Galaxy S22', 4 => 'Samsung Galaxy S22+', 6 => 'Samsung Galaxy A03', 8 => 'Samsung Galaxy Xcover 5'];
        ?>
        <table border = "1"; width = 310px>
        <tr height = "80px"> 
            <th><b><font size ="5">Daftar Smartphone Samsung</font></b></th>
        </tr>
        <tr>
            <td><?php echo $smartphone[2] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[4] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[6] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[8] ?></td>
        </tr>
    </body>
</html>