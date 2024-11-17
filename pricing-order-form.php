<?php
$pageTitle = "Pricing and Order Form - XeleratedTech Inc.";
$pageDescription = "View XeleratedTech Inc.'s pricing information and submit an order request for our services. Our competitive pricing and streamlined order process ensure you get the solutions you need efficiently and effectively.";
$pageKeywords = "pricing, order form, XeleratedTech, web design pricing, graphic design pricing, service costs, order request";
$currentPage = "pricing-order-form";
include 'header.php';
?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Order Form</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>order-form</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->
    
    <!-- ======= Order Placement ======= -->
    <section class="order">
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="section-title">
              <h2>Place your order below</h2>
            </div>
          <div class="col-lg-10">
            <form action="pricing-order.php" method="post" role="form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                  <label for="website_type">Select Website Type:</label>
                  <select class="form-control" id="website_type" name="website_type" required>
                      <option value="#"></option>
                      <option value="students_website">Students Website</option>
                      <option value="landing_page_website">Landing Page Website</option>
                      <option value="small_business_website">Small Business Website</option>
                      <option value="ecommerce_website">Ecommerce Website</option>
                      <option value="corporate_website">Corporate Website</option>
                  </select>
              </div>
          
              <div class="form-group mt-3">
                  <label for="additional_specifications">Additional Specifications:</label>
                  <textarea class="form-control" name="additional_specifications" rows="5" placeholder="Add any specific requirements or features"></textarea>
              </div>
              <br>
              <div class="btn-buy text-center">
                  <button type="submit">Place Order</button>
              </div>
            </form>
          </div>
        </div> 
    </section>
    
    
    <!-- End Order Placement -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">What's the difference between web design and web development? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Web design primarily focuses on the visual aspects of a website, including layout, color schemes, and typography, aiming to create an aesthetically pleasing user interface. On the other hand, web development involves the technical implementation and functionality of the website, including coding, database management, and ensuring the site works as intended.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Which platform or programming language should I choose for my website? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The choice depends on various factors like the website's purpose, scalability needs, and your technical expertise. For content-focused sites, platforms like WordPress are user-friendly. For custom functionality, languages like HTML, CSS, JavaScript, and frameworks like React or Angular might be used. Consult with a developer to find the best fit.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">What is responsive design, and why is it important? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Responsive design ensures a website looks and functions well across different devices and screen sizes (desktops, tablets, mobiles). It's crucial because more users access the internet via mobile devices. A responsive site provides a consistent and optimal user experience, improving engagement and search engine rankings.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How long does it take to build a website? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  The timeline varies based on the website's complexity, features, content, and client's responsiveness in providing feedback. A simple website might take a few weeks, while complex e-commerce or corporate sites could take several months. Clear communication between the client and the development team helps streamline the process.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What ongoing maintenance does a website need after launch? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Post-launch, websites require regular updates for security patches, content refreshes, plugin or software updates, and backups to ensure smooth functioning. Additionally, monitoring traffic analytics, improving SEO, and addressing user feedback are crucial for continued site optimization and performance.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

<?php include 'footer.php'; ?>