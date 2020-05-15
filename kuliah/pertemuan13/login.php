<?php
session_start();

if (isset($_SESSION['login'])) {
  header("Location: index.php");
  exit;
}

require 'functions.php';

// Ketika tombol login ditekan

if (isset($_POST['login'])) {
  $login = login($_POST);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5 w-50">
    <div class="card">
      <div class="card-header text-center">
        <h3 class="card-title mt-2">Form Login</h3>
      </div>
      <div class="card-body">
        <div class="formss">
          <form class="" action="" method="POST">
            <div class="form-group">
              <label for="">Username</label>
              <input type="text" class="form-control" name="username" id="username" autofocus autocomplete="off" required>
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" id="password" required>
            </div>
            <div class="regis">
              <p class="text-right"><a href="registrasi.php">Daftar Akun</a></p>
            </div>
            <div class="tombol">
              <button type="submit" class="btn btn-dark float-right" name="login">Login</button>
            </div>
          </form>
          <?php if (isset($login['error'])) : ?>
            <p><?= $login['pesan']; ?></p>
          <?php endif ?>
        </div>
      </div>
      <div class="card-footer text-muted text-center">
        Buat Login
      </div>
    </div>
  </div>
</body>

</html>