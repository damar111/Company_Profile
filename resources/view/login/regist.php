<?php
require './../../../app/config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$cek = $_POST['password'];

// Validasi kekuatan password
// $uppercase = preg_match('@[A-Z]@', $cek);
// $lowercase = preg_match('@[a-z]@', $cek);
$number    = preg_match('@[0-9]@', $cek);
// $specialChars = preg_match('@[^\w]@', $cek);

if (!$number || strlen($cek) < 8) {
    //Empty field notif
    // $pesan = $_POST['pesan'];
    // if ($pesan == "") {
    //     header("Location: http://localhost/buyapps-project2_new/regist?pesan=kosong");
    // }

    header("Location: http://localhost/buyapps-project2_new/regist");
} else {
    $query = "INSERT INTO users1 (id, nama, username, password)
          VALUES ('$id', '$nama', '$username', md5('$password'))";
    mysqli_query($koneksi, $query);
    header("Location: http://localhost/buyapps-project2_new/admin");
}


exit();
