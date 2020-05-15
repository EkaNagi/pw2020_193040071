<?php
session_start();

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);

?>

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