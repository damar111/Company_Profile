<?php

$data = $_GET['slug_title'];
$posts = QB::table('posts')->where('slug_title', $data)->first();

require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\header.php';
require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\navbar.php';
?>


<!-- Start Hero -->
<div class="hero centered" data-scroll-index="0">
    <div class="hero-bg">
        <div class="square-project-detail">
            <img src="public/storage/posts/<?php echo $posts->filename ?>" alt="">
        </div>
        <div class="square-overlay"></div>
    </div>
    <div class="social title-anim">
        <ul>
            <li><a href="https://www.instagram.com/mobileappsid/?hl=id" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i> </a></li>
            <li><a href="https://web.facebook.com/Myappscoid-479286585919922/?modal=admin_todo_tour&_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </div>

</div>
<!-- End Hero -->


<!-- Project Detail Start -->
<section class="project-main parallax-scrl">
    <div class="project-detail">
        <div class="detail-title centered">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mid-title">
                        <div class="title text-center">
                            <h3><?php echo $posts->title; ?></h3>
                            <p><i class="bi bi-person-circle"></i> By Admin | <i class="bi bi-clock"></i> <?php echo $posts->created_at; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-text">
            <div class="container">
                <div class="row">

                    <div class="col">
                        <div class="detailes">
                            <p>
                                <?php echo strip_tags($posts->content) ?>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Project Detail End -->

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <div class="mt-40 title-anim">
                <a class="btn-main" href="home" data-scroll-index="3">MORE ARTICLE</a>
            </div>
        </div>
    </div>
</div>

<?php
require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\footer.php';
?>