<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $pageTitle; ?></title>
  <meta name="description" content="<?php echo $pageDescription; ?>">
  <meta name="keywords" content="<?php echo $pageKeywords; ?>">
  <meta name="google-site-verification" content="h2-ENtgUsjrxHbZVDWebG2mOhih3HUN4KDXsmGb7G6Q" />

    <!-- JSON-LD structured data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "XeleratedTech Inc",
            "url": "https://xeleratedtech.com/",
            "logo": "https://xeleratedtech.com/assets/img/favicon2.png",
            "sameAs": [
                "https://twitter.com/xeleratedtech",
                "https://www.facebook.com/profile.php?id=100094523041198",
                "https://www.instagram.com/xeleratedtech_inc/?hl=en"
            ]
        }
    </script>

  <!-- css -->
  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview');
  </script>
    <!-- End Google Analytics -->
    
    
    <!-- Google AdSense -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7104543392902004"
     crossorigin="anonymous"></script>
    <!-- Google AdSense -->
    
  <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0W8W4TQCVQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-0W8W4TQCVQ');
    </script>

  <!-- Favicons -->
  <link href="assets/img/favicon2.png" rel="icon">
  <link href="assets/img/faviconX2.png" rel="faviconX2-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: XeleratedTech Inc
  * Updated: Nov 25 2023 with Bootstrap v5.3.2
  * Author: xeleratedtech.com
  ======================================================== -->
</head>
<body>

    <div class="loader" id="loader">
    </div>
    <div id="wrapper" style="display: none;">

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

        <a href="/" class="logo me-auto"><img src="assets/img/xeleratedlogo.png" alt="" class="img-fluid"></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1 class="logo me-auto"><a href="/"><span>Com</span>pany</a></h1> -->

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a href="/" class="<?php echo ($currentPage == 'home') ? 'active' : ''; ?>">Home</a></li>

            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="about" class="<?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About Us</a></li>
                <li><a href="team" class="<?php echo ($currentPage == 'team') ? 'active' : ''; ?>" >Team</a></li>
                <li><a href="testimonials" class="<?php echo ($currentPage == 'testimonials') ? 'active' : ''; ?>" >Testimonials</a></li>
                <li><a href="terms-of-service" class="<?php echo ($currentPage == 'terms-of-service') ? 'active' : ''; ?>" >Terms of service</a></li>
                <li><a href="privacy-policy" class="<?php echo ($currentPage == 'privacy-policy') ? 'active' : ''; ?>">Privacy policy</a></li>
                <!--
                <li class="dropdown">
                    <a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                -->
                </ul>
            </li>

            <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                <li><a href="web-design" class="<?php echo ($currentPage == 'web-design') ? 'active' : ''; ?>">Web Design</a></li>
                <li><a href="web-development" class="web-development" >Web Development</a></li>
                <li class="dropdown">
                    <a href="#"><span>Web Hosting</span> <i class="bi bi-chevron-right"></i></a>
                    <ul>
                    <li><a href="website-management" class="<?php echo ($currentPage == 'website-management') ? 'active' : ''; ?>">Website Management</a></li>
                    <li><a href="domain-email-reg" class="domain-email-reg" >Domain & Email registration</a></li>
                    </ul>
                </li>
                <li><a href="graphic-design" class="<?php echo ($currentPage == 'graphic-design') ? 'active' : ''; ?>">Graphic Design</a></li>
                <li><a href="logo-design" class="<?php echo ($currentPage == 'logo-design') ? 'active' : ''; ?>">Logo Design</a></li>
                </ul>
            </li>
            <li><a href="portfolio" class="<?php echo ($currentPage == 'portfolio') ? 'active' : ''; ?>" >Portfolio</a></li>
            <li><a href="pricing" class="<?php echo ($currentPage == 'pricing') ? 'active' : ''; ?>" >Pricing</a></li>
            <li><a href="contact" class="<?php echo ($currentPage == 'contact') ? 'active' : ''; ?>" >Contact</a></li>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

        <div class="header-social-links d-flex">
            <a href="https://twitter.com/xeleratedtech" class="twitter" target="_blank"><i class="bu bi-twitter"></i></a>
            <a href="https://www.facebook.com/profile.php?id=100094523041198" class="facebook" target="_blank"><i class="bu bi-facebook"></i></a>
            <a href="https://www.instagram.com/xeleratedtech_inc/?hl=en" class="instagram" target="_blank"><i class="bu bi-instagram"></i></a>
            <a href="https://www.linkedin.com/in/xelerated-tech-938275282/" class="linkedin" target="_blank"><i class="bu bi-linkedin"></i></i></a>
        </div>

        </div>
    </header><!-- End Header -->