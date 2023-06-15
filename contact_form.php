<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Request Form</title>
    <meta content="Welcome to Substring Technologies Private Limited, your premier destination for professional software development and training services. We specialize in crafting robust software solutions and providing comprehensive training programs to empower individuals and organizations in the ever-evolving world of technology." name="description">
  <meta content="substring technolodies, substring technologies private limited" name="keywords">

  <!-- Favicons -->
  <link href="Images/Substring Technology.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Animation css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- ========================================================
  * Template Name: Append
  * Updated: Jun 01 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>
<body>
      <!-- ======= Header ======= -->
  <header class="header d-flex align-items-center sticky-top" id="header">
   <?php include "components/header.php" ?>
  </header>
  <!-- End Header -->
       <!-- Contact Section - Home Page -->
       <section id="contact" class="contact">
      
      <!-- Contact -->

      <!-- Contact Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Service Request Form</h2>
        <p>Fill the detail correctly, so that we contact you.....</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4  justify-content-center">



          <div class="col-lg-6">
            <form action="components/insert.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <select type="text" class="form-control" name="subject" placeholder="Subject" required>
                  <option value="">--Please choose an option--</option>
                  <option value="Want_a_website_ (website Develoment)">Want a website (website Develoment)</option>
                  <option value="Want_an_App">Want an App</option>
                  <option value="C_Programming_training">C Programming Training</option>
                  <option value="C++_Programming_training">C++ Programming Training</option>
                  <option value="Core_java_training">Core Java Training</option>
                  <option value="advance_java_training">Advance Java Training</option>
                  <option value="Core_python_training">Core Python Training</option>
                  <option value="Django_training">Django Training</option>
                  <option value="javascript_training">Javascript Training</option>
                  <option value="web_development_training">Web development Training</option>
                  <option value="android_app_development_training">Andriod App Develoment Training</option>
                  <option value="backend_using_springboot_training">Backend Using SpringBoot Training</option>
                  <option value="meanstack_training">MEANStack Training</option>
                  <option value="mearnstack_training">MEARNStack Training</option>
                  <option value="angular_training">Angular Training</option>
                  <option value="reactjs_training">Reactjs Training</option>
                  <option value="other_software_training">Other software Training</option>
                  </select>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you! 
                    <div><a href="contact_form.php">ok</a></div>
                  </div>
                  
                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div><!-- End Contact Form -->

        </div>

      </div>
     
      </section><!-- End Contact Section -->
    </main>
   
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
  
      <?php include "components/footer.php" ?>
  
    </footer><!-- End Footer -->

    
  <!-- Scroll Top Button -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>
</html>