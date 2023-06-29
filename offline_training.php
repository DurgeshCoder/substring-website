<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "components/important_links.php" ?>
    <?php 

include "./helper/subject_dao.php";
include "./helper/database.php";
$subject_dao=new SubjectDao($conn);

$subjects=$subject_dao->get_subjects();





?>
    <title>Offline Training</title>
</head>
<body>
  <!-- ======= Header ======= -->
  <header class="header d-flex align-items-center sticky-top" id="header">
   <?php include "components/header.php" ?>
  </header>
  <!-- End Header -->

    <!-- Training Banner Section - Offline training Page -->
    <section id="taining_banner" class="taining_banner">

      <img src="images/training_banner_4.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          
          <div class="col-lg-10">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Our Trainig Section</h2>
            <p data-aos="fade-up" data-aos-delay="200">We create engineers by  providing quality content....</p>
          </div>
          <!-- <div class="col-lg-5">
            <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="Enter email address">
              <input type="submit" class="btn btn-primary" value="Sign up">
            </form>
          </div> -->
        </div>
      </div>

    </section><!-- End Training Banner Section -->

    <!-- training form -->

    <section class="taining_form">
 
      <div class="container">
         <?php
       if (isset($_POST['submit'])) {
       $filter_data = $_POST['search'];
         if(trim($filter_data) != ""){
          $filtered_subjects=$subject_dao->search_data($filter_data);
         
          
          // print_r($subjects);
          $subjects = $filtered_subjects;
        }
       }

   
        ?>
      <form action="" method="post" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
              <input type="text" class="form-control" placeholder="Search for Training" name="search">
              <input type="submit" name="submit" class="btn btn-primary" value="Search">
            </form>
      </div>

      
    </section>

    <!-- end training form -->


   <!-- training subject -->
  

   <section class="training_subject" >
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
      <?php


foreach($subjects as $key=> $value){



    ?>
        <div class="col-lg-4 my-2  " id="subject_box">
          <div class="card " >
            <div class="img">
              <img src="images/<?= $value["cover_img"] ?>" class="w-100">
            </div>
            <div class="section-tittle">
              <h2> <?= $value['sub_name'] ?></h2>
              <p><?= $value["short_description"] ?></p>

            </div>
            <div class="button ">
              <a href="java.php?slug=<?= $value["slug"] ?>" class="btn btn-primary">Start Learning</a>
            </div>
          </div>
        </div>
        <?php
    


}


?>


    </div>
   </section>





























  
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

<script>
        

            </script>

</body>
</html>


