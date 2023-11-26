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
                            style="background-image:url(assets/images/contact1.png);">

                            <div class="col mt-4">
                                <div class="overflow-hidden ">
                                    <h1 class="fs-5 fs-sm-6 color-white mb-3" data-zanim='{"delay":0}'
                                        style="margin-top: 160px">Contact Us</h1>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="fs-2 fw-300 ls color-10 text-uppercase" data-zanim='{"delay":0.1}'>We're
                                        Here for
                                        You</p>
                                </div>
                            </div>
                        </div>
                        <!--/.background-holder-->
                        <div class="container">
                            <div class="row justify-content-start align-items-end pt-11 pb-6 h-full"
                                data-zanim-timeline="{}">
                                <div class="col pb-lg-0">
                                    <div class="row align-items-end parallax" data-rellax-speed="2">

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

        <!--form begins-->
        <section class="">
            <div class="contact-area default-padding" style="background-color:white;">
                <div class="container">
                    <div class="row align-center">

                        <div class="col-tact-stye-one col-lg-7 mb-md-50 mt-4" style="background-color:gray; height: 600px;">
                            <div class="contact-form-style-one mt-6" style="">
                                <h5 class="sub-title"><span style="color:green;">Have Questions?</span></h5>
                                <h2 class="heading">Send us a Massage</h2>

                                <form action="includes/contact_inc.php" method="POST" class="contact-form contact-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="form-control" id="name" name="name" placeholder="Fullname"
                                                    type="text"  required>
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" id="email" name="email" placeholder="Email"
                                                    type="email"  required>
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" id="phone" name="contact" placeholder="Contact"
                                                    type="text"  required>
                                                <span class="alert-error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group comments">
                                                <textarea class="form-control" id="comments" name="comment"
                                                required placeholder="Comment"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" name="submit" id="submit" class="btn btn-primary">Get in Touch
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Alert Message -->
                                    <div class="col-lg-12 alert-notification">
                                        <div id="message" class="alert-msg"></div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-tact-stye-one col-lg-5 pl-60 pl-md-15 pl-xs-15 mt-4"
                            style="background-color:lightblue;">
                            <div class="contact-style-one-info mt-6">
                                <h2>
                                    Contact
                                    Information


                                </h2>
                                <p>
                                Our Helpline is open 24 hours a day, seven days a week. <br>
                                If you need prayer, please don't hestitake to call our prayer Helpline; don't live 
                                life alone, we are here to walk with you <br> in the faith.
                                </p>
                                <ul>
                                    <li class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                        <div class="icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><span style="color:green;">Helpline</span></h5>
                                            <a href="">(+231) 775358075</a>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="300ms"
                                        style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="info">
                                            <h5 class="title"><span style="color:green;">Our Location</span></h5>
                                            <p>
                                                World bank community, Kakata city <br> Margibi county, Liberia
                                            </p>
                                        </div>
                                    </li>
                                    <li class="wow fadeInUp" data-wow-delay="500ms"
                                        style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                                        <div class="icon">
                                            <i class="fas fa-envelope-open-text"></i>
                                        </div>
                                        <div class="info">
                                            <h5 class="title"><span style="color:green;">Official Email</span></h5>
                                            <a href="mailto:info@agrul.com.com">kessieprince9@gmail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




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