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



   <!-- Services Section - Home Page -->
   <section id="services" class="services">

<?php include "pages/services.php" ?>

</section>
<!-- End Services Section -->

















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