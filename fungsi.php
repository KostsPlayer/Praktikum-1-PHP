<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <h2>Penggunaan Fungsi</h2>
    <?php
        function hitung($a,$b)
        {
            $hasil=$a+$b;
            return $hasil;
        }

        echo("9 + 50 = " .hitung(9,50));
    ?>
</body>
</html>