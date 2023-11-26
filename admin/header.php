<?php 

    $url ='http://localhost/cdm_church/';
    session_start();
    include_once '../includes/conn.inc.php';
    include_once '../includes/fetch_data.inc.php';
    if(!empty($_SESSION['user'])){
        header('location: ../admin/login');        
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>CDM | Dashboard</title>
    <!-- loader-->
    <link href="../assets/admin-assets/css/pace.min.css" rel="stylesheet" />
    <!-- <script src="../assets/admin-assets/js/pace.min.js"></script> -->
    <!--favicon-->
    <link rel="icon" href="../assets/admin-assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../assets/admin-assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../assets/admin-assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../assets/admin-assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../assets/admin-assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../assets/admin-assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../assets/admin-assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../assets/admin-assets/css/app-style.css" rel="stylesheet" />

</head>

<body class="bg-theme bg-theme1">

    <!-- Start wrapper-->
    <div id="wrapper">

        <!--Start sidebar-wrapper-->
        <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
            <div class="brand-logo">
                <a href="index.html">
                    <img src="../assets/admin-assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                    <h5 class="logo-text">CDM Admin Dashboard</h5>
                </a>
            </div>
            <ul class="sidebar-menu do-nicescrol">
                <li class="sidebar-header">MAIN NAVIGATION</li>
                <li>
                    <a href="<?= $url ?>admin">
                        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/add_tag">
                        <i class="zmdi zmdi-plus"></i> <span>Add tags</span>
                        <small class="badge float-right badge-light">Add</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/tag_table">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Tags</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/add_author">
                        <i class="zmdi zmdi-plus"></i> <span>Add Authors</span>
                        <small class="badge float-right badge-light">Add</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/author_table">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Authors</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/add_blog">
                        <i class="zmdi zmdi-plus"></i> <span>Add Blogs</span>
                        <small class="badge float-right badge-light">Add</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/clients_contact_table">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Contact</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/client_subscribe_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Subscribe</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
                <li>
                    <a href="<?= $url ?>admin/client_subscribe2_table.php">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Subscribe2</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>

                <li>
                    <a href="<?= $url ?>admin/client_signin_table">
                        <i class="zmdi zmdi-format-list-bulleted"></i> <span>Clients Signin</span>
                        <small class="badge float-right badge-light">View</small>
                    </a>
                </li>
            </ul>

        </div>
        <!--End sidebar-wrapper-->

        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <form class="search-bar">
                            <input type="text" class="form-control" placeholder="Enter keywords">
                            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                        </form>
                    </li>
                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>
                    <li class="nav-item dropdown-lg">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-bell-o"></i></a>
                    </li>
                    <li class="nav-item language">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();"><i class="fa fa-flag"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
                            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                            <span class="user-profile"><img src="../assets/images/chin.jpg" class="img-circle"
                                    alt="user avatar"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="../assets/images/chin.jpg" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Prince E. Kessie</h6>
                                            <p class="user-subtitle">kessieprince9@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i><a href="<?= $url ?>admin/login"> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->