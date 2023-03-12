<?php
require './../../../app/config/koneksi.php';

$id = $_POST['id'];
$image = $_FILES['image']['name'];
$imagename = $_FILES['image']['tmp_name'];
$filename = $image;
$title = $_POST['title'];
// function textToSlug($title = '')
// {
//     $title = trim($title);
//     if (empty($title)) return '';

//     $title = preg_replace("/[^a-zA-Z0-9\-\s]+/", "", $title);
//     $title = strtolower(trim($title));
//     $title = str_replace(' ', '-', $title);
//     $title = $title_ori = preg_replace('/\-{2,}/', '-', $title);

//     return $title;
// }
$slug_title = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($_POST["title"])));;
$content = $_POST['content'];
$created_at = date("Y-m-d H:i:s");

$filedestination = 'C:/xampp/htdocs/buyapps-project2_new/public/storage/posts/' . $image;
move_uploaded_file($imagename, $filedestination);

$query = "INSERT INTO posts (id, image, filename, title, slug_title, content, created_at)
          VALUES ('$id', '$image', '$filename', '$title', '$slug_title', '$content', '$created_at')";
mysqli_query($koneksi, $query);

header("Location: http://localhost/buyapps-project2_new/table");
exit();
