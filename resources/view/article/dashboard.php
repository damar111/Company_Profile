<?php
require './resources/view/layout/header1.php';
require 'C:\xampp\htdocs\buyapps-project2_new\app\config\koneksi.php';

function title()
{
    yield "Dashboard | Admin";
}

//mengaktifkan session
session_start();

//proses cek apakah user sudah lofin atau belum
if ($_SESSION['status'] != "login") {
    header("Location: http://localhost/buyapps-project2_new/login");
}

?>

<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="home">
                <span class="align-middle">BuyApps.id</span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    Pages
                </li>

                <li class="sidebar-item active">
                    <a class="sidebar-link" href="admin">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="logout">
                        <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="regist">
                        <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                    </a>
                </li>

                <li class="sidebar-header">
                    Tools & Components
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse">
                        <i class="align-middle" data-feather="grid"></i> Tables
                    </a>

                    <div class="collapse" id="dashboard-collapse">
                        <ul style="list-style: none;">
                            <li><a style="text-decoration: none; color: gray; margin-left: 30px;" href="table"><i class="align-middle" data-feather="chevron-right"></i> Article</a></li>
                            <li><a style="text-decoration: none; color: gray; margin-left: 30px;" href="account"><i class="align-middle" data-feather="chevron-right"></i> Account</a></li>
                        </ul>
                    </div>
                </li>
        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
            </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                    <li class="nav-item dropdown">
                        <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                            <i class="align-middle" data-feather="settings"></i>
                        </a>

                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                            Hello <span class="text-dark"><?php echo $_SESSION['username']; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="logout">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>Dashboard</strong></h1>

                <div class="row">
                    <div class="col-7 d-flex">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <a href="table">
                                                        <h2 class="card-title">Article</h2>
                                                    </a>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="stat text-primary">
                                                        <a href="table"><i class="align-middle" data-feather="grid"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="table">
                                                <h1 class="mt-1 mb-3">Details Article</h1>
                                            </a>
                                            <div class="mb-0">
                                                <a href="table"><span class="text-muted">Edit Add Delete Article</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col mt-0">
                                                    <a href="account">
                                                        <h5 class="card-title">Account</h5>
                                                    </a>
                                                </div>

                                                <div class="col-auto">
                                                    <div class="stat text-primary">
                                                        <a href="account"><i class="align-middle" data-feather="grid"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="account">
                                                <h1 class="mt-1 mb-3">Manage Account</h1>
                                            </a>
                                            <div class="mb-0">
                                                <a href="account"><span class="text-muted">delete some account</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col mt-0">
                                        <a href="home">
                                            <h5 class="card-title">Home</h5>
                                        </a>
                                    </div>

                                    <div class="col-auto">
                                        <div class="stat text-primary">
                                            <a href="home"><i class="align-middle" data-feather="home"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <a href="home">
                                    <h1 class="mt-1 mb-3">My Website</h1>
                                </a>
                                <div class="mb-0">
                                    <a href="home"><span class="text-muted">Go back to main page</span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row my-5">
                    <div class="col-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">

                                <h5 class="card-title mb-0">Article</h5>
                            </div>
                            <table class="table table-hover my-0">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col">Content</th>
                                        <th scope="col">Thumbnail</th>
                                    </tr>
                                </thead>
                                <?php $i = 1 ?>
                                <?php foreach ($posts as $post) { ?>

                                    <tr>
                                        <td><?php echo $post->title; ?></td>
                                        <td><?php echo $post->content; ?></td>
                                        <td>
                                            <img src="public/storage/posts/<?php echo $post->filename ?>" alt="" class="rounded" style="width: 150px">
                                        </td>
                                    </tr>

                                    <?php $i = $i + 1 ?>

                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <?php
        require './resources/view/layout/footer1.php';
        ?>