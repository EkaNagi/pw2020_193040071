<?php
$conn = mysqli_connect("localhost","root","") or die("Koneksi ke DB gagal.");
mysqli_select_db($conn, "tubes_193040071") or die("Database salah!");
$result = mysqli_query($conn, "SELECT * FROM laptop");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link rel="stylesheet" href="../latihan5a/css/style.css">
    <link rel="stylesheet" href="../latihan5a/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <table cellpadding="5" cellspacing="0" class="table table-hover table-responsive" style="margin: auto;text-align: center;">
        <tr style="background-color:lightgrey">
            <th>NO</th>
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
        <?php
        $no = 1;
        ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
        <td><?php echo $no ?></td>
        <td><img src="../latihan5a/assets/img/<?php echo $row['foto_laptop'] ?>" alt="" class="img-fluid"></td>
        <td><?php echo $row['nama_laptop'] ?></td>
        <td><p>Rp.<?php echo $row['harga_laptop'] ?>,00</p></td>
        <td><?php echo $row['stock_laptop'] ?></td>
        <td><?php echo $row['monitor'] ?></td>
        <td><?php echo $row['processor'] ?></td>
        <td><?php echo $row['graphic_card'] ?></td>
        <td><?php echo $row['ram'] ?></td>
        <td><?php echo $row['storage'] ?></td>
        <td><?php echo $row['konektivitas'] ?></td>
        <td><?php echo $row['port'] ?></td>
        <td><?php echo $row['baterai'] ?></td>
        </tr>
        <?php 
        $no++;
        ?>
        <?php endwhile; ?>
    </table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../latihan5a/js/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="../latihan5a/js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../latihan5a/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>