<?php
require 'function.php';

$id = $_GET['id'];
$elektronik = query("SELECT * FROM laptop WHERE id_laptop = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data berhasil diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data gagal diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="card mx-auto mt-5 mb-5">
      <h5 class="card-header">Form Ubah Data Laptop</h5>
      <div class="card-body">
        <form action="" method="POST">
          <input type="text" name="id_laptop" id="id_laptop" value="<?= $elektronik['id_laptop']; ?>">
          <div class="form-group">
            <label for="">Gambar</label>
            <input type="text" name="foto_laptop" class="form-control" id="foto_laptop" aria-describedby="" placeholder="Gambar Laptop" autofocus required value="<?= $elektronik['foto_laptop']; ?>">
          </div>
          <div class="form-group">
            <label for="">Nama Laptop</label>
            <input type="text" name="nama_laptop" class="form-control" id="nama_laptop" placeholder="Nama Laptop" required value="<?= $elektronik['nama_laptop']; ?>">
          </div>
          <div class="form-group">
            <label for="">Harga Laptop</label>
            <input type="text" name="harga_laptop" class="form-control" id="harga_laptop" placeholder="Harga Laptop" required value="<?= $elektronik['harga_laptop']; ?>">
          </div>
          <div class="form-group">
            <label for="">Stock Laptop</label>
            <input type="text" name="stock_laptop" class="form-control" id="stock_laptop" placeholder="Stock Laptop" required value="<?= $elektronik['stock_laptop']; ?>">
          </div>
          <div class="form-group">
            <label for="">Monitor</label>
            <input type="text" name="monitor" class="form-control" id="monitor" placeholder="Monitor" required value="<?= $elektronik['monitor']; ?>">
          </div>
          <div class="form-group">
            <label for="">Processor</label>
            <input type="text" name="processor" class="form-control" id="processor" placeholder="Processor" required value="<?= $elektronik['processor']; ?>">
          </div>
          <div class="form-group">
            <label for="">Graphic Card</label>
            <input type="text" name="graphic_card" class="form-control" id="graphic_card" placeholder="Graphic Card" required value="<?= $elektronik['graphic_card']; ?>">
          </div>
          <div class="form-group">
            <label for="">RAM</label>
            <select name="ram" class="form-control" id="ram" required value="<?= $elektronik['ram']; ?>">
              <option>------------------- Besar RAM -------------------</option>
              <option value="2GB">2GB</option>
              <option value="4GB">4GB</option>
              <option value="8GB">8GB</option>
              <option value="16GB">16GB</option>
              <option value="32GB">32GB</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Storage</label>
            <select name="storage" class="form-control" id="storage" required value="<?= $elektronik['storage']; ?>">
              <option>------------------- Besar Storage -------------------</option>
              <option value="320GB">320GB</option>
              <option value="512GB">512B</option>
              <option value="1TB">1TB</option>
            </select>
          </div>
          <div class="form-group">
            <label for="">Konektivitas</label>
            <input type="text" name="konektivitas" class="form-control" id="konektivitas" placeholder="Konektivitas" required value="<?= $elektronik['konektivitas']; ?>">
          </div>
          <div class="form-group">
            <label for="">Port</label>
            <input type="text" name="port" class="form-control" id="port" placeholder="Port" required value="<?= $elektronik['port']; ?>">
          </div>
          <div class="form-group">
            <label for="">Baterai</label>
            <input type="text" name="baterai" class="form-control" id="baterai" placeholder="Baterai" required value="<?= $elektronik['baterai']; ?>">
          </div>
          <button type="submit" name="ubah" class="btn btn-dark">Ubah Data</button>
          <button type="submit" name="" class="btn btn-dark">
            <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
          </button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>