<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden;">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>CAWF | Home</title>

  <!--== Favicon ==-->
  <link rel="shortcut icon" href="assets/img/cawf-logo-1.jpg" type="image/x-icon" />

  <!--== Google Fonts ==-->
  <link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture:400" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,700i,800,800i,900,900i"
    rel="stylesheet">
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
    .title-stroke {
      color: #A64637;
      font-size: 60px;
      font-style: italic;
      font-weight: 700;
      line-height: 1;
      text-transform: uppercase;
      -webkit-text-fill-color: transparent;
      -webkit-text-stroke-width: 1px;
      -webkit-text-stroke-color: currentColor;
    }


    #popup {
      display: none;
      /* hidden by default */
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.6);
      z-index: 9999;
      backdrop-filter: blur(1px);
    }

    .popup-content {
      background-image: url('./assets/img/popup/4.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      width: 90%;
      max-width: 450px;
      height: 328px;
      margin: 10% auto;
      padding: 30px;
      border-radius: 16px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
      position: relative;
      animation: fadeIn 0.4s ease-in-out;
      text-align: center;
    }

    .close-btn {
      position: absolute;
      top: 0px;
      right: 15px;
      font-size: 35px;
      color: #ffffff;
      cursor: pointer;
      transition: color 0.3s ease;
    }

    .close-btn:hover {
      color: #333;
    }

    .register-btn {
      background: linear-gradient(135deg, #ff416c, #ff4b2b);
      padding: 12px 25px;
      color: #fff;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      font-size: 16px;
      box-shadow: 0 0 15px rgba(255, 75, 43, 0.5);
      animation: blinkGlow 1.5s infinite;
      transition: background 0.3s ease, transform 0.2s ease;
      display: inline-block;
    }

    .register-btn:hover {
      background: linear-gradient(135deg, #ff4b2b, #ff416c);
      transform: scale(1.05);
    }

    /* Blinking glow animation */
    @keyframes blinkGlow {

      0%,
      100% {
        box-shadow: 0 0 10px rgba(255, 75, 43, 0.4), 0 0 20px rgba(255, 75, 43, 0.3);
      }

      50% {
        box-shadow: 0 0 20px rgba(255, 75, 43, 0.8), 0 0 30px rgba(255, 75, 43, 0.6);
      }
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

    @media only screen and (max-width: 1199px) {
      .header-area.header-default .container-fluid {
        padding: 0px 30px;
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

    @media only screen and (max-width: 767px) {
      .home-five-wrapper .header-area.header-default.header-style5 .container-fluid {
        padding: 0px 15px;
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
  <div class="wrapper home-five-wrapper">

    <!--== Start Header Wrapper ==-->
    <?php
    include('header.php');
    ?>
    <!--== End Header Wrapper ==-->

    <main class="main-content">
      <!-- Popup Form -->
      <div id="popup">
        <div class="popup-content">
          <span class="close-btn" onclick="closePopup()">&times;</span>
          <div class="col-lg-12">
            <div class="section-title">
              <h2 class="title" style="color: #ffffff; font-size: 24px;">Register Now</h2>
            </div>
            <div style="text-align: center; margin-top: 85px;">
              <a href="#" class="register-btn">Click Here</a>
            </div>
          </div>
        </div>
      </div>

      <script>
        // Show popup on page load
        window.onload = function () {
          document.getElementById("popup").style.display = "block";
        };

        // Close popup
        function closePopup() {
          document.getElementById("popup").style.display = "none";
        }
      </script>
      <!-- Popup form + script end -->

      <!--== Start Hero Area Wrapper ==-->
      <section class="home-slider-area slider-home5">
        <div class="home-slider-content">
          <!-- Start Slide Item -->
          <div class="home-slider-item">
            <div class="col-left">
              <div class="category-items-style4">
                <div class="category-item hover-effect effect-style1">
                  <div class="thumb">
                    <a href="#"><img src="assets/img/Main Banner Images/1.jpg" alt="Moren-Shop"></a>
                    <div class="effect-content"></div>
                  </div>
                  <div class="content">
                    <h4 class="title"></h4>
                  </div>
                </div>
                <div class="text-rotate">
                  NEW ART <br>2025
                </div>
              </div>
            </div>
            <div class="col-right">
              <div class="inner-content">
                <div class="title-style">
                  <h2 class="title">Street</h2>
                  <h3 class="title-stroke">Street</h3>
                  <h4 class="sub-title">style</h4>
                </div>
                <div class="category-items-style6">
                  <div class="row row-gutter-50">
                    <div class="col-6">
                      <div class="category-item hover-effect effect-style1">
                        <div class="thumb">
                          <a href="#"><img src="assets/img/Main Banner Images/2.jpg" alt="Moren-Shop"></a>
                          <div class="effect-content"></div>
                        </div>
                        <div class="content">
                          <h4 class="title"></h4>
                        </div>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="category-item hover-effect effect-style1">
                        <div class="thumb">
                          <a href="#"><img src="assets/img/Main Banner Images/3.jpg" alt="Moren-Shop"></a>
                          <div class="effect-content"></div>
                        </div>
                        <div class="content">
                          <h4 class="title"></h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inner-content text-justify">
                  <p>At CAWF, we don’t just teach – we transform passion into profession. Based in the heart of Lucknow,
                    our institute is a leading destination for aspirants looking to build a career in modelling, acting,
                    photography, videography, and cinematography.</p>
                  <a href="#" class="btn-theme btn-black btn-border btn-size-lg text-uppercase">About Us</a>
                </div>
                <div class="text-rotate">
                  2025 <br>NEW STYLE
                </div>
              </div>
            </div>
          </div>
          <!-- End Slide Item -->
        </div>
      </section>
      <!--== End Hero Area Wrapper ==-->

      <!--== Start Category Area Wrapper ==-->
      <section class="category-area category-style5-area">
        <div class="container">
          <div class="row row-gutter-60 category-items-style5" data-aos="fade-up" data-aos-duration="1000">
            <div class="col-md-4">
              <div class="category-item">
                <div class="thumb">
                  <a href="#"><img src="assets/img/Catagories Images/1.jpg" alt="Moren-Shop"></a>
                  <a class="btn-theme btn-border btn-black btn-size-lg" href="#">Explore More</a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#">Modelling</a></h4>
                  <h3 class="title-shadow"><a href="#">Modelling</a></h3>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="category-item">
                <div class="thumb">
                  <a href="#"><img src="assets/img/Catagories Images/2.jpg" alt="Moren-Shop"></a>
                  <a class="btn-theme btn-border btn-black btn-size-lg" href="#">Explore More</a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#">Acting</a></h4>
                  <h3 class="title-shadow"><a href="#">Acting</a></h3>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="category-item">
                <div class="thumb">
                  <a href="#"><img src="assets/img/Catagories Images/3.jpg" alt="Moren-Shop"></a>
                  <a class="btn-theme btn-border btn-black btn-size-lg" href="#">Explore More</a>
                </div>
                <div class="content">
                  <h4 class="title"><a href="#">Photography</a></h4>
                  <h3 class="title-shadow"><a href="#">Photography</a></h3>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!--== End Category Area Wrapper ==-->

      <!--== Start Why choose Us  Wrapper ==-->
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
                        <a href="#"><img src="assets/img/Why Choose Us/2.jpg" alt="Moren-Images"></a>
                        <div class="effect-content"></div>
                      </div>
                    </div>
                    <div class="category-item hover-effect effect-style1 item-two">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/Why Choose Us/1.jpg" alt="Moren-Images"></a>
                        <div class="effect-content"></div>
                      </div>
                    </div>
                    <div class="category-item hover-effect effect-style1 item-three">
                      <div class="thumb">
                        <a href="#"><img src="assets/img/Why Choose Us/3.jpg" alt="Moren-Images"></a>
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
      <!--== End Why Choose Us Wrapper ==-->
      <!--== Start Unlesh category Area Wrapper ==-->
      <section class="category-area category-style8-area">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="category-items-style12 item-one">
                <div class="category-item hover-effect effect-style1">
                  <div class="thumb">
                    <img src="assets/img/Unleash Your Talent/1.jpg" alt="shop-Image">
                    <div class="effect-content"></div>
                  </div>

                </div>
                <div class="category-item hover-effect effect-style1">
                  <div class="thumb">
                    <img src="assets/img/Unleash Your Talent/3.jpg" alt="shop-Image">
                    <div class="effect-content"></div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="section-title">
                <h2 class="title">Unleash Your</h2>
                <h3 class="title-stroke">Talent</h3>
                <p class="text-justify">Discover a creative journey where your dreams meet direction. Whether it’s
                  modelling, acting, photography, or cinematography — we offer world-class training that transforms raw
                  passion into real performance. Learn from industry experts, build your portfolio, and step confidently
                  into the spotlight — because your talent deserves to be seen.</p>
                <a class="btn-theme btn-black btn-size-lg" href="#">Check Programs</a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="category-items-style12 item-two">
                <div class="category-item hover-effect effect-style1">
                  <div class="thumb">
                    <img src="assets/img/Unleash Your Talent/2.jpg" alt="shop-Image">
                    <div class="effect-content"></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Unlesh category Area Wrapper ==-->

      <!--== Start Products Area Wrapper ==-->
      <section class="product-area product-style1-area style-two">
        <div class="container">
          <div class="row ">
            <div class="col-md-8 col-lg-6 m-auto">
              <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="title" style="font-style: italic;">Our</h2>
                <h3 class="title-stroke">Programs</h3>
              </div>
            </div>
          </div>
          <div class="row row-gutter-150 product-items-style3">

            <div class="col-sm-6 col-md-4">
              <!-- Start Product Item -->
              <div class="product-item">
                <div class="product-thumb">
                  <a href="#">
                    <img src="assets/img/Unleash Your Talent/others/1.jpg" alt="Moren-Shop">
                    <span class="thumb-overlay"></span>
                  </a>

                </div>
                <div class="product-info">
                  <div class="content-inner">
                    <h4 class="title"><a href="#">Modelling</a></h4>
                    <h5 class="category"><a href="#"></a></h5>
                  </div>
                  <div class="prices">
                    <span class="price">₹500</span>
                  </div>
                </div>
              </div>
              <!-- End Product Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Start Product Item -->
              <div class="product-item mt-xs-50">
                <div class="product-thumb">
                  <a href="#">
                    <img src="assets/img/Unleash Your Talent/others/2.jpg" alt="Moren-Shop">
                    <span class="thumb-overlay"></span>
                  </a>

                </div>
                <div class="product-info">
                  <div class="content-inner">
                    <h4 class="title"><a href="#">Acting</a></h4>
                    <h5 class="category"><a href="#"></a></h5>
                  </div>
                  <div class="prices">
                    <span class="price">₹500</span>
                  </div>
                </div>
              </div>
              <!-- End Product Item -->
            </div>
            <div class="col-sm-6 col-md-4">
              <!-- Start Product Item -->
              <div class="product-item mt-sm-50">
                <div class="product-thumb">
                  <a href="#">
                    <img src="assets/img/Unleash Your Talent/others/3.jpg" alt="Moren-Shop">
                    <span class="thumb-overlay"></span>
                  </a>

                </div>
                <div class="product-info">
                  <div class="content-inner">
                    <h4 class="title"><a href="#">Photography</a></h4>
                    <h5 class="category"><a href="#"></a></h5>
                  </div>
                  <div class="prices">
                    <span class="price">₹500</span>
                  </div>
                </div>
              </div>
              <!-- End Product Item -->
            </div>
          </div>
        </div>
      </section>
      <!--== End Products Area Wrapper ==-->

      <!--== Start Our Training category Area Wrapper ==-->
      <section class="category-area category-style9-area">
        <div class="container">
          <div class="row row-gutter-0">
            <div class="col-lg-6">
              <div class="section-title">
                <h2 class="title">Our Training</h2>
                <h3 class="title-stroke">Expertise</h3>
              </div>
              <div class="col-items">
                <div class="col-left">
                  <div class="category-items-style12 item-one">
                    <div class="category-item hover-effect effect-style1">
                      <div class="thumb">
                        <img src="assets/img/Our Training Expertise/1.jpg" alt="shop-Image">
                        <div class="effect-content"></div>
                      </div>

                    </div>
                  </div>
                  <div class="category-items-style12 item-two">
                    <div class="category-item hover-effect effect-style1">
                      <div class="thumb">
                        <img src="assets/img/Our Training Expertise/2.jpg" alt="shop-Image">
                        <div class="effect-content"></div>
                      </div>

                    </div>
                  </div>
                </div>
                <div class="col-right">
                  <div class="category-items-style12 item-three">
                    <div class="category-item hover-effect effect-style1">
                      <div class="thumb">
                        <img src="assets/img/Our Training Expertise/3.jpg" alt="shop-Image">
                        <div class="effect-content"></div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content">
                <div class="inner-content">
                  <p class="text-justify">We blend creative passion with professional precision to deliver top-tier
                    training in modelling, acting, photography, and cinematography. Every course is thoughtfully
                    designed to bring out the best in you — from your posture and expression to camera confidence and
                    technical mastery.</p>
                  <p class="text-justify">Our experienced mentors ensure that your learning reflects real industry
                    standards, helping you build a strong foundation and a powerful portfolio. With the right mix of
                    guidance, grooming, and hands-on practice, we prepare you to shine in every frame and every stage.
                  </p>

                </div>
              </div>
              <div class="category-items-style12 item-four">
                <div class="category-item hover-effect effect-style1">
                  <div class="thumb">
                    <img src="assets/img/Our Training Expertise/4.jpg" alt="shop-Image">
                    <div class="effect-content"></div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Our Training category Area Wrapper ==-->

      <!--== Start Instagram Gallery Area Wrapper ==-->
      <section class="gallery-area gallery-style5-area">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-lg-6 m-auto">
              <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                <h2 class="title">ON THE</h2>
                <h3 class="title-stroke">instagram</h3>
              </div>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-duration="1200">
            <div class="col-md-12">
              <div class="galery-masonry-style1 masonry-grid">
                <div class="masonry-item">
                  <div class="gallery-item">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/gallery/s1.jpg" alt="Moren-Image"></a>
                    </div>
                  </div>
                </div>
                <div class="masonry-item item-size2">
                  <div class="gallery-item">
                    <div class="thumb">
                      <a href="#ml"><img src="assets/img/instagram/lamaa1_imresizer.jpg" alt="Moren-Image"></a>
                    </div>
                  </div>
                </div>
                <div class="masonry-item">
                  <div class="gallery-item">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/gallery/s3.jpg" alt="Moren-Image"></a>
                    </div>
                  </div>
                </div>
                <div class="masonry-item item-size2">
                  <div class="gallery-item">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/instagram/lama3_imresizer.jpg" alt="Moren-Image"></a>
                    </div>
                  </div>
                </div>
                <div class="masonry-item">
                  <div class="gallery-item">
                    <div class="thumb">
                      <a href="#"><img src="assets/img/gallery/s5.jpg" alt="Moren-Image"></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--== End Insta Gallery Area Wrapper ==-->
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
                        <a href="#"><img src="assets/img/Testimonial/2.jpg" alt="Moren-Image"></a>
                      </div>
                      <div class="content">
                        <div class="post-meta">
                          <img src="assets/img/Testimonial/1.jpg" alt="Image">
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
                        <a href="#"><img src="assets/img/Testimonial/4.jpg" alt="Moren-Image"></a>
                      </div>
                      <div class="content">
                        <div class="post-meta">
                          <img src="assets/img/Testimonial/3.jpg" alt="Image">
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
      <!--== Start Brand Logo Area ==-->
      <!-- <div class="brand-logo-area brand-logo-default-area">
      <div class="container">
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
    </div> -->
      <!--== End Brand Logo Area ==-->
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
                        <p> C13 Shivalik Colony, Basant Kaur Marg, Malviya Nagar, India, Delhi</p>
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
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.178021211253!2d77.20456597616182!3d28.534368388530435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.      1!3m3!1m2!1s0x390ce21cc379b859%3A0xf1f87c909b1e88d0!2s14%2F185%2C%20Shivalik%20Rd%2C%20Block%20B%2C%20Geetanjali%20Enclave%2C%20Malviya%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110017!5e0!3m2!1sen!2sin!4v1747726793103!5m2!1sen!2sin"
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
    <a class="demo-btn" href="#">Contact Us</a>
  </div>

</body>

</html>