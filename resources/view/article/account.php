<?php
require './resources/view/layout/header1.php';
require 'C:\xampp\htdocs\buyapps-project2_new\app\config\koneksi.php';

function title()
{
    yield "Article | Admin";
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

                <li class="sidebar-item">
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

                <li class="sidebar-item active">
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

            <div class="row">
                <div class="col">
                    <br>
                    <h2 class="fw-bold text-center">
                        Account
                    </h2>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-center" style="margin-top: -10px;">
                        ADMINSUPREMACY
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col my-3">
                    <br>
                    <a href="regist" class="btn btn-primary"><i class="bi bi-file-earmark-plus"></i> New Account</a>
                </div>
            </div>

            <div class="row">
                <div class="col my-4">
                    <table class="table table table-striped table-hover my-3" id="example" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">Name</th>
                                <th scope="col">Username</th>
                                <th scope="col">Option </th>
                            </tr>
                        </thead>
                        <?php $i = 1 ?>
                        <?php foreach ($posts as $post) { ?>

                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $post->nama; ?></td>
                                <td><?php echo $post->username; ?></td>
                                <td>
                                    <a href="delete_account?id=<?php echo $post->id ?>" class="btn btn-outline-danger" style="margin-top: 10px; width: 100px;"><i class="bi bi-trash"></i> Delete</a>
                                </td>
                            </tr>

                            <?php $i = $i + 1 ?>

                        <?php } ?>

                    </table>
                </div>
            </div>

        </main>


        <?php
        require './resources/view/layout/footer1.php';
        ?>