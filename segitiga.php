<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Bangun Ruang Segitiga</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            background-image: url(images/segitiga1.jpg);
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
                                    <li class="nav-item active">
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


    <form action="hasil_segitiga.php" method="post">
        <div>
            <label for="tinggi">Tinggi(cm)</label>
            <input type="number" name="tinggi">
        </div>

        <div>
            <label for="alas">Alas(cm)</label>
            <input type="number" name="alas">
        </div>

        <div>
            <label for="sisi_a">Sisi(a)</label>
            <input type="number" name="sisi_a">
        </div>

        <div>
            <label for="sisi_b">Sisi(b)</label>
            <input type="number" name="sisi_b">
        </div>

        <div>
            <label for="sisi_c">Sisi(c)</label>
            <input type="number" name="sisi_c">
        </div>

        <input type="submit" value="Kirim">

    </form>

    

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>  
</body>
</html>