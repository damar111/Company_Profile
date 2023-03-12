<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <title>
        <?php foreach (title() as $judul) {
            echo $judul;
        } ?>
    </title>
    <link rel="shortcut icon" href="public/assets/img/tabIcon.png">
</head>

<body style="background-color: #3C4048; color: whitesmoke;">

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="padding: 17px 80px 17px 80px;">
        <div class="container-fluid">
            <div class="logo">
                <a href="home"><img src="public/assets/img/BuyApps.ID fix.png" width="80px" alt="logo"></a>
            </div>
            <!-- <form class="d-flex">
                <a href="logout" class="btn btn-outline-danger">Logout</a>
            </form> -->
        </div>
    </nav>