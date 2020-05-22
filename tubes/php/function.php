<?php
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal.");
    mysqli_select_db($conn, "tubes_193040071") or die("Database salah!");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// function upload()
// {
//     $nama_file = $_FILES['foto_laptop']['name'];
//     $tipe_file = $_FILES['foto_laptop']['type'];
//     $ukuran_file = $_FILES['foto_laptop']['size'];
//     $error = $_FILES['foto_laptop']['error'];
//     $tmp_file = $_FILES['foto_laptop']['tmp_name'];

//     if ($error == 4) {
//         echo "<script>
//                 alert('There's no picture uploaded!');
//                 </script>";
//         return false;
//     }

//     $daftar_gambar = ['jpg', 'jpeg', 'png'];
//     $ekstensi_file = explode('.', $nama_file);
//     $ekstensi_file = strtolower(end($ekstensi_file));
//     if (!in_array($ekstensi_file, $daftar_gambar)) {
//         echo "<script>
//                 alert('File Extension didn't approved to the server.');
//                 </script>";
//         return false;
//     }

//     if ($tipe_file != 'img/jpeg' && $tipe_file != 'img/png') {
//         echo "<script>
//                 alert('Your file isn't image bruh.');
//                 </script>";
//         return false;
//     }

//     if ($ukuran_file > 5000000) {
//         echo "<script>
//                 alert('Your file size is too large.');
//                 </script>";
//         return false;
//     }

//     $nama_file_baru = uniqid();
//     $nama_file_baru .= '.';
//     $nama_file_baru .= $ekstensi_file;
//     move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

//     return $nama_file_baru;
// }

function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['foto_laptop']);
    $nama = htmlspecialchars($data['nama_laptop']);
    $harga = htmlspecialchars($data['harga_laptop']);
    $stock = htmlspecialchars($data['stock_laptop']);
    $monitor = htmlspecialchars($data['monitor']);
    $processor = htmlspecialchars($data['processor']);
    $graphic = htmlspecialchars($data['graphic_card']);
    $ram = htmlspecialchars($data['ram']);
    $storage = htmlspecialchars($data['storage']);
    $konektivitas = htmlspecialchars($data['konektivitas']);
    $port = htmlspecialchars($data['port']);
    $baterai = htmlspecialchars($data['baterai']);

    $query = "INSERT INTO 
                  laptop
                VALUES
                  (null, '$nama', '$gambar', '$harga', '$stock', '$monitor', '$processor', '$graphic', '$ram', '$storage', '$konektivitas', '$port', '$baterai');
              ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM laptop WHERE id_laptop = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id_laptop'];
    $gambar = htmlspecialchars($data['foto_laptop']);
    $nama = htmlspecialchars($data['nama_laptop']);
    $harga = htmlspecialchars($data['harga_laptop']);
    $stock = htmlspecialchars($data['stock_laptop']);
    $monitor = htmlspecialchars($data['monitor']);
    $processor = htmlspecialchars($data['processor']);
    $graphic = htmlspecialchars($data['graphic_card']);
    $ram = htmlspecialchars($data['ram']);
    $storage = htmlspecialchars($data['storage']);
    $konektivitas = htmlspecialchars($data['konektivitas']);
    $port = htmlspecialchars($data['port']);
    $baterai = htmlspecialchars($data['baterai']);

    $queryubah = "UPDATE laptop
                    SET
                    nama_laptop = '$nama',
                    foto_laptop = '$gambar',
                    harga_laptop = '$harga',
                    stock_laptop = '$stock',
                    monitor = '$monitor',
                    processor = '$processor',
                    graphic_card = '$graphic',
                    ram = '$ram',
                    storage = '$storage',
                    konektivitas = '$konektivitas',
                    port = '$port',
                    baterai = '$baterai'
                    WHERE id_laptop = '$id'";
    mysqli_query($conn, $queryubah);

    return mysqli_affected_rows($conn);
}

function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM laptop
              WHERE nama_laptop LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
