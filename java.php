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
include "./services/subject.php";
$subject_dao = new SubjectDao($conn);
$subject_data_dao = new SubjectService();
$slug = $_GET['slug'];
$subjects = $subject_dao->get_subjects_topic_subtopic($slug);
$newSubject = $subject_data_dao->transformData($subjects);
// print_r($newSubject);
// rating variable
$tottal_rating = 5;

$subject = $newSubject[0];
$topicnumber = 1;

$reset = null;

// print_r($number);
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

          <h2 data-aos="fade-up" data-aos-delay="100">
            <?= $subject['subject'] ?>
          </h2>

          <p data-aos="fade-up" data-aos-delay="200">
            <?= $subject['shortDescription'] ?>
          </p>

        </div>
        <div class="col-lg-7 my-4">

          <h3 data-aos="fade-up" data-aos-delay="300">Language:
            <?= $subject['languages'] ?>
          </h3>

        </div>
        <div class="col-lg-7">

          <h3 data-aos="fade-up" data-aos-delay="400">
            Rating:
            <?php
            for ($i = 0; $i < $subject['ratings']; $i++) {
              ?>


              <img src="images/star_yellow.png" width="32px">
              <?php
            }
            ?>
            <?php
            for ($i = $subject['ratings']; $i < $tottal_rating; $i++) {
              ?>
              <img src="images/star_white.png" width="32px">
              <?php
            }
            ?>
          </h3>

        </div>

      </div>

    </div>
    </div>
    </div>

  </section><!-- End Training Banner Section -->

  <div class="java_training_card d-flex " data-aos="fade-up" data-aos-delay="200">
    <div class="row justify-content-end align-item-end">
      <div class="col-lg-4 my-2">
        <div class="card">
          <div class="img" data-aos="fade-up" data-aos-delay="300">
            <img src="images/<?= $subject['coverImages'] ?>" class="w-100 rounded-4">
          </div>

          <div class="section-tittle my-2">
            <p data-aos="fade-up" data-aos-delay="400">
              <?= $subject['shortDescription'] ?>
            </p>
            <p data-aos="fade-up" data-aos-delay="400">
              <?= $subject['shortDescription'] ?>
            </p>
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

                <p>
                  <?= $subject['longDescription'] ?>
                </p>

              </div>
              <!-- end -->


              <!-- key highlights tittle -->
              <!-- <div class="container section-title" data-aos="fade-up">
                <h2>Key Highlights Off Our Course</h2>
              </div> -->
              <!-- End tittle -->

            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <!-- subject Section Title -->
              <div class="container section-title " data-aos="fade-up">
                <h2>Content of the Course</h2>
              </div><!-- End Section Title -->
              <section id="faq" class="faq " style="margin-top:-80px;">
                <div class="container my-0">

                  <div class="row justify-content-center">






                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="200">
                      <?php
                      foreach ($subject['topics'] as $topics => $value) {
                        ?>
                        <div class="faq-container my-4">

                          <div class="faq-item faq-active">
                            <h3><span class="num">
                                <?= $topicnumber++; ?>.

                              </span> <span>
                                <?= $value['topic'] ?>
                              </span></h3>
                            <?php
                            $subtopicIndex = 1;
                            foreach ($value['subtopicsArray'] as $subtopicsArray => $value) {
                              ?>
                              <div class="faq-content">

                                <p>

                                  <span>
                                    <?= $subtopicIndex;

                                    ?>.


                                    <?= $value["subtopicTitle"] ?>
                                  </span>
                                </p>

                              </div>

                              <i class="faq-toggle bi bi-chevron-right"></i>
                              <?php
                              $subtopicIndex++;
                            }
                            ?>
                          </div><!-- End Faq item-->



                        </div>
                        <?php
                      }
                      ?>
                    </div>

                  </div>


                </div>
              </section>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

              <!-- subject Section Title -->
              <div class="container section-title " data-aos="fade-up">
                <h2>Resources we Provide</h2>
              </div><!-- End Section Title -->
            </div>
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