<?php
    require 'class_persegi.php'
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

    
</body>

    <?php 
    $sisi = $_POST['sisi'];

    $class_persegi = new persegi();

    $class_persegi->sisi = $sisi;
    $luas = $class_persegi->luas();
    $keliling = $class_persegi->keliling();
    ?>

    <h3>Luas Persegi dengan Sisi <?= $sisi ?> adalah <?= $luas ?></h3>
    <h3>Keliling Persegi dengan Sisi <?= $sisi ?> adalah <?= $keliling ?></h3>
    


</html>