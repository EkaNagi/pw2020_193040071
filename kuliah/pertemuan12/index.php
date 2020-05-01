<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// Ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

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
  <button class="btn btn-dark"><a href="logout.php">Logout</a></button>
  <h3>Daftar Mahasiswa</h3>

  <p class="tengah"><a href="tambah.php">Tambah Data Mahasiswa</a></p>
  <div class="buatform">
    <form action="" method="POST" class="form-inline">
      <div class="form-group mx-auto mb-2">
        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Pencarian" autocomplete="off" autofocus>
        <button class="btn btn-dark ml-2" type="submit" name="cari">Cari</button>
      </div>
    </form>
  </div>
  <table border="0" cellpadding="10" cellspacing="0" class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <?php if (empty($mahasiswa)) : ?>
      <tr>
        <td colspan="4">
          <p>data mahasiswa tidak ditemukan!</p>
        </td>
      </tr>
    <?php endif; ?>

    <tbody>
      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="img/<?= $mhs['gambar']; ?>" alt=""></td>
          <td><?= $mhs['nama']; ?></td>
          <td>
            <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>