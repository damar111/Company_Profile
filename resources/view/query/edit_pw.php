<?php
require './../../../app/config/koneksi.php';
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];

    $cek = $_POST['password'];

    $number    = preg_match('@[0-9]@', $cek);

    if (!$number || strlen($cek) < 8) {
        header("Location: http://localhost/buyapps-project2_new/edit_pw");
    } else {
        $query = "UPDATE users1 SET password = '$password' where users1 . id='$id'";
        mysqli_query($koneksi, $query);
        header("Location: http://localhost/buyapps-project2_new/account");
    }
    // }
}

exit();
