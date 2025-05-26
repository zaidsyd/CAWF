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

    /* General Form Styling */
    .contact-form-wrapper {
      margin: 0 auto;
      padding: 40px;
      background-color: #f9f9f9;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .contact-form-wrapper .section-title {
      margin-bottom: 30px;
      text-align: center;
    }

    .contact-form-wrapper .section-title h2 {
      font-size: 30px;
      color: #333;
      font-weight: 600;
    }

    .contact-form-wrapper .form-group {
      margin-bottom: 20px;
    }

    .contact-form-wrapper .form-group label {
      font-size: 14px;
      color: #333;
      font-weight: 500;
      margin-bottom: 9px;
    }

    .contact-form-wrapper .form-control {
      font-size: 16px;
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #fff;
      transition: all 0.3s ease-in-out;
    }

    .contact-form-wrapper .form-control:focus {
      border-color: #007bff;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
    }

    .contact-form-wrapper .form-check-label {
      font-size: 14px;
      color: #555;
    }

    .contact-form-wrapper .form-check-input {
      margin-right: 10px;
    }

    .contact-form-wrapper .btn {
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      padding: 12px 25px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }

    .contact-form-wrapper .btn:hover {
      background-color: #0056b3;
    }

    .contact-form-wrapper .form-check {
      margin-top: 15px;
    }

    /* Responsive Styling */
    @media (max-width: 768px) {
      .contact-form-wrapper .form-group {
        margin-bottom: 15px;
      }

      .contact-form-wrapper .form-control {
        font-size: 14px;
        padding: 8px;
      }

      .contact-form-wrapper .btn {
        width: 100%;
        font-size: 18px;
        padding: 15px;
      }
    }

    @media (max-width: 480px) {
      .contact-form-wrapper {
        padding: 20px;
      }

      .contact-form-wrapper .section-title h2 {
        font-size: 24px;
      }

      .contact-form-wrapper .form-group label {
        font-size: 12px;
      }
    }

    .contact-form .contact-form-wrapper .form-group .form-control {
      height: 54px;
      padding: 2px 25px;
      border: 1px solid #c0996f;
    }

    .contact-form-wrapper .form-group textarea {
      font-size: 16px;
      padding: 10px;
      width: 100%;
      border: 1px solid #ccc;
      border-radius: 4px;
      background-color: #fff;
      resize: vertical;
      transition: all 0.3s ease-in-out;
    }

    .contact-form-wrapper .form-group textarea:focus {
      border-color: #007bff;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.25);
    }

    .contact-area .contact-form .contact-form-wrapper.form-style {
      padding-right: 42px;
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
                <h2 class="title">Registration Form</h2>
                <div class="bread-crumbs"><a href="index.html">Home<span class="breadcrumb-sep">></span></a><span
                    class="active">Registration Form</span></div>
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
            <div class="col-lg-12">
              <div class="contact-form">
                <form class="contact-form-wrapper form-style" id="enquiryForm" method="POST" action="add_form.php"
                  enctype="multipart/form-data">
                  <input type="hidden" name="form_number" value="<?php echo 'REG' . rand(100000, 999999); ?>">

                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-title">
                        <h2 class="title">Registration Form</h2>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="image_path">Upload Profile Image*</label>
                        <input class="form-control" type="file" id="image_path" name="image_path"  accept=".jpg,.jpeg,.png,.gif"
                          required>
                          <small class="text-muted">Accepted formats: JPG, JPEG, PNG, GIF</small>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="program_type">Program Type*</label>
                        <select class="form-control" id="program_type" name="program_type" required>
                          <option value="" disabled selected>-- Select Program Type --</option>
                          <option value="modelling">Modelling</option>
                          <option value="acting">Acting</option>
                          <option value="photography">Photography</option>
                          <option value="videography">Videography</option>
                          <option value="cinematography">Cinematography</option>
                        </select>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="first_name">Full Name*</label>
                        <input class="form-control" type="text" id="first_name" name="first_name"
                          placeholder="Enter Full Name" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="phone">Mobile Number*</label>
                        <input class="form-control" type="text" id="phone" name="phone"
                          placeholder="Enter Mobile Number" maxlength="10" required>
                        <small id="phone_error" class="text-danger"></small>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Email*</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Email"
                          required>
                        <small id="email_error" class="text-danger"></small>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="dob">Date of Birth*</label>
                        <input class="form-control" type="date" id="dob" name="dob" required>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Gender*</label><br>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" value="Male" required>
                          <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="gender" value="Female" required>
                          <label class="form-check-label">Female</label>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="aadhaar">Aadhaar Number*</label>
                        <input class="form-control" type="text" id="aadhaar" name="aadhaar"
                          placeholder="Enter Aadhaar Number" maxlength="12" required>
                        <small id="aadhaar_error" class="text-danger"></small>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="address">Address*</label>
                        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                        <label class="form-check-label" for="terms">
                          I declare that the above info is true and correct to the best of my knowledge.
                        </label>
                      </div>
                    </div>

                    <div class="col-md-12 mt-3">
                      <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                  </div>
                </form>
                <!-- Message Notification -->
                <div class="form-message"></div>
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
      <img width="25" height="25" src="https://img.icons8.com/sf-black-filled/64/a64637/whatsapp.png" alt="whatsapp" />
      +91 9555584040
    </a>
    <!-- Right Section: Request a Demo Button -->
    <a class="demo-btn" href="contact.html">Contact Us</a>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    $('#enquiryForm').on('submit', function (e) {
      e.preventDefault();

      $('#phone_error').text('');
      $('#aadhaar_error').text('');
      $('#email_error').text('');

      let phone = $('#phone').val().trim();
      let aadhaar = $('#aadhaar').val().trim();
      let email = $('#email').val().trim();
      let valid = true;

      if (!/^\d{10}$/.test(phone)) {
        $('#phone_error').text('Please enter a valid 10-digit mobile number.');
        valid = false;
      }

      if (!/^\d{12}$/.test(aadhaar)) {
        $('#aadhaar_error').text('Please enter a valid 12-digit Aadhaar number.');
        valid = false;
      }

      if (valid) {
        $.ajax({
          url: 'check_duplicate.php',
          type: 'POST',
          data: { phone: phone, aadhaar: aadhaar, email: email },
          success: function (response) {
            let res = JSON.parse(response);
            if (res.exists) {
              if (res.phone) $('#phone_error').text('This phone is already registered.');
              if (res.aadhaar) $('#aadhaar_error').text('This Aadhaar is already registered.');
              if (res.email) $('#email_error').text('This email is already registered.');
            } else {
              document.getElementById("enquiryForm").submit(); 
            }
          }
        });
      }
    });
  </script>
  <script>
document.getElementById("image_path").addEventListener("change", function () {
    const file = this.files[0];
    const allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    if (file && !allowedTypes.includes(file.type)) {
        alert("Invalid file type. Please upload JPG, PNG, GIF, or WEBP images only.");
        this.value = ''; 
    }
});
</script>
</body>

</html>