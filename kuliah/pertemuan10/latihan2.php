<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="0" cellpadding="10" cellspacing="0" class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $mhs['gambar']; ?>" alt=""></td>
          <td><?= $mhs['nrp']; ?></td>
          <td><?= $mhs['nama']; ?></td>
          <td><?= $mhs['email']; ?></td>
          <td><?= $mhs['jurusan']; ?></td>
          <td>
            <a href="">Ubah</a> | <a href="">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>