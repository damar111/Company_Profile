<!DOCTYPE html>
<html lang="en">
<?php

$data = $_GET['id'];
$posts = QB::table('posts')->where('id', $data)->first();

require './resources/view/layout/header1.php';
function title()
{
    yield "Edit Article | Admin";
}

?>


<head>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Edit Article | Admin</title>
    <link rel="shortcut icon" href="public/assets/img/tabIcon.png">
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col my-2">
                <br>
                <h2 class="fw-bold">
                    <i class="bi bi-book"></i> Edit Article
                </h2>
                <hr>
            </div>
        </div>

        <div class="row">
            <div class="col-8">
                <form method="POST" action="resources\view\query\edit.php?id=<?php echo $posts->id; ?>" enctype="multipart/form-data">

                    <div class="mb-3">
                        <input type="hidden" name="id" class="form-control" value="<?php echo $posts->id; ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Input Title" value="<?php echo $posts->title; ?>" autofocus>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Content</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Input Whole Content" style="height: 300px;"><?php echo strip_tags($posts->content); ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label"><img src="<?php echo 'public/storage/posts/' . $posts->filename; ?>" alt="" style="width: 300px; border-radius: 15px; box-shadow: 1px 3px 6px 5px #2D3036;"></label>
                        <input type="file" name="image" class="form-controlfile" id="image">
                    </div>

                    <div class="col my-4">
                        <br>
                        <a href="table" class="btn btn-outline-secondary">Kembali</a>
                        <button type="submit" class="btn btn-primary" name="update">Simpan</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <?php
    require './resources/view/layout/header1.php';
    ?>