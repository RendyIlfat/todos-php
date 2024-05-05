<?php

function luas($sisi)
{
    $luas = $sisi * $sisi;
    echo"<h3 class='red'>Luas Persegi dengan sisi $sisi adalah $luas</h3>";
    echo "<br>";
}

function keliling($sisi)
{
    $keliling = 4 * $sisi;
    echo"<h3 class='red'>Keliling Persegi dengan sisi $sisi adalah $keliling</h3>";
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Persegi</title>

    <style>
        .red {
            color: red;
        }
    </style>

</head>


<body>

        <?php
        $sisi = $_POST["sisi"];

        $sisi = $_POST["sisi"];


        luas($sisi);
        keliling($sisi);

        ?>
    
</body>
</html>