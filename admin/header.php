<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="icon" type="image/png" href="./assets/img/logo.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->


    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">
                        <img src="./assets/img/logo.png" alt="" width="80px;" height="60px">
                    </span>
                    <span class="brand-mini"> <img src="./assets/img/logo.png" alt="" width="80px;"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/logo.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item" href="logout"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active mt-5" href="index"><i class="sidebar-item-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/glyph-neue/50/FFFFFF/speed.png" alt="speed" /></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-3">
                        <a href="javascript:;"><i class="sidebar-item-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/sf-black/64/FFFFFF/gallery.png" /></i>
                            <span class="nav-label">Pop Up Image</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_popup"> Add New Pop Up Image </a>
                            </li>
                            <li>
                                <a href="popup_list"> Pop Up Image List</a>
                            </li>
                        </ul>
                    </li>
                    <li class="mt-3">
                        <a href="javascript:;"><i class="sidebar-item-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/24/FFFFFF/external-honorary-mentions-of-great-soldiers-in-a-flag-badges-bold-tal-revivo.png" /></i>
                            <span class="nav-label">Banners</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_banner"> Add New Banner </a>
                            </li>
                            <li>
                                <a href="banner_list"> Banner List</a>
                            </li>
                        </ul>
                    </li>

                    <li class="mt-3">
                        <a href="javascript:;"><i class="sidebar-item-icon"><img width="35" height="35"
                                    src="https://img.icons8.com/sf-black/64/FFFFFF/gallery.png" alt="gallery" /></i>
                            <span class="nav-label">Gallery</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_gallery"> Add Gallery </a>
                            </li>
                            <li>
                                <a href="gallery_list"> gallery List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="registration_list"><i class="sidebar-item-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/ios-filled/50/FFFFFF/parse-from-clipboard.png"
                                    alt="ask-question" /></i>
                            <span class="nav-label">Registration List</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="donationlist"><i class="sidebar-item-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/ios-filled/50/FFFFFF/get-cash.png"
                                    alt="ask-question" /></i>
                            <span class="nav-label">Donation List</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="querylist"><i class="sidebar-item-icon"><img width="30" height="30"
                                    src="https://img.icons8.com/ios-filled/50/FFFFFF/ask-question.png"
                                    alt="ask-question" /></i>
                            <span class="nav-label">Query List</span>
                        </a>
                    </li>

                </ul>
            </div>
        </nav>