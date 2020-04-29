<?php
require 'php/function.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $laptop = query("SELECT * FROM laptop WHERE
                      nama_laptop LIKE '%$keyword%'");
} else {
    $laptop = query("SELECT * FROM laptop");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="php/admin.php"><button>admin page</button></a>
    <form action="" method="GET">
        <div class="form-group">
            <label for="">Cari</label>
            <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Cari" autofocus>
            <button type="submit" name="cari" class="btn btn-dark">Cari!</button>
        </div>
    </form>
    <?php if (empty($laptop)) : ?>
        <h1>Data tidak ditemukan</h1>
    <?php else : ?>
        <div class="container">
            <?php foreach ($laptop as $lap) : ?>
                <p>
                    <a href="php/detail.php?id=<?= $lap['id_laptop'] ?>">
                        <?= $lap["nama_laptop"] ?>
                    </a>
                </p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</body>

</html>