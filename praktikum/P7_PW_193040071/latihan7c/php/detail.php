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
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $laptop["foto_laptop"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $laptop["nama_laptop"]; ?></p>
            <p><?= $laptop["harga_laptop"]; ?></p>
            <p><?= $laptop["stock_laptop"]; ?></p>
            <p><?= $laptop["monitor"]; ?></p>
            <p><?= $laptop["processor"]; ?></p>
            <p><?= $laptop["graphic_card"]; ?></p>
            <p><?= $laptop["ram"]; ?></p>
            <p><?= $laptop["storage"]; ?></p>
            <p><?= $laptop["konektivitas"]; ?></p>
            <p><?= $laptop["port"]; ?></p>
            <p><?= $laptop["baterai"]; ?></p>
        </div>
        <button><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>