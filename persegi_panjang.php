<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Ruang Persegi Panjang</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url(images/p.panjang.jpg);
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

                                <li class="nav-item">
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
                                    <li class="nav-item active">
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


    <form action="hasil_persegipanjang.php" method="post">
        <div>
            <label for="panjang">Panjang(cm)</label>
            <input type="number" name="panjang">
        </div>

        <div>
            <label for="lebar">Lebar(cm)</label>
            <input type="number" name="lebar">
        </div>

        <input type="submit" value="Kirim">

    </form>

    

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>