<?php
session_start();

require 'function.php';
$laptop = cari($_POST['keyword']);

?>

<table border="0" cellpadding="10" cellspacing="0" class="table table-hover text-center">
  <thead class="thead-dark">
    <tr>
      <th>#</th>
      <th>Nama</th>
      <th>Opsi</th>
    </tr>
  </thead>
  <?php if (empty($laptop)) : ?>
    <tr>
      <td colspan="4">
        <p>I'm sorry but there's no data regarding this keyword.</p>
      </td>
    </tr>
  <?php endif; ?>

  <tbody>
    <?php $i = 1;
    foreach ($laptop as $ltp) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td><?= $ltp['nama_laptop']; ?></td>
        <td>
          <a href="php/detail.php?id=<?= $ltp['id_laptop']; ?>">See Details</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>