<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// Apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>
    ";
  } else {
    echo "Data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="card mx-auto mt-5">
      <h5 class="card-header">Form Tambah Data Mahasiswa</h5>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" id="" aria-describedby="" placeholder="Enter name" autofocus required>
          </div>
          <div class="form-group">
            <label for="">NRP</label>
            <input type="text" name="nrp" class="form-control" id="" placeholder="NRP" required>
          </div>
          <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" name="email" class="form-control" id="" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <label for="">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="" placeholder="Jurusan" required>
          </div>
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="text" name="gambar" class="form-control" id="" placeholder="Gambar" required>
          </div>
          <button type="submit" name="tambah" class="btn btn-dark">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>