<?php
require './../../../app/config/koneksi.php';
if (isset($_POST['update'])) {
    // $data = $_GET['id'];
    // $img = "SELECT image from posts where id = '$data";
    // if ($img != null) {
    //     $id = $_POST['id'];
    //     $title = $_POST['title'];
    //     $content = $_POST['content'];

    //     $query = "UPDATE posts SET title = '$title', content = '$content' where id='$id'";
    //     // $query = $dbh->prepare($sql);
    //     // $query->bindParam(':id', $id, PDO::PARAM_STR);
    //     // $query->bindParam(':image', $image, PDO::PARAM_STR);
    //     // $query->execute();
    //     // if ($query->execute()) {
    //     //     echo '<script>alert(" image has been Updated.")</script>';
    //     // }
    //     mysqli_query($koneksi, $query);
    // } else {
    $id = $_POST['id'];
    $image = $_FILES['image']['name'];
    $imagename = $_FILES['image']['tmp_name'];
    $filename = $image;
    $title = $_POST['title'];
    $slug_title = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));;
    $content = $_POST['content'];

    $filedestination = './../../../public/storage/posts/' . $_FILES["image"]["name"];
    move_uploaded_file($imagename, $filedestination);

    if ($image == null) {
        $query = "UPDATE posts SET title = '$title', slug_title = '$slug_title', content = '$content' where id='$id'";
    } else {
        $query = "UPDATE posts SET image = '$image', filename = '$filename', title = '$title', slug_title = '$slug_title', content = '$content' where id='$id'";
    }
    mysqli_query($koneksi, $query);
    // }
}


header("Location: http://localhost/buyapps-project2_new/table");
exit();
