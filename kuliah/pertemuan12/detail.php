<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Ambil id dari url
$id = $_GET['id'];

// Query mahasiswa berdasarakan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <h3 style="text-align: center">Detail Mahasiswa</h3>
  <div class="cardcontainer">
    <div class="card text-center mx-auto mb-4" style="width: 18rem;">
      <img src="img/<?= $mhs['gambar']; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $mhs['nama']; ?></h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $mhs['nrp']; ?></li>
        <li class="list-group-item"><?= $mhs['email']; ?></li>
        <li class="list-group-item"><?= $mhs['jurusan']; ?></li>
      </ul>
      <div class="card-body">
        <a href="ubah.php?id=<?= $mhs['id']; ?>" class="card-link">Ubah</a>
        <a href="hapus.php?id=<?= $mhs['id']; ?>" class="card-link" onclick="return confirm('apakaha anda yakin?');">Hapus</a>
        <br>
        <br>
        <a href="index.php" class="card-link">Kembali ke daftar mahasiswa</a>
      </div>
    </div>
  </div>
</body>

</html>