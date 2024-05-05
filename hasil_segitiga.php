<?php

function luas($t, $a)
{
    $luas = 0.5 * $t * $a;
    echo"<h3 class='red'>Luas Segitiga dengan tinggi $t dan panjang alas $a adalah $luas</h3>";
    echo "<br>";
}

function keliling($sisia, $sisib, $sisic)
{
    $keliling = $sisia + $sisib + $sisic;
    echo "<h3 class='red'>Keliling Segitiga dengan sisi $sisia , $sisib , $sisic adalah $keliling</h3>";
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Segitiga</title>

    <style>
        .red {
            color: red;
        }
    </style>

</head>


<body>

        <?php
        $tinggi = $_POST["tinggi"];
        $alas = $_POST["alas"];

        $sisi_a = $_POST["sisi_a"];
        $sisi_b = $_POST["sisi_b"];
        $sisi_c = $_POST["sisi_c"];



        luas($tinggi, $alas);
        keliling($sisi_a, $sisi_b, $sisi_c);

        ?>
    
</body>
</html>