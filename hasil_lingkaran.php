<?php

function luas($r)
{
    $luas = 3.14 * $r * $r;
    echo"<h3 class='red'>Luas Lingkaran dengan jari-jari $r adalah $luas</h3>";
    echo "<br>";
}

function keliling($r)
{
    $keliling = 2 * 3.14 * $r ;
    echo "<h3 class='red'>Keliling Lingkaran dengan jari-jari $r adalah $keliling</h3>";
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Lingkaran</title>

    <style>
        .red {
            color: red;
        }
    </style>

</head>


<body>

        <?php
        $r= $_POST["r"];
       
        $r= $_POST["r"];




        luas($r);
        keliling($r);

        ?>
    
</body>
</html>