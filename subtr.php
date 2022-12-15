<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi : String</title>
</head>
<body>
    <h2>Fungsi : String subtr()</h2>
    <?php
        $string="Pemrogaman Web PHP";
        $word=substr($string,16,3);
        echo("<1>\"$string\"</1> <br>");
        echo("Hasil substr (16,3) adalah $word");
    ?>
</body>
</html>