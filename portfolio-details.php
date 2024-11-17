<?php
$pageTitle = "Portfolio Details - XeleratedTech Inc.";
$pageDescription = "Explore the details of our past projects at XeleratedTech Inc. See how we’ve helped businesses and individuals with web design, graphic design, and more. Each portfolio entry provides insights into the project objectives, solutions, and results.";
$pageKeywords = "portfolio, project details, XeleratedTech, web design portfolio, graphic design portfolio, case studies, project showcase";
$currentPage = "portfolio-details";
include 'header.php';
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li><a href="portfolio">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/works/design1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/coming-soon.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/design2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/portfolio1.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/mobile-app.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/design3.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/portfolio2.png" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/works/design4.png" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li><strong>Category</strong>: Portfolio designs</li>
                <!--
                  <li><strong>Client</strong>: ASU Company</li>
                -->
                <li><strong>Project date</strong>: 01 November, 2023</li>
                <!--
                  <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                -->
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Portfolio Description</h2>
              <p>
                A portfolio description serves as the gateway for individuals to present our professional journey, accomplishments, and expertise. It's a narrative that encapsulates our skills, experiences, and the value we bring to potential employers or clients.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

<?php include 'footer.php'; ?>