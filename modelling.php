<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CAWF| Modelling</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/cawf-logo-1.jpg" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,700,900,900i" rel="stylesheet">

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
  <style>
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

    .text-justify {
      text-align: justify;
    }

    .collection-slider-area {
      margin-bottom: 100px;
    }

    .category-area.category-style7-area .col-right .content .inner-content p {
      font-size: 1rem;
    }

    .divider-area.divider-about-area-style2 .divider-about-content p {
      font-size: 1rem;
    }

    .category-area.category-style7-area .col-right .content .inner-content .title {
      font-size: 60px;
    }

    .contact-area.contact-about-area .container-fluid .col-left .section-title p {
      color: #fff;
      font-size: 18px;
      font-weight: 400;
      line-height: 1.8;
      width: 378px;
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
        padding: 0px 30px;
      }

      .header-area.header-default.header-style5 .header-logo-area img {
        padding-top: 10px;
        padding-bottom: 14px;
      }
    }

    @media only screen and (max-width: 767px) {
      .category-area.category-style7-area .col-right .content .inner-content .title {
        font-size: 30px !important;
        margin: 0 0 20px 0;
      }
    }

    .home-five-wrapper .header-area.header-default.header-style5.sticky-header.sticky .header-action-area .btn-menu i {
      color: #333;
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
  </style>


</head>

<body>

  <!--wrapper start-->
  <div class="wrapper page-about-wrapper">

    <!--== Start Header Wrapper ==-->
    <?php
    include('header.php');
    ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
      <!--== Start Page Title Area ==-->
      <section class="page-title-area bg-img bg-overlay-black2-5 bg-parallax" data-speed="1.1"
        data-bg-img="assets/img/photos/bg-page2.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title-content content-style2">
                <h2 class="title">Modelling</h2>
                <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span
                    class="active">Modelling</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->
      <!--== Start Collection Slider Area Wrapper ==-->
      <section class="collection-slider-area">
        <div class="collection-slider-content">
          <div class="swiper-container collection-slider-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <!-- Start Slide Item -->
                <div class="slider-item">
                  <div class="thumb">
                    <div class="bg-thumb bg-overlay bg-img" data-bg-img="assets/img/slider/h1-s1.jpg"></div>
                  </div>
                  <div class="slider-content-area">
                    <div class="content">
                      <div class="inner-content">
                        <span>Why Choose Us?</span>
                        <h2>Shaping the Future of Modelling Talent</h2>
                        <p class="text-justify">We offer expert-led, hands-on training in modelling with a focus on
                          grooming, portfolio building, and real industry exposure. Our personalized guidance,
                          professional mentors, and career support ensure you’re fully prepared to step into the world
                          of modelling with confidence.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Slide Item -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Collection Slider Area Wrapper ==-->
      <!--== Start Video Divider Area Wrapper ==-->
      <div class="divider-area divider-about-area">
        <div class="container-fluid xs-pr-15 xs-pl-15 p-0">
          <div class="row">
            <div class="col-md-12">
              <div class="divider-about-content">
                <div class="divider-content " data-aos="fade-up" data-aos-duration="1000">
                  <span>How to Start Your Modelling Career?</span>
                  <h2 style="font-weight: bold;">Modelling Starts Here: Your Path to the Spotlight</h2>
                  <p class="text-justify">Kickstart your modelling journey by building confidence, learning the right
                    poses, and creating a stunning portfolio. Join a professional training program to master ramp walk,
                    expressions, and grooming. Stay disciplined, attend auditions, and keep improving — success follows
                    those who are prepared.</p>
                  <a href="about.html" class="btn-theme btn-black btn-border">Read more</a>
                </div>
                <div class="video-content" data-aos="fade-up" data-aos-duration="1000">
                  <div class="thumb">
                    <img src="assets/img/photos/video1.jpg" alt="Moren-Image">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--== End Video Divider Area Wrapper ==-->
      <!--== Start category Area Wrapper ==-->
      <section class="category-area category-style7-area">
        <div class="container">
          <div class="col-left">
            <div class="category-items-style12">
              <div class="thumb-style">
                <img src="assets/img/shop/74.jpg" alt="shop-Image">
              </div>
              <div class="category-item hover-effect effect-style1">
                <div class="thumb">
                  <img src="assets/img/shop/75.jpg" alt="shop-Image">
                  <div class="effect-content"></div>
                </div>
                <div class="content">

                </div>
              </div>
            </div>
          </div>
          <div class="col-right">
            <div class="content">
              <div class="inner-content">
                <h3 class="title" style="font-weight: bold;">Where Modelling Dreams Begin</h3>
                <p class="text-justify">Discover the art of modelling with expert training, professional grooming, and
                  real-world guidance. This is the place where your journey starts, confidence builds, and dreams turn
                  into spotlight moments.</p>
                <a class="btn-theme btn-black btn-size-lg" href="#">Explore more</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End category Area Wrapper ==-->

      <!--== Start Video Divider Area Wrapper ==-->
      <section class="divider-area divider-about-area-style2">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-7">
              <div class="divider-about-thumb">
                <div class="video-content">
                  <div class="thumb">
                    <img src="assets/img/photos/video2.jpg" alt="Moren-Image">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="divider-about-content">
                <div class="divider-content">
                  <h2 class="title">More Than a Pose — It’s a Presence</h2>
                  <p class="text-justify">At our modelling academy in Lucknow, we believe modelling is more than just
                    striking a pose — it’s about owning the moment. With expert guidance, confidence-building sessions,
                    and real-time shoot experiences, we train you to not just look like a model, but to feel like one.
                    From runway walk to camera presence, grooming to attitude — we turn raw passion into polished
                    presence. This is where your journey from aspiring to inspiring begins.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Video Divider Area Wrapper ==-->

      <!--== Start Brand Logo Area ==-->
      <section class="brand-logo-area brand-logo-style1-area">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6 m-auto">
              <div class="section-title text-center">
                <h2 class="title">Our Partners</h2>
              </div>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col-lg-12">
              <div class="swiper-container brand-logo-slider-container">
                <div class="swiper-wrapper brand-logo-slider">
                  <div class="swiper-slide brand-logo-item">
                    <a href="#/"><img src="assets/img/brand-logo/1.png" alt="Brand-Logo"></a>
                  </div>
                  <div class="swiper-slide brand-logo-item">
                    <a href="#/"><img src="assets/img/brand-logo/2.png" alt="Brand-Logo"></a>
                  </div>
                  <div class="swiper-slide brand-logo-item">
                    <a href="#/"><img src="assets/img/brand-logo/3.png" alt="Brand-Logo"></a>
                  </div>
                  <div class="swiper-slide brand-logo-item">
                    <a href="#/"><img src="assets/img/brand-logo/4.png" alt="Brand-Logo"></a>
                  </div>
                  <div class="swiper-slide brand-logo-item">
                    <a href="#/"><img src="assets/img/brand-logo/5.png" alt="Brand-Logo"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Brand Logo Area ==-->

      <!--== Start Contact Area ==-->
      <section class="contact-area contact-about-area bg-img" data-bg-img="assets/img/about/2.jpg">
        <div class="container-fluid">
          <div class="row row-gutter-0">
            <div class="col-lg-6">
              <div class="col-left">
                <div class="section-title text-center">
                  <h2 class="title">Get in Touch with Style</h2>
                  <p>Ready to create something stunning? Whether it’s a custom design or a styling query, we’re here to
                    help. Get in touch and let’s design fashion that’s as unique as you are.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="col-right">
                <div class="contact-form">
                  <form class="contact-form-wrapper" id="contact-form"
                    action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="text" name="con_name" placeholder="Name*">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="email" name="con_email" placeholder="Email*">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input class="form-control" type="number" name="con_phone" placeholder="Phone Number*">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <textarea class="form-control textarea" name="con_message"
                            placeholder="Your Message"></textarea>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group mb-0">
                          <button class="btn btn-theme btn-black" type="submit">Submit</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- Message Notification -->
                <div class="form-message"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="canvas-overlay"></div>
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
      <img width="25" height="25" src="https://img.icons8.com/sf-black-filled/64/a64637/whatsapp.png" alt="whatsapp" />
      +91 9555584040
    </a>
    <!-- Right Section: Request a Demo Button -->
    <a class="demo-btn" href="contact.html">Contact Us</a>
  </div>

</body>


<!-- Mirrored from htmldemo.net/moren/moren/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 May 2025 07:24:56 GMT -->

</html>