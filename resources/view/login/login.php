<?php
require './../../../app/config/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * from users1 where username = '$username' and password = '$password'";
$login = mysqli_query($koneksi, $query);
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("Location: http://localhost/buyapps-project2_new/admin");
} else {
    $pesan = $_POST['pesan'];

    if ($pesan == "") {
        header("Location: http://localhost/buyapps-project2_new/login?pesan=kosong");
    }
}
