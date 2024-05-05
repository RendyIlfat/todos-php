<?php

function luas($p, $l)
{
    $luas = $p * $l;
    echo"<h3 class='red'>Luas Persegi Panjang dengan panjang $p dan lebar $l adalah $luas</h3>";
    echo "<br>";
}

function keliling($p, $l)
{
    $keliling = 2 * ($p + $l);
    echo "<h3 class='red'>Keliling Persegi Panjang dengan panjang $p dan lebar $l adalah $keliling</h3>";
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi Panjang</title>

    <style>
        .red {
            color: red;
        }
    </style>

</head>


<body>

        <?php
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];

        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];



        luas($panjang, $lebar);
        keliling($panjang, $lebar);

        ?>
    
</body>
</html>