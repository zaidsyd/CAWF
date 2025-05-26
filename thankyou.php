<?php
session_start();
$name = $_SESSION['thank_you_name'] ?? '';
$form_number = $_SESSION['thank_you_form_number'] ?? 'N/A';
$id = $_SESSION['id'] ?? 0;
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

    .mini-note {
        background-color: #fff3cd;
        color: #856404;
        padding: 7px;
        margin-top: 30px;
        border-left: 4px solid #ffc107;
        border-radius: 8px;
        font-size: 15px;
        animation: fadeInUp 0.6s ease-in-out;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .thank-you-buttons .btn-success:hover {
        background-color: #218838;
        transform: translateY(-3px);
    }

    .thank-you-buttons .btn-primary:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
    }

    .check-icon {
        animation: bounceUpDown 1.5s infinite;
        color: #28a745;
        font-size: 60px;
    }

    @keyframes bounceUpDown {

        0%,
        100% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-10px);
        }
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
                                <h2 class="title">Registration Form</h2>
                                <div class="bread-crumbs"><a href="index.html">Home<span
                                            class="breadcrumb-sep">></span></a><span class="active">Registration
                                        Form</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--== End Page Title Area ==-->

            <!--== Start Contact Area ==-->
            <section class="contact-area" style="background-image:url('https://img.freepik.com/free-vector/elegant-hexagonal-line-pattern_1017-20892.jpg?t=st=1748247884~exp=1748251484~hmac=26292c666d9e759f13c22e2e3ae2bdf1afea54426185c5fa2c69c17813703e40&w=1380')">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center p-4">
                            <div class="card" style="padding:15px;box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;">
                                <div class="mb-2 check-icon">
                                    <i class="fas fa-check-circle text-success" style="font-size: 60px;"
                                        aria-hidden="true"></i>
                                </div>
                                <h1 class="text-success mb-3 fw-bold">Thank You!</h1>
                                <h4 class="text-dark ">Your form has been submitted successfully.</h4>

                                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap mt-3">
                                    <h5 class="m-0 mb-2">
                                        <strong>User Name: </strong> <?php echo htmlspecialchars($name); ?>
                                    </h5>
                                    <h5 class="m-0">
                                        <strong>Form Number: </strong> <?php echo htmlspecialchars($form_number); ?>
                                    </h5>

                                </div>

                                <div class="d-flex flex-column flex-sm-row justify-content-center gap-2 ">
                                    <a href="download.php?form=<?php echo urlencode($_SESSION['thank_you_form_number']); ?>"
                                        class="btn btn-primary">
                                        <i class="fas fa-download" aria-hidden="true"></i> Download Form
                                    </a>
                                    <a href="payment.php?id=<?php echo urlencode($id); ?>" class="btn btn-success">
                                        Proceed To Payment <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                    </a>


                                </div>
                                <div class="mini-note">
                                    <strong>Note:</strong> Please complete your registration by making the payment.
                                    After successful payment, our team will review your form and confirm your
                                    registration.
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
    <script>
    // Get query params
    const params = new URLSearchParams(window.location.search);
    const formNumber = params.get('formNumber');

    if (formNumber) {
        document.getElementById('formNumber').textContent = formNumber;
    } else {
        document.getElementById('formNumber').textContent = 'Not Available';
    }
    </script>

</body>

</html>