<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- ПОДКЛЮЧЕНИЕ СТИЛЕЙ -->
    <link rel="stylesheet" href="/assets/style.css">

    <!-- НАЗВАНИЕ САЙТА -->
    <title>NailForumLyulik</title>

</head>
<style>
    .logo {
        width: 200px;
        height: 70px;
    }

</style>

<body>
<!--     ##### Предзагрузка ##### -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="circle-preloader">
        <img src="/assets/img/blog-img/" alt="">
        <div class="foode-preloader">
            <span></span>
        </div>
    </div>
</div>

<!-- ##### ГОЛОВА САЙТА ##### -->
<header class="header-area">

    <!-- НАЧАЛО ГОЛОВЫ САЙТА -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="top-header-content d-flex align-items-center justify-content-between">
                        <!-- Search Form -->
                        <div class="search-form">
                            <form action="#" method="get">
                                <input type="search" name="search" class="form-control" placeholder="Поиск">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Social Button -->
                        <div class="top-social-info">
                            <a href="https://vk.com/away.php?to=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100030380535921&cc_key="><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ЛОГОТИП -->
    <div class="logo-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Nav brand -->
                    <a href="/" class="nav-brand"><img src="/assets/img/core-img/logo.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>


    <div class="logo-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Nav brand -->
                    <a href="getPost">Ajax запрос на получение поста</a>
                </div>
            </div>
        </div>
    </div>

</header>

<?php include "application/views/".$content_view; ?>

<!-- ##### ИНСТАГРАММЧИК ##### -->
<div class="follow-us-instagram">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h2>Заходи</h2>
                    <span>@lyuliknogti</span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="instagram-slides owl-carousel">
                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="/assets/img/blog-img/l2.jpg" alt="">
                        <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="/assets/img/blog-img/l7.jpg" alt="">
                        <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="/assets/img/blog-img/l6.jpg" alt="">
                        <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="/assets/img/blog-img/l8.jpg" alt="">
                        <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="/assets/img/blog-img/l3.jpg" alt="">
                        <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>

                    <!-- Single Instagram Slide -->
                    <div class="single-instagram-slide">
                        <img src="/assets/img/blog-img/l5.jpg" alt="">
                        <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i>Follow Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Instagram закончился ##### -->

<!-- ##### ВЫХОДА НЕТ, СКОРО ##### -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Footer Curve Line -->
                <img class="footer-curve" src="/assets/img/core-img/foo-curve.png" alt="">
                <!-- Footer Social Info -->
                <div class="footer-social-info d-flex align-items-center justify-content-between">
                    <a href="https://vk.com/away.php?to=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D100030380535921&cc_key="><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#"><i class="fa fa-google-plus"></i><span>Google +</span></a>
                    <a href="https://www.instagram.com/lyuliknogti/"><i class="fa fa-instagram"></i><span>Instagram</span></a>


                </div>
                <!-- Footer Curve Line -->
                <img class="footer-curve" src="/assets/img/core-img/foo-curve.png" alt="">
            </div>
        </div>

        <!--                   ФУТЕР     -->
        <div class="row">
            <div class="col-12">
                <div class="copywrite-text">
                    <p><i class="fa fa-heart-o"> by Lulik <i class="fa fa-heart-o"></i>
                            <!-- ##### Footer Area Start ##### -->

                            <!-- ##### All Javascript Script ##### -->
                            <!-- jQuery-2.2.4 js -->
                            <script src="/assets/js/jquery/jquery-2.2.4.min.js"></script>
                            <!-- Popper js -->
                            <script src="/assets/js/bootstrap/popper.min.js"></script>
                            <!-- Bootstrap js -->
                            <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
                            <!-- All Plugins js -->
                            <script src="/assets/js/plugins/plugins.js"></script>
                            <!-- Active js -->
                            <script src="/assets/js/active.js"></script>
                            <!-- Ajax      -->
                            <script src="/assets/js/scriptAjax.js"></script>
</body>

</html>
