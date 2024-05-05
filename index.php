<?php
$contoh_data_array = array("therock","johnchena","undertacer","philip","bigshow");

$data_array1 = ["therock","johnchena","undertacer","philip"];

$data_array1 = ["therock","johnchena","undertacer","philip"];

$array_assosiative = [
    "pemain1" => "therock",
    "pemain1" => "johnchena",
    "pemain1" => "undertacer"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2 php</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url(images/bck.jpg);
        }
        
    </style>
    
</head>

<body>
    <div class="container-fluid px-0 navbar-custom">
        <div class="container">
          <div class="row" style="padding-left: 180px; padding-right: 180px;">
              <div class="col-12">

                    <nav class="navbar navbar-expand-lg py-0">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">

                                <li class="nav-item active">
                                        <a class="nav-link text-light" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="bmi.php">BMI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="segitiga.php">Segitiga</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="persegi.php">Persegi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="persegi_panjang.php">Persegi Panjang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="lingkaran.php">Lingkaran</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="cform_persegi.php">Class Persegi</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>

    <ul>
        <?php
        for ($i =0; $i <count($data_array1); $i++) {
            
            echo"<li>$data_array1[$i]</li>";
        }
        ?>
    </ul>

    <br>

    <ul>
        <?php
         foreach($data_array1 as $siji)

            echo"<li>$siji</li>";
        ?>
    </ul>

    <br>

    <ul>
        <?php 
        for ($i = 0; $i < count($data_array1); $i++) {
        ?>

            <li>
                <?php echo $data_array1[$i] ?>
            </li>
        <?php
        }
        ?>
    </ul>

    <script src="script.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>