<?php
session_start();
require 'function.php';
// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
  $username = $_COOKIE['username'];
  $hash = $_COOKIE['hash'];

  // ambil username dari id
  $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  $row = mysqli_fetch_assoc($result);

  // cek cookie dan username
  if ($hash == hash('sha256', $row['id'], false)) {
    $_SESSION['username'] = $row['username'];
    header("Location: admin.php");
    exit;
  }
}

// cek sudah login/belum
if (isset($_SESSION['username'])) {
  header("Location: admin.php");
  exit;
}
// login
if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
  // mencocokkan username dan password
  if (mysqli_num_rows($cek_user) > 0) {
    $row = mysqli_fetch_assoc($cek_user);
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $_POST['username'];
      $_SESSION['hash'] = hash('sha256', $row['id'], false);
      // jika remember me dicentang
      if (isset($_POST['remember'])) {
        setcookie('username', $row['username'], time() + 60 * 60 * 24);
        $hash = hash('sha256', $row['id']);
        setcookie('hash', $hash, time() + 60 * 60 * 24);
      }

      if (hash('sha256', $row['id']) == $_SESSION['hash']) {
        header("Location: admin.php");
        die;
      }
      header("Location: index.php");
      die;
    }
  }
  $error = true;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass&family=Prompt:wght@100&family=Rajdhani:wght@700&display=swap" rel="stylesheet">
  <!-- CSS Sendiri -->
  <style>
    .jumbotron {
      background-image: url(../assets/img/logreg.jpg);
      background-size: cover;
      height: 604px;
      margin: 0;
    }

    /* DESKTOP */
    @media (min-width: 992px) {
      .jumbotron {
        height: 625px;
      }
    }
  </style>
  <title>Login</title>
</head>

<body>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <div class="container mt-1 w-50">
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
                <div class="remember">
                  <input type="checkbox" name="remenber" id="">
                  <label for="remember">Remember me</label>
                </div>
                <div class="regis">
                  <p class="text-right"><a href="registrasi.php">Register Account</a></p>
                </div>
                <div class="tombol">
                  <button type="submit" class="btn btn-dark float-right" name="submit">Login</button>
                </div>
              </form>
              <?php if (isset($error)) : ?>
                <p>Username/Password Salah!</p>
              <?php endif; ?>
            </div>
          </div>
          <div class="card-footer text-muted text-center">
            TechtechId.2020
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>