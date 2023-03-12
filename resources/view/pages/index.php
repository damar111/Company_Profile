<?php

use function Composer\Autoload\includeFile;

require('resources/view/layout/header.php');

require('./resources/view/layout/navbar.php');
?>

<!-- Start Hero -->
<section class="hero centered" data-scroll-index="0">
    <div class="hero-bg">
        <div class="square"></div>
        <div class="square-overlay"></div>
    </div>
    <div class="social title-anim">
        <ul>
            <li><a href="https://www.instagram.com/mobileappsid/?hl=id" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i> </a></li>
            <li><a href="https://web.facebook.com/Myappscoid-479286585919922/?modal=admin_todo_tour&_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
    </div>
    <div class="container between">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <div class="hero-title text-left">
                        <h3 class="title-anim">We are</h3>
                        <h1 class="title-anim">BUYAPPS.ID</h1>
                        <div class="mt-20"></div>
                        <p class="title-anim">The Best Application Development Services in Bogor.</p>
                        <div class="mt-40 title-anim">
                            <a class="btn-main" href="#" data-scroll-nav="1">About us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<!-- Start About -->
<section id="about" class="about parallax-scrl" data-scroll-index="1">
    <div class="right-bg"></div>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

            </div>

            <div class="col-lg-6 order-lg-2">

                <div class="about-text">
                    <div class="title text-left">
                        <h3>BUYAPPS.ID</h3>
                        <h2>About us</h2>
                    </div>
                    <div class="about-inner mt-30">
                        <h4>Akar is a digital agency specializing in handcrafted websites that stir emotion.</h4>
                        <p>We specialize in the design, development and implementation of tailor-made solutions for
                            corporate and marketing communications across a wide range of business sectors.</p>
                        <p>From individual design elements to websites, apps, complete campaign designs and more,
                            we
                            provide our corporate clients with everything they need to communicate their brand in
                            the
                            most unique, memorable and user-friendly way possible.</p>
                    </div>


                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="about-img line-img">
                    <div class="about-overlay"></div>
                    <img class="img-fluid" src="public/assets/img/about/3.jpg" alt="1">
                </div>

            </div>
        </div>
    </div>

</section>

<div class="between">
    <div class="line-between"></div>
</div>

<!-- Start Service -->
<section id="service" class="service parallax-scrl" data-scroll-index="2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="title text-left">
                    <h3>Our areas of</h3>
                    <h2>Services</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mt-30">
                <div class="service-item bg-second">
                    <div class="service-icon text-center">
                        <img src="public/assets/img/service/server.png" alt="">
                    </div>
                    <div class="service-text">
                        <h3>VIRTUAL PRIVET SERVER (VPS)</h3>
                        <p>Put your eyes on your customers while keeping a graphic and aesthetic coherence. </p>
                        <div class="service-line"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-50">
                <div class="service-item bg-main">
                    <div class="service-icon text-center">
                        <img src="public/assets/img/service/marketing.png" alt="">
                    </div>
                    <div class="service-text">
                        <h3>DIGITAL MARKETING</h3>
                        <p>Put your eyes on your customers while keeping a graphic and aesthetic coherence. </p>
                        <div class="service-line"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-30">
                <div class="service-item bg-second">
                    <div class="service-icon text-center">
                        <img src="public/assets/img/service/apple.png" alt="">
                    </div>
                    <div class="service-text">
                        <h3>IOS APPLICATION</h3>
                        <p>Put your eyes on your customers while keeping a graphic and aesthetic coherence. </p>
                        <div class="service-line"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-4 mt-30">
                <div class="service-item bg-main">
                    <div class="service-icon text-center">
                        <img src="public/assets/img/service/android.png" alt="">
                    </div>
                    <div class="service-text">
                        <h3>ANDROID APPLICATION</h3>
                        <p>Put your eyes on your customers while keeping a graphic and aesthetic coherence. </p>
                        <div class="service-line"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-50">
                <div class="service-item bg-second">
                    <div class="service-icon text-center">
                        <img src="public/assets/img/service/web.png" alt="">
                    </div>
                    <div class="service-text">
                        <h3>WEB DEVELOPMENT</h3>
                        <p>Put your eyes on your customers while keeping a graphic and aesthetic coherence. </p>
                        <div class="service-line"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-30">
                <div class="service-item bg-main">
                    <div class="service-icon text-center">
                        <img src="public/assets/img/service/web2.png" alt="">
                    </div>
                    <div class="service-text">
                        <h3>WEB BASE SYSTEM</h3>
                        <p>Put your eyes on your customers while keeping a graphic and aesthetic coherence. </p>
                        <div class="service-line"></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- End Service -->

<div class="between">
    <div class="line-between"></div>
</div>

<!-- Start Article -->
<section id="news" class="news parallax-scrl" data-scroll-index="3">
    <div class="left-bg"></div>
    <div class="about-text-bg"></div>
    <div class="container">


        <div class="row">
            <div class="col-lg-12 mid-title">
                <div class="title text-center">
                    <h3>Recent</h3>
                    <h2>Article</h2>
                </div>
            </div>
            <div class="col-lg-12 mt-50">
                <div class="news-slider">
                    <div class="owl-carousel owl-theme">

                        <?php foreach ($posts as $post) { ?>
                            <div class="news-item text-center">
                                <div class="news-img">
                                    <a href="viewarticles?slug_title=<?php echo $post->slug_title; ?>"><img class="img-fluid rounded" src="public/storage/posts/<?php echo $post->filename; ?>" alt=""></a>
                                </div>
                                <div class="news-text">
                                    <a href="viewarticles?slug_title=<?php echo $post->slug_title; ?>">
                                        <h3><?php echo $post->title; ?></h3>
                                    </a>
                                    <a class="news-link" href="viewarticles?slug_title=<?php echo $post->slug_title; ?>">Read more</a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="mt-20 text-center">
                </div>
            </div>



        </div>

    </div>
</section>
<!-- End Article -->

<?php
require 'C:\xampp\htdocs\buyapps-project2_new\resources\view\layout\footer.php';

?>