<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CAWF| about</title>

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
    #popup {
      display: none;
      /* Hidden by default */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      z-index: 1000;
    }

    /* Popup Box */
    .popup-content {
      background: #fff;
      width: 400px;
      margin: 10% auto;
      padding: 30px;
      border-radius: 10px;
      position: relative;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    /* Close Button */
    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      cursor: pointer;
      color: #333;
    }

    .divider-area.divider-about-area-style2 .container {
      max-width: 1470px;
      padding-bottom: 100px;
      padding-top: 100px;
    }

    .brand-logo-area.brand-logo-style1-area {
      padding: 106px 0 106px;
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

    .home-five-wrapper .header-area.header-default.header-style5.sticky-header.sticky .header-action-area .btn-menu i {
      color: #333;
    }

    .text-justify {
      text-align: justify;
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
                <h2 class="title">About Us</h2>
                <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span
                    class="active">About Us</span></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Page Title Area ==-->

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
                  <h2 class="title">Beyond the Camera<br>— It’s Confidence for Life</h2>
                  <p class="text-justify">At our institute, we believe that true growth begins beyond the lens. It’s not
                    just about how you look on camera — it’s about how you carry yourself in life. Our training is
                    designed to build more than just technical skills; it builds self-belief, discipline, and the
                    confidence to express who you truly are. Whether you're walking the ramp, performing on stage, or
                    directing behind the scenes, we prepare you to own every space you step into — with clarity,
                    creativity, and confidence that lasts a lifetime.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Video Divider Area Wrapper ==-->
      <!--== Start Why choose Us Collection Area Wrapper ==-->
      <section class="collection-area collection-winter-area">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="align-items">
                <div class="col-left">
                  <div class="content" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title">
                      <h2 class="title"><span>Why</span> Choose Us </h2>
                      <p class="text-justify">At CAWF, we believe that talent needs the right training, direction, and
                        exposure to shine. What sets us apart is our commitment to excellence – from expert mentors with
                        real industry experience to hands-on practical learning that prepares you for the real world. We
                        don’t just teach the craft; we build confidence, personality, and a strong professional
                        foundation. Join us and experience the difference of industry-level training, right here in
                        Lucknow. </p>
                      <a href="#" class="btn-theme btn-black btn-border btn-size-lg text-uppercase">Explore More</a>
                    </div>
                  </div>
                </div>
                <div class="col-right">
                  <div class="category-items-style7">
                    <div class="category-item hover-effect effect-style1 item-one">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/shop/category/c1.jpg" alt="Moren-Images"></a>
                        <div class="effect-content"></div>
                      </div>
                    </div>
                    <div class="category-item hover-effect effect-style1 item-two">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/shop/category/c2.jpg" alt="Moren-Images"></a>
                        <div class="effect-content"></div>
                      </div>
                    </div>
                    <div class="category-item hover-effect effect-style1 item-three">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/shop/category/c3.jpg" alt="Moren-Images"></a>
                        <div class="effect-content"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Collection Area Wrapper ==-->

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

      <!--== Start Team Area Wrapper ==-->
      <section class="team-area team-creative-area">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title text-center">
                <h2 class="title">Our Team</h2>
              </div>
            </div>
          </div>
          <div class="row team-members-style2 row-gutter-60">
            <div class="col-sm-6 col-md-4">
              <div class="team-member">
                <div class="thumb">
                  <img src="assets/img/team/1.jpg" alt="Broly-HasTech">
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name">Agnes Wilson</h4>
                    <p>Manager</p>
                    <div class="social-icons">
                      <a href="#"><i class="fa lastudioicon-b-facebook"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-twitter"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-pinterest"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="team-member mt-xs-30">
                <div class="thumb">
                  <img src="assets/img/team/2.jpg" alt="Broly-HasTech">
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name">John Doe</h4>
                    <p>Creative Director</p>
                    <div class="social-icons">
                      <a href="#"><i class="fa lastudioicon-b-facebook"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-twitter"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-pinterest"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="team-member mt-sm-30">
                <div class="thumb">
                  <img src="assets/img/team/3.jpg" alt="Broly-HasTech">
                </div>
                <div class="content">
                  <div class="member-info">
                    <h4 class="name">John Terry</h4>
                    <p>Designer</p>
                    <div class="social-icons">
                      <a href="#"><i class="fa lastudioicon-b-facebook"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-twitter"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-pinterest"></i></a>
                      <a href="#"><i class="fa lastudioicon-b-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Team Area Wrapper ==-->

      <!--== Start Testimonal Blog Area Wrapper ==-->
      <section class="blog-area blog-default-area">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6 m-auto">
              <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="title">#Testimonial</h2>
              </div>
            </div>
          </div>
          <div class="row post-items" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-12">
              <div class="swiper-container post-slider-container">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <!--== Start Blog Post Item ==-->
                    <div class="post-item">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/blog/s1.jpg" alt="Moren-Image"></a>
                      </div>
                      <div class="content">
                        <div class="post-meta">
                          <img src="assets/img/icons/s1.jpg" alt="Image">
                          <a href="#">Priya S., Lucknow</a>
                        </div>
                        <div class="inner-content">
                          <h4 class="title">
                            <a href="#"> Aspiring Actress</a>
                          </h4>
                          <p class="text-justify">Joining this academy was the best decision of my life. I came in with
                            zero experience and walked out with a professional portfolio and casting offers. The
                            trainers push you, polish you, and prepare you for the real world.</p>
                        </div>

                      </div>
                    </div>
                    <!--== End Blog Post Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Blog Post Item ==-->
                    <div class="post-item">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/blog/s2.jpg" alt="Moren-Image"></a>
                      </div>
                      <div class="content">
                        <div class="post-meta">
                          <img src="assets/img/icons/s1.jpg" alt="Image">
                          <a href="#">Ankit K.</a>
                        </div>
                        <div class="inner-content">
                          <h4 class="title">
                            <a href="#">Model & Influencer</a>
                          </h4>
                          <p class="text-justify">The way they teach camera presence and body language is just amazing.
                            I not only learned modelling but also gained confidence I never had before. If you want to
                            make it big — this is where you start.</p>
                        </div>

                      </div>
                    </div>
                    <!--== End Blog Post Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Blog Post Item ==-->
                    <div class="post-item">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/blog/s3.jpg" alt="Moren-Image"></a>
                      </div>
                      <div class="content">
                        <div class="post-meta">
                          <img src="assets/img/icons/s1.jpg" alt="Image">
                          <a href="#">Neha R., Kanpur</a>
                        </div>
                        <div class="inner-content">
                          <h4 class="title">
                            <a href="#">Freelance Photographer</a>
                          </h4>
                          <p class="text-justify">As a photographer, I always struggled with creative direction. The
                            mentors here helped me unlock my vision and taught me the technical skills I was missing.
                            Today, I shoot for brands!</p>
                        </div>

                      </div>
                    </div>
                    <!--== End Blog Post Item ==-->
                  </div>
                  <div class="swiper-slide">
                    <!--== Start Blog Post Item ==-->
                    <div class="post-item">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/blog/s4.jpg" alt="Moren-Image"></a>
                      </div>
                      <div class="content">
                        <div class="post-meta">
                          <img src="assets/img/icons/s1.jpg" alt="Image">
                          <a href="#">Riya T., Lucknow</a>
                        </div>
                        <div class="inner-content">
                          <h4 class="title">
                            <a href="#"> Fashion Student</a>
                          </h4>
                          <p class="text-justify">Mujhe laga sirf talent kaafi hoga, par yahaan aakar samjha ki
                            grooming, training aur right guidance kitni important hoti hai. Inke mock auditions aur
                            portfolio shoots ne mujhe real confidence diya.</p>
                        </div>

                      </div>
                    </div>
                    <!--== End Blog Post Item ==-->
                  </div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Blog Area Wrapper ==-->

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


    <!--== Start Aside Search Menu ==-->
    <div class="search-box-wrapper">
      <div class="search-box-content-inner">
        <div class="search-box-form-wrap">
          <div class="search-note">
            <p>Start typing and press Enter to search</p>
          </div>
          <form action="#" method="post">
            <div class="search-form position-relative">
              <label for="search-input" class="sr-only">Search</label>
              <input type="search" class="form-control" placeholder="Search" id="search-input">
              <button class="search-button"><i class="lastudioicon-zoom-1"></i></button>
            </div>
          </form>
        </div>
      </div>
      <!--== End Aside Search Menu ==-->
      <a href="javascript:;" class="search-close"><i class="lastudioicon-e-remove"></i></a>
    </div>
    <!--== End Aside Search Menu ==-->

    <!--== Start Sidebar Cart Menu ==-->
    <aside class="sidebar-cart-modal">
      <div class="sidebar-cart-inner">
        <div class="sidebar-cart-content">
          <a class="cart-close" href="javascript:void(0);"><i class="lastudioicon-e-remove"></i></a>
          <div class="sidebar-cart">
            <h4 class="sidebar-cart-title">Shopping Cart</h4>
            <div class="product-cart">
              <div class="product-cart-item">
                <div class="product-img">
                  <a href="shop.html"><img src="assets/img/shop/cart/1.jpg" alt=""></a>
                </div>
                <div class="product-info">
                  <h4 class="title"><a href="shop.html">I’m a Unicorn Earrings</a></h4>
                  <span class="info">1 × £69.00</span>
                </div>
                <div class="product-delete"><a href="#/">×</a></div>
              </div>
              <div class="product-cart-item">
                <div class="product-img">
                  <a href="shop.html"><img src="assets/img/shop/cart/2.jpg" alt=""></a>
                </div>
                <div class="product-info">
                  <h4 class="title"><a href="shop.html">Knit cropped cardigan</a></h4>
                  <span class="info">1 × £29.90</span>
                </div>
                <div class="product-delete"><a href="#/">×</a></div>
              </div>
            </div>
            <div class="cart-total">
              <h4>Subtotal: <span class="money">£98.90</span></h4>
            </div>
            <div class="shipping-info">
              <div class="loading-bar">
                <div class="load-percent"></div>
                <div class="label-free-shipping">
                  <div class="free-shipping svg-icon-style">
                    <span class="svg-icon" id="svg-icon-shipping" data-svg-icon="assets/img/icons/shop1.svg"></span>
                  </div>
                  <p>Spend £101.10 to get Free Shipping</p>
                </div>
              </div>
            </div>
            <div class="cart-checkout-btn">
              <a class="btn-theme" href="shop-cart.html">View cart</a>
              <a class="btn-theme" href="shop-checkout.html">Checkout</a>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <div class="sidebar-cart-overlay"></div>
    <!--== End Sidebar Cart Menu ==-->

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