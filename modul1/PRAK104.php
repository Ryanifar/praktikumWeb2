<html>
    <head>
        <style type = text/css>
        table, tr, td{
            border: 1px solid;
            width: 210px;
        }
        </style>
    </head>
    <body>
        <?php
            $smartphone = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
        ?>
        <table>
        <tr>
            <td><b>Daftar Smartphone Samsung</b></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[0] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[1] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[2] ?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[3] ?></td>
        </tr>
    </body>
</html>