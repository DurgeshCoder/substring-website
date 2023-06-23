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
$subject_dao=new SubjectDao($conn);
$subjects=$subject_dao->get_subjects();
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
        <div class="row justify-space-between" >
          
          <div class="col-lg-7">
            <h2 data-aos="fade-up" data-aos-delay="100">Digital Ocean Series: Deployment on Cloud</h2>
            <p data-aos="fade-up" data-aos-delay="200">This course is focused on providing 
              hands-on experience with deploying applications on DigitalOcean's
               cloud platform using Droplets. Students will learn how to create 
               and configure Droplets, connect to them via SSH, and use popular 
               tools such as Git, Nginx, and Node.js to deploy web applications. 
               The course will also cover best practices for securing and managing
                Droplets, as well as scaling and monitoring applications. By the end
                 of the course,
               students will have the skills and knowledge necessary to deploy
                and manage their own applications on....</p>
               <div class="btn">
               <a href="" class="f-4 decoration "> Rating</a>
               </div>
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
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Course Content</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Resource</button>
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
          <p >This course is focused on providing hands-on experience with deploying applications on DigitalOcean's cloud platform using Droplets. Students will learn how to create and configure Droplets, connect to them via SSH, and use popular tools such as Git, Nginx, and Node.js to deploy web applications. The course will also cover best practices for securing and managing Droplets, as well as scaling and monitoring applications. By the end of the course, students will have the skills and knowledge necessary to deploy and manage their own applications on DigitalOcean's platform.</p>
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
<?php


foreach($subjects as $key=> $value){



    ?>
  <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="content px-xl-5">
      <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
      <p>
        Welcome to our software development and training company! Below, you'll find answers to some frequently asked questions about our company and the services we provide:

      </p>
    </div>
  </div>

  <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

    <div class="faq-container">
      <div class="faq-item faq-active">
        <h3><span class="num">1.</span> <span> <?= $value['sub_name'] ?></span></h3>
        <div class="faq-content">
          <p><?= $value["short_description"] ?></p>
        </div>
        <i class="faq-toggle bi bi-chevron-right"></i>
      </div><!-- End Faq item-->
      <?php
}
 ?>
      <div class="faq-item">
        <h3><span class="num">2.</span> <span>What services does your company offer?</span></h3>
        <div class="faq-content">
          <p>We offer a range of services, including software development, web development, mobile app development, quality assurance, UI/UX design, project management, and software training.</p>
        </div>
        <i class="faq-toggle bi bi-chevron-right"></i>
      </div><!-- End Faq item-->

      <div class="faq-item">
        <h3><span class="num">3.</span> <span>What industries do you specialize in?</span></h3>
        <div class="faq-content">
          <p>We have experience working with clients from various industries, such as finance, healthcare, e-commerce, education, and more. Our team is adaptable and can cater to the specific needs of different sectors.</p>
        </div>
        <i class="faq-toggle bi bi-chevron-right"></i>
      </div><!-- End Faq item-->

      <div class="faq-item">
        <h3><span class="num">4.</span> <span> What technologies do you work with?</span></h3>
        <div class="faq-content">
          <p>We work with a wide array of technologies, including but not limited to Java, Python, C#, JavaScript, Ruby, PHP, Swift, Android, iOS, Angular, React, Node.js, SQL, NoSQL, and various frameworks and libraries associated with these technologies.</p>
        </div>
        <i class="faq-toggle bi bi-chevron-right"></i>
      </div><!-- End Faq item-->

      <div class="faq-item">
        <h3><span class="num">5.</span> <span> Can you handle both small and large-scale projects?</span></h3>
        <div class="faq-content">
          <p> Yes, we have experience working on projects of all sizes. Whether it's a small custom development task or a large-scale enterprise solution, we have the expertise to handle it effectively.. Our team conducts thorough testing, code reviews, and adheres to coding standards to deliver high-quality software solutions.</p>
        </div>
        <i class="faq-toggle bi bi-chevron-right"></i>
      </div><!-- End Faq item-->

      <div class="faq-item">
        <h3><span class="num">6.</span> <span> Do you offer training programs for software development?</span></h3>
        <div class="faq-content">
          <p>Yes, we provide training programs tailored to individuals and organizations seeking to enhance their software development skills. Our training covers various programming languages, frameworks, and tools, and can be customized to meet specific requirements.</p>
        </div>
        <i class="faq-toggle bi bi-chevron-right"></i>
      </div><!-- End Faq item-->

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




<!-- tab js -->


</body>
</html>


