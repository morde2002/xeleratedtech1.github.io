<?php
$pageTitle = "Contact Us - XeleratedTech Inc.";
$pageDescription = "Get in touch with XeleratedTech Inc. for all your web design and development needs. Our team is ready to assist you with inquiries, support requests, and project discussions. We are located in Likoni, Mombasa, and offer a range of digital solutions to help your business thrive.";
$pageKeywords = "contact us, web design, web development, support, inquiries, XeleratedTech, Mombasa, Likoni, digital solutions";
$currentPage = "contact";
include 'header.php';
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15918.637904339057!2d39.65062673119821!3d-4.089548980930372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184013573f5d712d%3A0x8061b3db8f33346e!2sLikoni%2C%20Mombasa!5e0!3m2!1sen!2ske!4v1698872429609!5m2!1sen!2ske"frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Likoni, Mombasa<br>Kenya</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>
                    <a href="mailto:xeleratedtech@gmail.com" aria-label="xeleratedtech@gmail.com" target="_blank">
                      xeleratedtech@gmail.com
                    </a>
                  </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>
                    <a href="tel:+254115588218" aria-label="+254 115 588218">
                      +254 115 588218
                    </a><br>
                  </p>
                  <p>
                    <a href="tel:+254727737869" aria-label="+254 727 737869">
                      +254 727 737869<br>
                    </a>
                  </p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="form-handler.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <br>
              <div class="btn-buy text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

<?php include 'footer.php'; ?>