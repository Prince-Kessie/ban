<?php
session_start();
$url = "http://localhost/cdm_church/";
?>


<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--  -->
    <!--    Document Title-->
    <!-- =============================================-->
    <title>Christ Disciple Movement</title><!--  -->
    <!--    Favicons-->
    <!--    =============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
    <link rel="manifest" href="assets/images/favicons/manifest.html">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileImage" content="assets/images/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff"><!--  -->
    <!--    Stylesheets-->
    <!--    =============================================-->
    <!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Template specific stylesheets-->
    <link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600" rel="stylesheet">
    <link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/lib/flexslider/flexslider.css" rel="stylesheet"><!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Another css here -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="assets/css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="assets/css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/style.css">
</head>

<body data-spy="scroll" data-target=".inner-link" data-offset="60">
    <main>
        <div class="loading" id="preloader">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="loader-box">
                    <div class="loader"></div>
                </div>
            </div>
        </div>
        <div class="znav-container znav-white znav-freya znav-fixed" id="znav-container">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand overflow-hidden pr-3" href="<?= $url ?>">
                        <img src="assets/images/logo.svg" alt="Freya" width="70" />
                    </a><button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <div class="hamburger hamburger--emphatic">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-0">
                            <li><a href="<?= $url ?>index">Home</a></li>

                            <li><a href="<?= $url ?>about">About</a></li>
                            <li><a href="<?= $url ?>services">Services</a></li>
                            <li><a href="<?= $url ?>contact">Contact</a></li>
                            <li><a href="<?= $url ?>signin">Signin</a></li>
                            <li><a href="<?= $url ?>blog">Blog</a></li>
                        </ul>
                        <ul class="navbar-nav fs-0 ml-lg-auto">
                            <li class="text-center"><a class="pl-3 pl-lg-1 d-inline-block" href="#"><span
                                        class="fa fa-facebook"></span></a><a class="pl-3 pl-lg-1 d-inline-block"
                                    href="#"><span class="fa fa-twitter"></span></a><a
                                    class="pl-3 pl-lg-1 d-inline-block" href="#"><span
                                        class="fa fa-instagram"></span></a><a class="pl-3 pl-lg-1 d-inline-block pr-0"
                                    href="#"><span class="fa fa-dribbble"></span></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="flexslider flexslider-simple h-full loading parallax">
            <ul class="slides">
                <li data-zanim-timeline="{}">
                    <section class="py-0 color-white">
                        <div class="background-holder overlay overlay-freya"
                            style="background-image:url(assets/images/web2.png);"></div>
                        <!--/.background-holder-->
                        <div class="container">
                            <div class="row justify-content-start align-items-end pt-11 pb-6 h-full"
                                data-zanim-timeline="{}">
                                <div class="col pb-lg-0">
                                    <div class="row align-items-end parallax" data-rellax-speed="2">
                                        <div class="col-lg">
                                            <div class="overflow-hidden">
                                                <p class="mb-1 text-uppercase ls"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'>
                                                    Identification</p>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h2 class="color-white fw-500 mb-4 mb-lg-0"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'>
                                                    Discover Your Identity</h2>
                                            </div>
                                        </div>
                                        <div class="col text-lg-right">
                                            <div class="overflow-hidden">
                                                <div
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'>
                                                    <a class="btn btn-sm btn-outline-white" href="blog">Subscribe</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.container-->
                    </section>
                </li>
                <li data-zanim-timeline="{}">
                    <section class="py-0 color-white">
                        <div class="background-holder overlay overlay-freya"
                            style="background-image:url(assets/images/web3.png);"></div>
                        <!--/.background-holder-->
                        <div class="container">
                            <div class="row justify-content-start align-items-end pt-11 pb-6 h-full"
                                data-zanim-timeline="{}">
                                <div class="col pb-lg-0">
                                    <div class="row align-items-end parallax" data-rellax-speed="2">
                                        <div class="col-lg">
                                            <div class="overflow-hidden">
                                                <p class="mb-1 text-uppercase ls"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'>
                                                    Calling</p>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h2 class="color-white fw-500 mb-4 mb-lg-0"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'>
                                                    Discover Your Calling</h2>
                                            </div>
                                        </div>
                                        <div class="col text-lg-right">
                                            <div class="overflow-hidden">
                                                <div
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'>
                                                    <a class="btn btn-sm btn-outline-white" href="blog">Subscribe</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.container-->
                    </section>
                </li>
                <li data-zanim-timeline="{}">
                    <section class="py-0 color-white">
                        <div class="background-holder overlay overlay-freya"
                            style="background-image:url(assets/images/ch1.png);"></div>
                        <!--/.background-holder-->
                        <div class="container">
                            <div class="row justify-content-start align-items-end pt-11 pb-6 h-full"
                                data-zanim-timeline="{}">
                                <div class="col pb-lg-0">
                                    <div class="row align-items-end parallax" data-rellax-speed="2">
                                        <div class="col-lg">
                                            <div class="overflow-hidden">
                                                <p class="mb-1 text-uppercase ls"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.1}'>
                                                    The Word</p>
                                            </div>
                                            <div class="overflow-hidden">
                                                <h2 class="color-white fw-500 mb-4 mb-lg-0"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0}'>
                                                    God's Word Works</h2>
                                            </div>
                                        </div>
                                        <div class="col text-lg-right">
                                            <div class="overflow-hidden">
                                                <div
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.2}'>
                                                    <a class="btn btn-sm btn-outline-white" href="blog">Subscribe</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/.row-->
                        </div>
                        <!--/.container-->
                    </section>
                </li>
            </ul>
        </div>

        <section class="testimonial-section">
            <!-- Swiper -->
            <div class="swiper-container testimonial-slider" style="margin-top: 40px;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                                    <figure class="user-avatar">
                                        <img src="assets/images/3.jpg" alt="">
                                    </figure><!-- .user-avatar -->
                                </div><!-- .col -->


                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .swiper-slide -->

                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 order-2 order-lg-1 flex align-items-center mt-5 mt-lg-0">
                                    <figure class="user-avatar">
                                        <img src="assets/images/2.jpg" alt="">
                                    </figure><!-- .user-avatar -->
                                </div><!-- .col -->

                                <div class="col-12 col-lg-6 order-1 order-lg-2 content-wrap h-100">
                                    <div class="entry-content">
                                        <p>
                                            <span style="color:blue">Mission Statement:</span> Personal relationship
                                            with God, changing lives, knowing, living,
                                            and accurately communicating the Word.
                                        </p>
                                    </div><!-- .entry-content -->

                                    <div class="entry-footer">
                                        <h3 class="testimonial-user">Christ's Disciples Movement- <span>(CDM)</span>
                                        </h3>
                                    </div><!-- .entry-footer -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .swiper-slide -->

                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 flex order-2 order-lg-1 align-items-center mt-5 mt-lg-0">
                                    <figure class="user-avatar">
                                        <img src="assets/images/4.jpg" alt="">
                                    </figure><!-- .user-avatar -->
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .container -->
                    </div><!-- .swiper-slide -->
                </div><!-- .swiper-wrapper -->

                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                            <div
                                class="swiper-pagination position-relative flex justify-content-center align-items-center">
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .testimonial-slider -->
        </section><!-- .testimonial-section -->

        <section class="featured-courses vertical-column courses-wrap">
            <div class="container">
                <div class="row mx-m-25">
                    <div class="col-12 px-25">
                        <header class="heading flex flex-wrap justify-content-between align-items-center">
                            <h2 class="entry-title">Featured Courses</h2>

                            <nav class="courses-menu mt-3 mt-lg-0">
                                <ul class="flex flex-wrap justify-content-md-end align-items-center">
                                    <li class="active"><a href="#">All Components</a></li>
                                    <li><a href="#">Salvation</a></li>
                                    <li><a href="#">Discipleship</a></li>
                                    <li><a href="#">Leadership</a></li>
                                    <li><a href="#">Mission</a></li>
                                </ul>
                            </nav><!-- .courses-menu -->
                        </header><!-- .heading -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="assets/images/1.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">Introduction to the Bible</a></h2>

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a href="#">Mr.Kessie</a></div>

                                        <div class="course-date">Instructor</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->

                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="assets/images/5.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">The sure foundation</a></h2>

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a href="#">Mother Sannoh</a></div>

                                        <div class="course-date">Instructor</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="assets/images/6.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">The identity/deity of Christ</a></h2>

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a href="#">Pastor Caleb</a></div>

                                        <div class="course-date">Instructor</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="assets/images/about.png" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">The story of redemption</a></h2>

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a href="#">Pastor Saiwhean</a></div>

                                        <div class="course-date">Instructor</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="assets/images/live.png" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">The Laws of the Kingdom</a></h2>

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a href="#">Mr.Kessie</a></div>

                                        <div class="course-date">Instructor</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 px-25">
                        <div class="course-content">
                            <figure class="course-thumbnail">
                                <a href="#"><img src="assets/images/live2.png" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="course-content-wrap">
                                <header class="entry-header">
                                    <h2 class="entry-title"><a href="#">The basic of righteousness</a></h2>

                                    <div class="entry-meta flex align-items-center">
                                        <div class="course-author"><a href="#">Mr. Alex</a></div>

                                        <div class="course-date">Instructor</div>
                                    </div><!-- .course-date -->
                                </header><!-- .entry-header -->
                            </div><!-- .course-content-wrap -->
                        </div><!-- .course-content -->
                    </div><!-- .col -->

                    <div class="col-12 px-25 flex justify-content-center">
                        <a class="btn" href="#">view all courses</a>
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .courses-wrap -->

        <section class="latest-news-events">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <header class="heading flex justify-content-between align-items-center">
                            <h2 class="entry-title">Latest News & Events</h2>
                        </header><!-- .heading -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6">
                        <div class="featured-event-content">
                            <figure class="event-thumbnail position-relative m-0">
                                <a href="#"><img src="assets/images/event-1.jpg" alt=""></a>

                                <div class="posted-date position-absolute">
                                    <div class="day">23</div>
                                    <div class="month">mar</div>
                                </div><!-- .posted-date -->
                            </figure><!-- .event-thumbnail -->

                            <header class="entry-header flex flex-wrap align-items-center">
                                <h2 class="entry-title"><a href="#">The complete Mentorship program of every three
                                        months</a></h2>

                                <div class="event-location"><i class="fa fa-map-marker"></i>@ Life Church Kakata</div>

                                <div class="event-duration"><i class="fa fa-calendar"></i>Last Saturday every three
                                    months</div>
                            </header><!-- .entry-header -->
                        </div><!-- .featured-event-content -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                        <div class="event-content flex flex-wrap justify-content-between align-content-stretch">
                            <figure class="event-thumbnail">
                                <a href="#"><img src="assets/images/1.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="event-content-wrap">
                                <header class="entry-header">
                                    <div class="posted-date">
                                        <i class="fa fa-calendar"></i> 22 Mar 2024
                                    </div><!-- .posted-date -->

                                    <h2 class="entry-title"><a href="#">Personalized online learning experience</a></h2>

                                    <div class="entry-meta flex flex-wrap align-items-center">
                                        <div class="post-author"><a href="#">Mrs.Sarah Konnah </a></div>

                                        <div class="post-comments">23 Comments </div>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p>Have a Personal online learning experience, where you can send your Comments.</p>
                                </div><!-- .entry-content -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-content -->

                        <div class="event-content flex flex-wrap justify-content-between align-content-lg-stretch">
                            <figure class="event-thumbnail">
                                <a href="#"><img src="assets/images/2.jpg" alt=""></a>
                            </figure><!-- .course-thumbnail -->

                            <div class="event-content-wrap">
                                <header class="entry-header">
                                    <div class="posted-date">
                                        <i class="fa fa-calendar"></i> 21 June 2023
                                    </div><!-- .posted-date -->

                                    <h2 class="entry-title"><a href="#">How can I enroll as student?</a></h2>

                                    <div class="entry-meta flex flex-wrap align-items-center">
                                        <div class="post-author"><a href="#">Mr. Lawrance Claire</a></div>

                                        <div class="post-comments">02 Comments </div>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p>You can always contact our admission office for more details.</p>
                                </div><!-- .entry-content -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-content -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </section><!-- .latest-news-events -->

        <!-- Services Section starts here-->




        <!-- Services Section Ends here -->


        <!-- Footer starts here -->
        <footer>
            <!--? Footer Start-->
            <div class="footer-area section-bg" data-background="assets/images/footer_bg.jpg" style="margin-top: -70px;">
                <div class="container">
                    <div class="footer-top footer-padding">
                        <div class="row d-flex justify-content-between">
                            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <!-- logo -->
                                    <div class="footer-logo">
                                        <a href="index.html"><img src="assets/images/logo_footer.png" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p class="info1">Receive updates and latest news direct from Simply enter.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="footer-number">
                                        <h4><span>+564 </span>7885 3222</h4>
                                        <p>kessieprince9@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Location </h4>
                                        <ul>
                                            <li><a href="#">Advanced</a></li>
                                            <li><a href="#"> Management</a></li>
                                            <li><a href="#">Corporate</a></li>
                                            <li><a href="#">Customer</a></li>
                                            <li><a href="#">Information</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Explore</h4>
                                        <ul>
                                            <li><a href="#">Cookies</a></li>
                                            <li><a href="#">About</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Proparties</a></li>
                                            <li><a href="#">Licenses</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                                <div class="single-footer-caption mb-50">
                                    <div class="footer-tittle">
                                        <h4>Location</h4>
                                        <div class="footer-pera">
                                            <p class="info1">Subscribe now to get daily updates</p>
                                        </div>
                                    </div>
                                    <!-- Form -->
                                    <div class="footer-form">
                                        <div id="mc_embed_signup">
                                            <form target="_blank"
                                                action="includes/client_subscribe2.inc.php"
                                                method="POST" class="subscribe_form relative mail_part"
                                                >
                                                <input type="email" name="email" id="" required
                                                placeholder = "Your email address" >
                                                  
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit"  required
                                                        class="email_icon newsletter-submit button-contactForm">
                                                        Subscribe
                                                    </button>
                                                </div>
                                                <div class="mt-10 info"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-bottom">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-xl-9 col-lg-8">
                                <div class="footer-copy-right">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                        This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a
                                            href="https://colorlib.com" target="_blank">Prince E. Kessie</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <!-- Footer Social -->
                                <div class="footer-social f-right">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </footer>
    </main><!--  -->
    <!--    JavaScripts-->
    <!--    =============================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/lib/jquery-menu-aim/jquery.menu-aim.js"></script>
    <script src="assets/lib/gsap/src/minified/TweenMax.min.js"></script>
    <script src="assets/lib/gsap/src/minified/plugins/ScrollToPlugin.min.js"></script>
    <script src="assets/lib/CustomEase.min.js"></script>
    <script src="assets/js/config.js"></script>
    <script src="assets/lib/rellax/rellax.min.js"></script>
    <script src="assets/js/zanimation.js"></script>
    <script src="assets/js/inertia.js"></script><!-- Hotjar Tracking Code for http://markup.themewagon.com/tryfreya/-->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 731669,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script><!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-76729372-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-76729372-6');
    </script>
    <script src="assets/lib/flexslider/jquery.flexslider-min.js"></script>
    <script src="assets/js/core.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Another js here -->
    <script type='text/javascript' src='assets/js/jquery.js'></script>
    <script type='text/javascript' src='assets/js/swiper.min.js'></script>
    <script type='text/javascript' src='assets/js/masonry.pkgd.min.js'></script>
    <script type='text/javascript' src='assets/js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='assets/js/custom.js'></script>
</body>
<!-- Mirrored from markup.themewagon.com/tryfreya/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 12:49:25 GMT -->

</html>