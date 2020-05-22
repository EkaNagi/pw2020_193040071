<?php
require 'php/function.php';

$laptop = query("SELECT * FROM laptop");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $laptop = cari($_POST['keyword']);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Prompt:wght@100&family=Rajdhani:wght@700&display=swap" rel="stylesheet">
    <!-- CSS Sendiri -->
    <style>
        /* Navbar */
        .navbar {
            position: relative;
            z-index: 1;
        }

        .navbar-brand {
            font-family: Overpass;
            font-size: 32px;
        }

        /* Jumbotron */
        .jumbotron {
            background-image: url(assets/img/background.jpg);
            background-size: cover;
            height: 350px;
            position: relative;
            margin-bottom: 0;
        }

        .jumbotron .container {
            position: relative;
            z-index: 1;
        }

        .jumbotron::after {
            content: '';
            display: block;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(to top, rgba(0, 0, 0, 1), rgba(0, 0, 0, 0));
            position: absolute;
            bottom: 0;
        }

        .jumbotron .display-4 {
            color: white;
            text-align: center;
            font-family: Prompt;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
            margin-top: 75px;
            font-size: 45px;
        }

        .jumbotron .display-4 span {
            font-weight: bold;
        }

        .jumbotron img {
            width: 50px;
            position: relative;
            top: 10px;
            left: 210px;
        }

        /* Warna */
        .ungu {
            background-color: rgb(201, 0, 201);
            color: white;
        }

        /* About */
        .about {
            margin-top: 50px;
            text-align: center;
        }

        .about h3 {
            font-family: Overpass;
            margin-top: 11px;
            font-weight: 100;
            font-size: 25px;
        }

        .about h3 span {
            font-weight: bold;
        }

        .about p {
            font-family: Prompt;
            font-weight: bold;
            font-size: 15px;
        }

        .about img {
            box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.7);
        }

        .aboutus {
            font-family: Rajdhani;
            font-size: 50px;
        }

        .itemlist {
            margin-top: 50px;
        }

        .footer {
            margin-top: 35px;
        }

        /* Utility */
        .tombol {
            text-transform: uppercase;
            border-radius: 40px;
        }

        .putih {
            background-color: white;
            color: black;
        }

        .putih:hover {
            background-color: lightgrey;
            color: black;
        }

        /* DESKTOP */
        @media (min-width: 992px) {

            .navbar-brand,
            .nav-link {
                color: white !important;
                text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            }

            .nav-link {
                text-transform: uppercase;
                margin-right: 30px;
            }

            .nav-link:hover::after {
                content: '';
                display: block;
                border-bottom: 3px solid rgb(201, 0, 201);
                width: 50%;
                margin: auto;
                padding: -1px;
                margin-bottom: -4px;
            }

            .jumbotron {
                height: 626px;
                margin-top: -75px;
                background-position: 0 -120px;
            }

            .jumbotron .display-4 {
                margin-top: 135px;
                font-size: 90px;
            }

            .jumbotron img {
                width: 90px;
                left: 520px;
                top: 30px;
            }

            .about {
                text-align: left;
            }
        }
    </style>
    <title>TechtechId</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">TechtechId</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="php/admin.php">Admin Page</a>
                    <a class="nav-item btn tombol putih" href="php/login.php">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Untuk <span> anda </span>yang <br> <span>lapar</span> akan <span>elektronik</span></h1>
            <a href="#about"><img src="assets/img/img_417436.png" alt=""></a>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Container -->
    <div class="container about">
        <h2 class="text-center aboutus" id="about">ABOUT US</h2>
        <!-- About -->
        <div class="row about">
            <div class="col-lg-6">
                <img src="assets/img/foto_about.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-lg-5">
                <h3><span>WE</span> WILL PROVIDE <span>YOU</span> WITH <span>INFORMATION</span> ABOUT <span>ELECTRICITY DEVICES</span></h3>
                <p>Even though right now, it's just a laptop information. But we will surely update in the future cause maybe you're one of us as well. This site is open for everyone to add more and more information about all the electricity devices around the world. Click the button below to register and become our partners in crime.</p>
                <a href="php/registrasi.php" class="btn btn-secondary float-right tombol">Register</a>
            </div>
        </div>
        <!-- Akhir About -->

        <!-- Item List -->
        <div class="itemlist">
            <h2 class="text-center aboutus">ITEM LIST</h2>
        </div>
        <form action="" method="POST" class="form-inline">
            <div class="form-group mx-auto mb-2 cari">
                <input type="text" class="form-control" id="keyword" name="keyword" class="keyword" placeholder="Search">
                <button type="submit" name="cari" class="btn btn-dark tombol tombol-cari">Search!</button>
            </div>
        </form>
        <div class="container">
            <table border="0" cellpadding="10" cellspacing="0" class="table table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <?php if (empty($laptop)) : ?>
                    <tr>
                        <td colspan="4">
                            <p>I'm sorry but there's no data regarding this keyword.</p>
                        </td>
                    </tr>
                <?php endif; ?>

                <tbody>
                    <?php $i = 1;
                    foreach ($laptop as $ltp) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $ltp['nama_laptop']; ?></td>
                            <td>
                                <a href="php/detail.php?id=<?= $ltp['id_laptop']; ?>">See Details</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div class="row footer">
            <div class="col text-center">
                <p>2020 All Rights Reserved by Tresna Eka Widiana.</p>
            </div>
        </div>
        <!-- Akhir Footer -->
    </div>
    <!-- Akhir Container -->

    <!-- AJAX Search -->
    <script>
        const tombolCari = document.querySelector('.tombol-cari');
        const keyword = document.querySelector('.keyword');
        const container = document.querySelector('.container');

        tombolCari.style.display = 'none';

        keyword.addEventListener('keyup', function() {
            fetch('../tubes/php/ajax_cari.php?keyword=' + keyword.value)
                .then((response) => response.text())
                .then((response) => (container.innerHTML = response));
        });
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>