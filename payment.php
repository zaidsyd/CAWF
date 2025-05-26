<?php
$id = $_GET['id'] ?? 'N/A';
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>CAWF | Registration</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/cawf-logo-1.jpg" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i"
        rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--== Font-awesome Icons CSS ==-->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--== Icofont Min Icons CSS ==-->
    <link href="assets/css/icofont.min.css" rel="stylesheet" />
    <!--== lastudioIcons CSS ==-->
    <link href="assets/css/lastudioIcons.css" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="assets/css/animate.css" rel="stylesheet" />
    <!--== Aos CSS ==-->
    <link href="assets/css/aos.css" rel="stylesheet" />
    <!--== FancyBox CSS ==-->
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet" />
    <!--== Slicknav CSS ==-->
    <link href="assets/css/slicknav.css" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="assets/css/swiper.min.css" rel="stylesheet" />
    <!--== Slick CSS ==-->
    <link href="assets/css/slick.css" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <style>
        .contact-form .contact-form-wrapper .form-group .form-control {
            border-radius: 10px;
        }

        .sticky-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            border-top: 1px solid #ddd;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .demo-btn {
            flex: 1;
            height: 100%;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            cursor: pointer;
            background: linear-gradient(to right, #a64637, #e78d6d);
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        select {
            background-image: url("data:image/svg+xml;utf8,<svg fill='gray' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/></svg>");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 2rem;
            padding-right: 2rem;
        }

        .header-logo-area .logo-main {
            height: 108px;
            width: 84px;
            object-fit: contain;
        }

        .header-area.header-default .header-navigation-area .main-menu {
            margin-left: 0px !important;
        }

        .header-area.sticky-header.sticky.header-style5 .header-logo-area .logo-light {
            height: 108px;
            width: 84px;
            object-fit: contain;

        }

        .header-area.header-default.header-style5 .header-logo-area img {

            height: 108px;
            width: 84px;
            object-fit: contain;
            padding-top: 5px;
            padding-bottom: 2px;


        }

        .footer-area.footer-style6 .footer-main .footer-logo-area a .logo-main {
            height: 120px;
            width: 118px;
            object-fit: contain;

        }

        .blog-area.blog-default-area {
            padding-bottom: 10px;
        }

        .category-area.category-style9-area {
            margin-top: 5rem;
        }

        .text-justify {
            text-align: justify;
        }

        /* .header-area.header-default .header-action-area .btn-menu{
            color:white;
        } */
        @media only screen and (max-width: 1199px) {
            .header-area.header-default .container-fluid {
                padding: 0px 9px;
            }

            .header-area.header-default.header-style5 .header-logo-area img {
                padding-top: 10px;
                padding-bottom: 14px;
            }
        }

        @media (max-width: 768px) {

            .phone-link,
            .demo-btn {
                font-size: 0.9rem;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        }

        @media screen and (min-width: 768px) {
            .res-dd-none {
                display: none !important;
            }
        }

        .phone-link {
            flex: 1;
            text-decoration: none;
            color: #a64637;
            font-size: 1rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            height: 100%;
            background-color: white;
        }

        .contact-area {
            background: #c0996f42;
        }
    </style>


</head>

<body>

    <!--wrapper start-->
    <div class="wrapper">

        <!--== Start Header Wrapper ==-->
        <?php
        include('header.php');
        ?>
        <!--== End Header Wrapper ==-->

        <main class="main-content">
            <!--== Start Page Title Area ==-->
            <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page3.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="page-title-content">
                                <h2 class="title">Payment</h2>
                                <div class="bread-crumbs"><a href="index.html">Home<span
                                            class="breadcrumb-sep">></span></a><span class="active">Payment</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Page Title Area ==-->

            <!--== Start Contact Area ==-->
            <section class="contact-area">
                <div class="container">

                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-8">
                            <div class="card  p-5 rounded text-center">

                                <!-- QR Code Image -->
                                <div class="mb-4">
                                    <img src="assets/img/qr.png" alt="QR Code" class="img-fluid"
                                        style="max-width: 250px;">
                                </div>

                                <h4 class="text-dark mb-4">Scan the QR Code for Payment</h4>

                                <!-- Upload Payment Screenshot Card -->
                                <div class="card mt-5 shadow-sm" style="height:290px">

                                    <div class="card-body p-4 mt-4">
                                        <form action="upload_payment.php" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3 text-start">
                                                <input type="hidden" class="form-control" name="id"
                                                    value="<?php echo urlencode($id); ?>" readonly>


                                                <label for="qr_image" class="form-label">

                                                    Upload Payment Screenshot <span class="text-danger">*</span>
                                                </label>
                                                <input type="file" class="form-control mt-2 mb-5" id="qr_image"
                                                    name="qr_image" accept="image/*" required>

                                            </div>

                                            <div class="d-grid mt-5">
                                                <button type="submit" class="btn btn-success btn-lg">
                                                    <i class="fas fa-upload me-2"></i> Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <!--== End Contact Area ==-->


        </main>

        <!--== Start Footer Area Wrapper ==-->
        <?php
        include('footer.php');
        ?>
        <!--== End Footer Area Wrapper ==-->


        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="icofont-arrow-up"></span></div>


        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay d-none"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-close"><i class="icofont-close-line"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                    <!-- Off Canvas Footer -->
                    <div class="off-canvas-footer"></div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>

    <!--=======================Javascript============================-->

    <!--=== Modernizr Min Js ===-->
    <script src="assets/js/modernizr.js"></script>
    <!--=== jQuery Min Js ===-->
    <script src="assets/js/jquery-main.js"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="assets/js/jquery-migrate.js"></script>
    <!--=== Popper Min Js ===-->
    <script src="assets/js/popper.min.js"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--=== jquery Appear Js ===-->
    <script src="assets/js/jquery.appear.js"></script>
    <!--=== jquery Swiper Min Js ===-->
    <script src="assets/js/swiper.min.js"></script>
    <!--=== jquery Fancybox Min Js ===-->
    <script src="assets/js/fancybox.min.js"></script>
    <!--=== jquery Aos Min Js ===-->
    <script src="assets/js/aos.min.js"></script>
    <!--=== jquery Slicknav Js ===-->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!--=== jquery Countdown Js ===-->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!--=== jquery Tippy Js ===-->
    <script src="assets/js/tippy.all.min.js"></script>
    <!--=== Isotope Min Js ===-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--=== jquery Vivus Js ===-->
    <script src="assets/js/vivus.js"></script>
    <!--=== Parallax Min Js ===-->
    <script src="assets/js/parallax.min.js"></script>
    <!--=== Slick  Min Js ===-->
    <script src="assets/js/slick.min.js"></script>
    <!--=== jquery Wow Min Js ===-->
    <script src="assets/js/wow.min.js"></script>
    <!--=== jquery Zoom Min Js ===-->
    <script src="assets/js/jquery-zoom.min.js"></script>

    <!--=== Custom Js ===-->
    <script src="assets/js/custom.js"></script>
    <div class="sticky-footer res-dd-none">
        <!-- Left Section: Phone Number -->
        <a href="https://wa.me/919555584040" class="phone-link" target="_blank">
            <img width="25" height="25" src="https://img.icons8.com/sf-black-filled/64/a64637/whatsapp.png"
                alt="whatsapp" />
            +91 9555584040
        </a>
        <!-- Right Section: Request a Demo Button -->
        <a class="demo-btn" href="contact.html">Contact Us</a>
    </div>

</body>

</html>