<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CAWF | Contact</title>

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
      height: 108px;
      width: 84px;
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
  </style>


</head>

<body>

  <!--wrapper start-->
  <div class="wrapper">

    <!--== Start Header Wrapper ==-->
    <?php
    include('footer.php');
    ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
      <!--== Start Page Title Area ==-->
      <section class="page-title-area bg-img" data-bg-img="assets/img/photos/bg-page3.jpg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="page-title-content">
                <h2 class="title">Contact Us</h2>
                <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span
                    class="active">Contact Us</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

      <!--== Start Contact Area ==-->
      <section class="contact-area">
        <div class="container">
          <div class="row">
            <div class=" col-lg-7">
              <div class="contact-form">
                <form class="contact-form-wrapper form-style" id="contact-form"
                  action="http://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-title">
                        <h2 class="title">Get In Touch </h2>
                      </div>
                    </div>
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
                        <button class="btn btn-theme btn-black" type="submit">Contact Us</button>
                      </div>
                    </div>
                  </div>
                </form>
                <!-- Message Notification -->
                <div class="form-message"></div>
              </div>
            </div>
            <div class=" col-lg-5">
              <div class="contact-info-wrapper">
                <div class="section-title">
                  <h2 class="title">Contact Us</h2>
                </div>
                <div class="contact-info-content">
                  <div class="align-top">
                    <div class="contact-info-item">
                      <div class="icon">
                        <i class="lastudioicon lastudioicon-pin-3-2"></i>
                      </div>
                      <div class="content">
                        <h4>Head Branch</h4>
                        <p>C13 Shivalik Colony, Basant Kaur Marg, Malviya Nagar, India, Delhia</p>
                      </div>
                    </div>
                    <div class="contact-info-item">
                      <div class="icon">
                        <span><i class="lastudioicon lastudioicon-pin-3-2"></i></span>
                      </div>
                      <div class="content">
                        <h4>Second Branch</h4>
                        <p>Lucknow</p>
                      </div>
                    </div>
                  </div>
                  <div class="align-bottom">
                    <div class="contact-info-item info-item2">
                      <div class="icon">
                        <span><i class="lastudioicon lastudioicon-mail"></i></span>
                      </div>
                      <div class="content">
                        <p>hello@cawf.in</p>
                      </div>
                    </div>
                    <div class="contact-info-item">
                      <div class="icon">
                        <span><i class="lastudioicon lastudioicon-phone-call-2"></i></span>
                      </div>
                      <div class="content">
                        <p>+91 9555584040</p>
                      </div>
                    </div>
                    <div class="contact-info-item social-icons-item mb-0 pb-0">
                      <div class="content">
                        <div class="social-widget">
                          <a href="https://www.facebook.com/people/cawfindia/100093630427177/?rdid=NWYlETME5Dlhjc0d&share_url=https%3A%2F%2Fwww.facebook.com%2Fshare%2F15w7G7Ao36"
                            target="_blank"><i class="lastudioicon lastudioicon-b-facebook"></i></a>
                          <a href="https://www.youtube.com/@CAWF.official" target="_blank"><i
                              class="lastudioicon lastudioicon-b-youtube"></i></a>
                          <a href="https://www.instagram.com/cawf.india/#" target="_blank"><i
                              class="lastudioicon lastudioicon-b-instagram"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Contact Area ==-->

      <!--== Start Map Area ==-->
      <div class="contact-map-area">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113911.2297596097!2d80.86011211795565!3d26.848668124069338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh%2C%20India!5e0!3m2!1sen!2ssg!4v1747633562990!5m2!1sen!2ssg"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <!--== End Map Area ==-->
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

</html>