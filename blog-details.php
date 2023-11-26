<?php
session_start();
$url = "http://localhost/cdm_church/";
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  --><!--    Document Title--><!-- =============================================-->
    <title>Christ's Disciples Movement</title>
    <!--  --><!--    Favicons--><!--    =============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicons/favicon.ico">
    <link rel="manifest" href="assets/images/favicons/manifest.html">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileImage" content="assets/images/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <!--  --><!--    Stylesheets--><!--    =============================================--><!-- Default stylesheets-->
    <link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"><!-- Template specific stylesheets-->
    <link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600" rel="stylesheet">
    <link href="assets/lib/iconsmind/iconsmind.css" rel="stylesheet">
    <link href="../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
    <link href="assets/lib/hamburgers/dist/hamburgers.min.css" rel="stylesheet">
    <link href="assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Main stylesheet and color file-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- blog css2-->
    <link rel="stylesheet" href="assets/css2/vendor.css">
    <link rel="stylesheet" href="assets/css2/style.css">
    <link rel="stylesheet" href="assets/css2/responsive.css">
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
                            <li><a href="<?= $url ?>">Home</a></li>

                            <li><a href="<?= $url ?>about">About</a></li>
                            <li><a href="<?= $url ?>services">Services</a></li>
                            <li><a href="<?= $url ?>contact">Contact</a></li>
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
        <section class="py-9 overflow-hidden text-center">
            <div class="background-holder overlay overlay-1 parallax"
                style="background-image:url(assets/images/contact1.png);"></div><!--/.background-holder-->
            <div class="container">
                <div class="row" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col">
                        <div class="overflow-hidden">
                            <h1 class="fs-5 fs-sm-6 color-white mb-3" data-zanim='{"delay":0}'>Blog two</h1>
                        </div>
                        <div class="overflow-hidden">
                            <p class="fs-2 fw-300 ls color-8 text-uppercase" data-zanim='{"delay":0.1}'>For more details
                            </p>
                        </div>
                    </div>
                </div><!--/.row-->
            </div><!--/.container-->
        </section>

        <div class="blog-page-area pd-bottom-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 pd-top-50">
                        <div class="blog-details-page-inner">
                            <div class="single-blog-inner m-0">
                                <div class="single-post-wrap style-overlay">
                                    <div class="thumb">
                                        <img src="assets/images/4.png" alt="img">
                                    </div>
                                    <div class="details pb-4">
                                        <div class="post-meta-single mb-2">
                                            <ul>
                                                <li><a class="tag-base tag-blue" href="#">Tech</a></li>
                                                <li>
                                                    <p><i class="fa fa-clock-o"></i>08.22.2020</p>
                                                </li>
                                                <li><i class="fa fa-user"></i>R. Lambert</li>
                                            </ul>
                                        </div>
                                        <h5 class="title mt-0">Uttarakhand’s Hemkund Sahib yatra to start from</h5>
                                    </div>
                                </div>
                                <div class="single-blog-details">
                                    <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in in
                                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                                        id est laborum. Sed ut unde omnis iste natus error sit voluptatem, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                        aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                        ratione sequi nesciunt Neque por quisquam est</p>
                                    <blockquote class="blockquote">
                                        <i class="fa fa-quote-right"></i>
                                        <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud ullamco
                                            laboris nisi ut aliquip ex ea commodo. Duis aute irure dolor in in voluptate
                                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                            cupidatat non </p>
                                    </blockquote>
                                </div>
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                    because those who do not know how to pursue pleasure rationally encounter
                                    consequences that are extremely painful. Nor again is there anyone who loves or
                                    pursues or desires to obtain pain of itself, because it is pain, but because
                                    occasionally circumstances occur in which toil and pain can procure him some great
                                    pleasure.</p>
                                <div class="add-area">
                                    <a href="#"><img src="assets/images/2.png" alt="img"></a>
                                </div>
                                <h5>Expression in New Human Rights Policy</h5>
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                    because those who do not know how to pursue pleasure rationally encounter
                                    consequences that are extremely painful. Nor again is there anyone who loves or
                                    pursues or desires to obtain pain of itself, because it is pain, but because
                                    occasionally circumstances occur in which toil and pain can procure him some great
                                    pleasure.</p>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="thumb mb-3 mb-sm-0">
                                            <img src="assets/images/5.png" alt="img">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <img src="assets/images/5.png" alt="img">
                                    </div>
                                </div>
                                <div class="video-area">
                                    <h5>Expression in New Human Rights Policy</h5>
                                    <div class="single-blog-inner mb-4">
                                        <div class="thumb">
                                            <img src="assets/images/4.png" alt="image">
                                            <a class="video-play-btn" href="https://www.youtube.com/embed/Wimkqo8gDZ0"
                                                data-effect="mfp-zoom-in"><i class="fa fa-play"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but
                                    because those who do not know how to pursue pleasure rationally encounter
                                    consequences that are extremely painful. Nor again is there anyone who loves or
                                    pursues or desires to obtain pain of itself, because it is pain, but because
                                    occasionally circumstances occur in which toil and pain can procure him some great
                                    pleasure.</p>
                                <div class="meta">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <div class="tags">
                                                <span>Tags:</span>
                                                <a href="#">News,</a>
                                                <a href="#">Blog,</a>
                                                <a href="#">Magazine</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 text-md-right">
                                            <div class="blog-share">
                                                <span>Share:</span>
                                                <ul class="social-area social-area-2 d-inline">
                                                    <li><a class="facebook-icon" href="#"><i
                                                                class="fa fa-facebook"></i></a></li>
                                                    <li><a class="twitter-icon" href="#"><i
                                                                class="fa fa-twitter"></i></a></li>
                                                    <li><a class="youtube-icon" href="#"><i
                                                                class="fa fa-youtube-play"></i></a></li>
                                                    <li><a class="instagram-icon" href="#"><i
                                                                class="fa fa-instagram"></i></a></li>
                                                    <li><a class="google-icon" href="#"><i
                                                                class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="author-area">
                                    <div class="media">
                                        <img src="assets/images/num.png" alt="img">
                                        <div class="media-body align-self-center">
                                            <h4>Nathan George</h4>
                                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is
                                                pleasure, but because those who do not know how to pursue pleasure
                                                rationally encounter consequences that aextremely painful. Nor again is
                                                there anyone who loves</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="related-post">
                                <div class="section-title mb-0">
                                    <h5 class="mb-0">Related Post</h5>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-post-wrap">
                                            <div class="thumb">
                                                <img src="assets/images/3.png" alt="img">
                                                <a class="tag-base tag-red" href="#">Tech</a>
                                            </div>
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        <li><i class="fa fa-user"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title mt-2"><a href="#">Lifting Weights Makes Your
                                                        Nervous</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-post-wrap">
                                            <div class="thumb">
                                                <img src="assets/images/3.png" alt="img">
                                                <a class="tag-base tag-blue" href="#">Tech</a>
                                            </div>
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        <li><i class="fa fa-user"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title mt-2"><a href="#">New, Remote Weight-Loss Method </a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="single-post-wrap">
                                            <div class="thumb">
                                                <img src="assets/images/3.png" alt="img">
                                                <a class="tag-base tag-light-green" href="#">Tech</a>
                                            </div>
                                            <div class="details">
                                                <div class="post-meta-single">
                                                    <ul>
                                                        <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                        <li><i class="fa fa-user"></i>08.22.2020</li>
                                                    </ul>
                                                </div>
                                                <h6 class="title mt-2"><a href="#">Social Connection Boosts Fitness App
                                                    </a></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment">
                                <div class="section-title">
                                    <h4>3 Comments</h4>
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img src="assets/images/num2.png" alt="comment">
                                    </a>
                                    <div class="media-body">
                                        <h5><a href="#">John F. Medina</a></h5>
                                        <span class="date">25 July 2020</span>
                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure
                                            and praising pawas born and I will give you a complete account</p>
                                        <a href="#">Reply <i class="la la-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="media nesting">
                                    <a href="#">
                                        <img src="assets/images/num2.png" alt="comment">
                                    </a>
                                    <div class="media-body">
                                        <h5><a href="#">Jeffrey T. Kelly</a></h5>
                                        <span class="date">25 July 2020</span>
                                        <p>Again is there anyone who loves or pursues or desires to obtain paiits ecause
                                            it is pain, but because occasionally circumstances occur in which</p>
                                        <a href="#">Reply <i class="la la-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="media">
                                    <a href="#">
                                        <img src="assets/images/num2.png" alt="comment">
                                    </a>
                                    <div class="media-body">
                                        <h5><a href="#">Richard B. Zellmer</a></h5>
                                        <span class="date">25 July 2020</span>
                                        <p>Harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                                            cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod
                                            maxime</p>
                                        <a href="#">Reply <i class="la la-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form">
                                <div class="section-title mb-0">
                                    <h4 class="mb-0">Leave A Comment</h4>
                                </div>
                                <form class="contact-form-wrap">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-input-wrap input-group">
                                                <input type="text" class="form-control" placeholder="Your Full Name" autofocus required>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-input-wrap input-group">
                                                <input type="text" class="form-control" placeholder="Your Email" autofocus required>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input-wrap message input-group">
                                                <textarea class="form-control" rows="4" name="note"
                                                    placeholder="Write Message" autofocus required></textarea>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-pencil"></i></div>
                                                </div>
                                            </div>
                                            <div class="submit-area">
                                                <button type="submit" class="btn btn-base">Post Comment</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pd-top-50">
                        <div class="category-sitebar">
                            <div class="widget widget-category">
                                <h6 class="widget-title">Category</h6>
                                <div class="row custom-gutters-14">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single-category-inner">
                                            <img src="assets/images/1.png" alt="img">
                                            <a class="tag-base tag-blue" href="#">Tech</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget widget-add">
                                <div class="add">
                                    <img class="w-100" src="assets/images/1.png" alt="img">
                                </div>
                            </div>
                            <div class="widget widget-social">
                                <h6 class="widget-title">Join to Us</h6>
                                <ul class="social-area social-area-2">
                                    <li><a class="facebook-icon" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="twitter-icon" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="youtube-icon" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="instagram-icon" href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a class="google-icon" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>

                            <div class="widget">
                                <div class="nxp-tab-inner nxp-tab-post-two mb-4">
                                    <ul class="nav nav-tabs" id="nx1" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="nx1-tab-1" data-toggle="pill"
                                                href="#nx1-tabs-1" role="tab" aria-selected="true">
                                                Recent
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="nx1-tab-2" data-toggle="pill" href="#nx1-tabs-2"
                                                role="tab" aria-selected="false">
                                                Populer
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="nx1-tab-3" data-toggle="pill" href="#nx1-tabs-3"
                                                role="tab" aria-selected="false">
                                                Comment
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="nx1-content">
                                    <div class="tab-pane fade show active" id="nx1-tabs-1" role="tabpanel">
                                        <div class="single-post-list-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Himachal Pradesh
                                                                rules in order to allow tourists </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-list-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Online
                                                                registration, booking for Vaishno Devi </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-list-wrap mb-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Detecting
                                                                technologies in airports this year</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nx1-tabs-2" role="tabpanel">
                                        <div class="single-post-list-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Online
                                                                registration, booking for Vaishno Devi </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-list-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Detecting
                                                                technologies in airports this year</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-list-wrap mb-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Detecting
                                                                technologies in airports this year</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="nx1-tabs-3" role="tabpanel">
                                        <div class="single-post-list-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Online
                                                                registration, booking for Vaishno Devi </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-list-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Online
                                                                registration, booking for Vaishno Devi </a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-post-list-wrap mb-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/6.png" alt="img">
                                                </div>
                                                <div class="media-body">
                                                    <div class="details">
                                                        <div class="post-meta-single">
                                                            <ul>
                                                                <li><i class="fa fa-clock-o"></i>08.22.2020</li>
                                                            </ul>
                                                        </div>
                                                        <h6 class="title"><a href="blog-details.html">Detecting
                                                                technologies in airports this year</a></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget">
                                <form class="single-newsletter-inner bg-blue text-center">
                                    <h5>Newsletter</h5>
                                    <p>Stay Updated on all that's new add noteworthy</p>
                                    <div class="single-input-inner">
                                        <input type="text" placeholder="Enter Your Name">
                                    </div>
                                    <div class="single-input-inner">
                                        <input type="text" placeholder="Enter Your Email">
                                    </div>
                                    <a class="btn btn-white w-100" href="#">Subscribe Now</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <!--? Footer Start-->
            <div class="footer-area section-bg" data-background="assets/images/footer_bg.jpg">
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
                                        <p>youremail@gmail.com</p>
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
                                                novalidate="true">
                                                <input type="email" name="email" id="newsletter-form-email"
                                                    
                                                    onblur="this.placeholder = 'Your email address'">
                                                  
                                                <div class="form-icon">
                                                    <button type="submit" name="submit" id="newsletter-submit"
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
    </main>
    <!--  -->


    <!--    JavaScripts--><!--    =============================================-->
    <script src="../../cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script src="assets/lib/jquery/dist/jquery.min.js"></script>
    <script src="../../cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
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
    <script>(function (h, o, t, j, a, r) {
            h.hj = h.hj || function () { (h.hj.q = h.hj.q || []).push(arguments) };
            h._hjSettings = { hjid: 731669, hjsv: 6 };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script'); r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

    </script><!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-76729372-6"></script>
    <script>window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-76729372-6');
    </script>
    <script src="assets/js/googlemap.js"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoK8GIrOHzHwnzHCyqrdtmTpUWcdrTTD8&amp;callback=initMap"
        async></script>
    <script src="assets/js/core.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- blog css2 js -->
    <script src="assets/js/vendor.js"></script>
    <!-- main js  -->
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from markup.themewagon.com/tryfreya/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Dec 2021 12:50:01 GMT -->

</html>