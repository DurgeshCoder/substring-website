<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "components/important_links.php" ?>

  <title>java Training</title>
  <style>


  </style>
</head>
<?php
include "./helper/subject_dao.php";
include "./helper/database.php";
$subject_dao = new SubjectDao($conn);
$slug = $_GET['slug'];
$subjects = $subject_dao->get_subjects_topic_subtopic($slug);

?>

<body>
  <!-- ======= Header ======= -->
  <header class="header d-flex align-items-center sticky-top" id="header">
    <?php include "components/header.php" ?>
  </header>
  <!-- End Header -->

  <!-- Training Banner Section - Offline training Page -->
  <section id="java_training_banner" class="java_training_banner">



    <div class="container ">
      <div class="row justify-space-between">

        <div class="col-lg-7">
        <?php
                      foreach ($subjects as $key => $value) {



                        ?>
          <h2 data-aos="fade-up" data-aos-delay="100"> <?= $value['sub_name'] ?></h2>
          <p data-aos="fade-up" data-aos-delay="200"> <?= $value['short_description'] ?> </p>
          <h2 data-aos="fade-up" data-aos-delay="100">Language: <?= $value['language'] ?></h2>
          <h2 data-aos="fade-up" data-aos-delay="100">
            Rating:
            <?php 
            for ($i = 0; $i <= 3; $i++){
              ?>
            
             
              <img src="images/star.png" >
              <?php
            }
            ?>

            </h2>
          <?php
                      } 
?>

        </div>

      </div>

    </div>
    </div>
    </div>

  </section><!-- End Training Banner Section -->

  <div class="java_training_card d-flex ">
    <div class="row justify-content-end align-item-end">
      <div class="col-lg-4 my-2">
        <div class="card">
          <div class="img">
            <img src="images/t_subject.png.crdownload" class="w-100 rounded-4">
          </div>
          <div class="button m-auto my-4">
            <button class="btn btn-primary">Start Learning</button>
          </div>
          <div class="section-tittle">
            <h2>Features of this Course :</h2>
            <p>18 + Quality Videos</p>
            <p>1000 + Enrollments</p>
            <p>5 out of 5 Students Reviews</p>
            <p>Course will be in Hindi</p>
          </div>
        </div>
      </div>


      <section class="subject_detail">
        <div class="container">

          <ul class="nav nav-tabs justify-content-between align-item-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Overview</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Course Content</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Resource</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <!-- subject Section Title -->
              <div class="container section-title " data-aos="fade-up">
                <h2>Description of the Course</h2>
              </div><!-- End Section Title -->


              <!-- subject description -->

              <div class="description" data-aos="fade-up">
              <?php
                      foreach ($subjects as $key => $value) {



                        ?>
                <p><?= $value['long_description'] ?> </p>
                <?php
                }
                ?>
              </div>
              <!-- end -->


              <!-- key highlights tittle -->
              <div class="container section-title" data-aos="fade-up">
                <h2>Key Highlights Off Our Course</h2>
              </div>
              <!-- End tittle -->

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <section id="faq" class="faq">
                <div class="container">

                  <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="content px-xl-5">
                        <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
                        <p>
                          Welcome to our software development and training company! Below, you'll find answers to some
                          frequently asked questions about our company and the services we provide:

                        </p>
                      </div>
                    </div>




                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                      <?php
                      foreach ($subjects as $key => $value) {



                        ?>
                        <div class="faq-container">
                          <div class="faq-item faq-active">
                            <h3><span class="num">1.</span> <span>
                                <?= $value['topic_tittle'] ?>
                              </span></h3>
                            <div class="faq-content">
                              <p>
                                <?= $value["sub_topic_tittle"] ?>
                              </p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                          </div><!-- End Faq item-->

                          <?php
                      }
                      ?>
                      </div>

                    </div>
                  </div>

                </div>
              </section>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Details</div>
          </div>
        </div>
      </section>

















      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">

        <?php include "components/footer.php" ?>

      </footer><!-- End Footer -->

      <!-- Scroll Top Button -->
      <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
          class="bi bi-arrow-up-short"></i></a>

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




      <!-- tab js -->


</body>

</html>