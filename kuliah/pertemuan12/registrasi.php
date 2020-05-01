<?php
require 'functions.php';

if (isset($_POST['registrasi'])) {
  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('Pendaftaran berhasil!');
            document.location.href = 'login.php';
            </script>";
  } else {
    echo "<script>
            alert('User gagal ditambahkan!');
            document.location.href = 'registrasi.php';
            </script>";
  }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <div class="container w-50 mt-5">
    <div class="card">
      <div class="card-header">
        <h3>Daftar Akun</h3>
      </div>
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="">Username</label>
            <input type="text" class="form-control" id="username" name="username" autofocus autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" id="password1" name="password1" required>
          </div>
          <div class="form-group">
            <label for="">Confirm Password</label>
            <input type="password" class="form-control" id="password2" name="password2" required>
          </div>
          <button type="submit" class="btn btn-primary float-right" name="registrasi">Registrasi</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>