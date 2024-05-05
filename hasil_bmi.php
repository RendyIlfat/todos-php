<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil BMI</title>
</head>
<body>

    <?php

        $nama = $_POST["nama"];
        $tinggi = $_POST["tinggi"] / 100;
        $berat = $_POST["berat"];

        $bmi = $berat / ( $tinggi * $tinggi );
    
    ?>

    <h3>Nilai BMI Kamu adalah : <?= $bmi; ?></h3>

    <?php
        
        if ($bmi < 18.5) {
            echo "Berat badan kurang.";
        } elseif ($bmi <= 22.9) {
            echo "Berat badan normal.";
        } elseif ($bmi <= 29.9) {
            echo "Berat badan berlebih (kecenderungan obesitas).";
        } else {
            echo "Obesitas.";
        }

    ?>

    <p>Standar kategori berat badan pria dan wanita menurut WHO : <?php echo $bmi ?></p>
    
</body>
</html>