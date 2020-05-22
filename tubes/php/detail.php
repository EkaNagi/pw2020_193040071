<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'function.php';

$id = $_GET['id'];

$laptop = query("SELECT * FROM laptop WHERE id_laptop = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS Sendiri -->
    <style>
        button p {
            color: white;
        }

        table {
            margin-top: 30px;
            background-color: white;
        }

        thead {
            font-family: Rajdhani;
            font-size: 32px;
        }

        tbody {
            font-family: Overpass;
        }
    </style>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Prompt:wght@100&family=Rajdhani:wght@700&display=swap" rel="stylesheet">
    <title>Details</title>
</head>

<body>
    <div class="container">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col" colspan="3">DETAILS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="11"><img src="../assets/img/<?= $laptop["foto_laptop"]; ?>" alt=""></td>
                    <td>
                        <p>Nama Laptop</p>
                    </td>
                    <td>
                        <p><?= $laptop["nama_laptop"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Harga Laptop</p>
                    </td>
                    <td>
                        <p>Rp. <?= $laptop["harga_laptop"]; ?>,00</p>
                    </td>
                </tr>
                <tr>
                    <td>Stock Laptop</td>
                    <td>
                        <p><?= $laptop["stock_laptop"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>Monitor</td>
                    <td>
                        <p><?= $laptop["monitor"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Processor</p>
                    </td>
                    <td>
                        <p><?= $laptop["processor"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Graphic Card</p>
                    </td>
                    <td>
                        <p><?= $laptop["graphic_card"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td>
                        <p><?= $laptop["ram"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Storage</p>
                    </td>
                    <td>
                        <p><?= $laptop["storage"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Konektivitas</p>
                    </td>
                    <td>
                        <p><?= $laptop["konektivitas"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Port
                        </p>
                    </td>
                    <td>
                        <p><?= $laptop["port"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>
                            Baterai
                        </p>
                    </td>
                    <td>
                        <p><?= $laptop["baterai"]; ?></p>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <a href="../index.php" class="btn btn-dark">Back to Home</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row footer" style="margin-top: 50px">
            <div class="col text-center">
                <p>2020 All Rights Reserved by Tresna Eka Widiana.</p>
            </div>
        </div>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>