<?php
    require 'php/function.php';
    $laptop = query("SELECT * FROM laptop")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php foreach ($laptop as $lap) : ?>
            <p>
                <a href="php/detail.php?id=<?= $lap['id_laptop'] ?>">
                    <?= $lap["nama_laptop"] ?>
                </a>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>