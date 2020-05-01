<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Ambil id dari url
$id = $_GET['id'];

// Cari mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");


// Apakah tombol tambah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
          </script>
    ";
  } else {
    echo "Data gagal diubah!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="card mx-auto mt-5">
      <h5 class="card-header">Form Ubah Data Mahasiswa</h5>
      <div class="card-body">
        <form action="" method="POST">
          <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" id="" aria-describedby="" placeholder="Enter name" autofocus required value="<?= $mhs['nama']; ?>">
          </div>
          <div class="form-group">
            <label for="">NRP</label>
            <input type="text" name="nrp" class="form-control" id="" placeholder="NRP" required value="<?= $mhs['nrp']; ?>">
          </div>
          <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" name="email" class="form-control" id="" placeholder="E-mail" required value="<?= $mhs['email']; ?>">
          </div>
          <div class="form-group">
            <label for="">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="" placeholder="Jurusan" required value="<?= $mhs['jurusan']; ?>">
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="text" name="gambar" class="form-control" id="" placeholder="Gambar" required value="<?= $mhs['gambar']; ?>">
          </div>
          <button type="submit" name="ubah" class="btn btn-dark">Ubah Data</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>