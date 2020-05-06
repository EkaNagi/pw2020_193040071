<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $elektronik = query("SELECT * FROM laptop WHERE
                nama_laptop LIKE '%$keyword%' OR
                harga_laptop LIKE '%$keyword%' OR
                stock_laptop LIKE '%$keyword%' OR
                monitor LIKE '%$keyword%' OR
                processor LIKE '%$keyword%' OR
                graphic_card LIKE '%$keyword%' OR
                ram LIKE '%$keyword%' OR
                storage LIKE '%$keyword%' OR
                konektivitas LIKE '%$keyword%' OR
                port LIKE '%$keyword%' OR
                baterai LIKE '%$keyword%'");
} else {
  $elektronik = query("SELECT * FROM laptop");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="add">
    <a href="tambah.php"><button class="btn btn-dark">Tambah Data</button></a>
  </div>
  <div class="add">
    <a href="logout.php"><button class="btn btn-dark">Logout</button></a>
  </div>
  <form action="" method="GET">
    <div class="form-group">
      <label for="">Cari</label>
      <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari" autofocus>
      <button type="submit" name="cari" class="btn btn-dark">Cari!</button>
    </div>
  </form>
  <table cellpadding="5" cellspacing="0" class="table table-hover table-responsive" style="margin: auto;text-align: center;">
    <tr style="background-color:lightgrey">
      <th>NO</th>
      <th>OPSI</th>
      <th>FOTO</th>
      <th>NAMA</th>
      <th>HARGA</th>
      <th>STOCK</th>
      <th>MONITOR</th>
      <th>PROCESSOR</th>
      <th>GRAPHIC CARD</th>
      <th>RAM</th>
      <th>STORAGE</th>
      <th>KONEKTIVITAS</th>
      <th>PORT</th>
      <th>BATERAI</th>
    </tr>
    <?php if (empty($elektronik)) : ?>
      <tr>
        <td colspan="14">
          <h1>Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php else : ?>
      <?php
      $no = 1;
      ?>
      <?php foreach ($elektronik as $elec) : ?>
        <tr>
          <td><?php echo $no ?></td>
          <td>
            <a href="ubah.php?id=<?php echo $elec['id_laptop'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?php echo $elec['id_laptop'] ?>" onclick="return confirm('Hapus Data ??')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?php echo $elec['foto_laptop'] ?>" alt="" class="img-fluid"></td>
          <td><?php echo $elec['nama_laptop'] ?></td>
          <td>
            <p>Rp.<?php echo $elec['harga_laptop'] ?>,00</p>
          </td>
          <td><?php echo $elec['stock_laptop'] ?></td>
          <td><?php echo $elec['monitor'] ?></td>
          <td><?php echo $elec['processor'] ?></td>
          <td><?php echo $elec['graphic_card'] ?></td>
          <td><?php echo $elec['ram'] ?></td>
          <td><?php echo $elec['storage'] ?></td>
          <td><?php echo $elec['konektivitas'] ?></td>
          <td><?php echo $elec['port'] ?></td>
          <td><?php echo $elec['baterai'] ?></td>
        </tr>
        <?php
        $no++;
        ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../latihan6a/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="../latihan6a/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="../latihan6a/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>